<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DatauserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = user::all();
        return view('admin.datauser.datauser',['User'=>$User]);
    }
    public function status($id){
        $user = User::find($id); 
        $status_sekarang = $user->status;
        
         if($status_sekarang == 1){
            $user->status=0;
        }else{
            $user->status=1;
        }
        $user->save();

        return redirect('/datauser')->with('status','Anda Berhasil Menggubah!!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = DB::table('users')
        ->join('drivesayas','users.id', "=", 'drivesayas.id_upload')
        ->where('users.id',"=",$id)
        ->get();
        return view('admin.datauser.detail',['result'=>$result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.datauser.edit', compact('user'));
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
        $user =User::find($id);
        $user->update($request->all());
        return redirect('/datauser')->with('status','Data Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();

        if($user){
            return redirect('/datauser')->with('status','Data Berhasil Di hapus!!');
        }
    }
}
