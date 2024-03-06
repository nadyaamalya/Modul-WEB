@extends('layouts.admin')

@section('judul', 'Booking buku untuk Siswa')

@section('content')
    <form action="/siswa" method="POST">
        @csrf
        <div class="form-group p-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group p-3">
            <label>Kelas siswa</label>
            <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas">
                    @error('jeniskelamin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group p-3">
            <label>Kode buku</label>
            <input type="number" name="kodebuku" class="form-control" placeholder="Masukkan Kode Buku">
                    @error('kelas')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group p-3">
            <label>Nama buku</label>
            <input type="text" name="namabuku" class="form-control" placeholder="Masukkan Nama buku">
                    @error('nohp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group p-3">
            <label>Tanggal Pengembalian</label>
            <input type="date" name="tgl" class="form-control">
                    @error('tgl')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>

        <div class="p-3" style="margin-bottom: 74px">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection