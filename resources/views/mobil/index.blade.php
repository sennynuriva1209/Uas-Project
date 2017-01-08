@extends('layouts.admin')
@section('content')
	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<table class="table table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>kode_mobil</th>
							<th>merk</th>
							<th>thn_buat</th>
							<th>model</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($mobil as $mobils)
						<tr>
							<td>{{$mobils->id}}</td>
							<td>{{$mobils->kode_mobil}}</td>
							<td>{{$mobils->merk}}</td>
							<td>{{$mobils->thn_buat}}</td>
							<td>{{$mobils->model}}</td>
							<td>
								<form action="{{route('mobil.destroy',$mobils->id)}}" class="form-inline" method="POST">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="delete">
									<input type="submit" value="Hapus" class="btn btn-danger">
									<a href="{{route('mobil.show',$mobils->id)}}" class="btn btn-primary">Lihat</a>
									<a href="{{route('mobil.edit',$mobils->id)}}" class="btn btn-primary">Edit</a>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
                </div>
                <a href="{{URL('/input-mobil')}}" class="btn btn-default">Tambah</a>
            </div>
        </div>
        	{{ $mobil->links()}}
    </header>
@endsection

