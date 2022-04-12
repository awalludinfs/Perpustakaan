<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('judul')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <!-- trix Editor  -->
        <link rel="stylesheet" type="text/css" href="/css/trix.css">
        <script type="text/javascript" src="/js/trix.js"></script>  
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Place Login</h1>
                <form action="{{route('daftar')}}" method="post">
                    @csrf
                        <div class="form-floating">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name enter">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username Enter">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Example@gmail.com">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" id="password" class="form-control" placeholder="password Enter">
                            <label for="password">Password</label>
                        </div>
                        <input type="hidden" name="role" id="role" value="2">
                        <button class="btn btn-lg btn-primary" type="submit">Daftar</button>
                </form>
                <small class="col-mb-3 col-lg-2">Not Register <a href="/"> Login Now!!</a></small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

      <script src="/js/dashboard.js"></script>
</body>
</html>