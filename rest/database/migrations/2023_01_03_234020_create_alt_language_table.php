<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alt_language', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id');
            $table->integer('organisation_id');
            $table->string('identifier',255);
            $table->text('body');

            $table->index('language_id');
            $table->index('organisation_id');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alt_language');
    }
};
