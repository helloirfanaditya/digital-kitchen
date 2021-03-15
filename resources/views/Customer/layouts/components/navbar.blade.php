<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="index.html">
            <img src="{{ asset('assets/landing/images/logo-light.png') }}" alt="" class="logo-light" height="24" />
            <img src="{{ asset('assets/landing/images/logo-dark.png') }}" alt="" class="logo-dark" height="24" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cart-view') }}" class="nav-link">Keranjang <span class="bg-primary text-white rounded p-1" id="cart-added">{{ \Cart::getTotalQuantity() }}</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
