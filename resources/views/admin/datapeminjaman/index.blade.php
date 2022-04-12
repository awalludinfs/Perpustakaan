@extends('admin.navbar.main')

@section('judul','Data Peminjaman |Perpustakaan')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Data Peminjaman Buku</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <a class="btn btn-success" href="/tambahdatapinjam">Tambah Data</a>
            <table class="table table-bordered table-primary">
                <thead>
                    <tr>
                        <td scope="col">No</td>
                        <td scope="col">Nama</td>
                        <td scope="col">Nisn</td>
                        <td scope="col">kelas</td>
                        <td scope="col">Email</td>
                        <td scope="col">Nama Buku</td>
                        <td scope="col">tanggal Peminjaman</td>
                        <td scope="col">tanggal Pengembalian</td>
                        <td scope="col">Denda</td>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($Peminjamas as $pinjam) 
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$pinjam->nama}}</td>
                        <td>{{$pinjam->nisn}}</td>
                        <td>{{$pinjam->kelas}}</td>
                        <td>{{$pinjam->email}}</td>
                        <td>{{$pinjam->nama_buku}}</td>
                        <td>{{$pinjam->tanggal_pinjam}}</td>
                        <td>{{$pinjam->tanggal_kembali}}</td>
                        <td>{{$pinjam->denda}}</td>
                        <td class="btn-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datapeminjamanadmin.destroy',$pinjam->id) }}" method="POST">
                                    <a href="{{ route('datapeminjamanadmin.edit',$pinjam->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection