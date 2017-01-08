<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\http\Requests;
use App\sewa;
use Auth;
use Session;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = Sewa::paginate(5);
        return view ('sewa.index',compact('sewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('sewa.create');
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
        $no_sewa=$request->no_sewa;
        $jenis_mobil =$request->jenis_mobil;
        $tgl_sewa=$request->tgl_sewa;
        $tgl_kembali=$request->tgl_kembali;
        $biaya=$request->biaya;

        $sewa= new sewa;
        $sewa->id=$id;
        $sewa->no_sewa=$no_sewa;
        $sewa->jenis_mobil=$jenis_mobil;
        $sewa->tgl_sewa=$tgl_sewa;
        $sewa->tgl_kembali=$tgl_kembali;
        $sewa->biaya=$biaya;
        $sewa->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"berhasil menyimpan $sewa->nama"
        ]);

        return redirect()->route('sewa.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $sewa= Sewa::find($id);
       return view('sewa.show',compact('sewa'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sewa = Sewa::find($id);
       return view ('sewa.edit',compact('sewa'));//
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

      $sewa= Sewa::find($id);
      $sewa->no_sewa = $no_sewa;
      $sewa->id = $id;
    if ($sewa->save())  {

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $sewa->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal mengubah $sewa->nama"
        ]);
     }

      return redirect()->route ('sewa.index');
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
        $sewa = Sewa::find($id);
     if ($sewa->delete())  {

      Session::flash("flash_notification", [
        "level"=>"success",       
        "message"=>"Berhasil menghapus $sewa->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal menghapus $sewa->nama"
        ]);
     }

      return redirect()->route ('sewa.index');
        //
    }//
}
