<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Siswa</title>
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
