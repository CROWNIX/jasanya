<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class layanan_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layanan = [
            [
                "nama" => "Website",
                "deskripsi" => "Penyedia Jasa website",
                "foto" => "default.jpg"
            ],
            [
                "nama" => "UI / UX",
                "deskripsi" => "Penyedia Jasa UI / UX",
                "foto" => "default.jpg"
            ],
            [
                "nama" => "Aplikasi Mobile",
                "deskripsi" => "Penyedia Jasa aplikasi mobile",
                "foto" => "default.jpg"
            ],
            [
                "nama" => "API",
                "deskripsi" => "Penyedia Jasa API",
                "foto" => "default.jpg"
            ],
        ];

        DB::table('layanan')->insert($layanan);
    }
}