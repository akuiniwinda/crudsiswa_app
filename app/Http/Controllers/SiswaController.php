<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    //fungsi untuk mengarahkan ke halaman index siswa
    public function index(){
        //siapkan data atau panggil data siswa atau user
        $siswas = User::all();

        return view('siswa.index', compact('siswas'));
    }

    //fungsi untuk mengarahkan ke halaman create
    public function create(){
        //siapkan data atau panggil kelas
        $clases = Clas::all();
        return view('siswa.create', compact('clases'));
    }

    //untuk menambhakan setor data siswa
    public function store(Request $request){
        //validasi data
        $request->validate([
            'name'        => 'required',
            'nisn'        => 'required | unique:users,nisn',
            'alamat'      => 'required',
            'email'       => 'required | unique:users,email',
            'password'    => 'required',
            'no_handphone'=> 'required | unique:users,no_handphone',
            'photo'       => 'required |image|mimes:jpeg,png,jpg,gif'
        ]);

        //siapkan data yang mau dimasukan
        $datasiswa_store = [
            'clas_id'       => $request->kelas_id,
            'name'          => $request->name,
            'nisn'          => $request->nisn,
            'alamat'        => $request->alamat,
            'email'         => $request->email,
            'password'      => $request->password,
            'no_handphone'  => $request->no_handphone,
        ];

        //upload gambar
        $datasiswa_store['photo'] = $request->file('photo')->store('profilesiswa', 'public');

        //masukan data ke dalam tabel user
        User::create($datasiswa_store);

        //arahkan user ke halaman beranda
        return redirect('/');

    }

    //fungsi untuk delete data siswa
    public function destroy($id){
        //cari data user di database berdasarkan id user di database ada tau tidak
        $datasiswa = User::find($id);

        //cek apakah data user ada atu tidak
        if ($datasiswa != null) {
            Storage::disk('public')->delete($datasiswa->photo);
            $datasiswa->delete();
        }

        //kembalikan user ke halaman home atau beranda
        return redirect('/');
    }

    //untuk menampilkan view detail siswa
    public function show($id){
        //cari ke tabel user di database sesuai atau berdasarkan id user ada atau tidak
        $datauser = User::find($id);

        //cek apakah datanya ada atau tidak
        if($datauser == null){
            return redirect('/');
        }

        //kembalikan user ke halaman show dan kembalikan data user yang di ambil

        return view('siswa.show', compact('datauser'));
    }

    public function edit($id){
        //siapkan data atau panggil kelas
        $clases = Clas::all();

        //amabil data user atau siswa di tabel user berdasar kan id
        $datauser = User::find($id);

        //cek apakah datanya ada atau tidak
        if($datauser == null){
            return redirect('/');
        }

        return view('siswa.edit', compact('clases', 'datauser'));

    }

    //fungsi update data
    public function update(Request $request, $id){
        //validasi data
        $request->validate([
            'name'        => 'required',
            'nisn'        => 'required',
            'alamat'      => 'required',
            'email'       => 'required',
            'no_handphone'=> 'required',
        ]);

        //cari apakah ada user di tabel yang akan di update cari berdasarkan id
        $datasiswa = User::find($id);

        //siapkan data yang akan disiampan sebagai update
        $datasiswa_update = [
            'clas_id'       => $request->kelas_id,
            'name'          => $request->name,
            'nisn'          => $request->nisn,
            'alamat'        => $request->alamat,
            'email'         => $request->email,
            'no_handphone'  => $request->no_handphone,
        ];

        //cek apakah user update password apa tidak
        if ($request->password != null){
            $datasiswa_update['password'] = $request->password;
        }

        //
        if ($request->hasFile('photo')){
            //hapus file gambar sebelumnya
            Storage::disk('public')->delete($datasiswa->photo);

            //upload gambar
            $datasiswa_update['photo'] = $request->file('photo')->store('profilesiswa', 'public');
        }


        //simpan data ke dalam base dengan data yang terbaru sesuai update
        $datasiswa->update($datasiswa_update);

        //simpan data ke halaman beranda
        return redirect('/');
    }
}
