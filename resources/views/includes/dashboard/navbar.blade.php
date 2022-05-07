<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky"
    id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item d-xl-none d-flex align-items-center mr-auto">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center mx-4">
                    <a href="#" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="row align-items-center navbar-user">
                            <img src="{{ isset(Auth::user()->avatar) ? Storage::url(Auth::user()->avatar) : '/images/user_default.svg' }}" alt="avatar" class="profile-picture" />
                            <div class="nav-user-welcome d-none d-lg-flex">
                                <p class="mb-0">Hi, {{ Auth::user()->name }}</p>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="{{ route('dashboard-settings-account') }}">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" 
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();">
                                Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ml-3">
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
            </ul>
        </div>
    </div>
</nav>
