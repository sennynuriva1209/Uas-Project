@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Create Mobil</div>
                <div class="panel-body">
                    <form action="{{route('mobil.store',$mobil->id)}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Kode Mobil</label>
                            <input type="text" class="form-control" name="kode_mobil" placeholder="Input Kode Mobil">
                         </div>
                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="merk" placeholder="Input Merk">
                        </div>
                        <div class="form-group">
                            <label>Tahun Buat</label>
                            <input type="varchar" class="form-control" name="thn_buat" placeholder="Input Tahun Buat">
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" class="form-control" name="model" placeholder="Input Model">
                        </div>
                        <button type="submit" class=" btn btn primary">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
