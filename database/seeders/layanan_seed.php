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
                "icon" => "<i class='fa fa-laptop fa-2x'></i>",
                "whatsapp" => "https://wa.me/6281290853613?text=Halo%20admin%20jasanya,%20jasa%20pembuatan%20website"
            ],
            [
                "nama" => "UI / UX",
                "deskripsi" => "Penyedia Jasa UI / UX",
                "icon" => "<i class='fa fa-laptop fa-2x'></i>",
                "whatsapp" => "https://wa.me/6281290853613?text=Halo%20admin%20jasanya,%20jasa%20pembuatan%UI%20/%20UX"
            ],
            [
                "nama" => "Aplikasi Mobile",
                "deskripsi" => "Penyedia Jasa aplikasi mobile",
                "icon" => "<i class='fa fa-mobile fa-2x'></i>",
                "whatsapp" => "https://wa.me/6281290853613?text=Halo%20admin%20jasanya,%20jasa%20pembuatan%20aplikasi%20mobile"
            ],
            [
                "nama" => "API",
                "deskripsi" => "Penyedia Jasa API",
                "icon" => "<i class='fa fa-server fa-2x'></i>",
                "whatsapp" => "https://wa.me/6281290853613?text=Halo%20admin%20jasanya,%20jasa%20pembuatan%20API"
            ],
        ];

        DB::table('layanan')->insert($layanan);
    }
}