<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobilierAchetersTable extends Migration
{
    /**
     * Exécute la migration (création de la table).
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobilier_acheters', function (Blueprint $table) {
            $table->id(); // ID auto-incrémenté
            $table->string('Adresse')->nullable(false);
            $table->decimal('Superficie', 10, 2)->nullable(false);
            $table->decimal('Prix', 15, 2)->nullable(false);
            $table->string('Type_Immobilier')->nullable(false);
            $table->string('Image_URL')->nullable(); // URL de l'image (facultatif)
            $table->text('Description')->nullable(); // Description de la propriété (facultatif)
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    /**
     * Annule la migration (suppression de la table).
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immobilier_acheters');
    }
}
