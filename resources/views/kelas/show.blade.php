<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Detail</title>
</head>
<body>
    <h1>Detail Kelas</h1>
    {{--Nama Siswa--}}
    <h6 data-label="Nama">{{$datakelas->name}}</h6>
    {{--Nisn Siswa--}}
    <h6 data-label="Description">{{$datakelas->description}}</h6>
    <br>
        <a href="/clas">Kembali</a>
</body>
</html>
