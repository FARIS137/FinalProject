@extends('front.layout.app')
@section('content')

<link rel="stylesheet" href="{{ asset('front') }}/css/pembayaran.css">

<div class="pembayaran-container">
    <div class="metode-pembayaran">
        <!-- Konten metode pembayaran -->
        <div class="payment-methods">
            <h3>Pilih metode yang ingin digunakan</h3>
            <div class="method" data-method="bca">
                <label>
                    <input type="radio" name="metode_pembayaran" value="bca" checked>
                    BCA Virtual Account
                </label>
            </div>
            <div class="method" data-method="bri">
                <label>
                    <input type="radio" name="metode_pembayaran" value="bri">
                    BRI Virtual Account
                </label>
            </div>
            <div class="method" data-method="mandiri">
                <label>
                    <input type="radio" name="metode_pembayaran" value="mandiri">
                    Mandiri Virtual Account
                </label>
            </div>
            <div class="method" data-method="wallet">
                <label>
                    <input type="radio" name="metode_pembayaran" value="wallet">
                    E-Wallet
                </label>
            </div>
            <div class="method" data-method="qris">
                <label>
                    <input type="radio" name="metode_pembayaran" value="qris">
                    QRIS
                </label>
            </div>
        </div>
        <form action="{{ asset('post-method') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $pemesanan->id }}">
            <input type="hidden" name="method" class="bitlab-input-method" value="qris">
            <button type="submit" class="btn-konfirmasi" id="btn-konfirmasi">Konfirmasi</button>
        </form>
    </div>
    <div class="rincian-tiket">
        <div class="judul-tiket">
            <h3>Rincian Steam</h3>
        </div>
        <div class="detail-tiket">
            <p>No. pesanan: {{ $pemesanan->id }}</p>
            <p>Nama: {{ $pemesanan->customer_name }}</p>
            <p>Jenis Layanan: {{ $pemesanan->layanan_id }}</p>
            <p>Tanggal Booking: {{ $pemesanan->tanggal_awal_booking }}</p>
            <p>Jam Booking: {{ $pemesanan->jam_awal_booking }}</p>
            <p>Jenis Mobil: {{ $pemesanan->jenis_mobil }}</p>
            <p>No. Plat: {{ $pemesanan->noplat_mobil }}</p>
            <p>Catatan: {{ $pemesanan->catatan }}</p>
            <hr>
            <p>Harga Layanan: {{ "Rp " . number_format($pemesanan->harga, 0, ',', '.') }}</p>
            
            @if($pemesanan->jenis_mobil == 'sport')
                <p>Biaya Tambahan (Sport): {{ "Rp " . number_format(30000, 0, ',', '.') }}</p>
            @endif
            <p>Total Harga: {{ "Rp " . number_format($pemesanan->total_harga, 0, ',', '.') }}</p>
        </div>
    </div>
</div>

<script src="{{ asset('front/js/pembayaran.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentMethods = document.querySelectorAll('input[name="metode_pembayaran"]');
        const hiddenMethodInput = document.querySelector('.bitlab-input-method');

        paymentMethods.forEach(method => {
            method.addEventListener('change', function() {
                hiddenMethodInput.value = this.value;
            });
        });
        
    });
</script>
@endsection
