@extends('client.testlayout')

@section('content')
<section class="receipt-title">
    <div class="container">
        <div class="title4">
            <i class="fas fa-globe-americas"></i>
            <a href="{{ route('getPharmacies') }}"><h3>A list of pharmacy </h3></a>
        </div>
    </div>
</section>

<section class="receipts">
    <div class="container">
        <div class="back_fone2">
            <div class="pharm_title">
                <h1>The pharmacy <span>№4</span></h1>
                <a href="#">Qazaqstan Almaty,region of Almalinsk,  Ayezova 101<i class="fas fa-map-marker-alt"></i></a>
            </div>
            <div class="pharm_title">
                <h1>Contacts <i class="fas fa-phone" style="margin-left: 10px"></i></h1>
                <p>8777-999-98-09</p>
                <p>8777-999-98-10</p>
            </div>
            <div class="pharm_title">
                <h1>Graphic of works <i class="far fa-calendar" style="margin-left: 10px"></i></h1>
                <p>Пн-Вс, с 09:00 - 23:00 </p>
            </div>

        </div>
    </div>
</section>

@endsection
