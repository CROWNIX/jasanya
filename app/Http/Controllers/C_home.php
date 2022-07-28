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
        $userRecord = M_project::where('status','=','Special')->first();
        $count = M_project::where('status','=','Special')->count();
        $count1 = M_project::where('status','=','Completed')->count();
        $total = $count+$count1;
        $tanggalBerdiri = Carbon::parse('2022-07-22 11:00:00');
        $now = Carbon::now();
        $selisih = $tanggalBerdiri->diffInDays($now);
        return view('jasanyaView.home',[
            'title' => 'home',
            'hari'=>$selisih,
            'project'=>$userRecord ,
            'count'=>$total
        ]);
    }

    public function team()
    {
        $M_team = M_team::all();
        return view('jasanyaView.team',compact('M_team'),['title'=>'team']);
    }

}

