@extends('layouts.admin')
@section('content')

<br>
<br>

	<div class="row">
	<div class="container">
	<div class="col-md-16">
	 <div class="panel panel-success">
			  <div class="panel-heading"><font color ="blue">Data Testimoni </font>
			  	<div class="panel-title pull-right"><a href="{{ route('testimoni.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"> <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-outline-primary">
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
			  		  <th>Foto</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($testimoni as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><img src="{{asset('/assets/admin/dist/img/'.$data->foto.'')}}" width="70"></td>
				    	
				
				    	
           
<td>
	<a class="btn btn-warning" href="{{ route('testimoni.edit',$data->id) }}">Edit</a>
</td>
<td>
	<form method="post" action="{{ route('testimoni.destroy',$data->id) }}">
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










