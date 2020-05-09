<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
  <a class="navbar-brand" href="/">{{ config('app.name', 'VDU Games') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Platformer</a>
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#">Platformer</a>
          <a class="dropdown-item" href="#">Platformer</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/submit_game">Submit a Game</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    @guest
    <a class="nav-link" href="/login" > <i class="fas fa-gamepad"></i> Login  </a>
    <a class="nav-link" href="/register" > <i class="fas fa-key"></i> Register  </a>
    @endguest

    @auth
        
    <a class="nav-link" href={{Auth::logout()}} > <i class="fas fa-key"></i> Logout </a>

    @endauth
    
  </div>
</nav>