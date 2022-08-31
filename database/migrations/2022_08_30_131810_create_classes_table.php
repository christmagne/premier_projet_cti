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
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); 
            $table->timestamps(); 
            $table->string('cours'); 
            $table->string('niveau'); 
            $table->string('enseignant'); 
            $table->string('tranche_horaire'); 
            $table->string('jour_cours'); 
            $table->string('salle'); 
            $table->integer('cout_formation'); 
            $table->integer('cout_inscription'); 
            $table->integer('cout_documentation')->nullable(); 
            $table->date('date_debut'); 
            $table->date('date_fin'); 
            $table->date('date_test_ligne')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};
