@extends('client.testlayout')

@section('content')

<section class="search">
    <div class="container">
        <div class="poisk">
            <h1>The list of specialization</h1>
        </div>

        <div class="client1">
            <div class="spec">
                <div class="spec_name">
                    <a href="{{ route('getAppointmentTime') }}">Surgeon</a>
                </div>
                <div class="spec_name">
                    <a href="{{ route('getAppointmentTime') }}">Dentist</a>
                </div>
                <div class="spec_name">
                    <a href="{{ route('getAppointmentTime') }}">Therapist</a>
                </div>
                <div class="spec_name">
                    <a href="{{ route('getAppointmentTime') }}">Traumatology</a>
                </div>
                <div class="spec_name">
                    <a href="{{ route('getAppointmentTime') }}">Mammalogist </a>
                </div>
                <div class="spec_name">
                    <a href="{{ route('getAppointmentTime') }}">Cosmetologist</a>
                </div>
            </div>

            <div class="spec">
                <div class="spec_name">
                    <a href="#">Cardiologist</a>
                </div>
                <div class="spec_name">
                    <a href="#">Triologyst</a>
                </div>
                <div class="spec_name">
                    <a href="#">Psychotherapist</a>
                </div>
                <div class="spec_name">
                    <a href="#">Ophthalmologist</a>
                </div>
                <div class="spec_name">
                    <a href="#">Mammalogist </a>
                </div>
                <div class="spec_name">
                    <a href="#">Cosmetologist</a>
                </div>
            </div>

            <div class="spec">
                <div class="spec_name">
                    <a href="#">Neurosurgeon</a>
                </div>
                <div class="spec_name">
                    <a href="#">Orthopedist</a>
                </div>
                <div class="spec_name">
                    <a href="#">Mammalogist</a>
                </div>
                <div class="spec_name">
                    <a href="#">Cosmetologist </a>
                </div>
                <div class="spec_name">
                    <a href="#">Mammalogist </a>
                </div>
                <div class="spec_name">
                    <a href="#">Cosmetologist</a>
                </div>
            </div>

            <div class="spec">
                <div class="spec_name">
                    <a href="#">Neurosurgeon</a>
                </div>
                <div class="spec_name">
                    <a href="#">Orthopedist</a>
                </div>
                <div class="spec_name">
                    <a href="#">Mammalogist </a>
                </div>
                <div class="spec_name">
                    <a href="#">Cosmetologist</a>
                </div>
                <div class="spec_name">
                    <a href="#">Mammalogist </a>
                </div>
                <div class="spec_name">
                    <a href="#">Cosmetologist</a>
                </div>
            </div>

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
