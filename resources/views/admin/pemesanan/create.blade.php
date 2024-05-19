@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Input Pemesanan</h1>
<form method="POST" action="{{route('pemesanan.store')}}" enctype="multipart/form-data">
    @csrf

<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <input id="text" name="customer_name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Tanggal Booking</label> 
    <div class="col-8">
      <input id="text1" name="tanggal_awal_booking" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Jam Booking</label> 
    <div class="col-8">
      <input id="text3" name="jam_awal_booking" type="time" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Catatan</label> 
    <div class="col-8">
      <input id="text4" name="catatan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">No Plat Mobil</label> 
    <div class="col-8">
      <input id="text5" name="noplat_mobil" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Pilihan layanan</label> 
    <div class="col-8">
      <select id="select" name="layanan_id" class="custom-select">
        @foreach($layanan as $l)
        <option value="{{$l->id}}">{{$l->jenis_layanan}}</option>

       @endforeach  
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</form>
@endsection