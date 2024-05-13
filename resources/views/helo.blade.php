<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hello</title>
</head>
<body>
    <h1>hello ini adalah file pertama laravel saya</h1>
    @php
    $nama = 'Budi';
    $nilai = 80.00;
    @endphp
    {{-- struktur kendali if --}}
    @if ($nilai >= 60)
    @php $ket = "lulus"; @endphp
    @else
    @php $ket = "tidak lulus"; @endphp
    @endif

    {{--memanggil variabel  di dalam laravel mengguankan kurung kurawal --}}
    {{$nama}} <p> Dengan nilai ,</p> {{$nilai}} <p> Dinyatakan </p> {{$ket}}

</body>
</html>