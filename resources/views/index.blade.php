@extends('client.testlayout')

@section('content')
    <section class="main" style="background-image:url({{url('/photo/home.webp')}})">
        <div class="container">
            <div class="main-info">
                <h1 class="main-title">Make your life <br>safer and more convenient</h1>
                <div class="main-text">
                    Our product LiveMedKz, provides convenient services for obtaining medicines,
                    as well as prescriptions, on our website you can also get the information you are interested in,
                    we advise you to get acquainted with our website closer
                </div>
                <div class="main-action">
                    <a href="{{ route('getAppointments') }}"><button class="button" id="main-action">Получить appointment</button></a>
                </div>

            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">

            <!--    <h1 class="sub-title"> our <span>services</span> </h1>-->

            <div class="box-container">

                <a href="{{ route('getUserReceipts') }}">
                    <div class="box">
                        <i class="fas fa-scroll" style="background: #ffe0dc; color: #009379;"></i>
                        <h3>Мои рецепты</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                    </div>
                </a>

                <a href="{{ route('getHospitals') }}">
                    <div class="box">
                        <i class="fas fa-align-center" style="background: #cce9e4; color: #009379;"></i>
                        <h3>Список поликлиник</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                    </div>
                </a>

                <a href="{{ route('getMedicines') }}">
                    <div class="box">
                        <i class="fas fa-shopping-bag" style="background: #fef7e5; color: #009379;"></i>

                        <h3>Список лекарств</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                    </div>
                </a>

                <a href="{{ route('getPharmacies') }}">
                    <div class="box">
                        <i class="fas fa-globe-americas" style="background: #ffe0dc; color: #009379;"></i>
                        <h3>Список аптек</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                    </div>
                </a>

                <a href="{{ route('userProfile') }}">
                    <div class="box">
                        <i class="fas fa-user" style="background: #cce9e4; color: #009379;"></i>
                        <h3>Личные данные</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                    </div>
                </a>

                <a href="{{ route('contact') }}">
                    <div class="box">
                        <i class="fas fa-phone" style="background: #fef7e5; color: #009379;"></i>
                        <h3>Поддержка</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                    </div>
                </a>

            </div>
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
