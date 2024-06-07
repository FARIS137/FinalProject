@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Input Layanan</h1><br>
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form method="POST" action="{{route('layanan.store')}}"
enctype="multipart/form-data">
@csrf
<div class="form-group row">
  <label for="jenis_layanan" class="col-4 col-form-label">Jenis Layanan</label>
  <div class="col-8">
    <input id="jenis_layana" name="jenis_layanan" type="text" class="form-control">
  </div>
</div>

<div class="form-group row">
  <label for="harga" class="col-4 col-form-label">Harga</label>
  <div class="col-8">
    <input id="harga" name="harga" type="text" class="form-control"
           value="{{ old('harga') ?? '' }}">
  </div>
</div>

<script>
function updateHarga(layanan, harga) {
  document.getElementById('harga').value = harga;
}
</script>

<div class="form-group row">
  <label for="text1" class="col-4 col-form-label">Deskripsi</label> 
  <div class="col-8">
    <input id="text1" name="deskripsi" type="text" 
    class="form-control  @error('deskripsi') is-invalid @enderror" >
    @error('deskripsi')
    <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror
  </div>
</div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection