<?php

#require
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|FORMAT
|Route::get(
|    'URL{$DATA?}',
|    ['uses' => 'CONTROLLER@METHOD',
|    'as' => 'ROUTE NAME']
);
*/

Route::redirect('/', '/Home', 301);

Route::get(
    '/Home',
    ['uses' => 'PageController@index',
    'as' => 'Home']
);

Route::get(
    '/Admin',
    ['uses' => 'PageController@index',
    'as' => 'AdminPortal']
);

Route::get(
    '/Bio',
    ['uses' => 'PageController@index',
    'as' => 'Bio']
);

Route::get(
    '/Blog',
    ['uses' => 'PageController@index',
    'as' => 'Blog']
);

Route::get(
    '/Portfolio',
    ['uses' => 'PageController@index',
    'as' => 'Portfolio']
);


/*
|--------------------------------------------------------------------------
|Viewer Pages
|--------------------------------------------------------------------------
*/


Route::get(
    '/Viewer',
    ['uses' => 'DataViewerController@Directory',
    'as' => 'Viewer']
);

Route::get(
    '/Viewer/{view}',
    ['uses' => 'DataViewerController@index',
    'as' => 'Viewer']
);

Route::get('/view', function () {
    return view('Pages.Viewer');
});

/*
|--------------------------------------------------------------------------
|API routes
|--------------------------------------------------------------------------
*/

Route::resource('/asset/{$Alias}','AssetController');

/*
|--------------------------------------------------------------------------
|Debug & Sandbox Pages
|--------------------------------------------------------------------------
*/

Route::get(
    '/Playground',       
    ['uses' => 'DebugController@Playground', 
    'as'=>'Debugging']                 
);

Route::get(
    '/Playground/Data/testAssetSeeder',       
    ['uses' => 'DebugController@testAssetSeeder', 
    'as'=>'testAssetSeeder']                 
);

Route::get(
    '/Playground/Faker',       
    ['uses' => 'DebugController@FakerLibraryTest', 
    'as'=>'Faker']                 
);

Route::get(
    '/Playground/Vue',       
    ['uses' => 'DebugController@VueComponentFocus', 
    'as'=>'Vue Component']                 
);


//AFTER every other Playground page
Route::get(
    '/Playground/{view}',       
    ['uses' => 'DebugController@Playground_Subdir', 
    'as'=>'Experiment']                 
);



Route::get('/phpinfo','DebugController@phpinfo');



