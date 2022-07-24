<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_kritikSaran;
use RealRashid\SweetAlert\Facades\Alert;

class C_admin extends Controller
{
    
    public function home(){
        return view('adminView.home',['title'=>'admin']);
    }
    public function getKritikSaran()
    {
       
        $no = 1;
        $kritikSaran = M_kritikSaran::latest()->paginate(5);
        return view('adminView.kritikSaran',compact('kritikSaran'),['no'=>$no])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $kritikSaran = M_kritikSaran::find($id);
        $kritikSaran->delete();
        Alert::success('data berhasil di hapus');
        return redirect('/kritikSaran'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\M_kritikSaran  $detailKritikSaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detailKritikSaran = M_kritikSaran::find($id);
        return view('adminView.detailKritikSaran',compact('detailKritikSaran'));
    }
}
