@extends('doctorINT.doctorLayout')

@section('content')
<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-pen"></i>
            <h2><a href="#">Give new recept</a></h2>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="user">
            <div class="pharm_info">
                <h1>Name: Rashid</h1>
                <h1>Lastname: Bukanov</h1>
                <h1>IIN: 020302345678</h1>
                <h1>DOB: 02.03.2002y</h1>
                <h1>Email: RashidBukanov@gmail.com</h1>
            </div>
            <div class="pharm_img">
                <img src="../../../public/photo/user.png" alt="UserImage">
            </div>
        </div>
        <div class="recepts">
            <div class="recepts-lists">
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

            <div class="recepts-lists">
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

            <div class="recepts-lists">
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
