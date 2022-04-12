<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\databukus;

class DatabukuadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Databukus = Databukus::all();
        return view('admin.databuku.index',['Databukus'=>$Databukus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.databuku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        
        $file = $request->file('gambar');
        $tujuan_upload = 'data_gambar';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        
        $Databukus = new databukus;
        
        $Databukus->buku_id = $request->buku_id;
        $Databukus->nama_buku = $request->nama_buku;
        $Databukus->jenis_buku = $request->jenis_buku;
        $Databukus->penulis_buku = $request->penulis_buku;
        $Databukus->penerbit_buku = $request->penerbit_buku;
        $Databukus->jumlah_buku = $request->jumlah_buku;
        $Databukus->status = $request->status;
        $path = $tujuan_upload."/".$file->getClientOriginalName();
        $Databukus->gambar = $path;
        
        $Databukus->save();
        
        return redirect('/databukuadmin')->with('status','Anda Berhasil Upload');
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
