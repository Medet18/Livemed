<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../../../resources/css/index.css">
    <link rel="stylesheet" href="../../../resources/css/purchase_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>
<>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='../index.html'"> <span>Live</span>MedKZ </a>
        </div>

        <nav class="menu">
            <ul>
                <li class="menu-item">
                    <a href="#" onclick="window.location.href='../index.html'">Главная</a>
                </li>

                <li class="menu-item">
                    <a href="#">Запись</a>
                </li>

                <li class="menu-item">
                    <a href="#">Получить рецепт</a>
                </li>
                <li class="menu-item">
                    <a href="#">City</a>
                </li>
            </ul>
        </nav>

        <!--        <div class="cities">-->
        <!--            <button class="btn">City</button>-->
        <!--        </div>-->
        <!--        <div id="login-btn">-->
        <!--            <button class="btn">login</button>-->
        <!--        </div>-->


    </div>
</header>

<section class="recept-title">
    <div class="container">
        <div class="title" id="hv" style="display: flex; align-items: center;">
            <i class="fas fa-scroll"></i>
            <a href="purchase.blade.php"><h2>My purchases</h2></a>
        </div>
        <div class="title">
            <h2>The Order <span>№4</span></h2>
            <h2>04.04.2023</h2>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="back_fone">
            <h1>The name of product</h1>
            <div class="recepts-lists">
                <div class="left">
                    <h3>Citramon</h3>
                </div>
                <div class="left">
                    <h3>Antigripin</h3>
                </div>
                <div class="left">
                    <h3>Mukaltin</h3>
                </div>
                <div class="pharm_qr">
                    <img src="../photo/qr_code.png" alt="QR">
                </div>
            </div>
        </div>
    </div>
</section>





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
<script src="../../../resources/js/logo.js"></script>

</body>
</html>
