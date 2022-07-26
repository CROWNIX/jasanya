<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_jobdesk;

class C_jobdesk extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\M_jobdesk 
     * @return \Illuminate\Http\Response
     */
    public function index (){
        $M_jobdesk = M_jobdesk::latest();
        $no = 1;
        return view('adminView.S_jobdesk',[
            'no' => $no,
            'title' => 'jobdesk',
            'M_jobdesk' => $M_jobdesk->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $M_jobdesk = new M_jobdesk;
        // $users_count = $M_jobdesk->where('nama', '=', request('name'))->count();
        // if ($users_count > 0){
        //     return redirect()->route('R_jobdesk.index')
        //                 ->with('success','Product deleted successfully');
        //     exit;
        // }
        $M_jobdesk->nama = $request->name;
        $M_jobdesk->save();
        return redirect()->route('R_jobdesk.index')
                        ->with('success','Product deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\M_jobdesk  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $M_jobdesk = M_jobdesk::find($id);
        $M_jobdesk->delete();
        return redirect()->route('R_jobdesk.index')
                        ->with('success','Product deleted successfully');
    }
}
