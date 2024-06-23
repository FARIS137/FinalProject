<!DOCTYPE html>
<html>
<head>
    <title>Transaction Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: space-between;
        }
        .payment-methods, .ticket-details {
            width: 45%;
        }
        .payment-methods button {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            text-align: left;
            cursor: pointer;
        }
        .payment-methods button:hover {
            background-color: #e0e0e0;
        }
        .proceed-btn {
            margin-top: 20px;
            padding: 10px;
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
        }
        .timer {
            color: orange;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="payment-methods">
            <h3>Pilih metode yang ingin digunakan</h3>
            <div class="timer">Yuk selesaikan pembayaran dalam 01:59:16</div>
            
            <button class="proceed-btn">Lanjutkan</button>
        </div>
        <div class="ticket-details">
            <h3>Rincian Transaksi</h3>
            <p>No. pesanan: 01101121</p>
            <p>Nama : Muhammad Faris </p>
            <p>Jenis Layanan: Medium</p>
            <p>Tanggal booking : 12-02-2002</p>
            <p>Total Harga : 2000000</p>
            
        </div>
    </div>
</body>
</html>
