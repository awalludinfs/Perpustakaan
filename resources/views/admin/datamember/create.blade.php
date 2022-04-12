@extends('admin.navbar.main')

@section('judul','Tambah data member')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark"></h1>
            <form action="{{route('tdata')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label text-dark">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukaan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label text-dark">Nisn</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Masukaan nisn Anda" required>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label text-dark">kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukaan kelas Anda" required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label text-dark">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukaan jurusan Anda" required>
                </div>
                <button class="btn btn-sm btn-info">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection