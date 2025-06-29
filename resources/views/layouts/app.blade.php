<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawCare - Rawat Mereka Dengan Yang Terbaik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px; 
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFEFC; 
        }
        .btn-primary {
            background-color: #F8B400;
            color: #4B3F35;
            font-weight: 600;
            padding: 8px 24px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #e0a200;
        }
        .btn-secondary {
            background-color: transparent;
            color: #F8B400;
            font-weight: 600;
            padding: 8px 24px;
            border-radius: 8px;
            border: 1px solid #F8B400;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-secondary:hover {
            background-color: #F8B400;
            color: #4B3F35;
        }
    </style>
</head>
<body class="text-gray-800">

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-md">
    <nav class="w-full px-6 lg:px-10 py-6 flex justify-between items-center">
        <a href="#beranda" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="PawCare Logo" class="h-8 w-8">
            <span class="text-xl font-bold text-amber-500">PawCare</span>
        </a>

        <ul class="hidden md:flex items-center space-x-8 font-medium">
            <li>
                <a href="#beranda" class="block py-2 border-b-2 border-transparent hover:border-yellow-500 transition-colors duration-300">
                    Beranda
                </a>
            </li>
            <li>
                <a href="#layanan" class="block py-2 border-b-2 border-transparent hover:border-yellow-500 transition-colors duration-300">
                    Layanan
                </a>
            </li>
            <li>
                <a href="#tentang" class="block py-2 border-b-2 border-transparent hover:border-yellow-500 transition-colors duration-300">
                    Tentang kami
                </a>
            </li>
            <li>
                <a href="#kontak" class="block py-2 border-b-2 border-transparent hover:border-yellow-500 transition-colors duration-300">
                    Hubungi kami
                </a>
            </li>
        </ul>
        
        <div class="flex items-center space-x-4">
            <a href="#" class="btn-primary sm:block text-white">Masuk</a>
            <a href="#" class="btn-primary text-white">Daftar</a>
        </div>
    </nav>
</header>

    <main>
        @yield('content')
    </main>

    <footer id="kontak" class="relative bg-white pt-20 pb-12">
    <div class="container mx-auto px-6">

        <div class="absolute top-8 left-8 sm:left-16 h-12 w-12 text-yellow-400 opacity-70 transform -rotate-12 pointer-events-none">
            <img src="{{ asset('images/paw.png') }}" alt="dekorasi">
        </div>
        <div class="absolute top-8 right-8 sm:right-16 h-8 w-8 text-yellow-400 opacity-70 transform rotate-12 pointer-events-none">
            <img src="{{ asset('images/paw.png') }}" alt="dekorasi">
        </div>
        <div class="absolute bottom-8 right-8 sm:right-16 h-12 w-12 text-yellow-400 opacity-70 transform rotate-45 pointer-events-none">
            <img src="{{ asset('images/paw.png') }}" alt="dekorasi">
        </div>
        
        <div class="flex justify-center items-center mb-8">
            <img src="{{ asset('images/logo.png') }}" alt="PawCare Logo" class="h-12">
            <span class="text-7xl text-amber-500 font-bold">PawCare</span>
        </div>

        <nav class="mb-12">
            <ul class="flex justify-center items-center divide-x divide-gray-300 text-gray-600 font-medium">
                <li><a href="#beranda" class="px-4 hover:text-yellow-500 transition-colors">Beranda</a></li>
                <li><a href="#layanan" class="px-4 hover:text-yellow-500 transition-colors">Layanan</a></li>
                <li><a href="#tentang" class="px-4 hover:text-yellow-500 transition-colors">Tentang Kami</a></li>
                <li><a href="#kontak" class="px-4 hover:text-yellow-500 transition-colors">Hubungi Kami</a></li>
            </ul>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-y-10 md:gap-x-8 max-w-4xl mx-auto">

            <div class="flex items-start gap-4">
                <img src="{{ asset('images/telepon.png') }}" alt="Ikon Telepon" class="w-14 h-14 flex-shrink-0">
                <div>
                    <h4 class="font-bold text-gray-800 text-lg">Telepon</h4>
                    <p class="text-base text-gray-600 mt-1">+62 1234 56789</p>
                    <p class="text-base text-gray-600">+62 9876 54321</p>
                </div>
            </div>
            
            <div class="flex items-start gap-4">
                <img src="{{ asset('images/lokasi.png') }}" alt="Ikon Lokasi" class="w-14 h-14 flex-shrink-0">
                <div>
                    <h4 class="font-bold text-gray-800 text-lg">Lokasi</h4>
                    <p class="text-base text-gray-600 mt-1">Jl. Cibaduyut Raya No.63, 40236, Kota Bandung</p>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <img src="{{ asset('images/email.png') }}" alt="Ikon Email" class="w-14 h-14 flex-shrink-0">
                <div>
                    <h4 class="font-bold text-gray-800 text-lg">Email</h4>
                    <p class="text-base text-gray-600 mt-1">PawCare1106@gmail.com</p>
                </div>
            </div>

        </div>

    </div>
</footer>

</body>
</html>