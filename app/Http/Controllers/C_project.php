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
        $noDetail = 1;
        return view('adminView.project.S_project',[
            'no' => $no,
            'title' => 'project',
            'project' => $project,
            'noDetail' => $noDetail
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\M_project  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, M_project $project){
        $validasi = $request->validate([
            "nama_client" => "required",
            "nama_project" => "required",
            "deskripsi" => "required",
            "keterangan" => "required",
            "deadline" => "required",
            "status" => "required",
            "jenis" => "required",
            "foto_transaksi" => "file|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);

        if($request->file('foto_transaksi')){
            $validasi['foto_transaksi']=$request->file('foto_transaksi')->store('imgTransaksi','public');
        }
        $validasi['pekerja'] = json_encode($request->pekerja);
        $project->create($validasi);

        return redirect("/project")->with("success", "New Project has beed added");
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

    public function edit(M_project $project){
        $arrayPekerja = json_decode($project->pekerja);
        
        return view('adminView.project.E_project',[
            'title' => 'Edit Project',
            'pekerja' => M_team::latest()->get(),
            'project' => $project,
            'arrayPekerja' => $arrayPekerja,
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
    public function update(Request $request, M_project $project){
        $validasi = $request->validate([
            "nama_client" => "required",
            "nama_project" => "required",
            "deskripsi" => "required",
            "keterangan" => "required",
            "deadline" => "required",
            "status" => "required",
            "jenis" => "required",
            "time_completed" => "",
            "foto_transaksi" => "file|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "foto_completed" => "file|image|mimes:jpg,png,jpeg,gif,svg|max:2048"
        ]);

        if($request->file('foto_transaksi')){
            if($request->oldfoto_transaksi){
                Storage::delete($project->foto_transaksi);
            }

            $validasi['foto_transaksi'] = $request->file('foto_transaksi')->store('imgTransaksi','public');
        }

        if($request->file('foto_completed')){
            if($request->oldfoto_completed){
                Storage::delete($project->foto_completed);
            }

            $validasi['foto_completed'] = $request->file('foto_completed')->store('imgCompleted','public');
        }
        $validasi['pekerja'] = json_encode($request->pekerja);
        $project->update($validasi);
        
        return redirect("/project")->with("success", "Project has beed updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\M_project  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $project = M_project::find($id);
        if ($project->foto_transaksi) {
            Storage::delete('public/'.$project->foto_transaksi);
        }
        Storage::delete('public/'.$project->foto_completed);
        $project->delete();
        return redirect("/project");
    }
}