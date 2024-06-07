@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Input Pemesanan</h1>
<form method="POST" action="{{route('pemesanan.update', $ps->id)}}"
enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tanggal Booking</label> 
    <div class="col-8">
      <input id="text" name="tanggal_awal_booking" type="date" class="form-control" value="{{$ps->tanggal_awal_booking}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jam Booking</label> 
    <div class="col-8">
      <input id="text1" name="jam_awal_booking" type="time" class="form-control"  value="{{$ps->jam_awal_booking}}" >
    </div>
  </div>
    <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Catatan</label> 
    <div class="col-8">
      <input id="text1" name="catatan" type="text" class="form-control"  value="{{$ps->catatan}}" >
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Jenis Mobil</label> 
    <div class="col-8">
        
        @foreach ($jenis_mobil as $jm)
        @php 
        $cek = (old('jm') == $jm) ? 'checked': ''; @endphp
    <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_mobil" id="radio_0{{$jm}}" type="radio" 
        class="custom-control-input" value="{{$jm}}" {{$cek}}> 
        <label for="radio_0{{$jm}}" class="custom-control-label">{{$jm}}</label>
      </div>
      @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">No Plat Mobil</label> 
    <div class="col-8">
      <input id="text3" name="noplat_mobil" type="text" class="form-control"  value="{{$ps->noplat_mobil}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <input id="text4" name="customer_name" type="text" class="form-control"  value="{{$ps->customer_name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Layanan</label> 
    <div class="col-8">
      <select id="select" name="layanan_id" class="custom-select">
        @foreach($layanan as $l )
        <option value="{{$l->id}}">{{$l->jenis_layanan}}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="text5" name="foto" type="file" class="form-control"  value="{{$ps->foto}}">
      @if(!empty($ps->foto))
      <img src="{{url('admin/image')}}/{{$ps->foto}}" alt="">
      @endif
    
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


@endsection