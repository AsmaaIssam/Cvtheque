<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->Text('Objet');
            $table->foreignId('caract_projet_id')->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('processuse_id')->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->Text('Maitre_d_ouvrage');
            $table->year('Année_d_exécution');
            $table->integer('Budget_alloué');
            $table->Text('Lieu_référence');
            $table->string('Document_référence');
            $table->Text('Numéro_marché');
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
        Schema::dropIfExists('projets');
    }
}
