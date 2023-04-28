@extends('client.testlayout')

@section('content')
<section class="receipt-title">
    <div class="container">
        <div class="title2" id="hv" style="display: flex; align-items: center;">
            <i class="fas fa-scroll"></i>
            <a href="{{ route('getUserReceipts') }}"><h3>My receipts</h3></a>
        </div>
        <div class="title2">
            <h3>Receipt <span>№4</span></h3>
            <h3>04.04.2023</h3>
        </div>
    </div>
</section>

<section class="receipts2">
    <div class="container">
        <div class="doctor">
            <h3>Doctor:</h3>
            <h3>Kadyrov Kunaysh</h3>
        </div>
        <div class="back_fone">
            <h2>The name of product</h2>
            <div class="receipts-lists1">
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
                    <img src="{{ asset('photo/qr_code.png') }}" alt="QR">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
