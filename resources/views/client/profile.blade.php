@extends('client.testlayout')

@section('content')
<section class="receipt-title">
    <div class="container">
        <div class="title6">
            <i class="fas fa-user"></i>
            <a href="#"><h3>User profile</h3></a>
        </div>
    </div>
</section>

<section class="receipts3">
    <div class="container">
        <div class="pharm_img1">
            <img src="{{ asset('photo/user.png') }}" alt="UserImage">
        </div>
        <div class="pharm_info">
            <h3>Name: {{$name}}</h3>
            <h3>IIN:  {{$IIN}}</h3>
            <h3>Date Of Birth: {{$date_of_birth}}</h3>
            <h3>Email: {{$email}}</h3>
            <h3>Phone Number: {{$user_phone}}</h3>
        </div>

        <div class="back_fone_qr">
            <button class="button2">Forgot password</button>
            <div class="pharm_qr">
                <img src="{{asset('photo/qr_code.png')}}" alt="QR">
            </div>
        </div>
    </div>
</section>

@endsection
