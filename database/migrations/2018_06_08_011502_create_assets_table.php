<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            // $table->increments('id')->index();
            $table->string('Item',250);
            $table->string('MimeType',250);
            $table->string('MimeCategory',50);
            $table->integer('FileSizeBytes');
            $table->double('Version')->default('1');
            $table->string('Quality',250)->default('High');
            $table->integer('Original')->default(0);  //
            $table->boolean('NeedsCompression');
            $table->string('Alias',50)->primary();
            $table->boolean('Hidden')->default(false);
            $table->string('SiteDomain',250)->default(config('APP_URL'));
            $table->string('AltText',250);
            $table->longText('Path');
            $table->string('URL',2500)->default('Error Parsing URL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}

//TODO (###### Wed Jun 13 13:18:17 CDT 2018)
// Add the modifications made to the table in MyPhpAdmin to the migrations table

/*
DROP TABLE `Laravel`.`migrations`;
DROP TABLE `Laravel`.'assets`;
*/