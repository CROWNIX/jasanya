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
        Schema::create('tb_portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 64);
            $table->string('jobdesk', 64);
            $table->text('deskripsi');
            $table->string('foto');
            $table->string('instagram');
            $table->string('github');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('prefix');
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
        Schema::dropIfExists('tb_portfolio');
    }
};
