<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="{{ asset('front/css/pembayaran.css') }}">
</head>
<body>
    <div class="pembayaran-container">
        <div class="rincian-tiket">
            <div class="judul-tiket">
                <h3>Rincian tiket</h3>
            </div>
            <div class="detail-tiket">
                <p>No. pesanan: 00112</p>
                <p>Detail pesanan: Tiket Pulau Pari</p>
                <p>Masa berlaku tiket: Rabu 20 Juni 2024</p>
                <p>Jumlah tamu: 1</p>
            </div>
            <div class="info-pribadi">
                <p>Nama: Nicho</p>
                <p>Nomor: 089XXXXX</p>
                <p>Email: nicho9@gmail.com</p>
            </div>
        </div>
        <div class="rincian-harga-tiket">
            <h2>Tiket Pulau Pari</h2>
            <p>Paket (1x) Rp. 350.000</p>
            <p>Asuransi Rp. 10.000</p>
            <p>Pemandu Spesialist Rp. 50.000</p>
            <p>Biaya Admin Rp. 6.500</p>
            <div class="total-pembayaran">
                <p>Harga yang Anda bayar Rp. 416.500</p>
            </div>
            <button class="btn-konfirmasi" id="btn-konfirmasi">Konfirmasi</button>
        </div>
        <div class="popup-overlay" id="popup-overlay" style="display: none;">
            <div class="popup">
                <div class="centang-biru">
                    <img src="{{asset('front')}}/assets/img/konfirmasi.png" alt="Centang Biru">
                </div>
                <h3>Pembayaran Berhasil</h3>
                <p>Terima kasih, pembayaran Anda telah berhasil.</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('front/js/pembayaran.js') }}"></script>
</body>
</html>
