<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use \App\Helpers\HelperManager as Help;

use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct() {
// should have a instance associated with the logic

//switch to a static implementation 

        // $this->Help = app('Helpers');
        $this->AssetHandler = app('AssetHandler');
        $this->ImageHandler = app('ImageHandler');
        $this->Data = array(); 
        
    }

}
