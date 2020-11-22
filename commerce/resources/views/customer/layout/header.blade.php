
  
<nav class="navbar navbar-expand-lg navbar-light m-0 p-0" id="nav_id">
 <div class="container">
  <a class="navbar-brand mb-3" href="#">EK's Stylemart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item active">
        <a class="nav-link" href="/allProduct">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/allProduct">Product</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      <li class="nav-item">
      <form class="form-inline my-2 my-lg-0" action="/search/product" method="get">
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="search" placeholder="Search">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
  </div>
</div>
    </form>
      </li>
    </ul>
     
     <ul>
       <li class="nav-item" style="list-style:none;">
       @if (Route::has('login'))
                <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                    @auth

                       <div class="btn-group">
  <h6 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
  {{ Auth::user()->name }} <i class="fa fa-angle-down" style="font-size:20px"></i>
  </h6>
  <div class="dropdown-menu dropdown-menu-right">
    <span class="text-muted ml-4 small">Manage Account</span>
    <a class="dropdown-item" href="/user/profile">Profie</a>
   
    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
  </div>
</div>

                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 text-decoration-none">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 text-decoration-none">Register</a>
                        @endif
                    @endif
                </div>
            @endif
       </li>
     </ul>
  </div>
  </div>
</nav>

