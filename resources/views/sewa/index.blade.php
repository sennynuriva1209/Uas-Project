@extends('layouts.admin')
@section('content')
	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<table class="table table-hover">
					<thead>
						<tr>
							<th>no_sewa</th>
							<th>jenis_mobil</th>
							<th>tgl_sewa</th>
							<th>tgl_kembali</th>
							<th>biaya</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($sewa as $sewas)
						<tr>
							<td>{{$sewas->no_sewa}}</td>
							<td>{{$sewas->jenis_mobil}}</td>
							<td>{{$sewas->tgl_sewa}}</td>
							<td>{{$sewas->tgl_kembali}}</td>
							<td>{{$sewas->biaya}}</td>
							<td>
								<form action="{{route('sewa.destroy',$sewas->id)}}" class="form-inline" method="POST">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="delete">
									<input type="submit" value="Hapus" class="btn btn-danger">
									<a href="{{route('sewa.show',$sewas->id)}}" class="btn btn-primary">Lihat</a>
									<a href="{{route('sewa.edit',$sewas->id)}}" class="btn btn-primary">Edit</a>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
                </div>
                <a href="{{URL('/input-sewa')}}" class="btn btn-default">Tambah</a>
            </div>
        </div>
        	{{ $sewa->links()}}
    </header>
@endsection

