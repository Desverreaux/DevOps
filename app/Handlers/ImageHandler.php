<?php

namespace App\Handlers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;
use App\Helpers\HelperManager as Help;
//When doing optimizations consider switching from Imagick to Gmagick if that even is a relevant option in the future
use Intervention\Image\ImageManagerStatic as Intervention;
use \Imagick;
use ImageOptimizer;

class ImageHandler 
{
    // function __construct() {

    // }
    static function Optimize($Path) {
        $oldSplitPath = Help::splitPath($Path);
        $newName = env('LARGE_FILES', $oldSplitPath['Directory']) . "/" . $oldSplitPath['Filename'] . "_HighRes" . $oldSplitPath['Extension'];
        copy($Path, $newName);
        ImageOptimizer::optimize($Path);
    }

}
 