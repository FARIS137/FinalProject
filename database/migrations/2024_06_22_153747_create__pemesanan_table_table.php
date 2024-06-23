<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PemesanansTable extends Migration
{
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_awal_booking');
            $table->time('jam_awal_booking');
            $table->text('catatan')->nullable();
            $table->string('jenis_mobil');
            $table->string('noplat_mobil');
            $table->unsignedBigInteger('layanan_id');
            $table->string('customer_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
}
