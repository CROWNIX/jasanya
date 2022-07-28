<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_project;
use App\Models\M_layanan;
use App\Models\M_team;
use Illuminate\Support\Facades\Storage;

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
        $project = M_project::latest()->get();

        if (request('search')){
            $project->where('nama','like','%'.request('search').'%');
        }

        $no = 1;
        $noDetail = 0;
        return view('adminView.project.S_project',[
            'no' => $no,
            'title' => 'Project',
            'project' => $project,
            'noDetail' => $noDetail
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validasi = $request->validate([
            'foto_transaksi' => 'required|file|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if($request->file('foto_transaksi')){
            $validasi['foto_transaksi']=$request->file('foto_transaksi')->store('imgTransaksi','public');
        }

        $project = new M_project;
        $project->nama=$request->name;
        $project->deskripsi=$request->deskripsi;
        $project->jenis=$request->jenis;
        $project->foto_transaksi=$validasi['foto_transaksi'];
        $project->deadline=$request->deadline;
        $project->status=$request->status;
        $project->keterangan=$request->keterangan;
        $project['pekerja']=json_encode($request->pekerja);
        $project->save();
        return redirect("/project");

    }

    public function addProject(){

        return view('adminView.project.A_project',[
            "title" => "Add Project",
            "pekerja" => M_team::latest()->get(),
            "layanan" => M_layanan::latest()->get()
        ]);
    }

    public function show($id)
    {
        $M_jobdesk = M_team::latest();
        $project = M_project::find($id);
        $arrayPekerja = json_decode($project->pekerja);
        return view('adminView.project.E_project',[
            'title'=>'edit',
            'pekerja'=>$M_jobdesk->get(),
            'project'=>$project,
            'arrayPekerja'=>$arrayPekerja
        ]);
    }

    public function edit($id){
        $M_jobdesk = M_team::latest();
        $project = M_project::find($id);
        $arrayPekerja = json_decode($project->pekerja);
        return view('adminView.project.A_project',[
            'title'=>'Edit Project',
            'pekerja'=>$M_jobdesk->get(),
            'project'=>$project,
            'arrayPekerja'=>$arrayPekerja,
            "layanan" => M_layanan::latest()->get()
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
        $validasi = $request->validate([
            'foto_transaksi' => 'file|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'foto_completed' => 'file|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $project = M_project::findOrFail($id);
        if($request->file('foto_transaksi')){
            if($request->oldfoto_transaksi){
                Storage::delete('public/'.$request->oldfoto_transaksi);
            }
            $validasi['foto_transaksi']=$request->file('foto_transaksi')->store('imgTransaksi','public');
        }else {
            $validasi['foto_transaksi']=$project->foto_transaksi;
        }
        
        if ($request->file('foto_completed')){
            if($request->oldfoto_completed){
                Storage::delete('public/'.$request->oldfoto_completed);
            }
            $validasi['foto_completed']=$request->file('foto_completed')->store('imgComplete','public');
        }else {
            $validasi['foto_completed']=$project->foto_completed;
        }
        
        $project->nama=$request->name;
        $project->deskripsi=$request->deskripsi;
        $project->jenis=$request->jenis;
        $project->foto_transaksi=$validasi['foto_transaksi'];
        $project->deadline=$request->deadline;
        $project->status=$request->status;
        $project->keterangan=$request->keterangan;
        $project->time_completed=$request->time_completed;
        $project->foto_completed=$validasi['foto_completed'];
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
        Storage::delete('public/'.$project->foto_transaksi);
        Storage::delete('public/'.$project->foto_completed);
        $project->delete();
        return redirect("/project");
    }
}