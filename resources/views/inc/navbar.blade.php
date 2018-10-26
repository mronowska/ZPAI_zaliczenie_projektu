<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #000033;">
    <a class="navbar-brand" style="background-color: #000033;">ZPAI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

      <ul class="navbar-nav mr-auto">
          <li class="{{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="/">Strona główna <span class="sr-only">(current)</span></a>
          </li>

          <li class="{{Request::is('about') ? 'active' : ''}}">
            <a class="nav-link" href="/about">O mnie</a>
          </li>

          <li class="{{Request::is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/contact">Kontakt</a>
          </li>

          <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Podstrony</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/kanada">Kanada</a>
                        <a class="dropdown-item" href="/malta">Malta</a>
                        <a class="dropdown-item" href="/parciaki">Parciaki</a>
                    </div>
                </li>


      </ul>

      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
              <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
          @endguest
      </ul>
    </div>




  </nav>
