@extends('user.navbar.main')

@section('judul','Detail Data buku|Perpustakaan')

@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <h1 class="mt-3 text-dark">Detail Data User</h1>
            <table class="table table-bordered">  
                <tbody>
                    <tr>
                        <td width="30%">ID buku</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td width="30%">cover</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="30%">Nama buku</td>
                        <td>cloud computing</td>
                    </tr>
                    <tr>
                        <td width="30%">Jenis Buku</td>
                        <td>pendidikan</td>
                    </tr>
                    <tr>
                        <td width="30%">Jumalah Buku</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td width="30%">Penulis</td>
                        <td>awalludin</td>
                    </tr>
                    <tr>
                        <td width="30%">Penerbit</td>
                        <td>awalludin</td>
                    </tr>
                    <tr>
                        <td width="30%">Created_at</td>
                        <td>2022-02-17 07:55:43</td>
                    </tr>
                    <tr>
                        <td width="30%">Update_at</td>
                        <td>2022-02-17 07:55:43</td>
                    </tr>
                    </tbody>
            </table>
            <a href="/databuku" class="btn btn-warning" type="back">Back</a>
        </div>
    </div>
</div>
@endsection