@extends('admin.navbar.main')

@section('judul','Data buku admin|Perpustakaan')

@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Data Buku</h1>
            @if (session('status'))
                <div class="alert alert-success"> 
                    {{session('status')}}
                </div>
            @endif
                <a class="btn btn-success" href="/tambahdatabuku">Tambah data</a>
            <form action="/databukuadmin" method="post">
                @csrf
                <table class="table table-bordered table-primary">
                    <thead>
                        <tr>
                            <td scope="col">NO</td>
                            <td scope="col">ID_buku</td>
                            <td scope="col">Cover</td>
                            <td scope="col">Nama Buku</td>
                            <td scope="col">Jenis Buku</td>
                            <td scope="col">status</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($Databukus as $data)      
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td><img src="{{$data->gambar}}" alt="" width="80px" height="80px"></td>
                            <td>{{$data->buku_id}}</td>
                            <td>{{$data->nama_buku}}</td>
                            <td>{{$data->jenis_buku}}</td>
                            <td><label for="status" class="btn btn-success">{{$data->status}}</label></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>            
        </div>
    </div>
</div>
@endsection