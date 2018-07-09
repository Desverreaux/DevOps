<?php

// namespace App\Objects;
// use Illuminate\Support\Facades\Log;

// class Page 

// {
//     public $Title = NULL;
//     public $Data = Array();
//     public $HeaderComponents = Array();
//     public $BodyComponents = Array();
//     public $info = NULL;

//     function __construct($RouteName, $URL_Parameters = NULL) {
//         $this->Title = $RouteName;
     
//     } 


// /*---------------------------
// |     METHODS  
// ---------------------------*/

//     function SetName($name) {
//         $this->Title = $name;
//     }

//     public function AppendData_Single($value) {
//         $this->Data['value' . count($this->Data)] = $value;
//     }

//     public function AppendData_Pair($key, $value) {
//         $this->Data[$key] = $value;
//     }

//     public function AppendData_Keyed($setName, array $KeyedData) {
//         foreach($KeyedData as $key => $values) {
//             $this->Data[$key] = $values;
//         }
//     }
    
//     public function AppendData_Unkeyed(array $UnkeyedData) {
//         foreach($UnParsedData as $values) {
//             $this->Data['value' . $count] = $values;
//             $count++;
//         }
//     }
    
//     public function RemoveData() {}//TODO
//     public function getRegisteredDataArrayKeys() {}//TODO

//     public function infoString() {
//         return json_encode($this);
//     }

//     public function infoHTML() {
//         $output = "\nTitle: " . $this->Title . "\nData: ";
        
//         $output .= stripslashes(json_encode($this->Data, JSON_PRETTY_PRINT));

//         return $output;
//     }

//     public function globalPageConfiguration() {
        
//     }











// }

?>