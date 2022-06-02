<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('app.clients');
            $table->foreignId('delivery_id')->constrained('app.deliveries');
            $table->text('calification')->comment('Calificación sobre 5 del pedido');
            $table->double('delivery_cost', 8, 2)->comment('Costo de la entrega');
            $table->date('delivery_date')->comment('Fecha del pedido');
            $table->enum('state', ['pendiente', 'aceptado', 'viaje', 'entregado'])->comment('Estado del pedido');
            $table->enum('payment_method', ['efectivo', 'tarjeta', 'cupon'])->comment('Método de pago del pedido');
            $table->time('wait_time')->comment('Tiempo de espera desde la aceptación');
            $table->double('total_price')->comment('Precio total del pedido');
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('orders');
    }
}
