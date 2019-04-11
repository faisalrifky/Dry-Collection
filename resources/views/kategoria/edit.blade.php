<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row" >
    <div class="container">
        <div class="col-md-9">
            <div class="panel panel-primary">
                </div><div class="panel-heading"><h1>Edit Kategori</h1>
                </div>
              </div>
                    <a class="btn btn-Outline-primary" href="{{ route('kategoriartikel.index') }}">
                    <i class="material-icons">Kembali</i><span></span></a>
              <br>
              <div class="panel-body">
                <form action="{{ route('kategoriartikel.update',$kategoria->id) }}" method="post" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                     <div class="form-group {{ $errors->has('nama_kategori') ? ' has-error' : '' }}">
                        <label class="control-label">Kategori</label>  
                        <input type="text" name="nama_kategori" value="{{ $kategoria->nama_kategori }}" class="form-control"  required>
                        @if ($errors->has('nama_kategori'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kategori') }}</strong>
                            </span>
                        @endif
                      </div>
                          
                    <div class="form-group">
                      <button type="submit" class="btn btn-Outline-primary">
                          <i class="material-icons">simpan</i><span></span></button>
                          <button type="reset" class="btn btn-outline-danger">
                          <i class="material-icons">loop</i><span></span></button>
                    </div>
                </form>
              </div>
            </div>  
        </div>
    </div>
</div>
@endsection