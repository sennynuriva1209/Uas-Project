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
				<div class="panel-heading">Create Customer</div>
				<div class="panel-body">
				<table>
					<tr>
						<td>ID</td>
						<td>:</td>
						<td>{{$customer->id}}</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{$customer->nama}}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{$customer->alamat}}</td>
					</tr>
					<tr>
						<td>Telp</td>
						<td>:</td>
						<td>{{$customer->telp}}</td>
					</tr>

					<tr>
						<td>created_at</td>
						<td>:</td>
						<td>{{$customer->created_at}}</td>
					</tr>
					<tr>
						<td>updated_at</td>
						<td>:</td>
						<td>{{$customer->updated_at}}</td>

					</tr>
				</table>
				</div>
				</div>

			</div>

		</div>

	</div>

</div>
@endsection
