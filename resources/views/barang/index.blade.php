@extends('layouts.admin')
@section('content')

<br>
<br>

	<div class="row">
	<div class="container">
	<div class="col-md-16">
			  <div class="panel panel-success">
			  <div class="panel-heading"><font color ="blue">Data Barang / Produk </font>
			  	<div class="panel-title pull-right"><a href="{{ route('barang.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"> <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-outline-primary">
                        <i class="fa fa-pencil-square-o"></i>    
                        Tambah Data
                    </button>
                    </a>
                    
			  	</div>
				 </div>
				 <br>
				 <br>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <tr>
			  		  <th>No</th>
			  		  <th>Nama Barang</th>
					  <th>Kode Barang</th>
					  <th>Harga</th>
					  <th>Gambar</th>
					  <th>Keterangan</th>
					  <th>Kategori Barang</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($brg as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_barang }}</td>
				    	<td>{{ $data->kode_barang }}</td>
				    	<td>{{ $data->harga }}</td>
				    	<td><img src="{{asset('/assets/admin/dist/img/'.$data->gambar.'')}}" width="70"></td>
				    	<td>{!! str_limit($data->keterangan, 20) !!}</td>
				    	<td><p>{{ $data->Kategori->nama_kategori }}</p></td>
				
				    	
           
<td>
	<a class="btn btn-warning" href="{{ route('barang.edit',$data->id) }}">Edit</a>
</td>
<td>
</td>
<td>
	<form method="post" action="{{ route('barang.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection










