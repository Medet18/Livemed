@extends('doctorINT.doctorLayout')

@section('content')
<section class="receipt-title_qr">
    <div class="container">
        <div class="title_qr" id="hv_qr" style="display: flex; align-items: center;">
            <i class="fas fa-scroll"></i>
            <a href="{{ route('getReceipts') }}"><h4>Given receipts</h4></a>
        </div>
        <div class="title_qr">
            <h4>Receipt <span>№4</span></h4>
            <h4>04.04.2023</h4>
        </div>
    </div>
</section>

<section class="receipts_qr">
    <div class="container">
        <div class="doctor2">
            <h4>Doctor:</h4>
            <h4>Kadyrov Kunaysh</h4>
        </div>
        <div class="back_fone_qr">
            <h2>The name of product</h2>
            <div class="receipts-lists-qr">
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
                    <img src="{{asset('photo/qr_code.png')}}" alt="QR">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
