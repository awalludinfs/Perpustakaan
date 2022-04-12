@extends('user.navbar.main')

@section('judul','Data Pengembalian Buku |Perpustakaan')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h3 class="mt-3 text-dark">Data Peminjaman</h3>
                <form action="#" method="post">
                    @csrf
                    <table class="table table-bordered table-primary">
                        <thead>
                            <tr>
                                <td scope="col">NO</td>
                                <td scope="col">Nama</td>
                                <td scope="col">Nisn</td>
                                <td scope="col">Kelas</td>
                                <td scope="col">Tanggal Pinjam</td>
                                <td scope="col">Tanggal Kembali</td>
                                <td scope="col">Denda</td>
                                <td>Denda/hari</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            @foreach ($Peminjamas as $pinjam)
                            <tr>
                                <td scope="col">{{$loop->iteration}}</td>
                                <td>{{$pinjam->nama}}</td>
                                <td>{{$pinjam->nisn}}</td>
                                <td>{{$pinjam->kelas}}</td>
                                <td>{{$pinjam->nama_buku}}</td>
                                <td>{{$pinjam->tanggal_pinjam}}</td>
                                <td>{{$pinjam->tanggal_kembali}}</td>
                                <td>{{$pinjam->denda}}</td>
                                <td class="btn-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datakembali.destroy',$pinjam->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Kembalikan</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
        </div>
    </div>
</div>
@endsection