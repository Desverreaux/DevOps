<?php

//IMPLEMENTAION HAS BEEN MOVED TO THE ASSETHANDLER CLASS IN APP

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use App\Models\Asset;

class AssetController extends Controller
{
    public function CreateAssetObj( $real_path_to_asset = NULL) {
        $NewAsset = new Asset($real_path_to_asset);
        return $NewAsset;
    }

    function InsertAssetObj(Asset $obj){
        $query = Asset::where('alias', $obj->Alias)->get();
        $DuplicateCheck = count($query);
        if($DuplicateCheck < 1) {
            $obj->createRecord();
            if(true) {
                $SuccessfulInserts += 1;
            }
        }
        else {
            $dbStoredPath = Asset::firstWhere('alias', $obj->alias)->get('path');
            $objStoredPath = $obj->path;
            if($dbStoredPath == $objStoredPath) {

            }
        }   
    }


    function CatalogAssets($PathToCatalog = NULL) {
        // The Placement of this functionality within the architecture
        // is a problem and should be refactored 
        $PathToCatalog = ($PathToCatalog == NULL ? public_path('Assets') : $PathToCatalog);

        $PathArray = $this->FileMapper->loopThroughDir($PathToCatalog);

        $SuccessfulInserts = 0;
        foreach($PathArray as $PathToAsset) {
            $obj = new Asset($PathToAsset);

        }
        $report = ("DATABASE UPDATE: ") . $SuccessfulInserts . " new Asset Items have been added to the database.";
        Log::info($report);
    } 
}


//TODO 
//----Implement steps to take if there are multiple files with the same name

//------------------------------CODE HOARDING!!!!!
// function temp() {
//     // The Placement of this functionality within the architecture
//          // is a problem and should be refactored 
//          $PathToCatalog = public_path('Assets');
//          $results = array();
 
//          $PathArray = $this->FileMapper->loopThroughDir(public_path('Assets'));
 
//          $SuccessfulInserts = 0;
 
//          $count = count($PathArray);
//          $line = "Patharray has $count Elements";
//          array_push($results, $line);
//          $count = 0;
//          foreach($PathArray as $PathToAsset) {
//              $count += 1;
 
//              $obj = new Asset($PathToAsset);
 
//              // implement fuctionality to prevent repeat inserts
//              $query = Asset::where('alias', $obj->Alias)->get();
 
//              // $check = count($query);
//              // $line = "$count query is : $check";
//              // array_push($results, $line);
             
//              $DuplicateCheck = count($query);
 
//              // $line = "On Path $PathToAsset the check returns " . ($DuplicateCheck ? "TRUE and the loop will execute" : "FALSE and the loop will NOT execute");
//              // array_push($results, $line);
 
//              if($DuplicateCheck < 1) {
//                  $obj->createRecord();
//                  if(true) {
//                      $SuccessfulInserts += 1;
//                      $line = "The asset item at $PathToAsset was successfully inserted";  
//                      array_push($results, $line);
//                  }else {
//                      $line = "The asset item at $PathToAsset was UNsuccessfully inserted";  
//                      array_push($results, $line);
//                      $line = "the query was: $query";
//                      array_push($results, $line);
//                  }
                 
 
//              }
//              else {
//                  // $dbStoredPath = Asset::firstWhere('alias', $obj->Alias)->get('path');
//                  // $objStoredPath = $obj->path;
//                  $line = "The asset at path NEW was determined to be a duplicate of the asset at path OLD and was not added";
//                  // array_push($results, $line);
//                  // $line = "OLD------: " . $query;
//                  // array_push($results, $line);
//                  // $line = "DUPLICATE: " . $PathToAsset;
//                  // array_push($results, $line);
                 
//              }
//          }   
 
//          $report = array("DATABASE UPDATE: ") . $SuccessfulInserts . " new Asset Items have been added to the database.";
//          Log::info($report);
//          return $results;
//      }