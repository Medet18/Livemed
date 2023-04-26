@extends('client.testlayout')

@section('content')

<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-globe-americas"></i>
            <a href="{{asset('pharmacies.blade.php')}}"><h2>The list of pharmacies</h2></a>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="recepts-lists">
            <div class="left">
                <h3><a href="{{asset('pharmacy_page.blade.php')}}">The pharmacy <span>№4</span></a></h3>
                <h3>Almaty, Ayezova 101</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3><a href="{{asset('pharmacy_page.blade.php')}}">The pharmacy <span>№3</span></a></h3>
                <h3>Almaty, Rozybakyeva 102</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3><a href="{{asset('pharmacy_page.blade.php')}}">The pharmacy <span>№2</span></a></h3>
                <h3>Almaty, Baurzhan Momyshuly 120</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3><a href="{{asset('pharmacy_page.blade.php')}}">The pharmacy <span>№1</span></a></h3>
                <h3>Almaty, Qaskelen 100</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3><a href="{{asset('pharmacy_page.blade.php')}}">The pharmacy <span>№9</span></a></h3>
                <h3>Almaty, Baiqonyr 80</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3><a href="{{asset('pharmacy_page.blade.php')}}">The pharmacy <span>№8</span></a></h3>
                <h3>Almaty, Tole biy 10</h3>
            </div>
        </div>

    </div>
</section>

@endsection
