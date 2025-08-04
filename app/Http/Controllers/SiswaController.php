<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //fungsi untuk mengarahkan ke halaman index siswa
    public function index(){
        return view('siswa.index');
    }

    //fungsi untuk mengarahkan ke halaman create
    public function create(){
        return view('siswa.create');
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
            'no_handphone'=> 'required | unique:users,no_handphone'
        ]);

        //siapkan data yang mau dimasukan
        $datasiswa_store = [
            'clas_id'       => $request->kelas_id,
            'photo'         => 'poto.jpg',
            'name'          => $request->name,
            'nisn'          => $request->nisn,
            'alamat'        => $request->alamat,
            'email'         => $request->email,
            'password'      => $request->password,
            'no_handphone'  => $request->no_handphone
        ];

        //masukan data ke dalam tabel user
        User::create($datasiswa_store);

        //arahkan user ke halaman beranda
        return redirect('/');
    }
}
