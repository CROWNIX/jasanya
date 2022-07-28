<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class team_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = [
            [
                'nama_lengkap' => 'M.Syahrul Saefulah',
                'jobdesk' => 'Full Stack',
                'foto' => 'imgTeam/bangSarul.jpg',
                'instagram' => 'syahrulsaef',
                'github' => 'sahrulprograming',
                'linkedin' => '',
                'facebook' => '',
            ],
            [
                'nama_lengkap' => 'Rahmat Fauzi Widianto',
                'jobdesk' => 'Full Stack',
                'foto' => 'imgTeam/bangRahmat.jpg',
                'instagram' => 'fri3nds_715',
                'github' => 'CROWNIX',
                'linkedin' => '',
                'facebook' => '',
            ],
            [
                'nama_lengkap' => 'Syaiban Ahmad Ramadhan',
                'jobdesk' => 'Back End',
                'foto' => 'imgTeam/rama.jpeg',
                'instagram' => 'ibanrmaa',
                'github' => 'SyaibanAhmadRamadhan',
                'linkedin' => '',
                'facebook' => '',
            ],
            [
                'nama_lengkap' => 'Dede Maulana',
                'jobdesk' => 'Frontend & UI/UX design',
                'foto' => 'imgTeam/bangMaul.jpeg',
                'instagram' => 'maullana_d19',
                'github' => 'maullana19',
                'linkedin' => '',
                'facebook' => '',
            ],
            [
                'nama_lengkap' => 'Muhammad Ridwan',
                'jobdesk' => 'UI/UX design',
                'foto' => 'imgTeam/bangRidwan.jpeg',
                'instagram' => 'muhammadridwan_king11',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
            ],
            [
                'nama_lengkap' => 'Atikah Rahmawati',
                'jobdesk' => 'UI/UX design',
                'foto' => 'imgTeam/default.jpg',
                'instagram' => 'atikahrahma26',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
            ],
            [
                'nama_lengkap' => 'Yesicha Audria',
                'jobdesk' => 'UI/UX design',
                'foto' => 'imgTeam/default.jpg',
                'instagram' => 'audriayesicha12',
                'github' => '',
                'linkedin' => '',
                'facebook' => '',
            ],
        ];
        DB::table('team')->insert($team);
    }
}
