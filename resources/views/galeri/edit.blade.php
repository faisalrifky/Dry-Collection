@extends('layouts.admin')
@section('content')
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Galeri
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			 
			  	

			  		<div class="modal-footer">
			  		</div>
			  		<form action="{{ route('galeri.update',$galeri->id) }}" class="form" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">

					<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Foto</label>	
			  			<input name="foto" class="form-control" type="file" accept="/img">
			  			@if (isset($galeri) && $galeri->foto)
			  			<p>
			  			<img src="{{asset('/assets/admin/dist/img/'.$galeri->foto.'')}}" style="max-height:125px; max-width:125px; margin-top: 7px;" alt="">
                          </p>
                        @endif
			  		</div>

>

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
