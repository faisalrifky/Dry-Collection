@extends('layouts.admin')
@section('content')
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Barang
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('barang.update',$brg->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Barang</label>	
			  			<input type="text" name="nama_barang" value="{{ $brg->nama_barang }}" class="form-control"  required>
			  			@if ($errors->has('nama_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_barang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode Barang</label>	
			  			<input type="number" name="kode_barang" value="{{ $brg->kode_barang }}" class="form-control"  required>
			  			@if ($errors->has('kode_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_barang') }}</strong>
                            </span>
                        @endif
			  		</div>

					
			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="number" name="harga" value="{{ $brg->harga }}" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="modal-footer">
			  		</div>
			  		<form action="{{ route('barang.update',$brg->id) }}" class="form" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">

					<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label class="control-label">Gambar</label>	
			  			<input name="gambar" class="form-control" type="file" accept="/img">
			  			@if (isset($brg) && $brg->gambar)
			  			<p>
			  			<img src="{{asset('/assets/admin/dist/img/'.$brg->gambar.'')}}" style="max-height:125px; max-width:125px; margin-top: 7px;" alt="">
                          </p>
                        @endif
			  		</div>


			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">keterangan</label>	
						<textarea name="keterangan" class="ckeditor" rows = "10"   required>{{ $brg->keterangan }}</textarea>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
				  		</div>


			  			<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Barang</label>	
			  			<select name="kategori_id" class="form-control">
			  				@foreach($kat as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
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
