<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky mt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Dashboard') ? 'bg-success text-light' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-items-center align-text-center mb-1 {{ ($title === 'Dashboard') ? 'text-light' : '' }}"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Orders') ? 'bg-success text-light' : '' }}" aria-current="page" href="/orders">
              <span data-feather="shopping-cart" class="align-items-center align-text-center mb-1 {{ ($title === 'Orders') ? 'text-light' : '' }}"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Products') ? 'bg-success text-light' : '' }}" aria-current="page" href="/products">
              <span data-feather="shopping-bag" class="align-items-center align-text-center mb-1 {{ ($title === 'Products') ? 'text-light' : '' }}"></span>
              Stok Produk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Member') ? 'bg-success text-light' : '' }}" aria-current="page" href="/members">
              <span data-feather="users" class="align-items-center align-text-center mb-1 {{ ($title === 'Member') ? 'text-light' : '' }}"></span>
              Anggota
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Simpanan') ? 'bg-success text-light' : '' }}" aria-current="page" href="/simpanan">
              <span data-feather="save" class="align-items-center align-text-center mb-1 {{ ($title === 'Simpanan') ? 'text-light' : '' }}"></span>
              Simpanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Pinjaman') ? 'bg-success text-light' : '' }}" aria-current="page" href="/pinjaman">
              <span data-feather="dollar-sign" class="align-items-center align-text-center mb-1 {{ ($title === 'Pinjaman') ? 'text-light' : '' }}"></span>
              Pinjaman
            </a>
          </li>
          <li class="nav-item ms-2 fixed-bottom">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Log Out</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>