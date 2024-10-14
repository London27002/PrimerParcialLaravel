<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('celulares', function (Blueprint $table) {
        $table->id();
        $table->string('modelo');
        $table->string('marca');
        $table->decimal('precio', 10, 2);
        $table->integer('stock');
        $table->date('fecha_venta');
        $table->boolean('en_oferta');
        $table->text('descripcion');
        $table->string('color');
        $table->string('imei')->unique();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celulares');
    }
};
