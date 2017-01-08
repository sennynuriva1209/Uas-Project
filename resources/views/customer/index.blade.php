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
							<th>nama</th>
							<th>alamat</th>
							<th>telp</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($customer as $customers)
						<tr>
							<td>{{$customers->id}}</td>
							<td>{{$customers->nama}}</td>
							<td>{{$customers->alamat}}</td>
							<td>{{$customers->telp}}</td>
							<td>
								<form action="{{route('customer.destroy',$customers->id)}}" class="form-inline" method="POST">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="delete">
									<input type="submit" value="Hapus" class="btn btn-danger">
									<a href="{{route('customer.show',$customers->id)}}" class="btn btn-primary">Lihat</a>
									<a href="{{route('customer.edit',$customers->id)}}" class="btn btn-primary">Edit</a>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
                </div>
                <a href="{{URL('/input-customer')}}" class="btn btn-default">Tambah</a>
            </div>
        </div>
        	{{ $customer->links()}}
    </header>
@endsection

