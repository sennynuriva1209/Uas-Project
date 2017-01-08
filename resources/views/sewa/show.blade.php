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
				<div class="panel-heading">Create Sewa</div>
				<div class="panel-body">
				<table>
					<tr>
						<td>ID</td>
						<td>:</td>
						<td>{{$sewa->id}}</td>
					</tr>
					<tr>
						<td>No_Sewa</td>
						<td>:</td>
						<td>{{$sewa->no_sewa}}</td>
					</tr>
					<tr>
						<td>Jenis_Mobil</td>
						<td>:</td>
						<td>{{$sewa->Jenis_mobil}}</td>
					</tr>
					<tr>
						<td>Tgl_Sewa</td>
						<td>:</td>
						<td>{{$sewa->tgl_sewa}}</td>
					</tr>
					<tr>
						<td>Tgl_Kembali</td>
						<td>:</td>
						<td>{{$sewa->tgl_kembali}}</td>
					</tr>
					<tr>
						<td>Biaya</td>
						<td>:</td>
						<td>{{$sewa->biaya}}</td>
					</tr>
					<tr>
						<td>created_at</td>
						<td>:</td>
						<td>{{$sewa->created_at}}</td>
					</tr>
					<tr>
						<td>updated_at</td>
						<td>:</td>
						<td>{{$sewa->updated_at}}</td>

					</tr>
				</table>
				</div>
				</div>

			</div>

		</div>

	</div>

</div>
@endsection
