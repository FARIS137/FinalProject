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
                <h3>Upload Bukti Pembayaran</h3>
            </div>
            <form id="payment-form" action="{{ asset('post-bukti-pembayaran') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$pemesanan->id}}">
                <div class="detail-tiket">
                    <input type="file" name="bukti">
                </div>
                <button type="submit" class="btn-konfirmasi" id="btn-konfirmasi">Konfirmasi</button>
            </form>
            
        </div>
        <div class="rincian-harga-tiket">
            <h2>Detail Pembayaran</h2>
            <div class="timer">
                Yuk selesaikan pembayaran dalam <span id="timeLeft">02:00:00</span>
            </div>
            <p>Bayar Disini Rek: {{ $pemesanan->norek }}</p>
            @if($pemesanan->method == "bca")
                <p>Menggunakan: BCA Virtual Account</p>
            @elseif($pemesanan->method == "bri")
                <p>Menggunakan: BRI Virtual Account</p>
            @elseif($pemesanan->method == "mandiri")
                <p>Menggunakan: Mandiri Virtual Account</p>
            @elseif($pemesanan->method == "wallet")
                <p>Menggunakan: E-Wallet</p>
            @elseif($pemesanan->method == "qris")
                <p>Menggunakan: QRIS</p>
            @endif
            <div class="total-pembayaran">
                <p>Harga yang Anda bayar Rp. {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</p>
            </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let selectedMethod = 'BCA Virtual Account';
            let timeLeft = 7200; // 2 hours in seconds
            const timeDisplay = document.getElementById('timeLeft');
            const popupOverlay = document.getElementById('popup-overlay');
            const btnKonfirmasi = document.getElementById('btn-konfirmasi');
            const form = document.getElementById('payment-form');

            const formatTime = (seconds) => {
                const h = Math.floor(seconds / 3600);
                const m = Math.floor((seconds % 3600) / 60);
                const s = seconds % 60;
                return `${String(h).padStart(2, '0')}:${String(m).padStart(2, '0')}:${String(s).padStart(2, '0')}`;
            };

            const updateTimer = () => {
                if (timeLeft > 0) {
                    timeLeft -= 1;
                    timeDisplay.textContent = formatTime(timeLeft);
                }
            };

            setInterval(updateTimer, 1000);

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah pengiriman formulir secara langsung
                // Sembunyikan pop-up setelah 1 detik
                setTimeout(function() {
                    popupOverlay.style.display = 'block';
                }, 1000); // 1 detik
                
                // Kirim formulir setelah 2 detik
                setTimeout(function() {
                    form.submit(); // Kirim formulir
                }, 2000); // 2 detik
            });
        });
    </script>
</body>
</html>
