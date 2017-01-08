<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\http\Requests;
use App\mobil;
use Auth;
use Session;

class MobilController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::paginate(5);
        return view ('mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id =$request->id;
        $kode_mobil =$request->kode_mobil;
        $merk =$request->merk;
        $thn_buat=$request->thn_buat;
        $model=$request->model;

        $mobil= new mobil;
        $mobil->id=$id;
        $mobil->kode_mobil=$kode_mobil;
        $mobil->merk=$merk;
        $mobil->thn_buat=$thn_buat;
        $mobil->model=$model;
        $mobil->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"berhasil menyimpan $mobil->nama"
        ]);

        return redirect()->route('mobil.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $mobil= Mobil::find($id);
       return view('mobil.show',compact('mobil'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::find($id);
       return view ('mobil.edit',compact('mobil'));//
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
        $nama    =$request->nama;
        $id = Auth::user()->id;

      $mobil= Mobil::find($id);
      $mobil->kode_mobil = $kode_mobil;
      $mobil->id = $id;
    if ($mobil->save())  {

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $mobil->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal mengubah $mobil->nama"
        ]);
     }

      return redirect()->route ('mobil.index');
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
        $mobil = Mobil::find($id);
     if ($mobil->delete())  {

      Session::flash("flash_notification", [
        "level"=>"success",       
        "message"=>"Berhasil menghapus $mobil->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal menghapus $mobil->nama"
        ]);
     }

      return redirect()->route ('mobil.index');
        //
    }//
}
