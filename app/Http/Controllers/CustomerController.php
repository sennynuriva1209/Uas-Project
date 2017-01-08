<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\http\Requests;
use App\Customer;
use Auth;
use Session;

class CustomerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::paginate(5);
        return view ('customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama =$request->nama;
        $alamat =$request->alamat;
        $telp=$request->telp;
        

        $customer= new customer;
        $customer->nama=$nama;
        $customer->alamat=$alamat;
        $customer->telp=$telp;
        $customer->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"berhasil menyimpan $customer->nama"
        ]);

        return redirect()->route('customer.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $customer= Customer::find($id);
       return view('customer.show',compact('customer'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
       return view ('customer.edit',compact('customer'));//
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

      $customer= Customer::find($id);
      $customer->nama = $nama;
      $customer->id = $id;
    if ($customer->save())  {

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $customer->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal mengubah $customer->nama"
        ]);
     }

      return redirect()->route ('customer.index');
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
        $customer = Customer::find($id);
     if ($customer->delete())  {

      Session::flash("flash_notification", [
        "level"=>"success",       
        "message"=>"Berhasil menghapus $customer->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal menghapus $customer->nama"
        ]);
     }

      return redirect()->route ('customer.index');
        //
    }//
}
