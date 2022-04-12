@extends('admin.navbaradmin.utama')

@section('judul','Detail Data (Admin)|Latihan7')

@section('halaman')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1 class="mt-3 text-dark">Detail Data User</h1>
            <table class="table table-bordered">  
                @foreach ($result as $result)
                <tbody>
                    <tr>
                        <td width="30%">Nama</td>
                        <td>{{$result->name}}</td>
                    </tr>
                    <tr>
                        <td width="30%">email</td>
                        <td>{{$result->email}}</td>
                    </tr>
                    <tr>
                        <td width="30%">password</td>
                        <td>{{$result->password}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Status</td>
                        <td>
                            <label class="btn {{ ($result->status == 1) ? 'btn-danger' : 'btn-success'}}">{{ ($result->status == 1) ? 'Tidak Aktif' : ' aktif' }}</label></td>
                            <td class="btn-center">
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">Created_at</td>
                        <td>{{ $result->created_at}}</td>
                    </tr>
                    <tr>
                            <td width="30%">Update_at</td>
                            <td>{{ $result->updated_at}}</td>
                        </tr>
                    </tbody>
                    <h3 class="mt-3 text-dark">File</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                            </tr>
                        </thead>   
                        <tbody>  
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td><img src="{{ $result->gambar}}" width="100px" height="100px"></td>
                                <td>{{ $result->judul }}</td>
                                <td>{{ $result->isi}}</td>
                            </tr> 
                        @endforeach  
                        </tbody>
            </table>
            <a href="/users" class="btn btn-warning" type="back">Back</a>
        </div>
    </div>
</div>
@endsection