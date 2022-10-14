<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($page === 'Dashboard') ? 'bg-success text-light' : '' }}" aria-current="page" href="/">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($page === 'Orders') ? 'bg-success text-light' : '' }}" aria-current="page" href="orders">
              <span data-feather="home" class="align-text-bottom"></span>
              Orders
            </a>
          </li>

        </ul>
      </div>
    </nav>
  </div>
</div>