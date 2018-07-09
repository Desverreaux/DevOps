<?php

// namespace App\Http\Controllers\Asset;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Log;
// use \SimpleXMLElement;
// use \Filesystem;
// use \Directories;
// use App\Asset;
// use Page;

FileMapper::readAThing();



class FileMapper 
{

    function launcher() {
        $var = readAThing();
        foreach($var as $line) {
            echo $line;
        }
    }

    function readAThing() {
        $i = 0;
        $output = array();

        // $cwd = dir(public_path('Assets'));
        // $cwd->read();
        // $output[0] = $cwd->path;

        $output = FileMapper::loopThroughDir("D:\ServerData\Desverreaux.com\fileSystem\public\Assets");
       

        //$relevantFile = public_path('Assets/images/neon(high-res).jpg');

        //$obj = new Asset($relevantFile);
        
        //$obj->createRecord();

        // if($obj->wasRecentlyCreated == true) {
        //     array_push($output,"Inserted Sucessfully");
        // }
        // else{
        //     array_push($output,"Didn't work");
        // }
        $output = FileMapper::fixOutPut($output);


        return $output;
    }    

    function loopThroughDir($path) {
        $output = array();

        if(is_file($path)) {
            echo "----------------------Got to the file branch"; 
            array_push( $output, $path);
        }
        elseif (is_dir($path)){
            echo "----------------------Got to the dir branch"; 
            if ($handle = opendir($path)) {
                array_push( $output, "Entries:\n");
            
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                        $newPath = $path . "/" . $entry;
                        array_push( $output, FileMapper::loopThroughDir($newPath));
                    }
                }

                closedir($handle);
            }
        }
        else {
            echo "----------------------Got to the shit branch"; 
            return array("Something went Wrong :(");
        }
        return $output;
    }

    function fixOutput($varToFix) {
        $FixedOutput = array();
        foreach($varToFix as $node) {
            if(is_string($node)) {
                array_push($FixedOutput, $node);
            }
            elseif (is_array($node)) {
                FileMapper::fixOutput($node);
            }
            else {
                array_push($FixedOutput, "Something got weird");
            }
        }
        return $FixedOutput;
    }

}
/*
|
|
|-- if(ptr IS A file) {
|-- --log(file);
|-- --return 1;
|-- }
|-- else {
|-- --go into dir;
|-- --loop through entries;
|-- --return ?;
|
|
|
*/