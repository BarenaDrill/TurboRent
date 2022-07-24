<nav class="navbar navbar-expand-lg m-0" style="background-color: #c2ded1">
  <div class="container-fluid">
    <div class="mx-3">
      <a class="navbar-brand" href="/"><img src="/img/logo.png" style="width:160px;"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">
            <h5 style="color: #354259">Home</h5>
          </a>
        </li>
        @auth
          @if (auth()->user()->role == "admin")
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/admin">
                <h5 style="color: #354259">Check</h5>
              </a>  
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/rentFeeds">
                <h5 style="color: #354259">Rent</h5>
              </a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/wishlist">
                <h5 style="color: #354259">Wishlist</h5>
              </a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/orders">
                <h5 style="color: #354259">Orders</h5>
              </a>  
            </li>
          @endif
        @else
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/rentFeeds">
              <h5 style="color: #354259">Rent</h5>
            </a>  
          </li>
        @endauth
        
      </ul>
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
              <li><a class="dropdown-item" href="#">As Host</a></li>
              <li><a class="dropdown-item" href="/index">As Rent</a></li>
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
    </div>
  </div>
</nav>