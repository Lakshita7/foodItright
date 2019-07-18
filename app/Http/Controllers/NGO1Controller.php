<?php
use App\NGO1;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NGO1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('NGO.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function NGO()
    {
        //
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $ngo = new  \App\NGOs;
        $ngo->NGOname = request('NGOName');
        $ngo->email = request('email');
        $ngo->NGOAddress = request('NGOAddress');
        $ngo->NGOCity = request('NGOCity');
        $ngo->NGOspoc = request('NGOspoc');
        $ngo->NGOumber = request('NGOumber');
        $ngo->psw = request('psw');
 


        $ngo->save();


       // return request()->all();
        return redirect('/NGO1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
