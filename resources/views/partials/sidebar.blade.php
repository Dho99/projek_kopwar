<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Dashboard') ? 'bg-success text-light' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Orders') ? 'bg-success text-light' : '' }}" aria-current="page" href="/orders">
              <span data-feather="home" class="align-text-bottom"></span>
              Orders
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