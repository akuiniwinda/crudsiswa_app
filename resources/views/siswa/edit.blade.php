<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
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
        margin-bottom: 30px;
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

    form {
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #495057;
    }

    input[type="text"],
    input[type="password"],
    input[type="tel"],
    input[type="file"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input:focus,
    select:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    button[type="submit"] {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
        background-color: #2980b9;
    }

    a {
        display: inline-block;
        padding: 8px 16px;
        background-color: #f39c12;
        color: white;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #e67e22;
    }

    small {
        font-size: 14px;
    }

    small[style="color:red"] {
        display: block;
        margin-top: 5px;
    }

    @media (max-width: 600px) {
        body {
            padding: 10px;
        }

        form {
            padding: 20px;
        }
    }
    </style>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <p>Halaman Untuk mengedit data siwa</p>
    <img width="250" src="{{asset('storage/'.$datauser->photo)}}" alt="">
    <form action="/siswa/update/{{$datauser->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Class Id</label>
            <br>
            <select name="kelas_id">
                @foreach ($clases as $clas)
                    <option {{$clas->id== $datauser->clas_id ? 'selected' : ''}} value="{{$clas->id}}" >{{$clas->name}}</option>
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
            <input type="text" name="name" value="{{$datauser->name}}">
            <br>
            @error('name')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Nisn</label>
            <br>
            <input type="text" name="nisn" value="{{$datauser->nisn}}"><br>
            @error('nisn')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat" value="{{$datauser->alamat}}"><br>
            @error('alamat')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Email</label>
            <br>
            <input type="text" name="email" value="{{$datauser->email}}"><br>
            @error('email')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Sandi</label>
            <br>
            <input type="password" name="password"><br>
            <small style="color:red">masukan password jika ingin diubah</small><br>
            @error('password')
	            <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label>Nomor Telepon</label>
            <br>
            <input type="tel" name="no_handphone" value="{{$datauser->no_handphone}}"><br>
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
