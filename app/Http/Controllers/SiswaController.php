<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel profile
        $siswa = DB::table('siswa')->get();



        $title = 'peringatan !';
        $text = "Apakah anda sudah mengembalikan buku?";
        $icon = "Question";
        confirmDelete($title, $text);

        //mengirim data profile ke view index
        return view('siswa.indexsiswa', compact('siswa'));
    }
    
    public function tambahsiswa()
    {
        return view('siswa.tambahsiswa');
    }

    public function siswa(Request $request){

        $request->validate([
            'nama' => 'required|',
            'kelas' => 'required|',
            'kodebuku' => 'required|',
            'namabuku' => 'required|',
            'tgl' => 'required|date',
        ]);
        $tanggal = $request->input('tgl');

        DB::table('siswa')-> insert([
            'nama_siswa' => $request->nama,
            'kelas_siswa' => $request->kelas,
            'kode_buku' => $request->kodebuku,
            'nama_buku' => $request->namabuku,
            'tgl_pengembalian' => $tanggal,
        ]);

        Alert::success('Berhasil', 'Data Anda Sudah Tersimpan! :)');

        return redirect('/siswa'); 
    }

    public function show($id){
        $siswa = DB::table('siswa')->find($id);
        return view('siswa.detailsiswa', compact('siswa'));
    }

    public function edit($id) {
        $siswa = DB::table('siswa')->find($id);
        return view('siswa.editsiswa', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|',
            'kelas' => 'required|',
            'kodebuku' => 'required|',
            'namabuku' => 'required|',
            'tgl' => 'required|date',
        ]);
        $tanggal = $request->input('tgl');

        $request = DB::table('siswa')
            ->where('id', $id)
            ->update([ //kolom yang mau diambil
                'nama_siswa' => $request->nama,
                'kelas_siswa' => $request->kelas,
                'kode_buku' => $request->kodebuku,
                'nama_buku' => $request->namabuku,
                'tgl_pengembalian' => $tanggal,
            ]);

        Alert::success('Success', 'Data Berhasil di Update');
        return redirect('/siswa');
    }
    
    public function destroy($id) {
        $siswa = DB::table('siswa')->where('id', $id)->delete();
        Alert::success('Success', 'Buku sudah dikembalikan');
        return redirect('/siswa');
    }
}
