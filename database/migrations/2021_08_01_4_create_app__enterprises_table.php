<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('enterprises', function (Blueprint $table) {
            $table->id();
            $table->text('address')->comment('Dirección de la empresa');
            $table->integer('calification')->comment('Calificación de la empresa');
            $table->text('country')->comment('Pais de la empresa');
            $table->text('img_url')->comment('url/path de la imagen de la empresa');
            $table->text('name')->comment('Nombre de la empresa');
            $table->integer('ranking')->comment('Ranking de la empresa en ventas');
            $table->text('time_close')->comment('Hora de cierre');
            $table->text('time_open')->comment('Hora de apertura');
            $table->softDeletes();
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('enterprises');
    }
}
