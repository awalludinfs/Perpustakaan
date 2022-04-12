@extends('admin.navbar.main')

@section('judul','tambah data|perpustakaan')

@section('halaman')
<div class="conatiner-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Tambah Data</h1>
            <form action="{{route('tdatapeminjaman')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label text-dark">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label text-dark">Nisn</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Masukkan nisn Anda" required>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label text-dark">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkankelas Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="nama_buku" class="form-label text-dark">Nama buku</label>
                    <select name="nama_buku" id="nama_buku" class="form-control">
                        <option value="">==Pilih buku===</option>
                        @foreach ($Databukus as $data)
                            <option value="{{$data->nama_buku}}">{{$data->nama_buku}}</option>
                            @endforeach
                        </select>
                <div class="mb-3">
                    <label for="tanggal_pinjam" class="form-label text-dark">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" placeholder="Tanggal Pinjam" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label text-dark">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" placeholder="Tanggal_kembali" required>
                </div>
                <input type="hidden" name="denda" id="denda" value="0">
                <input type="hidden" name="statua" id="status" value="Enble">
                <button class="btn btn-sm btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection