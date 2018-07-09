<?php

namespace App\Helpers;

use Intervention\Image\ImageManager;

class Helper_ImageCompression 
{
    function __construct() {

    }

    function test() {

        $manager = new ImageManager(array('driver'));

        $image = $manager->make('public/foo.jpg')->resize(300,200);

        return $image;

    }    

}
