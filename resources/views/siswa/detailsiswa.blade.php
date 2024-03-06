@extends('layouts.admin')

@section('judul')
Detail Profil Siswa 
@endsection

@section('content')
    <div class="p-3">
        <div class="card" style="width: 24rem;">
        <div class="card-body">
            <h5 class="card-title">Detail Data Profil Pelangggan ke {{$siswa->id}}</h5>
            <h4>{{$siswa->nama_siswa}}</h4>
            <h4>{{$siswa->kelas_siswa}}</h4>
            <h4>{{$siswa->kode_buku}}</h4>
            <h4>{{$siswa->nama_buku}}</h4>
            <h4>{{$siswa->tgl_pengembalian}}</h4>
        </div>
        </div>
        <a href="/siswa" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection