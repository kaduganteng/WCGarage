<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Garage 81</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ ($tittle === "home") ? 'active' :'' }}" aria-current="page" href="/">Home</a>
              </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "menu") ? 'active' :'' }}" aria-current="page" href="#">Menu</a>
          </li>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Reservation
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Pesan Tempat</a></li>
              <li><a class="dropdown-item" href="#">Pesan Anter</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "aboutus")  ? 'active' :''}}" aria-current="page" href="#">About Us
            </a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>