<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_kritikSaran;
use Carbon\Carbon;
use App\Models\M_team;
use App\Models\M_project;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class C_home extends Controller
{
    public function index()
    {
        $project = M_project::all()->where('status', 'Special');
        $count = M_project::where('status','=','Special')->count();
        $count1 = M_project::where('status','=','Completed')->count();
        $client = M_project::distinct('nama_client')->where('status','=','Special')->orWhere('status','=','Completed')->count('nama_client');
        $total = $count+$count1;
        $tanggalBerdiri = Carbon::parse('2022-07-22 11:00:00');
        $now = Carbon::now();
        $selisih = $tanggalBerdiri->diffInDays($now);
        return view('jasanyaView.home',[
            'title' => 'home',
            'hari'=>$selisih,
            'project'=>$project ,
            'count'=>$total,
            'client'=>$client

        ]);
    }

    public function team()
    {
        $M_team = M_team::all();
        $jobdesk = ["Full Stack", "UI/UX design", "Back End"];

        for ($jobdeskIndex = 0; $jobdeskIndex < count($jobdesk); $jobdeskIndex++) { 
            for ($i = 0; $i < count($M_team); $i++) { 
                if ($M_team[$i]->jobdesk == $jobdesk[$jobdeskIndex]) {
                    $temp = $M_team[$jobdeskIndex];
                    $M_team[$jobdeskIndex] = $M_team[$i];
                    $M_team[$i] = $temp;
                    break;
                }
            }
        }

        
        return view('jasanyaView.team',compact('M_team'),['title'=>'team']);
    }

}