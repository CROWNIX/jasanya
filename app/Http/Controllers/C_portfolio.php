<?php

namespace App\Http\Controllers;

use App\Models\M_portfolio;
use App\Models\tb_portfolio;
use Illuminate\Http\Request;

class C_portfolio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portfolio = M_portfolio::all();
        // dd($portfolio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\M_portfolio  $m_portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        $portfolio = M_portfolio::where('prefix', $nama)->first();
        return view("portfolio.$portfolio->prefix", $portfolio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\M_portfolio  $m_portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(M_portfolio $m_portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\M_portfolio  $m_portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, M_portfolio $m_portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\M_portfolio  $m_portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(M_portfolio $m_portfolio)
    {
        //
    }
}
