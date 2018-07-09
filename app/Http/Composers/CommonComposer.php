<?php 

namespace App\Http\Composers;

use App\Models\Asset;

use Illuminate\View\View;
use Illuminate\Support\Facades\Log;


class CommonComposer {
    public function __construct(){

    }

    public function compose(View $view) {
        $Images = array(); 
        $RegisteredAssets = Asset::all();

        foreach($RegisteredAssets as $entry) {
            $Images[$entry->Alias] = $entry->URL;
        }
        

        $view->with('Image', $Images);
    }
}