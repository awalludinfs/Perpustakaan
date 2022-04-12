@extends('admin.navbar.main')

@section('judul','Data Member Admin|Perpustakaan')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h3 class="mt-3 text-dark">Data Member</h3>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
            <a  class="btn btn-success" href="/tambahdata">Tambahdata</a>
            <form action="/datamembersadmin" method="post">
                @csrf
                <table class="table table-bordered table-primary">
                    <thead>
                        <tr>
                            <td scope="col">No</td>
                            <td scope="col">Nama</td>
                            <td scope="col">Nisn</td>
                            <td scope="col">Jurusan</td>
                            <td scope="col">action</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($Datamembers as $data)        
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->nisn}}</td>
                            <td>{{$data->kelas}}</td>
                            <td class="btn-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datamemberadmin.destroy',$data->id) }}" method="POST">
                                        <a href="{{ route('datamemberadmin.edit',$data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
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