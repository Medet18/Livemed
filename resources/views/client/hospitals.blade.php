@extends('client.testlayout')

@section('content')

<section class="receipt-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-hospital"></i>
            <a href="#"><h3>Hospitals</h3></a>
        </div>
    </div>
</section>

<section class="receipts">
    <div class="container">
        <div class="receipts-lists">
            <div class="left">
                <h3><a href="{{ route('getHospitalPage') }}">The hospital <span>№4</span></a></h3>
                <h3>Almaty, Ayezova 101</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3><a href="{{ route('getHospitalPage') }}">The hospital <span>№4</span></a></h3>
                <h3>Almaty, Rozybakyeva 102</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3><a href="{{ route('getHospitalPage') }}">The hospital <span>№4</span></a></h3>
                <h3>Almaty, Baurzhan Momyshuly 120</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3><a href="{{ route('getHospitalPage') }}">The hospital <span>№4</span></a></h3>
                <h3>Almaty, Qaskelen 100</h3>
            </div>
        </div>
    </div>
</section>

@endsection
