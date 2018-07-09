<?php

//IMPLEMENTAION HAS BEEN MOVED TO THE ASSETHANDLER CLASS IN APP

namespace App\Helpers;

class Helper_FileMapper 
{

    function loopThroughDir($path,int $depth = 0) {
        $depth += 1;
        $output = array();

        if(is_file($path)) {
            array_push($output, $path);
            return $output;
        }
        elseif (is_dir($path)){
          
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
        else {
            return array("Encountered a node while parsing the file directory that is nether a file or directory");
        }
        return $output;
    }

    function checkInheirtance($input) {
        $output = $this->flattenArray($input);
        return $output;
    }

}
