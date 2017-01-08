@extends('layouts.admin')
@section('content')
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <h1> Create Customer</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{route('customer.store')}}" method="POST" role="form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Input Nama">
                             </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Input Alamat">
                            </div>
                            <div class="form-group">
                                <label>Telp</label>
                                <input type="int" class="form-control" name="telp" placeholder="Input Telp">
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