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
        Schema::create('accessoire_velos', function (Blueprint $table) {
            $table->increments('id');
            // $table->foreignId('velo_id')->constrained()->onDelete('cascade');
            // $table->foreignId('accessoire_id')->constrained()->onDelete('cascade');

            $table->integer('velo_id')->unsigned()->nullable($value = true);
            $table->foreign('velo_id')->references('id')->on('velos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('accessoire_id')->unsigned()->nullable($value = true);
            $table->foreign('accessoire_id')->references('id')->on('accessoires')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('accessoire_velos');
    }
};
