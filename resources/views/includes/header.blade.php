<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}">MP</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav mr-auto">
            <li class="nav-link"><a href="/products">Products</a></li>
            <li class="nav-link"><a href="/about">About</a></li>
            <li class="nav-link"><a href="/contact">Contact</a></li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav ml-auto navbar-right">
                <!-- Authentication Links -->
                @guest
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user margin-r-5"></span> Your Account</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                      <li><a class="nav-link" href="{{ route('admin.login') }}">{{ __('Admin') }}</a></li>
                      <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    </ul>
                  </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="glyphicon glyphicon-user margin-r-5"></span> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li class="dropdown-item">
                            <a href="#"><span class="glyphicon glyphicon-book margin-r-10"></span>Profile</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out margin-r-10"></span>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          </li>
                        </ul>
                    </li>
                @endguest
              <li class="">
                <a href="{{ route('products.shoppingCart') }}">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Cart 
                  <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                </a>
              </li>
          </ul>
      </div>
    </div>
</nav>
