@extends('admin.navbar.main')

@section('judul','Data User| perpustakaan')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Data user</h1>
            <a class="btn btn-success" href="/tambahdatauser">Tambah Data</a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            <table class="table table-bordered table-info">
                        <tr>
                            <td scope="col">No</td>
                            <td scope="col">Button</td>
                            <td scope="col">Nama</td>
                            <td scope="col">Email</td>
                            <td scope="col">status</td>
                            <td scope="col">Action</td>
                        </tr>
                <tbody class="table-light">
                    @foreach ($User as $user)    
                    <tr>
                        <tr>
                             <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                 @if( $user->status == 1)
                                     <a href="{{ url ('datauseradmin/status/'.$user->id )}}" class="btn btn-sm btn-danger">Non-Aktifkan</a>
                                 @else
                                    <a href="{{ url ('datauseradmin/status/'.$user  ->id )}}" class="btn btn-sm btn-success">Aktifkan</a>    
                                 @endif
                                </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><label class="btn {{ ($user->status == 1) ? 'btn-success' : 'btn-danger'}}">{{ ($user->status == 1) ? 'aktive' : ' nonaktif' }}</label></td>
                        <td class="btn-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datauseradmin.destroy',$user->id) }}" method="POST">
                                    <a href="{{ route('datamemberadmin.edit',$user->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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