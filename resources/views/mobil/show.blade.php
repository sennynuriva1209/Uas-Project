@extends('layouts.admin')
@section('content')
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
				<div class="panel-heading">Create Mobil</div>
				<div class="panel-body">
				<table>
					<tr>
						<td>ID</td>
						<td>:</td>
						<td>{{$mobil->id}}</td>
					</tr>
					<tr>
						<td>Kode_mobil</td>
						<td>:</td>
						<td>{{$mobil->kode_mobil}}</td>
					</tr>
					<tr>
						<td>Merk</td>
						<td>:</td>
						<td>{{$mobil->merk}}</td>
					</tr>
					<tr>
						<td>Thn_Buat</td>
						<td>:</td>
						<td>{{$mobil->thn_buat}}</td>
					</tr>
					<tr>
						<td>Model</td>
						<td>:</td>
						<td>{{$mobil->model}}</td>
					</tr>
					<tr>
						<td>created_at</td>
						<td>:</td>
						<td>{{$mobil->created_at}}</td>
					</tr>
					<tr>
						<td>updated_at</td>
						<td>:</td>
						<td>{{$mobil->updated_at}}</td>
					</tr>
				</table>
				</div>
				</div>

			</div>

		</div>

	</div>
@endsection
