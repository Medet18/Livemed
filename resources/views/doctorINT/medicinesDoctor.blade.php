@extends('doctorINT.doctorLayout')

@section('content')
<section class="search">
    <div class="container">
        <div class="poisk">
            <form action="#" class="price-form">
                <input type="text" class="price-input" name="medicine" id="" placeholder="Medicine">
                <button class="button">search</button>
            </form>
        </div>

        <div class="client">
            <a href="#">
                <div class="client-name">
                    <h2>1</h2>
                    <h2>Aspirin</h2>
                    <h2>A02BA01</h2>
                    <h2>39182201</h2>
                    <button class="button">add</button>
                    <button class="btn">delete</button>
                </div>
            </a>
            <a href="#">
                <div class="client-name">
                    <h2>1</h2>
                    <h2>Aspirin</h2>
                    <h2>A02BA01</h2>
                    <h2>39182201</h2>
                    <button class="button">add</button>
                    <button class="btn">delete</button>
                </div>
            </a>
            <a href="#">
                <div class="client-name">
                    <h2>1</h2>
                    <h2>Aspirin</h2>
                    <h2>A02BA01</h2>
                    <h2>39182201</h2>
                    <button class="button">add</button>
                    <button class="btn">delete</button>
                </div>
            </a>
        </div>
        <!--        <div class="res">-->
        <!--            <div class="title">-->
        <!--                <h1>The name of product</h1>-->
        <!--                <p>Product №1</p>-->
        <!--                <p>Product №1</p>-->
        <!--                <p>Product №1</p>-->
        <!--            </div>-->
        <!--            <div class="title">-->
        <!--                <h1>The number</h1>-->
        <!--                <p>5<span>шт</span></p>-->
        <!--                <p>5<span>шт</span></p>-->
        <!--                <p>5<span>шт</span></p>-->
        <!--            </div>-->
        <!--            <div class="title">-->
        <!--                <h1>The dosage</h1>-->
        <!--                <p>13<span>mg</span></p>-->
        <!--                <p>13<span>mg</span></p>-->
        <!--                <p>13<span>mg</span></p>-->
        <!--            </div>-->
        <!--            <div class="title">-->
        <!--                <h1>The graphic</h1>-->
        <!--                <p>open</p>-->
        <!--                <p>open</p>-->
        <!--                <p>open</p>-->
        <!--            </div>-->
        <!--        </div>-->

    </div>
</section>



<section class="new" id="new">
    <div class="container">
        <div class="news" style="min-height: 20rem;">
            <h2 class="sub-title">Новости LiveMedKZ !</h2>
            <div class="news-text">Будьте в курсе новостей с LiveMedKZ</div>
            <button class="button" type="button" id="price-action" style="max-width: 250px;">Начать -></button>
            <div class="circ"></div>
            <div class="circ2"></div>
        </div>
    </div>
</section>


@endsection