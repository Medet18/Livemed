@extends('client.testlayout')

@section('content')
<section class="receipt-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-clinic-medical"></i>
            <a href="{{ route('getHospitals') }}"><h3>The Hospitals </h3></a>
        </div>
    </div>
</section>

<section class="receipts1">
    <div class="container">
        <div class="back_fone1">
            <div class="pharm_title1">
                <h1>The hospital <span>№4</span></h1>
                <a href="#">Qazaqstan Almaty,region of Almalinsk,  Ayezova 101<i class="fas fa-map-marker-alt"></i></a>
            </div>
            <div class="pharm_title1">
                <h1>Contacts <i class="fas fa-phone" style="margin-left: 10px"></i></h1>
                <p>8777-999-98-09</p>
                <p>neiron@gmail.com</p>
            </div>
            <div class="pharm_title1">
                <h1>Graphic of works <i class="far fa-calendar" style="margin-left: 10px"></i></h1>
                <p>Пн-Вс, с 09:00 - 23:00 </p>
            </div>
            <div class="pharm_title1">
                <h1>Corporation website <i class="far fa-window-restore" style="margin-left: 10px"></i></h1>
                <p>www.neiron.com</p>
            </div>

        </div>
    </div>
</section>

@endsection
