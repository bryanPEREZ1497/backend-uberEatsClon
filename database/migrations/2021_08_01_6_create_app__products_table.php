<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enterprise_id')->constrained('app.enterprises');
            $table->text('name')->comment('Nombre de los productos');
            $table->float('price')->comment('Precio del productos');
            $table->text('description')->comment('Descripción de los productos');
            $table->text('img_url')->comment('url/path imagén del producto');
            $table->integer('like_counter')->comment('Contador de likes que ha recibido el producto');
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('products');
    }
}
