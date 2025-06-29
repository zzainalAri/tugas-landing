@extends('layouts.app')

@section('content')

<section id="beranda" class="relative bg-white pt-6 sm:pt-0 pb-16 sm:pb-20 lg:pb-24 overflow-hidden">
    
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute top-[16%] left-[16%] h-16 w-16 text-yellow-400 opacity-80 transform -rotate-12">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute top-[65%] left-[20%] h-7 w-7 text-yellow-400 opacity-80 transform rotate-6">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute bottom-[10%] left-[5%] h-14 w-14 text-yellow-400 opacity-80 transform rotate-45">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute top-[15%] right-[25%] h-8 w-8 text-yellow-400 opacity-80 transform rotate-12">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute top-[45%] right-[45%] h-12 w-12 text-yellow-400 opacity-80 transform scale-x-[-1] -rotate-12">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute bottom-[15%] right-[10%] h-10 w-10 text-yellow-400 opacity-80 transform rotate-12 scale-x-[-1]">
    </div>

    <div class="container mx-auto relative z-10">
        <div class="flex flex-col md:flex-row items-center gap-8">

            <div class="md:w-1/2 lg:w-5/12 text-center md:text-left">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-relaxed">
                    Rawat Mereka<br>
                    <span class="whitespace-nowrap inline-block mt-10">Dengan Yang Terbaik</span>
                </h1>
                <p class="mt-4 text-lg sm:text-xl text-gray-600">
                    Bulu rapi, mood happy!
                </p>
            </div>

            <div class="md:w-1/2 lg:w-7/12 mt-10 md:mt-0">
                <img src="{{ asset('images/hero.png') }}" alt="pet" class="w-full h-auto">
            </div>

        </div>
    </div>
</section>

<section id="layanan" class="relative bg-white py-20 sm:py-24 overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute top-[10%] left-[15%] h-14 w-14 opacity-70 transform -rotate-12">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute top-[5%] right-[10%] h-10 w-10 opacity-70 transform rotate-12">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute top-[20%] right-[35%] h-6 w-6 opacity-70 transform rotate-45">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute top-[30%] left-[48%] h-10 w-10 opacity-70 transform rotate-6">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute bottom-[10%] right-[15%] h-14 w-14 opacity-70 transform -rotate-45">
        <img src="{{ asset('images/paw.png') }}" alt="dekorasi ikon telapak kaki" class="absolute bottom-[5%] left-[5%] h-12 w-12 opacity-70 transform rotate-12">
    </div>

    <div class="container mx-auto px-6 relative z-10">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                Layanan Kami
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Layanan kami mencakup grooming, vaksinasi, dan konsultasi
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">

            <div class="text-center flex flex-col items-center p-4">
                <div class="relative w-48 h-48 mb-6">
                    <img class="w-full h-full rounded-full object-cover " src="{{ asset('images/layanan1.png') }}" alt="Layanan Grooming Anjing">
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Grooming</h3>
                <p class="text-gray-600 mb-6 flex-grow">
                    Rawat hewan peliharaan Anda dengan layanan grooming terbaik dari groomer berpengalaman.
                </p>
                <a href="#" class="btn-primary w-full max-w-xs">Reservasi Sekarang!</a>
            </div>

            <div class="text-center flex flex-col items-center p-4">
                <div class="relative w-48 h-48 mb-6">
                    <img class="w-full h-full rounded-full object-cover " src="{{ asset('images/layanan2.png') }}" alt="Layanan Vaksin Kucing">
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Vaksin</h3>
                <p class="text-gray-600 mb-6 flex-grow">
                    Layanan vaksinasi dilakukan oleh tenaga medis berpengalaman dengan standar keamanan dan kenyamanan tinggi.
                </p>
                <a href="#" class="btn-primary w-full max-w-xs">Reservasi Sekarang!</a>
            </div>

            <div class="text-center flex flex-col items-center p-4">
                <div class="relative w-48 h-48 mb-6">
                    <img class="w-full h-full rounded-full object-cover " src="{{ asset('images/layanan3.png') }}" alt="Layanan Konsultasi Dokter Hewan">
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Konsultasi</h3>
                <p class="text-gray-600 mb-6 flex-grow">
                    Dapatkan jawaban langsung dari dokter hewan terpercaya tanpa harus datang ke klinik.
                </p>
                <a href="#" class="btn-primary w-full max-w-xs">Reservasi Sekarang!</a>
            </div>

        </div>
    </div>
</section>

<section id="tentang" class="bg-white py-20 sm:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-20 gap-x-12 lg:gap-x-16 items-start">

            <div class="relative">
                <img src="{{ asset('images/anjingmakan.png') }}" alt="Anjing-anjing makan dengan gembira" 
                     class="rounded-lg w-full h-auto shadow-xl">
                <img src="{{ asset('images/anjingmic.png') }}" alt="Anjing dengan megafon" 
                    class="absolute bottom-0.5 -right-40 w-96 max-w-sm lg:w-4/5 lg:max-w-md h-auto">
            </div>

            <div class="relative pt-60">
                <img src="{{ asset('images/paw.png') }}" alt="dekorasi" class="absolute -top-4 -right-4 h-10 w-10 opacity-70 transform rotate-12">
                <img src="{{ asset('images/paw.png') }}" alt="dekorasi" class="absolute bottom-20 -right-12 h-8 w-8 opacity-70 transform -rotate-12">
                <img src="{{ asset('images/paw.png') }}" alt="dekorasi" class="absolute bottom-0 right-1/2 h-12 w-12 opacity-70 transform rotate-45">

                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                    Tentang Kami
                </h2>
                
                <p class="mt-4 text-lg text-gray-600">
                    PawCare adalah aplikasi untuk booking layanan grooming, vaksin, dan konsultasi dokter hewan secara online. Pemilik hewan peliharaan bisa pilih layanan, jadwal, dan lokasi mitra terdekat langsung dari HP.
                </p>

                <ul class="mt-10 space-y-4">
                    <li class="flex items-center">
                        <img src="{{ asset('images/centang.png') }}" alt="Checkmark" class="h-8 w-8 mr-3">
                        <span class="text-lg text-yellow-600 font-semibold">Mudah di akses</span>
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/centang.png') }}" alt="Checkmark" class="h-8 w-8 mr-3">
                        <span class="text-lg text-yellow-600 font-semibold">Ahli dan terpercaya</span>
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/centang.png') }}" alt="Checkmark" class="h-8 w-8 mr-3">
                        <span class="text-lg text-yellow-600 font-semibold">Fleksibel sesuai kebutuhan</span>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>

@endsection