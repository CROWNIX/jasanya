<?php

namespace App\Http\Controllers;
use App\Models\M_team;
use App\Models\M_jobdesk;
use Illuminate\Http\Request;

class C_team extends Controller
{
    // team
    /**
     * Display the specified resource.
     *
     * @param  \App\M_team 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $M_team = M_team::latest();
        if(request('search')){
            $M_team->where('nama_lengkap','like','%'.request('search').'%');
        }
        $no = 1;
        return view('adminView.S_team',[
            'no' => $no,
            'title' => 'datateam',
            'M_team' => $M_team->get(),
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
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if ($image = $request->file('foto')) {
            $destinationPath = 'img/imgTeam/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }
        $portofolio = new M_team;
        $portofolio->nama_lengkap = $request->name;
        $portofolio->jobdesk = $request->jobdesk;
        $portofolio->instagram = $request->instagram;
        $portofolio->github = $request->github;
        $portofolio->linkedin = $request->linkedin;
        $portofolio->facebook = $request->facebook;
        $portofolio->foto = $input['image'] = "$profileImage";
        $portofolio->save();
        return redirect()->route('R_team.index')
                        ->with('success','Product deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\M_jobdesk 
     * @return \Illuminate\Http\Response
     */
    public function F_A_team(){
        $M_jobdesk = M_jobdesk::latest();
        return view('adminView.A_team',[
            'title'=>'add team',
            'M_jobdesk'=>$M_jobdesk->get(),
        ]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\M_team  $M_team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $M_jobdesk = M_jobdesk::latest();
        $M_team = M_team::find($id);
        return view('adminView.E_team',compact('M_team'),[
            'title'=>'edit',
            'M_jobdesk'=>$M_jobdesk->get()
        ]);
    }

    public function detailTeam($id)
    {
        $M_jobdesk = M_jobdesk::latest();
        $M_team = M_team::find($id);
        return view('adminView.D_team',compact('M_team'),[
            'title'=>'edit',
            'M_jobdesk'=>$M_jobdesk->get()
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\M_team  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if ($image = $request->file('foto')) {
            $destinationPath = 'img/imgTeam/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }
        $portofolio = M_team::findOrFail($id);
        $portofolio->nama_lengkap = $request->name;
        $portofolio->jobdesk = $request->jobdesk;
        $portofolio->instagram = $request->instagram;
        $portofolio->github = $request->github;
        $portofolio->linkedin = $request->linkedin;
        $portofolio->facebook = $request->facebook;
        $portofolio->foto = $input['image'] = "$profileImage";
        $portofolio->update();
        return redirect()->route('R_team.index')
                        ->with('success','Product deleted successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\M_team  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kritikSaran = M_team::find($id);
        $kritikSaran->delete();
        return redirect()->route('R_team.index')
                        ->with('success','Product deleted successfully');
    }
    // end team
}