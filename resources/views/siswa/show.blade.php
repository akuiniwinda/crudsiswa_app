<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Detail Siswa</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        max-width: 600px;
        margin: 0 auto;
        padding: 30px;
        background-color: #f8f9fa;
        color: #343a40;
        line-height: 1.6;
    }

    h1 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eaeaea;
    }

    img {
        display: block;
        margin: 0 auto 20px;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #fff;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    h6 {
        background-color: white;
        padding: 15px;
        margin: 10px 0;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        font-size: 16px;
        font-weight: normal;
        display: flex;
    }

    h6::before {
        content: attr(data-label);
        font-weight: bold;
        color: #6c757d;
        min-width: 150px;
        display: inline-block;
    }

    @media (max-width: 768px) {
        body {
            padding: 20px;
        }

        h6 {
            flex-direction: column;
        }

        h6::before {
            margin-bottom: 5px;
        }
    }
</style>
</head>
<body>
    <h1>Detail Siswa</h1>
    {{--Profile Siswa--}}
    <img width="70" src="{{asset('storage/'.$datauser->photo)}}" alt="">
    {{--Nama Siswa--}}
    <h6 data-label="Nama">{{$datauser->name}}</h6>
    {{--Nisn Siswa--}}
    <h6 data-label="NISN">{{$datauser->nisn}}</h6>
    {{--Alamat Siswa--}}
    <h6 data-label="Alamat">{{$datauser->alamat}}</h6>
    {{--Email Siswa--}}
    <h6 data-label="Email">{{$datauser->email}}</h6>
    {{--No Handphone Siswa--}}
    <h6 data-label="No. HP">{{$datauser->no_handphone}}</h6>
</body>
</html>
