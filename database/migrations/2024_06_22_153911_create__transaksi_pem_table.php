<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiPem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksipem', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pemesanan_id')->nullable();
            $table->date('tanggal_awal_booking');
            $table->time('jam_awal_booking');
            $table->string('catatan')->nullable();
            $table->string('jenis_mobil');
            $table->string('noplat_mobil');
            $table->string('customer_name');
            $table->string('metode_pembayaran');
            $table->decimal('total_harga', 15, 2);
            $table->unsignedBigInteger('layanan_id');
            $table->decimal('harga', 15, 2);
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
        Schema::dropIfExists('transaksipem');
    }
}
