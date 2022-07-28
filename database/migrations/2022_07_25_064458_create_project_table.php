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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('nama_client');
            $table->string('nama_project');
            $table->string('deskripsi');
            $table->string('jenis')->nullable();
            $table->string('deadline')->nullable();
            $table->string('status');
            $table->string('time_completed')->nullable();
            $table->string('foto_completed')->nullable();
            $table->string('foto_transaksi')->nullable();
            $table->string('pekerja')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('project');
    }
};
