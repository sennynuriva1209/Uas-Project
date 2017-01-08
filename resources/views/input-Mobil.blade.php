@extends('layouts.admin')
@section('content')
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <h1> Create Mobil</h1>
                <div class="panel paanel-default">
                    <div class="panel-body">
                        <form action="{{route('mobil.store')}}" method="POST" role="form">
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
                                <input type="int" class="form-control" name="thn_buat" placeholder="Input Tahun Buat">
                            </div>
                            <div class="form-group">
                                <label>Model</label>
                                <input type="int" class="form-control" name="model" placeholder="Input Model">
                            </div>
                            
                            <button type="submit" class=" btn btn-primary">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection