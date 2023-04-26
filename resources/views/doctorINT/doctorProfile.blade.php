@extends('doctorINT.doctorLayout')

@section('content')
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='indexDoctor.html'"> <span>Live</span>MedKZ </a>
        </div>

        <!--        <div class="cities">-->
        <!--            <button class="btn">City</button>-->
        <!--        </div>-->
        <!--        <div id="login-btn">-->
        <!--            <button class="btn">login</button>-->
        <!--        </div>-->


    </div>
</header>

<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-user"></i>
            <a href="indexDoctor.htm"><h2>Doctor profile</h2></a>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="pharm_img">
            <img src="../../../public/photo/user.png" alt="UserImage">
        </div>
        <div class="pharm_info">
            <h1>Name: Rashid</h1>
            <h1>Lastname: Bukanov</h1>
            <h1>IIN: 020302345678</h1>
            <h1>DOB: 02.03.2002y</h1>
            <h1>Email: RashidBukanov@gmail.com</h1>
        </div>

        <div class="back_fone_qr">
            <button class="button">Forgot password</button>
            <div class="pharm_qr">
                <img src="../../../public/photo/qr_code.png" alt="QR">
            </div>
        </div>
    </div>
</section>

@endsection
