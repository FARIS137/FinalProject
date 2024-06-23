@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Check Pembayaran</h1>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      @if(!empty($ps->foto))
      <img src="{{url('admin/image')}}/{{$ps->foto}}" alt="">
      @endif
    
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <a href="{{asset("admin/pemesanan")}}"  class="btn btn-primary">Kembali</a>
    </div>
  </div>


@endsection