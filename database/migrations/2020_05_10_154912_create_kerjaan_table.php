<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjaan', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('barang');
            $table->string('qty');
            $table->string('harga');
            $table->string('gaji');
            $table->string('insentif')->nullable($value = true)	;
            $table->string('foto');
            $table->string('status')->default('0');
            $table->timestamps();

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerjaan');
    }
}
