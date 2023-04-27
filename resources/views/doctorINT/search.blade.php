@extends('doctorINT.doctorLayout')

@section('content')

<section class="search">
    <div class="container">
        <div class="poisk4">
            <form action="{{ route('doctor.search') }}" class="price-form4">
                <input type="number" class="price-input4" name="iin" id="" placeholder="IIN" min="12">
                <button class="button">search</button>
            </form>
        </div>

        <div class="client4">
            <a href="{{ route('getUserProfile') }}">
                <div class="client-name4">
                    <h4>1</h4>
                    <h4>020808010101</h4>
                    <h4>Robert</h4>
                    <h4>Gilbert</h4>
                    <h4>05.06.2002</h4>
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
            <button class="button" type="button" id="price-action" style="min-width: 250px;">Начать</button>
            <div class="circ"></div>
            <div class="circ2"></div>
        </div>
    </div>
</section>

@endsection
