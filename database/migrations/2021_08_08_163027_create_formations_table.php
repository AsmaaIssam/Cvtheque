<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salarie_id')->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');   
            $table->Text('Niveau_des_études');
            $table->Text('Intitulé_formation');
            $table->Text('Intitulé_diplôme');
            $table->Text('Etablissement_formation');
            $table->Text('Pays_établissement');
            $table->date('Date_de_début');
            $table->date('Date_de_fin');
            $table->date('Année_d_obtention');
            $table->string('Diplôme')->nullable();
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
        Schema::dropIfExists('formations');
    }
}
