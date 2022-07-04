<nav class="navbar navbar-expand-lg m-0" style="background-color: #630a10">
  <div class="container-fluid">
    <div class="mx-3">
      <a class="navbar-brand" href="/"><img src="/img/logo.png" style="width:160px;"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">
              <div class="btn align-self-center" style="background-color: #fbefc7; width: 115px; height: 50px;">
                <h4 style="color: #630a10;">
                  Home
                </h4>
              </div>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="">
              <div class="btn align-self-center" style="background-color: #fbefc7; width: 115px; height: 50px;">
                <h4 style="color: #630a10;">
                  Rent
                </h4>
              </div>
            </a>  
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="host">
              <div class="btn align-self-center" style="background-color: #fbefc7; width: 115px; height: 50px;">
                <h4 style="color: #630a10;">
                  Host
                </h4>
              </div>
            </a>  
        </li>
        
      
        <div class="btn-group">
          <button type="button" class="btn align-self-center" style="background-color: #fbefc7; width: 115px; height: 50px;">
            <h4 style="color: #630a10;">
              Account
            </h4>
          </button>
          <button type="button" class="btn align-self-center dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #fbefc7; height: 50px;" >
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end"style="width: 10px;">
            <li><a class="dropdown-item" href="/register" ">Register</a></li>
            <li><a class="dropdown-item" href="/register" ">Logout</a></li>
          </ul>
        </div>

        {{-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
              <div class="align-self-center">
                <h4 style="color: #fbefc7;">
                  Logout
                </h4>
              </div>
            </a>  
        </li> --}}

      </ul>
    </div>
  </div>
</nav>