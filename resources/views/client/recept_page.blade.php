@extends('client.testlayout')

@section('content')
<section class="recept-title">
    <div class="container">
        <div class="title" id="hv" style="display: flex; align-items: center;">
            <i class="fas fa-scroll"></i>
            <a href="{{asset('receipts.blade.php')}}"><h2>My receipts</h2></a>
        </div>
        <div class="title">
            <h2>Receipt <span>№4</span></h2>
            <h2>04.04.2023</h2>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="doctor">
            <h2>Doctor:</h2>
            <h2>Kadyrov Kunaysh</h2>
        </div>
        <div class="back_fone">
            <h1>The name of product</h1>
            <div class="recepts-lists">
                <div class="left">
                    <h3>Citramon</h3>
                    <h3>Status:bought</h3>
                </div>

                <div class="left">
                    <h3>Antigripin</h3>
                    <h3>Status:bought</h3>
                </div>

                <div class="left">
                    <h3>Mukaltin</h3>
                    <h3>Status:canceled</h3>
                </div>

                <div class="pharm_qr">
                    <img src="../../../public/photo/qr_code.png" alt="QR">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
