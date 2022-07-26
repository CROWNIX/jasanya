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
        $kritikSaran = M_kritikSaran::latest()->get();
        return view('adminView.S_kritikSaran',compact('kritikSaran'),['no'=>$no,'title'=>'kritiksaran']);
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
        return redirect('/kritikSaran')->with('success','kritik saran berhasil dihapus');
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
        return view('adminView.D_kritikSaran',compact('detailKritikSaran'));
    }
    // end kritik saran

    public function kritikSaran(Request $request)
    {
        $kritikSaran = new M_kritikSaran;
        $kritikSaran->name = $request->name_email;
        $kritikSaran->email = $request->email_kritik;
        $kritikSaran->subject = $request->subject;
        $kritikSaran->message = $request->message;
        $kritikSaran->save();
        return redirect('/#contact')->with('success','kritik atau saran anda telah dikirim');
    }
}
