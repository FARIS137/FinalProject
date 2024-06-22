@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Input Transaksi</h1>
<form method="POST" action="{{route('transaksi.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
      <label for="pemesanan_id" class="col-4 col-form-label">Nama Pelanggan</label> 
      <div class="col-8">
        <input id="pemesanan_id" name="pemesanan_id" type="text" class="form-control">
      </div>
    </div>
  <div class="form-group row">
    <label for="tanggal_transaksi" class="col-4 col-form-label">Tanggal Transaksi</label> 
    <div class="col-8">
      <input id="tanggal_transaksi" name="tanggal_transaksi" type="date" class="form-control">
    </div>
  </div>
  
 
  <div class="form-group row">
    <label for="metode_pembayaran" class="col-4 col-form-label">Metode Pembayaran</label> 
    <div class="col-8">
      <select id="metode_pembayaran" name="metode_pembayaran" class="form-control">
        <option value="transfer_bank">Transfer Bank</option>
        <option value="ewallet">e-wallet</option>
        <option value="Kartu_kredit">kartu Kredit</option>
        <option value="tunai">Tunai</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="bukti_bayar" class="col-4 col-form-label">Bukti Bayar</label> 
    <div class="col-8">
      <input id="bukti_bayar" name="bukti_bayar" type="file" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="total_biaya" class="col-4 col-form-label">Total Biaya</label> 
    <div class="col-8">
      <input id="total_biaya" name="total_biaya" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endsection