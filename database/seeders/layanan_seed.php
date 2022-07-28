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
                "deskripsi" => "Penyedia Jasa website"
            ],
            [
                "nama" => "UI / UX",
                "deskripsi" => "Penyedia Jasa UI / UX"
            ],
            [
                "nama" => "Aplikasi Mobile",
                "deskripsi" => "Penyedia Jasa aplikasi mobile"
            ],
            [
                "nama" => "API",
                "deskripsi" => "Penyedia Jasa API"
            ],
        ];

        DB::table('layanan')->insert($layanan);
    }
}