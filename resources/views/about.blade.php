@extends('template.template')
@section('title', 'about')

@section('content')
    
    <!-- Menu Atas -->
    <div>
        <div class="container mt-5">
            <h2 class="text-center">Selamat Datang di Rental PS4 Bintank</h2>
            <div class="container">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour).</p>
            </div>
        </div>
    </div>
    <!-- Akhir Menu Atas -->

    <!-- Why Us? -->
    <div>
        <div class="container" style="margin-top: 100px">
            <h2 class="text-center">Why Us?</h2>

            <div class="row justify-content-center mt-4">
                <div class="col-10">
                    <div class="row">
                        <div class="col-md">
                            <img src="/assets/image/employee.png">
                            <h4 class="text-center">24 JAM</h4>
                            <p class="text-center">PELAYANAN/BUKA FULL 24 JAM</p>
                        </div>
                        <div class="col-lg">
                            <img src="/assets/image/security.png">
                            <h4 class="text-center">AMAN DAN TERPERCAYA</h4>
                            <p class="text-center">DISINI BARANG MENJADI TANGGUNG JAWAB KAMI</p>
                        </div>
                        <div class="col-lg">
                            <img src="/assets/image/wifi.png">
                            <h4 class="text-center">FREE WIFI</h4>
                            <p class="text-center">DISINI FREE WIFI UNTUK CLIENT KITA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection