<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\http\Requests;
use App\Sewa;
use App\Customer;
use Auth;
use Session;
class RentalController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rental = DB::table('customers')
            ->join('sewas', 'customers.id', '=', 'sewas.id')
            ->select('customers.*', 'sewas.*')
            ->paginate(15);
        return view ('rental.index',compact('rental'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('rental.create');
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
        $nama =$request->nama;
        $alamat =$request->alamat;
        $telp=$request->telp;
        $jml_mobil=$request->jml_mobil;

        $rental= new rental;
        $rental->id=$id;
        $rental->nama=$nama;
        $rental->alamat=$alamat;
        $rental->telp=$telp;
        $rental->jml_mobil=$jml_mobil;
        $rental->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"berhasil menyimpan $rental->nama"
        ]);

        return redirect()->route('rental.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $rental= Rental::find($id);
       return view('rental.show',compact('rental'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rental = Rental::find($id);
       return view ('rental.edit',compact('rental'));//
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

      $rental= Rental::find($id);
      $rental->nama = $nama;
      $rental->id = $id;
    if ($rental->save())  {

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $rental->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal mengubah $rental->nama"
        ]);
     }

      return redirect()->route ('rental.index');
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
        $rental = Rental::find($id);
     if ($rental->delete())  {

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menghapus $rental->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal menghapus $rental->nama"
        ]);
     }

      return redirect()->route ('rental.index');
        //
    }//
}
