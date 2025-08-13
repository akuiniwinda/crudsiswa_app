<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Siswa</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 20px;
        background-color: #f5f5f5;
        color: #333;
    }

    h1 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 10px;
    }

    p {
        text-align: center;
        color: #7f8c8d;
        margin-top: 0;
        margin-bottom: 20px;
    }

    a {
        text-decoration: none;
        color: #3498db;
        transition: color 0.3s;
    }

    a:hover {
        color: #2980b9;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        background-color: white;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #3498db;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    img {
        border-radius: 4px;
        display: block;
        margin: 0 auto;
    }

    td a {
        margin-right: 10px;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 14px;
    }

    td a:nth-child(1) {
        background-color: #f39c12;
        color: white;
    }

    td a:nth-child(2) {
        background-color: #27ae60;
        color: white;
    }

    td a:nth-child(3) {
        background-color: #e74c3c;
        color: white;
    }

    td a:hover {
        opacity: 0.8;
    }

    a[href="/siswa/create"] {
        display: inline-block;
        padding: 10px 15px;
        background-color: #2ecc71;
        color: white;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    a[href="/siswa/create"]:hover {
        background-color: #27ae60;
    }
</style>
</head>
<body>
    <h1>Halaman Data Siswa</h1>
    <p>Data Siswa Jurusan PPLG</p>
    <a href="/siswa/create">Tambah data</a>
    <table border="1px" style="width:100% height:20%">
        <thead>
            <tr>
                <th>Poto</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td><img src="{{asset('storage/'.$siswa->photo)}}" alt="" align="center" width="100"></td>
                <td>{{$siswa->name}}</td>
                <td>{{$siswa->clas->name}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>
                    <a href="/siswa/edit/{{$siswa->id}}">Edit</a>
                    <a href="/siswa/show/{{$siswa->id}}">Detail</a>
                    <a onclick="return confirm('yang bener?')" href="/siswa/delete/{{$siswa->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
