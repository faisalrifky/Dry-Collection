@extends('layouts.admin')
@section('content')

<br>
<br>

	<div class="row">
	<div class="container">
	<div class="col-md-16">
			 <div class="panel panel-success">
			  <div class="panel-heading"><font color ="blue">Data Galeri </font>
			  	<div class="panel-title pull-right"><a href="{{ route('galeri.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus">Tambah</a></i>
			  	</div>
				 </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <tr>
			  		  <th>No</th>
			  		  <th>Foto</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($galeri as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><img src="{{asset('/assets/admin/dist/img/'.$data->foto.'')}}" width="70"></td>
				    	
				
				    	
           
<td>
	<a class="btn btn-warning" href="{{ route('galeri.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('galeri.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('galeri.destroy',$data->id) }}">
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










