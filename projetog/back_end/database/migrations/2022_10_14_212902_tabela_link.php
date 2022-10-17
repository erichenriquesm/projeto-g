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
        Schema::create('tabela_link', function (Blueprint $table) {
            $table->id();
            $table->integer('id_base')->references('id')->on('tabela_redirect');
            $table->string('link');
            $table->integer('click');
            $table->integer('max_click');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
