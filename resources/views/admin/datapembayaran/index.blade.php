@extends('admin.navbar.main')

@section('judul','Data Pembayaran |Perpustakaan')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Data Peminjaman Buku</h1>
            <a class="btn btn-success" href="/tambahdatapinjam">Tambah Data</a>
            <table class="table table-bordered table-primary">
                <thead>
                    <tr>
                        <td scope="col">No</td>
                        <td scope="col">Nama</td>
                        <td scope="col">kelas</td>
                        <td scope="col">Jurusan</td>
                        <td scope="col">Email</td>
                        <td scope="col">Nama Buku</td>
                        <td scope="col">tanggal Pengembalian</td>
                        <td scope="col">Denda</td>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($datapembayaran as $databayar) 
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$databayar->nama}}</td>
                        <td>{{$databayar->kelas}}</td>
                        <td>{{$databayar->email}}</td>
                        <td>{{$databayar->Jurusan}}</td>
                        <td>{{$databayar->nama_buku}}</td>
                        <td>{{$databayar->tanggal_kembali}}</td>
                        <td>{{$databayar->denda}}</td>
                        <td class="btn-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datapembayaran.destroy',$databayar->id) }}" method="POST">
                                    <a href="{{ route('datapembayaran.edit',$databayar->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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