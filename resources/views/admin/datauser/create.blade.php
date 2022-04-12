@extends('admin.navbar.main')

@section('judul','Tambah user|perpustakaan')

@section('halaman')
<div class="conatiner-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Tambah Data</h1>
            <form action="{{route('tdatauser')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label text-dark">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-dark">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password Anda" required>
                </div>
                <input type="hidden" name="status" id="status" value="1">
                <input type="hidden" name="role" id="role" value="2">
                <a  class="btn btn-sm btn-warning" href="/datauseradmin" type="back">back</a>
                <button class="btn btn-sm btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection