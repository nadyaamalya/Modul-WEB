@extends('layouts.admin')

@section('judul')
  
@endsection

@section('content')
<div class="p-3">
    <h2>Edit Data Profile Siswa {{$siswa->id}} </h2>
        <form action="/siswa/{{$siswa->id}}" method="POST">
            @csrf
           @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" name="nama" value="{{$siswa->nama_siswa}}" id="nama" placeholder="Masukkan Nama Lengkap">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas_siswa}}" id="kelas_siswa" placeholder="Masukkan Kelas">
                @error('kelas')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="number">Kode Buku</label>
                <input type="number" class="form-control" name="kodebuku" value="{{$siswa->kode_buku}}" id="kode_buku" placeholder="Masukkan Alamat">
                @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Nama Buku</label>
                <input type="text" name="namabuku" class="form-control" value="{{ $siswa->nama_buku }}" id="nama_buku" placeholder="Masukkan Nama buku">
                    @error('nohp')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                <label>Tanggal Pengembalian</label>
                <input type="date" name="tgl" class="form-control" value="{{ $siswa->tgl_pengembalian }}" id="tgl_pengembalian">
                        @error('tgl')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="d-flex" style="margin-bottom: 80px; gap:29px;">
                <a href="/siswa" class="btn btn-success">Kembali</a>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
</div>

 
@endsection