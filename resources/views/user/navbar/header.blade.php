<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Perpustakaan</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
         <form action="/logout" method="post">
            @csrf
             <button  type="sumbit" class="bg-success border-0"> Logout <span data-feather="log-out"></span> </button>
        </form>     
      </a>     
    </nav>
  </header>

