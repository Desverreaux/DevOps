
<?php

// $_SERVER['DOCUMENT_ROOT'] = dirname($_SERVER['DOCUMENT_ROOT']);

// $debugFlag = getenv('IN_DEBUG'); 
// if(empty($debugFlag)) {
//     $debugFlag = true;
// }


// if($debugFlag == false) {

//     require_once('PHP/Initialize.php');

//     $link = isset($_GET['link']) ? $_GET['link'] : 'Landing';
//     // include('./HTML/Sidebar.html');
//     include('./HTML/' . $link . '.html');

// } else {

//     require_once($_SERVER['DOCUMENT_ROOT'] . '/tests/Debug/Initialize.php');
//     include($_SERVER['DOCUMENT_ROOT'] . '/tests/Debug/DebugLanding.html');

// }

?>



<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));
require __DIR__.'/../vendor/autoload.php';


$app = require_once __DIR__.'/../bootstrap/app.php';


$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

?>
