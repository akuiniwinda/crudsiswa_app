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
    <form>
        <div>
            <label>Class Id</label>
            <br>
            <select name="kelas_id">
                <option value="">XII PPLG 1</option>
                <option value="">XII PPLG 2</option>
                <option value="">XII PPLG 3</option>
            </select>
        </div>
        <br>
        <div>
            <label>Nama</label>
            <br>
            <input type="text" name="name">
        </div>
        <br>
        <div>
            <label>Nisn</label>
            <br>
            <input type="text" name="nisn">
        </div>
        <br>
        <div>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat">
        </div>
        <br>
        <div>
            <label>Email</label>
            <br>
            <input type="text" name="email">
        </div>
        <br>
        <div>
            <label>Nomor Telepon</label>
            <br>
            <input type="text" name="no_handphone">
        </div>
        <br>
        <div>
            <label>Sandi</label>
            <br>
            <input type="password" name="password">
        </div>
        <br>
        <div>
            <label>Foto</label>
            <br>
            <input type="file" name="photo">
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
