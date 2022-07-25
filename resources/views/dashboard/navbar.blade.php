<nav class="navbar border-bottom border-dark navbar-expand-lg m-0 sticky-top" style="background-color: #c2ded1">
  <div class="container-fluid">
    <div class="mx-3">
      <a class="" href="/"><img src="/img/logo.png" style="width:160px;"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-4 ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" style="color: #354259" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
              <li><a class="dropdown-item" href="/profile">Profile</a></li>
              <li><a class="dropdown-item" href="/dashboard">As Host</a></li>
              <li><a class="dropdown-item" href="/">As Rent</a></li>
            </ul>
          </li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" style="color: #354259" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Guest
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="/login">Login</a></li>
            </ul>
          </li>
        @endauth
      </ul>  
      </ul>
    </div>   
  </div>
</nav>