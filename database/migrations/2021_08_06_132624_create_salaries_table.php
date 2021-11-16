<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prénom');
            $table->string('CIN');
            $table->date('Date_de_naissance');
            $table->Text('Lieu_de_naissance');
            $table->string('Situation_familiale');
            $table->integer('Nombre_d_enfants');
            $table->string('Nationalité');
            $table->text('Adresse_1');
            $table->text('Adresse_2');
            $table->integer('Code_Postal');
            $table->string('Email');
            $table->string('Téléphone_fixe');
            $table->string('Téléphone_portable');
            $table->string('Photo_d_identité')->nullable();
            $table->string('Profile');
            $table->integer('Numéro_CNSS');
            $table->Text('Responsable_hiérarchique');
            $table->string('Poste');
            $table->date('Date_d_embauche');
            $table->Text('Département_d_affectation');
            $table->string('Numéro_contrat_de_travail');
            $table->string('Type_de_contrat');
            $table->date('Contrat_du');
            $table->date('Contrat_au');
            $table->Text('Langues');
            $table->string('Niveau');    
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
        Schema::dropIfExists('salaries');
    }
}
