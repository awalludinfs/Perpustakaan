<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <body>
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <style>
            img{
                width: 100px;
                height: 100px;
                
            }
        </style>
        <style>
            #card{
                background: #fbfbfb;
                border-radius: 20px;
                box-shadow: 9px 8px 9px rgba(0,0,0,0.78);
                height: 500px;
                margin: 4rem auto 10rem;
                width: 400px;
            }
        </style>
        <style>
            body{
                background-image: url('#');
            }
        </style>
        <div id="card">
            <main class="from-signin">
                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Please Login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                            <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required  value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control"  id="password" placeholder="*********" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>     
                <small class="d-block text-center mt-3">Anda Belum Punya Akun? <a href="/daftar">Daftar Sekarang Yuk!</a></small>
                <p class="mt-3 mb-2 text-muted text-center">&copy; 2022–2023</p>
                    </main>
            </div>
         </div>
 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>