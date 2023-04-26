@extends('client.testlayout')

@section('content')
<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-scroll"></i>
            <a href="{{asset('receipts.blade.htm')}}"><h2>My receipts</h2></a>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№4</span></h3>
                <h3 style="float: right">04.04.2023</h3>
                <h3><a href="{{asset('recept_page.blade.php')}}">More Information</a></h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№3</span></h3>
                <h3 style="float: right">03.04.2023</h3>
                <h3><a href="{{asset('recept_page.blade.php')}}">More Information</a></h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№2</span></h3>
                <h3 style="float: right">02.04.2023</h3>
                <h3><a href="{{asset('recept_page.blade.php')}}">More Information</a></h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№1</span></h3>
                <h3 style="float: right">01.04.2023</h3>
                <h3><a href="{{asset('recept_page.blade.php')}}">More Information</a></h3>
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
