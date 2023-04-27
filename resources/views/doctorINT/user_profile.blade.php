@extends('doctorINT.doctorLayout')

@section('content')
<section class="receipt-title">
    <div class="container">
        <div class="title6">
            <i class="fas fa-pen" style="color: #130f40"></i>
            <h3><a href="{{ route('setReceipt') }}">Give new receipt</a></h3>
        </div>
    </div>
</section>

<section class="receipts">
    <div class="container">
        <div class="user">
            <div class="pharm_info">
                <h3>Name: Rashid</h3>
                <h3>Lastname: Bukanov</h3>
                <h3>IIN: 020302345678</h3>
                <h3>DOB: 02.03.2002y</h3>
                <h3>Email: RashidBukanov@gmail.com</h3>
            </div>
            <div class="pharm_img">
                <img src="{{ asset('../photo/user.png') }}" alt="UserImage">
            </div>
        </div>
        <div class="receipts">
            <div class="receipts-lists">
                <div class="left">
                    <h3 style="float: left">Receipt <span>№3</span></h3>
                    <h3 style="float: right">02.04.2023</h3>
                    <h3><a href="#">More Information</a></h3>
                </div>
                <div class="right">
                    <h3>The name</h3>
                    <h3>Dosage</h3>
                    <h3>Type of medication</h3>
                </div>
            </div>

            <div class="receipts-lists">
                <div class="left">
                    <h3 style="float: left">Receipt <span>№2</span></h3>
                    <h3 style="float: right">02.04.2023</h3>
                    <h3><a href="#">More Information</a></h3>
                </div>
                <div class="right">
                    <h3>The name</h3>
                    <h3>Dosage</h3>
                    <h3>Type of medication</h3>
                </div>
            </div>

            <div class="receipts-lists">
                <div class="left">
                    <h3 style="float: left">Receipt <span>№1</span></h3>
                    <h3 style="float: right">02.04.2023</h3>
                    <h3><a href="#">More Information</a></h3>
                </div>
                <div class="right">
                    <h3>The name</h3>
                    <h3>Dosage</h3>
                    <h3>Type of medication</h3>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
