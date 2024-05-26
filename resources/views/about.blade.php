<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width,initial-scale=1.0">
        <meta
        http-equiv="X-UA-Compatible" content="id=edge">
        <title>Halaman About</title>
    </head>
    <body>
        <h1>Halaman About</h1>
        @php
    $nama = 'Ainisa Dinda';
    $nim = '0110223152';
    $pstudi = 'Teknik Informatika';
    $angkatan = '2023';
@endphp

@if ($nim == '0110223152')
    <h3>Selamat data, {{$nama}}! nim anda: {{$nim}} program studi: {{$pstudi}} angkatan {{$angkatan}}</h3>
@else
    <h3>selamat data, {{$nama}}!</h3>
@endif

    </body>
</html>