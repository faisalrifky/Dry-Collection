@extends('layouts.admin')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row m-t-30">
            <div class="col-md-12">
                <div class="m-b-10">
                    <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-outline-danger">
                        <i class="fa fa-pencil-square-o"></i>    
                        Tambah Data
                    </button>
                    
                </div>
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>kategori</th>
                                 <th colspan="3"><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                                @php $no =1; @endphp
                                @foreach($kategoria as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <center><td><a class="btn btn-outline-success" href="{{ route('kategoriartikel.edit',$data->id) }}">
    <i class="material-icons">create</i><span></span></a></td></center>
    <td>
    <form method="post" action="{{ route('kategoriartikel.destroy',$data->id) }}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">

        <button type="submit" class="btn btn-outline-danger">
        <i class="material-icons">Delete</i><span></span></a>
    </form>
</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
        
    </div>
</div>
@include('kategoria.create')

@endsection
