<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Kelas</title>
</head>
<body>
    <h1>Tambah Data Kelas</h1>
    <p>Halaman Untuk menambah data kelas</p>
    <form action="/clas/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Nama kelas</label>
            <br>
            <input type="text" name="name">
            <br>
            @error('name')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Deskripsi Kelas</label>
            <br>
            <input type="text" name="description">
            <br>
            @error('description')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <button type="submit">Simpan</button>
        </div>
        <br>
        <div>
            <a href="/clas">Kembali</a>
        </div>
    </form>
</body>
</body>
</html>
