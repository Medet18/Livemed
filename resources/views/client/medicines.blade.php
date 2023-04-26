@extends('client.testlayout')

@section('content')

<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-shopping-bag"></i>
            <a href="{{asset('medicines.htm')}}"><h2>A list of medicines</h2></a></div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="recepts-lists">
            <div class="left">
                <h2>The name of medicine</h2>
            </div>
            <div class="right">
                <h2>Without recept</h2>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h2>The name of medicine</h2>
            </div>
            <div class="right">
                <h2>With recept</h2>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h2>The name of medicine</h2>
            </div>
            <div class="right">
                <h2>Without recept</h2>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h2>The name of medicine</h2>
            </div>
            <div class="right">
                <h2>With recept</h2>
            </div>
        </div>

    </div>
</section>

@endsection
