@extends('admin.navbar.main')

@section('judul','Data Petugas|perpustakaan')

@section('halaman')
<div class="conatiner-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Tambah Data</h1>
            <form action="{{route('tdatapetugas')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nip" class="form-label text-dark">Nip</label>
                    <input type="text" name="nip" class="form-control" id="nip" placeholder="Masukkan Nip Anda" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label text-dark">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                </div>
                <input type="hidden" name="statua" id="status" value="Enble">
                <button class="btn btn-sm btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection