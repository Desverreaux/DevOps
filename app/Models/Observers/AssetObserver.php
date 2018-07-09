<?php

namespace App\Models\Observers;

use Illuminate\Support\Facades\Log;
use App\Helpers\HelperManager as Help;

use App\Models\Asset;

class AssetObserver
{
    /**
     * Creates an optimized version of an asset if the file size is too large to be served by apache
     *
     * @param  \App\Modles\Asset $asset
     * @return void
     */
    public function created(Asset $asset)
    {

    }

    /**
     * Listen to the User deleting event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }
}