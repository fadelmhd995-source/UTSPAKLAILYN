<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand">Home Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="layananKamiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style=";">
                            Layanan Kami
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="layananKamiDropdown">
                            <li><a class="dropdown-item" href="{{ route('Homecleaning') }}">Home Cleaning</a></li>
                            <li><a class="dropdown-item" href="{{ route('Deepcleaning') }}">Deep Cleaning</a></li>
                            <li><a class="dropdown-item" href="{{ route('Officecleaning') }}">Office Cleaning</a></li>
                            <li><a class="dropdown-item" href="{{ route('ACcleaning') }}">AC Cleaning</a></li>
                        </ul>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link {{ request()->is('testimoni') ? 'active' : '' }}" href="{{ route('testimoni') }}">Testimoni</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tentangkami') ? 'active' : '' }}" href="{{ url('/tentangkami') }}">Tentang Kami</a>
                    </li>
                </ul>
                <a href="{{ route('shop')}}" class="btn btn-light ms-3">
                    <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Shop" width="24" height="24">
                </a>

            </div>
        </div>
    </nav>
</header>
