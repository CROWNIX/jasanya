<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_layanan;
use Illuminate\Support\Facades\Storage;

class C_layanan extends Controller
{
    public function index(){
        $layanan = M_layanan::latest()->get();
       
        if(request('search')){
            $layanan->where('nama','like','%'.request('search').'%');
        }
        $no=1;
        return view('adminView.S_layanan',[
            'title' => 'layanan',
            'layanan' => $layanan,
            'no' => $no
        ]);
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required|max:100',
            "deskripsi" => "required|max:255",
            "icon" => "required|max:100",
        ]);

        M_layanan::create($validasi);
        
        return redirect("/layanan")->with("success", "New layanan has beed added");
    }

    public function destroy($id){
        $layanan= M_layanan::find($id);
        Storage::delete('public/'.$layanan->foto);
        $layanan->delete();
        return redirect("/layanan")->with("success", "Layanan has beed deleted");
    }
}