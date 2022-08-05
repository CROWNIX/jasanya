<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class jobdesk_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobdesk = [
            [
                'nama_jobdesk'=> 'Back End',
            ],
            [
                'nama_jobdesk'=>'Full Stack',
            ],
            [
                'nama_jobdesk'=>'Frontend & UI/UX design',
            ],
            [
                'nama_jobdesk'=>'UI/UX design',
            ]
        ];
        DB::table('jobdesk')->insert($jobdesk);
    }
}
