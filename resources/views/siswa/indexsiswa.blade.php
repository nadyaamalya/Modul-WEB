@extends('layouts.admin')

@section('judul')
Data Siswa
@endsection

@section('tabel')
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<div class="p-3">
  <a href="/tambahsiswa" class="btn btn-primary my-3">Tambah Data</a>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Siswa</th>
        <th scope="col">Kelas</th>
        <th scope="col">Kode Buku</th>
        <th scope="col">Nama Buku</th>
        <th scope="col">Tanggal Pengembalian</th>
        <th scope="col">Aksi</th>
      </tr>
      </thead>


      <tbody>
        @forelse ($siswa as $key => $value)
        <tr>
          <th scope="row">{{ $key + 1 }}</th>
          <td>{{$value->nama_siswa}}</td>
          <td>{{$value->kelas_siswa}}</td>
          <td>{{$value->kode_buku}}</td>
          <td>{{$value->nama_buku}}</td>
          <td>{{$value->tgl_pengembalian}}</td>
          <td class="mr-3">
            <a href="/siswa/{{ $value->id }}" class="btn btn-info">Show </a>
            <a href="/siswa/{{ $value->id }}/edit" class="btn btn-primary">Edit </a>
            <a href="/siswa/{{ $value->id }}" class="btn btn-success" data-confirm-delete="true"><i class='bx bx-checkbox-checked' style="font-size:24px; padding-left:7px;padding-right:7px;" ></i></a>
          </td>
        </tr>
      {{-- tidak ada data --}}
      </tbody>
      @empty
      <tr colspan="6">
        <td>No data</td>
      </tr>
      @endforelse
    </table>
</div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>