<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="{{asset('front')}}/css/pembayaran.css">
</head>
<body>
    <div class="pembayaran-container">
        <div class="metode-pembayaran">
            <div class="timer">
                Yuk selesaikan pembayaran dalam <span id="timeLeft">02:00:00</span>
            </div>
            <div class="payment-methods">
                <h3>Pilih metode yang ingin digunakan</h3>
                <div class="method selected" data-method="BCA Virtual Account">
                    <label>BCA Virtual Account</label>
                </div>
                <div class="method" data-method="BRI Virtual Account">
                    <label>BRI Virtual Account</label>
                </div>
                <div class="method" data-method="Mandiri Virtual Account">
                    <label>Mandiri Virtual Account</label>
                </div>
                <div class="method" data-method="E-Wallet">
                    <label>E-Wallet</label>
                </div>
                <div class="method" data-method="QRIS">
                    <label>QRIS</label>
                </div>
            </div>
            <a href="/konfirmasi" class="lanjutkan-button">Lanjutkan</a>
        </div>
        <div class="rincian-tiket">
            <div class="judul-tiket">
                <h3>Rincian Steam</h3>
            </div>
            <div class="detail-tiket">
                <p>No. pesanan: 00112</p>
                <p>Nama: Nicho</p>
                <p>Detail pesanan: Layanan Medium</p>
                <p>Tanggal Booking: 20 Juni 2024</p>
                <p>Jam Booking: 12:45 AM</p>
                <p>Jenis Mobil : Biasa</p>
                <p>NO plat : B 1234 KAA</p>
            </div>
            {{-- <div class="info-pribadi">
                <p>Nomor: 089XXXXX</p>
                <p>Email: nicho9@gmail.com</p>
            </div> --}}
        </div>
        {{-- <div class="popup-overlay" id="popup-overlay" style="display: none;">
            <div class="popup">
                <div class="centang-biru">
                    <img src="{{ asset('img/centangbiru.png') }}" alt="Logo" />
                </div>
                <h3>Pembayaran Berhasil</h3>
                <p>Terima kasih, pembayaran Anda telah berhasil.</p>
                <button id="closePopup">Tutup</button>
            </div>
        </div> --}}
    </div>
    <script src="{{asset('front')}}/js/pembayaran.js"></script>
</body>
</html>
