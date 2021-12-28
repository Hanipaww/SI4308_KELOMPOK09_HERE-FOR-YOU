<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Home' }}</title>
    <link rel="stylesheet" href="{{ asset('assets/bs4/css/bootstrap.min.css') }}">
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    @guest
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @else 
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    @endguest
                </div>
            </div>
        </div>
      </nav>

    <div style="min-height: 700px">
      @yield('content')
    </div>

    <script src="{{ asset('assets/bs4/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/bs4/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>