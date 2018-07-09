<?php
/* TODO
THIS CODE IS NOT IN THE RIGHT PLACE LIKE AT ALL, BUT IN THE INTEREST OF BEING EVEN REMOTELY EFFICIENT WITH MY TIME 
THE FUNCTIONS THAT ACT AS AN INTERFACE FOR THE CONTROLLER ARCHITECTURAL BRANCH OF MVC AND THE REQUEST LAYER OF LARAVEL
WILL BE PLACED HERE UNTIL I AM COMFORTABLE ENOUGH WITH THE FRAMEWORK TO PROVIDE REFACTORING THAT ISN'T JUST A WASTE 
OF TIME. MORE APPROPREATE PLACES COULD INCLUDE: REPOSITORIES (THE LARAVEL THING),....
*/
namespace App\Handlers;

use Illuminate\Support\Facades\Log;
use App\Handlers\ImageHandler as Image;

use App\Models\Asset;

class AssetHandler
{
    public function __construct() {
        $this->badDirs = $this->getInvalidPaths();
    }

    public function CreateAssetObj( $real_path_to_asset = NULL) {
        $NewAsset = new Asset($real_path_to_asset);
        return $NewAsset;
    }

    // public function UpdateAsset( $real_path_to_asset = NULL) {
    //     $NewAsset = new Asset($real_path_to_asset);
    //     return $NewAsset;
    // }

    function InsertAssetObj(Asset $obj){
        $query = Asset::where('alias', $obj->Alias)->get();
        $DuplicateCheck = count($query);
        if($DuplicateCheck < 1) {
            if($obj->Quality == "High") {
                $this->Optimize($obj);
            }
            $obj->createRecord();
            if($obj->wasRecentlyCreated) { 
                return true;
            }
            else {
                Log::error("Something went wrong while inserting a new asset element to the asset table");
            }
        }
        else {
            $dbStoredPath = $query->first()->__get('Path');
            $objStoredPath = $obj->__get('Path');
            if($dbStoredPath != $objStoredPath) {
                Log::info('WARNING: File at path [A] conflicts with Database entry at path [B] consider renaming the file.');
                Log::info("-------: [A] $objStoredPath");
                Log::info("-------: [B] $dbStoredPath");
                return false;
            }
            // else {
            // //TODO WRITE LOGIC TO HANDLE A ASSET THAT HAS CHANGED IN THE FILESYSTEM, BUT SAVED AS THE SAME NAME
            //     }
        }   
        return false;
    }


    function CatalogAssets($PathToCatalog = NULL) {
        // The Placement of this functionality within the architecture
        // is a problem and should be refactored 
        $this->getInvalidPaths();

        $PathToCatalog = ($PathToCatalog == NULL ? public_path('Assets') : $PathToCatalog);

        $PathArray = $this->loopThroughDir($PathToCatalog);

        $SuccessfulInserts = 0;
        foreach($PathArray as $PathToAsset) {
            $obj = $this->CreateAssetObj($PathToAsset);
            if($this->InsertAssetObj($obj)) {
                $SuccessfulInserts += 1;
            }
        }

        $report = ("DATABASE UPDATE: ") . $SuccessfulInserts . " new Asset Items have been added to the database.";
        Log::info($report);
    } 


    function loopThroughDir($path,int $depth = 0) {
        $depth += 1;
        $output = array();

        if(is_file($path)) {
            array_push($output, $path);
            return $output;
        }
        elseif (is_dir($path)){
            if ($this->isAllowedPath($path)) {
                if ($handle = opendir($path)) {
                    while (false !== ($entry = readdir($handle))) {
            
                        if ($entry != "." && $entry != "..") {
                            $newPath = $path . "/" . $entry;
                            
                            //this next statement and loop ensures that the final array 
                            //returned to the view is only a one dimensional array
                            $unpack = $this->loopThroughDir($newPath, $depth);
                            foreach($unpack as $value) {
                                array_push( $output , $value);
                            }
                        }
                    }
                    closedir($handle);
                }
            }
        }
        else {
            return array("Encountered a node while parsing the file directory that is nether a file or directory");
        }
        return $output;
    }

    function isAllowedPath($Path) {
        foreach($this->badDirs as $dir) {
            if($Path == $dir) {
                return false;
            }
        }
        return true;
    }



    function Optimize(Asset $asset) {
        $category = explode("/",$asset->MimeType)[0];
        switch($category) {
            case "image":
                Image::Optimize($asset->Path);
                break;
            default: 
                Log::error("ERROR attempted to optimize a file that has unknown mime type");
                break;
        }
        $asset->resolveValues();
    }
    
    function getInvalidPaths() {
        $content = file_get_contents(storage_path('Persistant/DontParse.json'));
        $parsed = json_decode($content, true);
        return $parsed['Directories'];
    }

}


//TODO 
//----Implement steps to take if there are multiple files with the same name

