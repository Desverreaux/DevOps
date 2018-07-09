<?php
/*
*@todo add a mime catagory field to the database
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;


class Asset extends Model
{
    //or Largest allowed ratio, in the context of asset file size to 
    //the maximum upload size the current php.ini specifies. Going past
    //1 will cause corrupted files to transmit.
   
    const LAR = 0.5; 
    // protected $Item;
    // protected $Path;
    // protected $MimeType;
    // protected $FileSize;
    // protected $Version;
    // protected $NeedsCompression;
    // protected $Quality;
    // protected $AltText;
    // protected $Alias;
    // protected $Hidden;
    // protected $SiteDomain;
    // protected $Original; 

    function __construct( $real_path_to_asset = NULL ) {
        if($real_path_to_asset != NULL) {
            $this->Path = $real_path_to_asset;
            $this->resolveValues();
        }
    }

    function resolveValues() {
        $this->resolveName();
        $this->resolveMimeType();
        $this->resolveFileSize();
        $this->resolveVersion();
        $this->resolveNeedsCompression();
        $this->resolveQuality();
        $this->resolveAltText();
        $this->resolveAlias();
        $this->resolveHidden();
        $this->resolveSiteDomain();
        $this->resolveMimeCategory();
        $this->resolveURL();
        //$this->resolveOriginal; 
    }

    public function getAttributeArray() {
        
    }

    function CreateRecord()  {  
        $this->save();  
    }

    function UpdateRecord()  {  
        $this->update();  
    }

    function resolveName() {
        $this->Item = pathinfo($this->Path, 2); // 2 is simply the interger option for pathinfo
    } 
    
    function resolveMimeType() {
        $this->MimeType = mime_content_type($this->Path); 
    }
    
    function resolveFileSize() {
        $this->FileSizeBytes = filesize($this->Path);
    }

    function resolveVersion() {
        $this->Version = 1;
    }

    function resolveNeedsCompression() {
        $maximumUploadSize = $this->convertTobytes(ini_get("upload_max_filesize"));
        $assetFileSize = filesize($this->Path);
        
        $ratio = ($assetFileSize/$maximumUploadSize);
        
        $this->NeedsCompression = ($ratio > self::LAR);  
    }

    function resolveQuality() {
        $maximumUploadSize = $this->convertTobytes(ini_get("upload_max_filesize"));
        $assetFileSize = filesize($this->Path);
        
        $ratio = ($assetFileSize/$maximumUploadSize);
        
        $this->Quality = ($ratio > self::LAR ? "High" : "Low");  
    }

    function resolveAltText() {
        $shortHand = basename($this->Path, "." . pathinfo($this->Path, 4));
        $this->AltText = $shortHand;
    }

    function resolveAlias() {
        $shortHand = basename($this->Path, "." . pathinfo($this->Path, 4));
        $this->Alias = $shortHand;
    }

    function resolveHidden() { //weather or not it should be a hidden file at creation 
        $hiddenFileTypes = array();
        if(in_array( fileType($this->Path) , $hiddenFileTypes )) {
            $this->Hidden = true;
        }
    }

    function resolveSiteDomain() {
        $this->SiteDomain = str_replace('http://', '', env('APP_URL'));
    }

    function resolveOriginal() {
        $this->Original = $this->id;
        //$this->Original = 0; 
    }

    function resolvePath() {
        //return public_path();
    }

    function resolveMimeCategory() {
        $this->MimeCategory = explode("/",$this->MimeType)[0];
    }

    function resolveURL() {
        // $SplitPath = Help::splitPath($this->Path);
        // $newName = 
        //     $SplitPath['Directory'] . "/" 
        //     . $SplitPath['Filename']
        //     . $SplitPath['Extension'];

        $arr = explode("\\",$this->Path); //TODO the delimiter here may be dependant on the environment, test this
        
        $arr = array_splice($arr,5);
        $pathFromPublic = implode("/",$arr);
        $this->URL = env('APP_URL') . "/" . ($pathFromPublic);


    }


    function formatInfo() {
        $i = 0;
        $info = array();
        $info[$i++] = "---------SUMMARY---------";
        $info[$i++] = "The item name is: " . $this->Item;
        $info[$i++] = "The filetype is: " . $this->MimeType;
        $info[$i++] = "The size of the file is: " . $this->FileSizeBytes;
        $info[$i++] = "The version is recorded as: " . $this->Version;
        $info[$i++] = "The quality of this asset is set to: " . $this->Quality;
        $info[$i++] = "The alias of the asset is: " . $this->Alias;
        $info[$i++] = "The asset is set to be hidden?: " . ($this->Hidden == true ? "True" : "False");
        $info[$i++] = "The original site domain is: " . $this->SiteDomain;
        $info[$i++] = "The Alternative text is for the asset is: " . $this->AltText;
        $info[$i++] = "Is this the original file?: " . ($this->Original == true ? "True" : "False");
        $info[$i++] = "Does this file need to be compressed?: " . ($this->NeedsCompression == true ? "True" : "False");
        $info[$i++] = "The full path name is recorded as: " . $this->Path;

        return $info;
    }

    //the function below is exclusive used by resolveQuality() method 
    //This is horrible design from a architectural perspective but 
    //it makes the code pretty and junk.
    function convertToBytes($from){
        $number=substr($from,0,-1);
        switch(strtoupper(substr($from,-1))){
            case "K":
                return $number*1024;
            case "M":
                return $number*pow(1024,2);
            case "G":
                return $number*pow(1024,3);
            case "T":
                return $number*pow(1024,4);
            case "P":
                return $number*pow(1024,5);
            default:
                return $from;
        }
        return $val;
    }
   
}

//TODO 
//----Implement steps to take if there are multiple files with the same name