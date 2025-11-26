@extends('layouts.master')

@section('title', 'Tentang Kami')

@section('content')
@extends('layouts.header')

<div class="container my-5">
    <h1 class="text-center fw-bold" style="font-size:3rem;">
        Oclean Hadir Membantu<br>
        Segala Kebutuhan Bersih - Bersih Kamu
    </h1>
</div>

<div class="container mb-5" style="margin-top:80px;">
    <div class="row align-items-center">
        <div class="col-md-5 mb-4 mb-md-0 mx-auto p-5">
            <img src="{{ asset('images/ourstory.png') }}" alt="Our Story" style="width:80%;" class="shadow">
        </div>
        <div class="col-md-7">
            <h2 class="fw-bold mb-3" style="font-size:2.5rem;">Our Story</h2>
            <p style="font-size:1.3rem;">
                Oclean lahir dari keyakinan bahwa setiap rumah layak mendapatkan kebersihan dan kenyamanan terbaik. Kami memahami bahwa waktu kamu sangat berharga, dan kesibukan sehari-hari sering membuat sulit menjaga kebersihan rumah.
            </p>
            <p style="font-size:1.3rem;">
                Dengan meningkatnya konsumen kelas menengah di Indonesia, kami hadir untuk menyediakan layanan pembersihan berkualitas tinggi yang terjangkau dan fleksibel, sehingga setiap orang dapat menikmati lingkungan rumah bersih tanpa beban.
            </p>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-7">
            <h1 class="fw-bold mb-4" style="font-size:3.5rem;">
                Komitmen pada Kualitas<br>
                Layanan Kebersihan<br>
                Terbaik
            </h1>
            <p style="font-size:1.35rem;">
                Kami percaya bahwa lingkungan bersih meningkatkan kualitas hidup dan produktivitas. Karena itu, kami berkomitmen mengutamakan kepuasan pelanggan dengan layanan kebersihan terbaik. Tim profesional kami, yang dipilih secara ketat dan ahli di bidangnya, menggunakan metode dan peralatan terkini untuk memastikan setiap sudut rumah atau kantor Anda bersih dan nyaman.
            </p>
        </div>
        <div class="col-md-5 mb-4 mb-md-0">
            <img src="{{ asset('images/f2.png') }}" alt="Komitmen Kualitas" class="img-fluid rounded-4 shadow">
        </div>
    </div>
</div> 
@endsection