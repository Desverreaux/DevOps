<?php
#//////////////////////////////////////////////Until you get the database working or replace with string concatenation 

global $images;


setImagePaths();

// Laravel has pretty much made this function pointless
// function setDirectoryPaths() {    
//     $root = $_SERVER['DOCUMENT_ROOT'];
// }


function setImagePaths() {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $imagesPath = '/Assets/images/';

    global $images;

    $images  = array(
        "fox"=> "fox.jpg",
        "geo"=> "geo.png",
        "coffee"=> "coffee.jpeg",
        "father"=> "father.jpg",
        "forest"=> "forest.jpeg",
        "keyboard"=> "keyboard.jpg",
        "music"=> "music.jpg",
        "neon"=> "neon.jpg",
        "orient"=> "orient.jpg",
        "orient2"=> "orient2.jpeg",
        "rock"=> "rock.jpg",
        "rock2"=> "rock2.jpeg",
        "skyscraper"=> "skyscraper.jpg",
        "stairway"=> "stairway.jpg",
        "stairway2"=> "stairway2.jpg",
        "tunnel"=> "tunnel.jpeg",
        "sad"=> "sad.jpg",
        "self"=> "self.png"
    );

    foreach ($images as $key => $path) {
        $images[$key] = asset($imagesPath . $path); 
    }

}
?>