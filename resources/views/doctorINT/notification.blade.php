@extends('doctorINT.doctorLayout')

@section('content')
<section class="receipt-title7">
    <div class="container">
        <div class="title7">
            <i class="fa fa-bell"></i>
            <a href="#">
                <h3>All notifications</h3>
            </a>
        </div>
    </div>
</section>

<section class="receipts">
    <div class="container">
        <div class="receipts-lists">
            <div class="left">
                <h3><a href="{{ route('getUserProfile') }}">Mike Piterson</a></h3>
                <h5><span>19</span> years old</h5>
            </div>
            <div class="right">
                <h3>11:00:00</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3><a href="#">Harry Potter</a></h3>
                <h5><span>18</span> years old</h5>
            </div>
            <div class="right">
                <h3>10:00:00</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3><a href="#">Germiona Greinger</a></h3>
                <h5><span>24</span> years old</h5>
            </div>
            <div class="right">
                <h3>09:00:00</h3>
            </div>
        </div>

        <div class="receipts-lists">
            <div class="left">
                <h3><a href="#">Peter Parker</a></h3>
                <h5><span>14</span> years old</h5>
            </div>
            <div class="right">
                <h3>12:00:00</h3>
            </div>
        </div>

    </div>
</section>

@endsection
