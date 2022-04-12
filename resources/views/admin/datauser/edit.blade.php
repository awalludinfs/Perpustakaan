@extends('admin.navbar.main')

@section('judul','Edit Data|Perpustakaan')

@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-3 text-dark">Edit</h2>
            <form action="{{ url('datauseradmin', $user->id ) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="from-label text-dark">nama</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('datauseradmin',$user->name)}}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="from-label text-dark">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{old('datauseradmin',$user->email)}}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="from-label text-dark">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{old('datauseradmin',$user->password)}}" required>
                </div>
                <div class="d-grip gap-2 d-md-block">
                    <button class="btn btn-lg btn-primary" type="sumbit">Update</button>
                    <a href="#" class="btn btn-lg btn-warning" type="back">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection