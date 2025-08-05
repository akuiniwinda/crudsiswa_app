<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <p>Halaman Untuk menambah data siwa</p>
    <form action="/siswa/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Class Id</label>
            <br>
            <select name="kelas_id">
                @foreach ($clases as $clas)
                    <option value="{{$clas->id}}">{{$clas->name}}</option>
                @endforeach
            </select>
            <br>
            @error('kelas_id')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Nama</label>
            <br>
            <input type="text" name="name">
            <br>
            @error('name')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Nisn</label>
            <br>
            <input type="text" name="nisn">
            <br>
            @error('nisn')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat">
            <br>
            @error('alamat')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Email</label>
            <br>
            <input type="text" name="email">
            <br>
            @error('email')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Sandi</label>
            <br>
            <input type="password" name="password">
            <br>
            @error('password')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Nomor Telepon</label>
            <br>
            <input type="tel" name="no_handphone">
            <br>
            @error('no_handphone')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Foto</label>
            <br>
            <input type="file" name="photo">
            <br>
            @error('photo')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <button type="submit">Simpan</button>
        </div>
        <br>
        <div>
            <a href="/">Kembali</a>
        </div>
    </form>
</body>
</html>
