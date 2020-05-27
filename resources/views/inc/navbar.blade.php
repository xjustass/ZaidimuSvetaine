<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
  <a class="pr-3" href="/"><img src="{{ asset('img/Logo_Final.png') }}" style="width: 50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu mt-1" aria-labelledby="navbarDropdown">


            @php($cats = App\Category::all())

            @if(count($cats)> 0)
                @foreach($cats as $cat)
        <a class="dropdown-item" href="/category/{{$cat->id}}">{{$cat->name}} </a>
                    <div class="dropdown-divider"></div>
                @endforeach
            @endif
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



    @guest
    <a class="nav-link" href="{{ route('login') }}" > <i class="fas fa-gamepad"></i> Login  </a>
    <a class="nav-link" href="{{ route('register') }}" > <i class="fas fa-key"></i> Register  </a>


    @else
    <ul class="navbar-nav navbar-right">
    <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      {{ Auth::user()->name }}<span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>

    </div>
    </li>
  </ul>

    @endguest

  </div>
</nav>
