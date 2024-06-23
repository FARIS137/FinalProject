@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Edit Transaksi</h1>

<form method="POST" action="{{route('transaksi.update',$tr->id)}}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tanggal Transaksi </label> 
    <div class="col-8">
      <input id="text" name="tanggal_transaksi" type="date" class="form-control" value="{{$tr->tanggal_transaksi}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Metode Pembayaran</label> 
    <div class="col-8">
      <select id="metode_pembayaran" name="metode_pembayaran" class="custom-select">
        @php
          $paymentMethods = ['kartu kredit', 'Transfer Bank', 'Tunai', 'E-Wallet'];
        @endphp
        @foreach($paymentMethods as $method)
          <option value="{{ $method }}" {{ $tr->metode_pembayaran == $method ? 'selected' : '' }}>{{ $method }}</option>
        @endforeach  
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Bukti Bayar</label> 
    <div class="col-8">
      <input id="text5" name="bukti_bayar" type="file" class="form-control" value="{{$tr->bukti_bayar}}">
      @if(!empty($tr->bukti_bayar))
      <img src="{{url('admin/image')}}/{{$tr->bukti_bayar}}" alt="">
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Total Biaya</label> 
    <div class="col-8">
      <input id="text3" name="total_biaya" type="text" class="form-control" value="{{$tr->total_biaya}}">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


@endsection