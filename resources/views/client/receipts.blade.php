@extends('client.testlayout')

@section('content')
<section class="receipt-title">
    <div class="container">
        <div class="title1">
            <i class="fas fa-scroll"></i>
            <a href="#"><h3>My receipts</h3></a>
        </div>
    </div>
</section>

<section class="receipts">
    <div class="container">
        <div class="receipts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№4</span></h3>
                <h3 style="float: right">04.04.2023</h3>
                <h3><a href="{{ route('getUserReceiptPage') }}">More Information</a></h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№3</span></h3>
                <h3 style="float: right">03.04.2023</h3>
                <h3><a href="{{ route('getUserReceiptPage') }}">More Information</a></h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№2</span></h3>
                <h3 style="float: right">02.04.2023</h3>
                <h3><a href="{{ route('getUserReceiptPage') }}">More Information</a></h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№1</span></h3>
                <h3 style="float: right">01.04.2023</h3>
                <h3><a href="{{ route('getUserReceiptPage') }}">More Information</a></h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

    </div>
</section>

@endsection
