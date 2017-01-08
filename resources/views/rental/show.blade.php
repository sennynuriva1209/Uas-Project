@extends ('layouts.admin')
@section ('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Rental</div>
				<div  class="panel-body">
				<form action="" method="POST" role="form">
					<button type="submit" class="btn btn-xs btn-primary">Submit</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Rental</div>
				<div class="panel-body">
				<table>
					<tr>
						<td>ID</td>
						<td>:</td>
						<td>{{$rental->id}}</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{$rental->nama}}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{$rental->alamat}}</td>
					</tr>
					<tr>
						<td>Telp</td>
						<td>:</td>
						<td>{{$rental->telp}}</td>
					</tr>
					<tr>
						<td>Jml_Mobil</td>
						<td>:</td>
						<td>{{$rental->jml_mobil}}</td>
					</tr>
					<tr>
						<td>created_at</td>
						<td>:</td>
						<td>{{$rental->created_at}}</td>
					</tr>
					<tr>
						<td>updated_at</td>
						<td>:</td>
						<td>{{$rental->updated_at}}</td>

					</tr>
				</table>
				</div>
				</div>

			</div>

		</div>

	</div>

</div>
@endsection
