<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Faker\Generator as Faker;



use App\Handlers\ImageHandler as Image;

class DebugController extends PageController
{

    public function phpinfo(Request $request) {
        $Data = array();
        $Data['Title'] = "Php Configuration";
        $Data['BodyComponents'] = 'Components.phpinfo';

        return view('Pages.Simple')->with('Data', $Data);
    }
 
    public function Playground(Request $request) {
        $Data = array();
        $Data['Title'] = "Debugging Environment";

        return view('Pages.Playground' )->with('Data', $Data);    
    }

    public function Playground_Subdir(Request $request, $view) {
        $Data = array();
        $Data['Title'] = 'test';

        return view('Pages.Playground.' . $view )->with('Data', $Data);    
    }

    public function FakerLibraryTest(Request $request, Faker $faker) {
        $Data = array();
        $Data['Title'] = 'test';
        $Data['Head'] = $faker->text(50);
        $Data['Body'] = $faker->paragraph(3,true);

        return view('Pages.Playground.MockDataViewer')->with('Data', $Data);    
    }

    public function VueComponentFocus(Request $request) {
        $Data = array();
        $Data['Title'] = 'test';

        return view('Pages.Playground.VueComponentFocus')->with('Data', $Data);    
    }

    public function testAssetSeeder(Request $request) {
        $Data = array();
        $Data['Title'] = 'Asset Seed test';

        $this->AssetHandler = app('AssetHandler');

        $Data['lines'] = array( "1"=>"data",
                                "2"=>"data",
                                "3"=>"data",
                                "4"=>"data",
                                "5"=>"data"
        );


        return view('Pages.Playground.DataParsing')->with('Data', $Data);    
    }



}
