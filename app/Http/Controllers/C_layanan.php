<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_layanan;
use Illuminate\Support\Facades\Storage;

class C_layanan extends Controller
{
    public function index(){
        $layanan = M_layanan::latest();
        if(request('search')){
            $layanan->where('nama','like','%'.request('search').'%');
        }
        $no=1;
        return view('adminView.S_layanan',[
            'title'=>'layanan',
            'layanan'=>$layanan->paginate(4),
            'no'=>$no
        ]);
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'foto' => 'required|file|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if($request->file('foto')){
            $validasi['foto']=$request->file('foto')->store('imgLayanan','public');
        }
        $layanan = new M_layanan;
        $layanan->nama=$request->nama;
        $layanan->deskripsi	=$request->deskripsi;
        $layanan->foto = $validasi['foto'];
        $layanan->save();
        return redirect()->route('R_layanan.index')->with('sukses');
    }

    public function destroy($id){
        $layanan= M_layanan::find($id);
        Storage::delete('public/'.$layanan->foto);
        $layanan->delete();
        return redirect()->route('R_layanan.index')->with('sukses');
    }
}
