<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;

class ClasController extends Controller
{
    public function index(){

        $clases = Clas::all();

        return view('kelas.index', compact('clases'));
    }

    //fungsi untuk mengarahkan ke halaman create
    public function create(){
        //siapkan data atau panggil kelas
        $clases = Clas::all();
        return view('kelas.create', compact('clases'));
    }

    public function store(Request $request){
        //validasi data
        $request->validate([
            'name'             => 'required',
            'description'      => 'required',
        ]);

        $dataclas_store = [
            'name'                 => $request->name,
            'description'          => $request->description,
        ];

        //masukan data ke dalam tabel kelas
        Clas::create($dataclas_store);

        //arahkan user ke halaman menu kelas
        return redirect('/clas');
    }

    //fungsi untuk delete data kelas
    public function destroy($id){
        //cari data user di database berdasarkan id user di database ada tau tidak
        $dataclas = Clas::find($id);

        //cek apakah data kelas ada atu tidak
        if ($dataclas != null) {
            $dataclas->delete();
        }

        //kembalikan kelas ke halaman home atau beranda
        return redirect('/clas');
    }

    //untuk menampilkan view detail kelas
    public function show($id){
        //cari ke tabel kelas di database sesuai atau berdasarkan id kelas ada atau tidak
        $datakelas = Clas::find($id);

        //cek apakah datanya ada atau tidak
        if($datakelas == null){
            return redirect('/clas');
        }

        //kembalikan kelas ke halaman show dan kembalikan data user yang di ambil

        return view('kelas.show', compact('datakelas'));
    }

    public function edit($id){
        //siapkan data atau panggil kelas
        $clases = Clas::all();

        //amabil data user atau siswa di tabel user berdasar kan id
        $datakelas = Clas::find($id);

        //cek apakah datanya ada atau tidak
        if($datakelas == null){
            return redirect('/clas');
        }

        return view('kelas.edit', compact('clases', 'datakelas'));

    }

    public function update(Request $request, $id){
        //validasi data
        $request->validate([
            'name'             => 'required',
            'description'      => 'required',
        ]);

        //cari apakah ada user di tabel yang akan di update cari berdasarkan id
        $dataclas = Clas::find($id);

        //siapkan data yang akan disiampan sebagai update
        $dataclas_update = [
            'name'                 => $request->name,
            'description'          => $request->description,
        ];

        //simpan data ke dalam base dengan data yang terbaru sesuai update
        $dataclas->update($dataclas_update);

        //simpan data ke halaman beranda
        return redirect('/clas');
    }
}
