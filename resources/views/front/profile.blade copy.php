<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link href="{{asset('front')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('front')}}/css/styles.css" rel="stylesheet" />
    <link href="{{asset('front')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('front')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('front')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            margin-top:7rem;
        }
        .sidebar a {
            padding-left: 20px;
            text-decoration: none;
            font-size: 20px;
            color: #7b7070;
            display: block;
        }
        .logout a {
            color: #d70000;
        }
        .sidebar a:hover {
            color: #111;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .sidebar h2 {
            padding-left: 20px;
            margin-bottom: 2rem;
        }
        .foto {
            display: flex;
        }
        .isi {
            margin-left: 1rem;
            margin-top: 1rem;
        }
        .form-group {
            margin: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>MawSteam</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/home" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link">Layanan</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
                @guest
                    @if (Route::has('login'))
                        <a class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </div>
        </div>
    </nav>
    <div class="sidebar">
        <h2>User Profile</h2>
        <a href="#"><i class="fas fa-user"></i> User info</a>
        <hr>
        <a href="#"><i class="fas fa-star"></i> Favorites</a>
        <hr>
        <a href="#"><i class="fas fa-list"></i> Watchlist</a>
        <hr>
        <a href="#"><i class="fas fa-cog"></i> Settings</a>
        <hr>
        <a href="#"><i class="fas fa-bell"></i> Notifications</a>
        <hr>
    </div>
    <div class="main-content">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="foto">
                    <img src="{{asset('front')}}/assets/img/team-1.jpg" class="profile-picture" alt="Profile Picture">
                    <div class="isi">
                        <h3>Muhammad Faris</h3>
                        <h6>Pelanggan</h6>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" >
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="full_name" class="form-control" value="Ais" >
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" >
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone_number" class="form-control" value="085827371221" >
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="location" class="form-control" value="JL Nusa Indah 13 blok c7 no 27 Rt 02 Rw 08"readonly>
            </div>
            <button type="submit" class="btn btn-secondary m-3">Save Changes</button>
        </form>
    </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
