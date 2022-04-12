@extends('admin.navbar.main')

@section('judul','Data Petugas | perpustakaan')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Data Petugas</h1>
            <a class="btn btn-success" href="/tambahdatapetugas">Tambah Data</a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            <table class="table table-bordered table-info">
                        <tr>
                            <td scope="col">No</td>
                            <td scope="col">Nip</td>
                            <td scope="col">Nama</td>
                            <td scope="col">Status</td>
                            <td scope="col">Action</td>
                        </tr>
                <tbody class="table-light">
                    @foreach ($datapetugass as $petugas)    
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$petugas->nip}}</td>
                        <td>{{$petugas->nama}}</td>
                        <td><label for="status" class="btn btn-success">{{$petugas->status}}</label></td>
                        <td class="btn-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datapetugasadmin.destroy',$petugas->id) }}" method="POST">
                                    <a href="{{ route('datapetugasadmin.edit',$petugas->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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