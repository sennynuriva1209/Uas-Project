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
				<div class="panel-heading">Edit Mobil</div>
				<div  class="panel-body">
				<form action="{{route('mobil.update',$mobil->id)}}" method="POST" role="form">
					{{csrf_field()}}
					<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="name" value="{{$mobil->name}}">
					<input type="hidden" name="_method" value="put" >
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				</div>

			</div>

		</div>

	</div>

</div>
@endsection
