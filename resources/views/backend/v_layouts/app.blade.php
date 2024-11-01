<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Web Event</title>
    <style>
        /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styling untuk navbar */
        .navbar {
            background-color: #10003a;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2d9cff;
        }

        .navbar ul {
            list-style-type: none;
            display: flex;
            gap: 1rem;
            margin: 0 auto;
        }

        .navbar li {
            margin: 0 10px;
        }

        .navbar a {
            color: #b6b6b6;
            text-decoration: none;
            padding: 10px 15px;
            transition: background 0.3s;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #140033;
            border-radius: 5px;
        }

        /* Responsive styling untuk layar kecil */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }

            .navbar ul {
                flex-direction: column;
                align-items: center;
                gap: 0;
            }

            .navbar a {
                display: block;
                margin: 5px 0;
            }
        }
      /* Styling untuk background gambar di bagian bawah */
      .footer-background {
            background-image: url('{{ asset('image/jevent.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 300px; /* Sesuaikan tinggi sesuai kebutuhan */
        }




    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">GatVent</div>
        <ul>
            <li><a href="{{ route('backend.beranda') }}">Beranda</a></li>
            <li><a href="#">Event</a></li>
            <li><a href="#">History</a></li>
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('keluar-app').submit();">Keluar</a>
                <form id="keluarapp" action="{{ route('login') }}" method="GET" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <!-- @yieldAwal -->
    @yield('content')
    <!-- @yieldAkhir-->

    <!-- keluarApp -->
    <form id="keluar-app" action="{{ route('backend.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <!-- keluarAppEnd -->

    <div class="footer-background"></div>
</body>

</html>
