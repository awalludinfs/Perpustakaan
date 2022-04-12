@extends('admin.navbar.main')

@section('judul','Tambah Data Buku | Perpustakaan')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Tambah Buku</h1>
            <form action="{{route('tdatabuku')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="buku_id" class="form-label text-dark">ID Buku</label>
                    <input type="text" name="buku_id" class="form-control" id="buku_id" placeholder="Isi Id buku" required>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label text-dark">Cover</label>
                    <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Upload Gambar" required>
                </div>
                <div class="mb-3">
                    <label for="nama_buku" class="form-label text-dark">Nama Buku</label>
                    <input type="text" name="nama_buku" class="form-control" id="nama_buku" placeholder="Masukaan Nama Buku" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_buku" class="form-label text-dark">Jenis Buku</label>
                    <input type="text" name="jenis_buku" class="form-control" id="jenis_buku" placeholder="Masukaan Jenis Buku" required>
                </div>
                <div class="mb-3">
                    <label for="Penulis_buku" class="form-label text-dark">Nama Penulis</label>
                    <input type="text" name="penulis_buku" class="form-control" id="penulis_buku" placeholder="Masukaan Nama Penulis Buku" required>
                </div>
                <div class="mb-3">
                    <label for="Penerbit_buku" class="form-label text-dark">Nama Penulis</label>
                    <input type="text" name="penerbit_buku" class="form-control" id="penerbit_buku" placeholder="Masukaan Nama Penerbit Buku" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah_buku" class="form-label text-dark">Jumlah Buku</label>
                    <input type="text" name="jumlah_buku" class="form-control" id="jumlah_buku" placeholder="Masukaan Jumlah Buku" required>
                </div>
                <input type="hidden" name="status" id="status" value="Enable">
                <Button class="btn btn-sm btn-success">Tambah</Button>
            </form>
        </div>
    </div>
</div>
@endsection