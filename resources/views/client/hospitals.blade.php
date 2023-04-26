@extends('client.testlayout')

@section('content')

<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-hospital"></i>
            <a href="hospitals.htm"><h2>Hospitals</h2></a>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="recepts-lists">
            <div class="left">
                <h3><a href="hospital_page.htm">The hospital <span>№4</span></a></h3>
                <h3>Almaty, Ayezova 101</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3><a href="hospital_page.htm">The hospital <span>№3</span></a></h3>
                <h3>Almaty, Rozybakyeva 102</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3><a href="hospital_page.htm">The hospital <span>№2</span></a></h3>
                <h3>Almaty, Baurzhan Momyshuly 120</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3><a href="hospital_page.htm">The hospital <span>№5</span></a></h3>
                <h3>Almaty, Qaskelen 100</h3>
            </div>
        </div>



    </div>
</section>

@endsection
