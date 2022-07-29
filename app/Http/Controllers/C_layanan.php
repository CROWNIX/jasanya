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
        return view('adminView.layanan.S_layanan',[
            'title' => 'layanan',
            'layanan' => $layanan,
            'no' => $no
        ]);
    }
    
    public function create(){       
        return view('adminView.layanan.A_layanan',[
            'title' => 'Add Layanan'
        ]);
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required|max:100|unique:layanan',
            "deskripsi" => "required|max:255",
            "icon" => "required|max:100|unique:layanan",
        ]);

        M_layanan::create($validasi);
        
        return redirect("/layanan")->with("success", "New layanan has beed added");
    }

    public function update(Request $request, M_layanan $layanan){
        $validasi = $request->validate([
            "nama" => "required|max:100|unique:layanan",
            "deskripsi" => "required|max:255",
            "icon" => "required|max:100|unique:layanan",
        ]);

        $layanan->update($validasi);
        
        return redirect("/layanan")->with("success", "layanan has beed updated");
    }

    public function destroy($id){
        $layanan= M_layanan::find($id);
        $layanan->delete();
        return redirect("/layanan")->with("success", "Layanan has beed deleted");
    }
}