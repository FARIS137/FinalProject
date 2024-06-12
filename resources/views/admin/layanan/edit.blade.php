@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Edit Layanan</h1>

<form method="POST" action="{{ route('layanan.update', $la->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group row">
  <label for="jenis_layanan" class="col-4 col-form-label">Jenis Layanan</label>
  <div class="col-8">
    <select name="jenis_layanan" class="form-control" onchange="updateHarga(this)">
      <option value="">Pilih Jenis Layanan</option>
      @foreach($services as $service)
        <option value="{{ $service->jenis_layanan }}" data-harga="{{ $service->harga }}" @if($la->jenis_layanan === $service->jenis_layanan) selected @endif>
          {{ $service->jenis_layanan }}
        </option>
      @endforeach
    </select>
  </div>
</div>

<div class="form-group row">
  <label for="harga" class="col-4 col-form-label">Harga</label>
  <div class="col-8">
    <input id="harga" name="harga" type="text" class="form-control" value="{{ $la->harga }}">
  </div>
</div>

<script>
function updateHarga(select) {
  var harga = select.options[select.selectedIndex].getAttribute('data-harga');
  document.getElementById('harga').value = harga;
}
</script>

<div class="form-group row">
  <label for="text1" class="col-4 col-form-label">Deskripsi</label> 
  <div class="col-8">
    <input id="text1" name="deskripsi" type="text" class="form-control" value="{{ $la->deskripsi }}">
  </div>
</div>

<div class="form-group row">
  <div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form>

@endsection
