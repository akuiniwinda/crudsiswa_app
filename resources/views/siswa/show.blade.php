<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Detail Siswa</title>
</head>
<body>
    <h1>Detail Siswa</h1>
    {{--Profile Siswa--}}
    <img width="70" src="{{asset('storage/'.$datauser->photo)}}" alt="">
    {{--Nama Siswa--}}
    <h6>{{$datauser->name}}</h6>
    {{--Nisn Siswa--}}
    <h6>{{$datauser->nisn}}</h6>
    {{--Alamat Siswa--}}
    <h6>{{$datauser->alamat}}</h6>
    {{--Email Siswa--}}
    <h6>{{$datauser->email}}</h6>
    {{--No Handphone Siswa--}}
    <h6>{{$datauser->no_handphone}}</h6>
</body>
</html>
