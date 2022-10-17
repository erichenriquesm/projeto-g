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
        Schema::create('tabela_links', function (Blueprint $table) {
            $table->id();
            $table->integer('id_redirect')->references('id')->on('tabela_redirects');
            $table->string('link');
            $table->integer('click');
            $table->integer('max_click');
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
        Schema::dropIfExists('tabela_links');
    }
};
