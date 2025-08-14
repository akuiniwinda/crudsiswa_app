<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Kelas</title>
</head>
<body>
    <h1>Halaman Data Kelas</h1>
    <p>Data Kelas Jurusan PPLG</p>
    <a href="/clas/create">Tambah data</a>
    <table border="1px" style="width:100% height:20%">
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clases as $kelas)
                <tr>
                    <td>{{$kelas->name}}</td>
                    <td>{{$kelas->description}}</td>
                    <td>
                        <a href="/clas/edit/{{$kelas->id}}">Edit</a>
                        <a href="/clas/show/{{$kelas->id}}">Detail</a>
                        <a onclick="return confirm('yang bener?')" href="/clas/delete/{{$kelas->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/">Kembali ke menu siswa</a>
</body>
</html>
