@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kategori Lowongan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			        <div class="form-group">
			  			<label class="control-label">Kategori Barang</label>	
			  			<input type="text" name="nama_kategori" class="form-control" value="{{ $kat->nama_kategori }}"  readonly>
			  		</div>
			  		 <div class="form-group">
			  			<label class="control-label">deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $kat->deskripsi }}"  readonly>
			  		</div>



@endsection