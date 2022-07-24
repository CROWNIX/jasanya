<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_kritikSaran;
use App\Models\M_portfolio;
use RealRashid\SweetAlert\Facades\Alert;

class C_kritikSaran extends Controller
{
    
    public function home(){
        return view('adminView.home',['title'=>'admin']);
    }

    // kritik saran
    public function getKritikSaran()
    {
       
        $no = 1;
        $kritikSaran = M_kritikSaran::latest()->paginate(4);
        return view('adminView.kritikSaran',compact('kritikSaran'),['no'=>$no])
            ->with('i', (request()->input('page', 1) - 1) * 4);
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
    // end kritik saran

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
