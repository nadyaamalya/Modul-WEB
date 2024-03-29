@extends('layouts.admin')

@section('judul', 'Tambah Profil Pelanggan')

@section('content')
    <form action="/pelanggan" method="POST">
        @csrf
        <div class="form-group p-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group p-3">
            <label>No Handphone</label>
            <input type="text" name="nohp" class="form-control" placeholder="Masukkan No Handphone">
                    @error('nohp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group p-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group p-3">
            <label>Tanggal</label>
            <input type="date" name="tgl" class="tgl">
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
        </div>

        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection