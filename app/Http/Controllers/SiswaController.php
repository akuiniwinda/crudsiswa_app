<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    //untuk menambhakan setor data siswa
    public function store(Request $request){
        //validasi data
        $request->validate([
            'name'        => 'required',
            'nisn'        => 'required',
            'alamat'      => 'required',
            'email'       => 'required',
            'password'    => 'required',
            'no_handphone'=> 'required'
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
