<?php

use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->AssetHandler = app('AssetHandler');
        $this->AssetHandler->CatalogAssets();
    }
}
