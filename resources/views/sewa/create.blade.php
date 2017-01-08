@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel paanel-default">
                <div class="panel-heading"> Create Sewa</div>
                <div class="panel-body">
                    <form action="{{route('sewa.store',$sewas->id)}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>No Sewa</label>
                            <input type="text" class="form-control" name="no_sewa" placeholder="Input No Sewa">
                         </div>
                        <div class="form-group">
                            <label>Jenis Mobil</label>
                            <input type="text" class="form-control" name="jenis_mobil" placeholder="Input Jenis Mobil">
                        </div>
                        <div class="form-group">
                            <label>Tgl Sewa</label>
                            <input type="text" class="form-control" name="tgl_sewa" placeholder="Input Tgl Sewa">
                        </div>
                        <div class="form-group">
                            <label>Tgl Kembali</label>
                            <input type="text" class="form-control" name="tgl_kembali" placeholder="Input Tgl Kembali">
                        </div>
                        <div class="form-group">
                            <label>Biaya</label>
                            <input type="int" class="form-control" name="biaya" placeholder="Input Biaya">
                        </div>
                        <button type="submit" class=" btn btn primary">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
