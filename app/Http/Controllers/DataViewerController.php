<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Helpers\HelperManager as Help;

class DataViewerController extends Controller
{

    public function index(Request $request) {
        $pathString = $request->path();
        $path = explode("/", $pathString);
        $Destination = $path[count($path) - 1];
        switch($Destination) {
            case "Assets":
                return $this->Assets($request);
                break;
            case "Pages":
                return $this->Pages($request);
                break;
            default: 
                return $this->PageNotFound($request);
                break;
        }
    }

    public function Assets(Request $request) {
        $Data = array();      
        $Data['Title']='Asset Viewer';

        return view('Pages.Viewer.AssetsViewer')->with('Data', $Data);
}

    public function Pages(Request $request) {
        $Data = array();      
        $Data['Title']='Page Viewer';

        return view('Pages.Viewer.PagesViewer')->with('Data', $Data);
    }

    public function Directory(Request $request) {
        $Data = array();
        $Data['Title'] = "";

        return view('Errors.UnderConstruction')->with('Data', $Data);
    }
}
