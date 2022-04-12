<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-success sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
                <a class="nav-link text-light {{Request::is('dashbaord') ? 'active' :''}}" aria-current="page" href="/databuku">    
                    Data Buku
                </a>
          </li>
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/datamember">          
            Data Member
            </a>  
          {{-- <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/peminjaman">     
               peminjam
            </a>   --}}
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/datapeminjaman">     
               Data peminjam
            </a>  
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/datakembali">     
               Data pengembalian
            </a>  
          </li>
      </ul>  
    </div>
</nav>
