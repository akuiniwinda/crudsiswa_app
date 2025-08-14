<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kelas</title>
</head>
<body>
    <h1>Edit Data Kelas</h1>
    <p>Halaman Untuk mengedit data kelas</p>
    <form action="/clas/update/{{$datakelas->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Nama</label>
            <br>
            <input type="text" name="name" value="{{$datakelas->name}}">
            <br>
            @error('name')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Deskripsi</label>
            <br>
            <input type="text" name="description" value="{{$datakelas->description}}"><br>
            @error('description')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
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
</html>
