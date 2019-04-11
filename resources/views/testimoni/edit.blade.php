@extends('layouts.admin')
@section('content')
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data testimoni
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('testimoni.update',$testimoni->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

					<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">foto</label>	
			  			<input name="foto" class="form-control" type="file" accept="/img">
			  			@if (isset($testimoni) && $testimoni->foto)
			  			<p>
			  			<img src="{{asset('/assets/admin/dist/img/'.$testimoni->foto.'')}}" style="max-height:125px; max-width:125px; margin-top: 7px;" alt="">
                          </p>
                        @endif
			  		</div>


			  	
			  		<div class="form-group">
			  		<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
