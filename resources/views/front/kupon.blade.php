<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cetak Kupon</title>
  </head>
  <body style="background: black">
    <div class="card" style="background: black; color: black;">
        <div class="card-header">
          <h2>Kupon Steam Mobil</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">Kode : {{$pemesanan->kode}}</h5>
          <p class="card-title">Tanggal Boking : {{$pemesanan->tanggal_awal_booking}}</p>
          <p class="card-title">Jam Boking     : {{$pemesanan->jam_awal_booking}}</p>
          <p class="card-title">Jenis Layanan     : {{$pemesanan->layanan_id}}</p>
          <p class="card-text">Jangan Disebarkan Informasi Kode Kupon ini,Agar Data Anda Tetap Aman</p>
        </div>
      </div>


      <script>
        function printAndRedirect() {
            window.print(); // Menampilkan dialog cetak
            setTimeout(function() {
                window.location.replace("histori"); // Mengarahkan ke halaman "histori" setelah penundaan
            }, 1000); // Penundaan 1 detik (1000 milidetik)
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = printAndRedirect;
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>