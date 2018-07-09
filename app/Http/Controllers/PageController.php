<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Helpers\HelperManager as Help;
use Page;

class PageController extends Controller
{
    public function index(Request $request) {
        $pathString = $request->path();
        $path = explode("/", $pathString);
        switch($path[0]) {
            case "Admin":
                return $this->Admin($request);
                break;
            case "Bio":
                return $this->Bio($request);
                break;
            case "Blog":
                return $this->Blog($request);
                break;
            case "Home":
                return $this->Home($request);
                break;
            case "Portfolio":
                return $this->Portfolio($request);
                break;
            default: 
                return $this->PageNotFound($request);
                break;
        }
    }

    public function Admin(Request $request) {
        return $this->ComingSoon($request);
    }

    public function Bio(Request $request) {
        return $this->ComingSoon($request);
    }
    
    public function Blog(Request $request) {
        $Data = array();      
        $Data['Title']='Blog Entries';

        return view('Pages.BlogDirectory')->with('Data', $Data);
    }

    public function ComingSoon(Request $request) {
        $Data = array();
        $Data['Title'] = "You've gone too far";

        return view('Errors.UnderConstruction')->with('Data', $Data);
    }

    public function Home(Request $request) {
        $Data = array();
        $Data['Title'] = 'Home';

        return view('Pages.Landing')->with('Data', $Data);
    }

    public function Portfolio(Request $request) {
        return $this->ComingSoon($request);
    }
}
