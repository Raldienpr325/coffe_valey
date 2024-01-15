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

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .container-fluid {
            flex: 1;
        }

        .content-wrapper {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin: 20px;
            overflow: hidden;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .navbar {
            background-color: #333;
            padding: 10px 0;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
        }

        .nav-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s ease-in-out;
        }

        .nav-links a:hover {
            color: #FFD700;
        }

        .burger-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .bar {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 5px 0;
        }

        .hero-section {
            background-color: #f5f5f5;
            padding: 50px 0;
            text-align: center;
        }

        .hero-section h1 {
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #FFD700;
        }

        .about-section {
            padding: 50px 0;
            text-align: center;
        }

        /* New Style for Mobile Navigation */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                text-align: center;
            }

            .nav-links.show {
                display: flex;
            }

            .burger-menu {
                display: flex;
            }
        }
    </style>

</head>

<body>

    <header class="navbar">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('img/img.jpg') }}" alt="Company Logo">
            </div>
            <nav class="nav-links show">
                <a href="{{ route('user_home') }}">Home</a>
                <a href="{{ route('user_catalog') }}">Catalog</a>
                <a href="#order_status">Order Status</a>
                <a href="{{ route('distributor.index') }}">Distributors</a>
                <a href="{{ route('user_upload') }}">Upload</a>
                <form id="logout-form " action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger mr-2"
                        style="font-size:13px">Logout</button>
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

        // Set the current year in the footer in the format "Month Day, Year"
        const currentYearElement = document.getElementById('currentYear');
        const currentYear = new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
        currentYearElement.textContent = currentYear;

    </script>


</body>

</html>
