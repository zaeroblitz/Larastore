<nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
        <a href="index.html">
            <img src="images/logo.svg" alt="Logo" width="40px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="navbar-nav ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}">Categories</a>
                    </li>

                    <li class="nav-item disabled">
                        <a class="nav-link">Rewards</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-white px-4" href="{{ route('login') }}">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
