<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobilierVendresTable extends Migration
{
    /**
     * Exécute la migration (création de la table).
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobilier_vendre', function (Blueprint $table) {
            $table->id(); // ID automatique
            $table->string('Adresse');
            $table->decimal('Superficie', 8, 2);
            $table->decimal('Prix', 15, 2);
            $table->string('Type_Immobilier');
            $table->string('Image_URL')->nullable(); // Champ optionnel
            $table->text('Description')->nullable(); // Champ optionnel
            $table->timestamps(); // Crée les colonnes created_at et updated_at
        });
    }

    /**
     * Annule la migration (suppression de la table).
     *
     * @return void

     */
    public function down()
    {
        Schema::dropIfExists('immobilier_vendre');
    }
}
?>