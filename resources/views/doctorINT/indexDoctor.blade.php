<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/indexDoctor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.reload()"> <span>Live</span>MedKZ </a>
        </div>

        <div class="tit">
            <h1>DoctorIndex</h1>
        </div>
        <div class="login-btn">
            <button class="button" onclick="window.location.href='../doctor/loginDoctor.htm'">login</button>
        </div>


    </div>
</header>

<section class="main">
    <div class="container">
        <div class="main-info">
            <h1 class="main-title">Make your life <br>safer and more convenient</h1>
            <div class="main-text">
                Our product LiveMedKz, provides convenient services for obtaining medicines,
                as well as prescriptions, on our website you can also get the information you are interested in,
                we advise you to get acquainted with our website closer
            </div>
            <div class="main-action">
                <button class="button" id="main-action">give receipt</button>
            </div>

        </div>
    </div>
</section>


<section class="services" id="services">
    <div class="container">

        <!--    <h1 class="sub-title"> our <span>services</span> </h1>-->

        <div class="box-container">

            <a href="search.htm">
                <div class="box">
                    <i class="fas fa-search" style="background: #ffe0dc; color: #009379;"></i>
                    <h3>Patient search</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                </div>
            </a>

            <a href="notification.htm">
                <div class="box">
                    <i class="fa fa-bell" style="background: #cce9e4; color: #009379;"></i>
                    <h3>Notification</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                </div>
            </a>

            <a href="give_recept.htm">
                <div class="box">
                    <i class="fas fa-pen" style="background: #fef7e5; color: #009379;"></i>

                    <h3>Given receipts</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                </div>
            </a>

            <a href="doctorProfile.htm">
                <div class="box">
                    <i class="fas fa-user" style="background: #cce9e4; color: #009379;"></i>
                    <h3>Личные данные</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                </div>
            </a>

            <a href="">
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
        <div class="news">
            <h2 class="sub-title">Новости LiveMedKZ !</h2>
            <div class="news-text">Будьте в курсе новостей с LiveMedKZ</div>
            <button class="button" type="button" id="price-action" style="max-width: 250px;">Начать -></button>
            <div class="circ"></div>
            <div class="circ2"></div>
        </div>
    </div>
</section>

<div id="app_basic" v-bind:title="timestamp" class="experiment-block">{{ message }}</div>

<footer class="footer">
    <div class="container">
        <div class="logo">
            <a href="#" class="logo"> @ 2023 LiveMedKZ </a>
        </div>

        <div class="rights">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-github"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </div>

    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="../js/index.js"></script>
<script src="../js/logo.js"></script>
</body>
</html>