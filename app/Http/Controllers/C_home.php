<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_kritikSaran;
use Carbon\Carbon;
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

    public function kritikSaran(Request $request)
    {
        $kritikSaran = new M_kritikSaran;
        $kritikSaran->name = $request->name;
        $kritikSaran->email = $request->email;
        $kritikSaran->subject = $request->subject;
        $kritikSaran->message = $request->message;
        $kritikSaran->save();
        Alert::success('kritik/saran berhasil dikirim, terimakasih');
        return redirect('/#contact'); 
    }

    
}
