<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('user_id')->nullable(); //nullable -> Este campo puede tener un valor nulo
            $table->text('description');
            $table->enum('status', ['Recibido', 'Procesando', 'Terminado', 'Entregado']);
            $table->dateTime('entry_date');
            $table->dateTime('departure_date')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            //cascade cuando se elimina un customer también se elimina los devices asociados a ese customer

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            //set null cuando se elimina un user los devices se mantienen en la BD pero con valor null en el campo user_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
