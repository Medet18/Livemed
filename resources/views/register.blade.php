<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='index.html'"> <span>Live</span>MedKZ </a>
        </div>

        <div class="login-btn">
            <button class="button" onclick="window.location.href='login.htm'">login</button>
        </div>


    </div>
</header>

<section class="price" id="#">
    <div class="container">
        <form action="" class="price-form">
            <h2 class="sub-title">Registration</h2>
            <label> <input type="text" class="price-input" id="name" placeholder="Your name" required /></label>
            <label> <input type="text" class="price-input" id="lastname" placeholder="Your lastname" required /></label>
            <label> <input type="number" class="price-input" id="phone" placeholder="Phone number" min="12" max="12"> </label>
            <label> <input type="date" class="price-input" id="birth_date" placeholder="Birth date" min="1980-01-01" max="2005-12-31"></label>
            <label> <input type="number" class="price-input" id="iin" placeholder="IIN" min="12" max="12"> </label>
            <label>  <input type="email" class="price-input" id="email" placeholder="Ваше email"> </label>
            <label> <input type="password" class="price-input" id="password" placeholder="Ваш password"> </label>
            <label> <input type="password" class="price-input" id="password_confirmation" placeholder="Password confirmation"> </label>
            <label> <button class="button" type="button" id="price-action">Register</button> </label>
        </form>
        <img src="photo/iphone2.png" alt="Rolls" class="price-image">
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
<script src="js/logo.js"></script>
</body>
</html>
