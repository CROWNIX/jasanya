<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class portfolio_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio = [
            [
                'nama_lengkap' => 'M.Syahrul Saefulah',
                'jobdesk' => 'Full Stack',
                'deskripsi' => '',
                'foto' => 'default.jpg',
                'instagram' => 'syahrulsaef',
                'github' => 'sahrulprograming',
                'linkedin' => '',
                'facebook' => '',
                'prefix' => 'syahrul',
            ],
            [
                'nama_lengkap' => 'Rahmat Fauzi Widianto',
                'jobdesk' => 'Full Stack',
                'deskripsi' => '',
                'foto' => 'default.jpg',
                'instagram' => '',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
                'prefix' => 'rahmat',
            ],
            [
                'nama_lengkap' => 'Rama ',
                'jobdesk' => 'Full Stack',
                'deskripsi' => '',
                'foto' => 'default.jpg',
                'instagram' => '',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
                'prefix' => 'rama',
            ],
            [
                'nama_lengkap' => 'Dede Maulana',
                'jobdesk' => 'Frontend & UI/UX design',
                'deskripsi' => '',
                'foto' => 'default.jpg',
                'instagram' => '',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
                'prefix' => 'maulana',
            ],
            [
                'nama_lengkap' => 'Muhammad Ridwan',
                'jobdesk' => 'UI/UX design',
                'deskripsi' => '',
                'foto' => 'default.jpg',
                'instagram' => '',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
                'prefix' => 'ridwan',
            ],
            [
                'nama_lengkap' => 'Atikah Rahmawati',
                'jobdesk' => 'UI/UX design',
                'deskripsi' => '',
                'foto' => 'default.jpg',
                'instagram' => '',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
                'prefix' => 'atikah',
            ],
            [
                'nama_lengkap' => 'Yesicha Audria',
                'jobdesk' => 'UI/UX design',
                'deskripsi' => '',
                'foto' => 'default.jpg',
                'instagram' => '',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
                'prefix' => 'yesicha',
            ],
        ];
        DB::table('tb_portfolio')->insert($portfolio);
    }
}
