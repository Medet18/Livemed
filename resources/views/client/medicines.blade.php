@extends('client.testlayout')

@section('content')

<section class="receipt-title">
    <div class="container">
        <div class="title5">
            <i class="fas fa-shopping-bag"></i>
            <a href="#"><h3>A list of medicines</h3></a></div>
    </div>
</section>

<section class="receipts3">
    <div class="container">
        <div class="receipts-lists2">
            <div class="left">
                <a href="{{ route('getMedicinePage') }}"><h4>The name of medicine</h4></a>
            </div>
            <div class="right">
                <h4>Without recept</h4>
            </div>
        </div>

        <div class="receipts-lists2">
            <div class="left">
                <a href="#"><h4>The name of medicine</h4></a>
            </div>
            <div class="right">
                <h4>Without recept</h4>
            </div>
        </div>

        <div class="receipts-lists2">
            <div class="left">
                <a href="#"><h4>The name of medicine</h4></a>
            </div>
            <div class="right">
                <h4>Without recept</h4>
            </div>
        </div>

        <div class="receipts-lists2">
            <div class="left">
                <a href="#"><h4>The name of medicine</h4></a>
            </div>
            <div class="right">
                <h4>Without recept</h4>
            </div>
        </div>

    </div>
</section>

@endsection
