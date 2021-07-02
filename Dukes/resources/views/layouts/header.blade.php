<nav class="navbar navbar-expand-lg py-0">
    <!-- Primary Navigation Menu -->
    <div class="container-fluid">
        <a class="navbar-brand py-0" href="{{ route('dashboard') }}">
            <img src="images/logo2.png" alt="Logo" class="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <div class="navbar-nav ms-auto">
                <!-- Navigation Links -->
                <a class="{{ request()->is('dashboard') ? 'nav-link active' : 'nav-link' }}" href="{{ route("dashboard") }}">HOME</a>
                {{-- <a class="{{ request()->is('categories') ? 'nav-link active' : 'nav-link' }}" href="{{ route("") }}">CATEGORIES</a>
                <a class="{{ request()->is('products') ? 'nav-link active' : 'nav-link' }}" href="{{ route("") }}">PRODUCTS</a>
                <a class="{{ request()->is('aboutus') ? 'nav-link active' : 'nav-link' }}" href="{{ route("") }}">ABOUT US</a> --}}
                <a class="{{ request()->is('login') ? 'nav-link active' : 'nav-link' }}" href="{{ route("login") }}">LOGIN</a>
                <a class="{{ request()->is('signup') ? 'nav-link active' : 'nav-link' }}" href="{{ route("register") }}">SIGN-UP</a>
            </div>
        </div>
    </div>
</nav>
