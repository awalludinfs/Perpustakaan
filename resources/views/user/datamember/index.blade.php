@extends('user.navbar.main')

@section('judul','Data Member|Perpustakaan')
    
@section('halaman')
<div class="container-fluid">
     <div class="row">
        <div class="col-8">
            <h3 class="mt-3 text-dark">Data Member</h3>
            <table class="table table-bordered table-primary">
                    <thead>
                        <tr>
                            <td scope="row">No</td>
                            <td scope="row">Nama</td>
                            <td scope="row">Nisn</td>
                            <td scope="row">Kelas</td>
                            <td scope="row">Jurusan</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($Datamembers as $data) 
                        <tr>
                            <td scope="col">{{$loop->iteration}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->nisn}}</td>
                            <td>{{$data->kelas}}</td>
                            <td>{{$data->jurusan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
     </div>
</div>
@endsection