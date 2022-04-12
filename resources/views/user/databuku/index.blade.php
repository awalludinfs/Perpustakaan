@extends('user.navbar.main')

@section('judul','Data Buku |Perpustakaan')

@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h3 class="mt-3 text-dark">DATA BUKU</h3>
            <form action="/databuku" method="post">
            @csrf
                <table class="table table-bordered table-success table-success"> 
                    <thead>
                        <tr>
                            <td scope="col">No</td>
                            <td scope="col">Cover</td>
                            <td scope="col">Nama Buku</td>
                            <td scope="col">jenis buku</td>
                            <td scope="col">jumlah Buku</td>
                            <td scope="col">Status</td>
                            <td scope="col">Action</td>
                        </tr> 
                    </thead>
                    <tbody class="table-light">
                        @foreach ($Databukus as $data)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$data->gambar}}</td>
                            <td>{{$data->nama_buku}}</td>
                            <td>{{$data->jenis_buku}}</td>
                            <td>{{$data->jumlah_buku}}</td>
                            <td><label for="status" class="btn btn-success">{{$data->status}}</label></td>
                            <td>
                                <a href="/detailbuku" class="btn btn-sm btn-info">Detail</a>
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