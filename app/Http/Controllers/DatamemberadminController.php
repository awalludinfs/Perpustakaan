<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datamembers;

class DatamemberadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datamembers = datamembers::all();
        return view('admin.datamember.index',['Datamembers'=>$Datamembers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datamember.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        datamembers::create($request->all());
        return redirect('/datamemberadmin')->with('status','Anda berhasil Menambahkan Mmember!!');
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
    public function edit(Datamembers $datamembers )
    {
        return view('admin.datamember.edit',compact('datamembers'));
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
        $Datamembers = datamembers::find($id);
        $Datamembers->update($request->all());
        return redirect('/drivesaya')->with('status','Data Berhasil di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Datamembers = datamembers::find($id);
        $Datamembers->delete();

        if($Datamembers){
            return redirect('/datamemberadmin')->with('status','Data Berhasil di hapus');
        }
    }
}
