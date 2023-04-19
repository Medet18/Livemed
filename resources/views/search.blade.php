@extends('doctorINT.doctorLayout')

@section('content')
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='{{asset('search.htm')}}'"> <span>Live</span>MedKZ </a>
        </div>

        <div class="login-btn">
            <button class="button" onclick="window.location.href='{{asset('loginDoctor.htm')}}'">login</button>
        </div>


    </div>
</header>

<section class="search">
    <div class="container">
        <div class="poisk">
            <form action="#" class="price-form">
                <input type="number" class="price-input" name="iin" id="" placeholder="IIN" min="12">
                <button class="button">search</button>
            </form>
        </div>

        <div class="res">
            <div class="title">
                <h1>The name of product</h1>
                <p>Product №1</p>
                <p>Product №1</p>
                <p>Product №1</p>
            </div>
            <div class="title">
                <h1>The number</h1>
                <p>5<span>шт</span></p>
                <p>5<span>шт</span></p>
                <p>5<span>шт</span></p>
            </div>
            <div class="title">
                <h1>The dosage</h1>
                <p>13<span>mg</span></p>
                <p>13<span>mg</span></p>
                <p>13<span>mg</span></p>
            </div>
            <div class="title">
                <h1>The graphic</h1>
                <p>open</p>
                <p>open</p>
                <p>open</p>
            </div>
        </div>

    </div>
</section>



<section class="new" id="new">
    <div class="container">
        <div class="news">
            <h2 class="sub-title">Новости LiveMedKZ !</h2>
            <div class="news-text">Будьте в курсе новостей с LiveMedKZ</div>
            <button class="button" type="button" id="price-action" style="max-width: 250px;">Начать -></button>
            <div class="circ"></div>
            <div class="circ2"></div>
        </div>
    </div>
</section>

@endsection
