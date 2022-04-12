<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-success sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
                <a class="nav-link text-light {{Request::is('dashbaord') ? 'active' :''}}" aria-current="page" href="/databukuadmin">    
                    Data Buku Admin
                </a>
          </li>
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/datamemberadmin">          
            Data Member Admin
            </a>  
            <li class="nav-item">
                  <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/datauseradmin">     
                 Data user 
              </a>    
            </li>
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/datapeminjamanadmin">     
               Data peminjam Admin
            </a>  
          </li>
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/datapetugasadmin">     
               Data Petugas
            </a>    
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/datapembayaran">     
               Data Pembayaran
            </a>    
      </ul>  
    </div>
</nav>
