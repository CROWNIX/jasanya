<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_kritikSaran;
use Carbon\Carbon;
use App\Models\M_team;
use RealRashid\SweetAlert\Facades\Alert;

class C_home extends Controller
{
    public function index()
    {
        $tanggalBerdiri = Carbon::parse('2022-07-22 11:00:00');
        $now = Carbon::now();
        $selisih = $tanggalBerdiri->diffInDays($now);
        return view('jasanyaView.home',['title' => 'home', 'hari'=>$selisih ]);
    }

    public function team()
    {
        $M_team = M_team::all();
        return view('jasanyaView.team',compact('M_team'),['title'=>'team']);
    }

    
}
