<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_customers');
            $table->string('nama');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->integer('total');
            $table->integer('status');
            $table->integer('pembayaran');
            $table->timestamps();
            $table->foreign('id_customers')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans');
    }
}
