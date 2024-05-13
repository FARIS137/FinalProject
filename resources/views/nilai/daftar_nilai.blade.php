<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Nilai</title>
</head>
<body>
    <h2> ini adalah daftar nilai</h2>
    @php
    $no = 1;
    $s1 = ['nama'=> 'Fazar', 'nilai'=> 70];
    $s2 = ['nama'=> 'Rini', 'nilai'=> 90];
    $s3 = ['nama'=> 'dadang', 'nilai'=> 80];
    $s4 = ['nama'=> 'fauzi', 'nilai'=> 50];
    $s5 = ['nama'=> 'risma', 'nilai'=> 40];
    $judul = ['No','Nama','Nilai','Keterangan'];
    
    $siswa = [$s1,$s2,$s3,$s4,$s5];
    @endphp
    <table align="center" border="1" cellpadding="10">
        <thead>
        <tr>
            {{--foreach adalah sebuah perulangan--}}
            @foreach ($judul as $jdl)
            <th> {{$jdl}} </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
        @php
        $ket = ($s['nilai'] >= 60) ? 'Lulus' : 'Gagal';
        $warna = ($no % 2 == 1) ? 'Green' : 'Yellow';
        @endphp
        <tr bgcolor = "{{$warna}}">
            <td>{{$no++}} </td>
            <td>{{$s['nama']}} </td>
            <td>{{$s['nilai']}} </td>
            <td>{{$ket}} </td>
        </tr>
        @endforeach

    </tbody>
    </table>
</body>
</html>