@extends('admin.navbar.main')

@section('judul','Edit Member|Perpustakaan')
    
@section('halaman')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Edit Member</h1>
            <form action="{{ url('datamemberadmin', $datamembers->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label  text-dark">Nama</label>
                    <input type="text" name="nama"  class="form-control" id="nama" value="{{old('nama',$datamembers->nama)}}" required>
                </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label text-dark">Nisn</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" value="{{old('nisn',$datamembers->nisn)}}" required>
                </div> 
                <div class="mb-3">
                    <label for="kelas" class="form-label text-dark">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" value="{{old('kelas',$datamembers->kelas)}}" required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label text-dark">jurusans</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{old('jurusan',$datamembers->jurusan)}}" required>
                </div>
                <div class="d-grip gap-2 d-md-block">
                    <button type="sumbit" class="btn btn-lg btn-info">Update</button>
                    <a  type="back" class="btn btn-lg btn-warning" href="/datamemberadmin">back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
