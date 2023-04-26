@extends('doctorINT.doctorLayout')

@section('content')
<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fa fa-bell"></i>
            <a href="#"><h2>All notifications</h2></a></div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="recepts-lists">
            <div class="left">
                <h2><a href="user_profile.htm">Mike Piterson</a></h2>
                <h4><span>19</span> years old</h4>
            </div>
            <div class="right">
                <h2>11:00:00</h2>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h2><a href="user_profile.htm">Harry Potter</a></h2>
                <h4><span>18</span> years old</h4>
            </div>
            <div class="right">
                <h2>10:00:00</h2>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h2><a href="user_profile.htm">Germiona Greinger</a></h2>
                <h4><span>24</span> years old</h4>
            </div>
            <div class="right">
                <h2>09:00:00</h2>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h2><a href="user_profile.htm">Peter Parker</a></h2>
                <h4><span>14</span> years old</h4>
            </div>
            <div class="right">
                <h2>12:00:00</h2>
            </div>
        </div>

    </div>
</section>

@endsection
