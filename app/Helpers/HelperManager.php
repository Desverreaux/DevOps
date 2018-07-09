<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class HelperManager {

public function __construct() {
    //$this->ImageCompression = new Helper_ImageCompression();
}
    
/*-------------------------------------------------------------
|                      Common Helper Functions  
-------------------------------------------------------------*/
//general purpose functions that are either too broad or too specific
//to be placed in any other file

//this function is way too simple as is and will not work in most cases 
//currently it supports turning associative arrays filled with other associative
//arrays into a one dimensional associative arrays
//AA: associative array LA: linear array V: value
//Good: AA with AA's into AA
//Bad: everything else 
static function flattenArray($multidimensionalArray) 
    {
            $fixedArray = array();
            foreach($multidimensionalArray as $key => $value) {
                if(is_array($value)) {
                    flattenArray($value);
                }
                else {
                    $fixedArray[$key] = $value;
                }
            }
            return $fixedArray;
    }

/*-------------------------------------------------------------
|       Functions I wrote and then realized I didn't need  
-------------------------------------------------------------*/

static function getParentDir($Path) {
    $arr = explode('/', $Path);
    return $arr[count($arr) - 2];
}

static function getFileExtension($Path) {
    $Extension = "." . pathinfo($Path, PATHINFO_EXTENSION );
    return $Extension;
}

static function splitPath($Path) {
    $results = array();
    $results['Directory'] = pathinfo($Path, PATHINFO_DIRNAME);
    $results['Extension'] = "." . pathinfo($Path, PATHINFO_EXTENSION );
    $results['Filename'] = pathinfo($Path, PATHINFO_FILENAME );

    return $results;
}



/*-------------------------------------------------------------
|                    Complex Helper Tasks  
-------------------------------------------------------------*/
// functions in this section require/implement obsured logic, as 
// well as multiple helper files, this section should be refactored 
// frequently as the line between putting functions here and 
// placing them in their own files/controllers is very thin



}



/*TODO 
----Create a method/class/or section that can simply redirect a function 
    call to the appropreate file. 












*/

?>




