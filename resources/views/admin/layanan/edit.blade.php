@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Input Layanan</h1>
<form method="POST" action="{{route('layanan.update', $ly->id)}}"
enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Jenis Layanan</label> 
    <div class="col-8">
      <input id="text" name="jenis_layanan" type="text" class="form-control" value="{{$ly->jenis_layanan}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <input id="text1" name="harga" type="text" class="form-control"  value="{{$ly->harga}}" >
    </div>
    </div>
    <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="text1" name="deskripsi" type="text" class="form-control"  value="{{$ly->deskripsi}}" >
    </div>
  </div>
  

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


@endsection