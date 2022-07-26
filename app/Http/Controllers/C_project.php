<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_project;
use App\Models\M_team;

class C_project extends Controller
{
    // team
    /**
     * Display the specified resource.
     *
     * @param  \App\M_project 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $project = M_project::latest()->paginate(4);
        if (request('search')){
            $project->where('nama','like','%'.request('search').'%');
        }
        
        $no = 1;
        return view('adminView.S_project',[
            'no'=>$no,
            'title'=>'project',
            'project'=>$project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
       
        if ($image = $request->file('buktiTransaksi')) {
            $destinationPath = 'img/imgTransaksi/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }

        $project = new M_project;
        $project->nama=$request->name;
        $project->deskripsi=$request->deskripsi;
        $project->jenis=$request->jenis;
        $project->foto_transaksi=$input['image'] = "$profileImage";
        $project->deadline=$request->deadline;
        $project->status=$request->status;
        $project->keterangan=$request->keterangan;
        $project['pekerja']=json_encode($request->pekerja);
        $project->save();
        return redirect()->route('R_project.index');

    }

    public function addProject(){
        $pekerja = M_team::latest();
        return view('adminView.A_project',[
            'title'=>'addproject',
            'pekerja'=>$pekerja->get(),
        ]);
    }

    public function show($id)
    {
        $M_jobdesk = M_team::latest();
        $project = M_project::find($id);
        $arrayPekerja = json_decode($project->pekerja);
        return view('adminView.E_project',[
            'title'=>'edit',
            'pekerja'=>$M_jobdesk->get(),
            'project'=>$project,
            'arrayPekerja'=>$arrayPekerja
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\M_project  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        if ($image = $request->file('foto_transaksi')) {
            $destinationPath = 'img/imgTransaksi/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }
        if ($foto_completed = $request->file('foto_completed')) {
            $destinationPath = 'img/imgProject/';
            $profileImage = date('YmdHis') . "." . $foto_completed->getClientOriginalExtension();
            $foto_completed->move($destinationPath, $profileImage);
        }

        $project = M_project::findOrFail($id);
        $project->nama=$request->name;
        $project->deskripsi=$request->deskripsi;
        $project->jenis=$request->jenis;
        $project->foto_transaksi=$input['image'] = "$profileImage";
        $project->deadline=$request->deadline;
        $project->status=$request->status;
        $project->keterangan=$request->keterangan;
        $project->time_completed=$request->time_completed;
        $project->foto_completed=$input['foto_completed'] = "$profileImage";
        $project['pekerja']=json_encode($request->pekerja);
        $project->update();
        return redirect()->route('R_project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\M_project  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $project = M_project::find($id);
        $project->delete();
        return redirect()->route('R_project.index')->with('sukses');
    }
}
