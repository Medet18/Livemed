@extends('client.testlayout')

@section('content')
<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-user"></i>
            <a href="{{asset('profile.blade.php')}}"><h2>User profile</h2></a>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="pharm_img">
            <img src="{{asset('../photo/user.png')}}" alt="UserImage">
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
                <img src="{{asset('../photo/qr_code.png')}}" alt="QR">
            </div>
        </div>
    </div>
</section>

@endsection
