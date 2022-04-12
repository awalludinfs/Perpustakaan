<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjamas;
use App\Models\databukus;

class DatapeminjamanadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Peminjamas = peminjamas::all();
        return view('admin.datapeminjaman.index',['Peminjamas'=>$Peminjamas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Databukus = databukus::all();
        return  view('admin.datapeminjaman.create',['Databukus'=>$Databukus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        peminjamas::create($request->all());
        return redirect('/datapeminjamanadmin')->with('status','Anda berhasil meminjam Buku!!');
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
        $Databukus = peminjamas::find($id);
        $Databukus->delete();

        if($Databukus){
            return redirect('/datapeminjamanadmin')->with('status','Data Berhasil di hapus');
        }
    }
}
