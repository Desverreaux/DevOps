
<?php

// $_SERVER['DOCUMENT_ROOT'] = dirname($_SERVER['DOCUMENT_ROOT']);
$_SERVER['DOCUMENT_ROOT'] = "127.0.0.1";


$debugFlag = getenv('IN_DEBUG'); 
if(empty($debugFlag)) {
    $debugFlag = true;
}



if($debugFlag == false) {

    require_once('PHP/Initialize.php');

    $link = isset($_GET['link']) ? $_GET['link'] : 'Landing';
    // include('./HTML/Sidebar.html');
    include('./HTML/' . $link . '.html');

} else {

    require_once($_SERVER['DOCUMENT_ROOT'] . '/tests/Debug/Initialize.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/tests/Debug/DebugLanding.html');

}



?>
