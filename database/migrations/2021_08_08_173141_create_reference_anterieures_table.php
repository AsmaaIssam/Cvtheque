<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenceAnterieuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference_anterieures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salarie_id')->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->string('Poste_occupé');       
            $table->string('Société');
            $table->Text('Ville');         
            $table->Text('Pays');         
            $table->date('Date_de_début');
            $table->date('Date_de_fin');
            $table->Text('Adresse');         
            $table->Text('Description');         
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
        Schema::dropIfExists('reference_anterieures');
    }
}
