<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->integer('color_id')->unsigned();
            $table->foreign('color_id')->references('id')->on('colores');
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedores');             
            $table->integer('talla_id')->unsigned();
            $table->foreign('talla_id')->references('id')->on('tallas');
            $table->string('nombre');
            $table->integer('existencia');
            $table->decimal('costo', 10, 2);
            $table->decimal('precio_publico', 10,2);
            $table->string('descripcion');
            $table->string('barcode');
            $table->integer('estado');
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
        Schema::drop('productos');
    }
}
