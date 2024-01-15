<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Valley</title>
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet">

    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style_main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <header class="navbar">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('img/img.jpg') }}" alt="Company Logo">
            </div>
            <nav class="nav-links show">
                <a href="{{ route('user_home') }}" class="{{ request()->routeIs('user_home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('user_catalog') }}" class="{{ request()->routeIs('user_catalog') ? 'active' : '' }}">Catalog</a>
                <a href="#order_status" class="{{ request()->routeIs('order_status') ? 'active' : '' }}">Order Status</a>
                <a href="{{ route('distributor.index') }}" class="{{ request()->routeIs('distributor.index') ? 'active' : '' }}">Distributors</a>
                <a href="{{ route('upload.index') }}" class="{{ request()->routeIs('upload.index') ? 'active' : '' }}">Upload</a>
                <form id="logout-form " action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger mr-2" style="font-size:13px">Logout</button>
                </form>
            </nav>

            <div class="burger-menu" onclick="toggleNav()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
            <section class="content" style="padding: 50px">
                @yield('content')
            </section>
    </div>

    <footer>
        <div class="container">
            <span id="currentYear"></span>
        </div>
    </footer>

    <script>
        function toggleNav() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }

        const currentYearElement = document.getElementById('currentYear');
        const currentYear = new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
        currentYearElement.textContent = currentYear;

    </script>


</body>

</html>
