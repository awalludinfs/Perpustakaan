@extends('user.navbar.main')

@section('judul','pinjam |Perpustakaan')
    
@section('halaman')
<div class="container-fluid ">
    <div class="row">
        <div class=col-8>
            <h3 class="mt-3 text-dark">Peminjaman</h3>
            <form action="{{route('pinjam')}}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="nama" class="from-label text-dark">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama anda" required>
                </div>
                <div class="mb-3">
                    <label for="nisn" class="from-label text-dark">NISN</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Masukkan nisn anda" required>
                    <small class="col-md-9 col-lg-2">Isi NISN anda dengan benar</small>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="from-label text-dark">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan kelas anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="from-label text-dark">email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email anda" required>
                </div>
                <div class="mb-3">
                    <label for="nama_buku" class="form-label text-dark">Nama buku</label>
                    <select name="nama_buku" id="nama_buku" class="form-control" required>
                        <option value="">===plih buku==</option>
                            @foreach ($Databukus as $data) 
                               <option value="{{$data->nama_buku}}">{{$data->nama_buku}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="mb-3">
                   <label for="tanggal_pinjam" class="form-label text-dark">Tanggal Pinjam</label>
                   <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" required>
                   <small class="col-md-9 col-lg-2">Silahkan Isi dengan Benar, peminjaman minimal 6hari</small>
                </div>
                <div class="mb-3">
                   <label for="tanggal_kembali" class="form-label text-dark">Tanggal Pinjam</label>
                   <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" required>
                   <small class="col-md-9 col-lg-2">Silahkan Isi Dengan Benar</small>
                </div>
                <input type="hidden" name="denda" id="denda" value="0">
                <button class="btn btn-sm btn-info" type="sumbit">Pinjam</button>
                <a  class="btn btn-sm btn-warning" href="/datapeminjaman" type="back">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection