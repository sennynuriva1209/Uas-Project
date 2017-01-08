@extends('layouts.admin')
@section('content')
	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<table class="table table-hover">
					<thead>
						<tr>
							<th>No Sewa</th>
							<th>id</th>
							<th>nama</th>
							<th>alamat</th>
							<th>telp</th>
							<th>jenis mobil</th>
							<th>tanggal sewa</th>
							<th>tanggal kembali</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($rental as $rentals)
						<tr>
							<td>{{$rentals->no_sewa}}</td>
							<td>{{$rentals->id}}</td>
							<td>{{$rentals->nama}}</td>
							<td>{{$rentals->alamat}}</td>
							<td>{{$rentals->telp}}</td>
							<td>{{$rentals->jenis_mobil}}</td>
							<td>{{$rentals->tgl_sewa}}</td>
							<td>{{$rentals->tgl_kembali}}</td>
							<td>
								<form action="{{route('rental.destroy',$rentals->id)}}" class="form-inline" method="POST">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="delete">
									<input type="submit" value="Hapus" class="btn btn-danger">
									<a href="{{route('rental.show',$rentals->id)}}" class="btn btn-primary">Lihat</a>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
                </div>
            </div>
        </div>
        	{{ $rental->links()}}
    </header>
@endsection
