<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customer')->default("null");
            $table->unsignedBigInteger('id_media')->default("null");
            $table->foreign('id_media')->references('id')->on('media')->default("null");
            $table->unsignedBigInteger('id_service')->default("null");
            $table->foreign('id_service')->references('id')->on('service')->default("null");
            $table->unsignedBigInteger('id_purpose')->default("null");
            $table->foreign('id_purpose')->references('id')->on('purpose')->default("null");
            $table->string('data');
            $table->unsignedBigInteger('id_sub_categories');
            $table->foreign('id_sub_categories')->references('id')->on('sub_categories');
            $table->unsignedBigInteger('id_tujuan_kunjungan')->default("null");
            $table->foreign('id_tujuan_kunjungan')->references('id')->on('tujuan_kunjungans');
            $table->unsignedBigInteger('id_nama_pegawai')->default("null");
            $table->foreign('id_nama_pegawai')->references('id')->on('nama_pegawai');
            $table->boolean('status')->default(0);

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
        Schema::dropIfExists('transactions');
    }
};