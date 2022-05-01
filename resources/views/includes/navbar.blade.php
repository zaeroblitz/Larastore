 <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top navbar-fixed-top" data-aos="fade-down">
     <div class="container">
         <a href="{{ route('home') }}">
             <img src="/images/logo.svg" alt="Logo" width="40px" />
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
             aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <div class="navbar-nav ml-auto">
                 <ul class="navbar-nav align-items-center">
                     <li
                         class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('home') }}">Home</a>
                     </li>

                     <li
                         class="nav-item {{ (request()->is('categories') || request()->is('categories/*')) ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('categories') }}">Categories</a>
                     </li>

                     <li class="nav-item disabled">
                         <a class="nav-link">Rewards</a>
                     </li>

                     @guest
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link btn btn-success text-white px-4"
                                 href="{{ route('login') }}">Sign In</a>
                         </li>
                     @endguest

                     @auth
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                 data-toggle="dropdown" aria-expanded="false">
                                 <div class="row align-items-center">
                                     <img src="{{ isset(Auth::user()->avatar) ? Storage::url(Auth::user()->avatar) : '/images/user_default.svg' }}"
                                         alt="avatar" class="profile-picture d-none d-lg-flex" />
                                     <div class="ml-2 nav-user-welcome">
                                         <p class="mb-0 ml-2">Hi, {{ Auth::user()->name }}</p>
                                     </div>
                                 </div>
                             </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item"
                                     href="{{ route('dashboard') }}">Dashboard</a>
                                 <a class="dropdown-item"
                                     href="{{ route('dashboard-settings-account') }}">Settings</a>
                                 <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                     onclick="event.preventDefault(); 
                                 document.getElementById('logout-form').submit();"">
                                 Sign Out</a>
                                <form id="logout-form" action="{{ route('logout') }}"
                                     method="POST" class="d-none">
                                     @csrf
                                </form>
                             </div>
                         </li>

                         <li class="nav-item">
                             @php
                                 $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                             @endphp
                             @if ($carts > 0)
                                <a class="nav-link d-inline-block" href="{{ route('cart') }}">
                                    <img src="images/shopping_filled.svg" alt="Cart" />
                                    <div class="card-badge">{{ $carts }}</div>
                                </a> 
                             @else
                                <a class="nav-link" href="{{ route('cart') }}">                                
                                    <img src="/images/shopping.svg" alt="Cart"
                                        class="d-none d-lg-flex" />
                                    <p class="d-flex d-lg-none">Cart</p>
                                </a>
                             @endif                             
                         </li>
                     @endauth
                 </ul>
             </div>
         </div>
     </div>
 </nav>
