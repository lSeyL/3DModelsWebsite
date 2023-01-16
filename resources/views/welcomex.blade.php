<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Cube - Home</title>
    <link rel="icon" type="image/x-icon" href="https://i.imgur.com/GQ0ZIWh.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('css/welcomepage.css')}}>
</head>
<body>
<div class="container p-5">
    <div class="row align-items-center justify-content-center ">
        <div class="col p-3 float-start">
            <img class="logo" src="https://i.imgur.com/OX4gs9X.png" alt="LOGO">
        </div>
        <div class="col p-3">
            <ul class="nav_links">
                <li class="custom-nav-li"><a href={{url('about')}}>3D Models</a></li>
                <li class="custom-nav-li"><a href={{url('about')}}>Projects</a></li>
                <li class="custom-nav-li"><a href={{url('about')}}>About</a></li>
            </ul>
        </div>
        <div class="col text-start p-3">
            <div class="p-3 float-end">@if (Route::has('login'))
                    <ul>
                        @auth
                            <div>
                                <li><a class="li-button a_color" href="{{ url('/home') }}">Profile</a></li>
                                @else
                                    <li><a class="li-button a_color" href="{{ route('register') }}">Sign Up</a></li>
                                    <!--
                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>





                                    @endif
                                    -->
                            </div>
                        @endauth
                    </ul>
                @endif</div>
        </div>
    </div>

</div>

<div style="box-sizing: border-box; margin: 0; padding: 0; background-color: rgba(0,0,0,0.35)">
    <img class="introImage"
         src="https://cdna.artstation.com/p/assets/images/images/054/938/218/large/leviathan-bb-.jpg?1665714043"
         alt="Intro Image">
</div>
<div class="container containerCards" style="padding: 50px 25px 50px">
    <div class="card">
        <div class="face face1">
            <div class="content">
                <img
                    src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                <h3>Design</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis
                    provident at.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="face face1">
            <div class="content">
                <img
                    src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                <h3>Code</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis
                    provident at.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="face face1">
            <div class="content">
                <img
                    src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                <h3>Launch</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis
                    provident at.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
</div>

<div style="box-sizing: border-box; margin: 0; padding: 0; background-color: rgba(0,0,0,0.3)">
    <img class="introImage"
         src="https://cdnb.artstation.com/p/assets/images/images/054/606/185/large/kevin-jick-sci-fi-city-megastructure-kevinjick.jpg?1664919874"
         alt="Intro Image">
</div>

<!-- TEXT -->
<div class="container customPadding">
    <div class="col">
        <div class="infoContainer">
            <h1 class="info-1">3D Model Marketplace</h1>
            <p class="info-paragraphs">Choose from 1 550 000 3D models for applications such as gaming, AR/VR,
                advertising,
                animation, movies and 3D printing</p>
        </div>
    </div>
</div>

<!-- CAROUSEL -->
<div style="background-color: rgba(0,0,0,0.25)">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="https://cdna.artstation.com/p/assets/images/images/054/008/198/large/jose-vega-building-d.jpg?1663565480"
                    alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img
                    src="https://cdna.artstation.com/p/assets/images/images/054/008/188/large/jose-vega-building-b-copy.jpg?1663565464"
                    alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img
                    src="https://cdnb.artstation.com/p/assets/images/images/054/008/195/large/jose-vega-building-c-copy.jpg?1663565471"
                    alt="New York" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- INFO SECTION BOTTOM -->
<section class="justify-content-center ">
    <div class="container p-2">
        <div class="row align-items-center">
            <div class="col p-5">
                <img class="img-fluid" src="https://www.freeiconspng.com/uploads/laptop-png-33.png" alt="Projects">
            </div>
            <div class="col p-5 section_info_text">
                <h2>3D Projects</h2>
                <h5>Freelance Hub</h5>
                <p>Where people with exciting 3D Projects meet talented 3D designers</p>
                <a class="section_info" href="{{ route('register') }}">Join The Community</a>
            </div>
        </div>
    </div>
</section>

<!-- INFO SECTION BOTTOM -->
<section class="justify-content-center ">
    <div class="container p-2">
        <div class="row align-items-center">
            <div class="col p-5 text-end section_info_text">
                <h2 class=info-1">Join CGTrader Community</h2>
                <h3>Galleries</h3>
                <p>Showcase your best renders, get feedback and recognition</p>
                <h3>Tutorials</h3>
                <p>Learn new skills and teach others</p>
                <h3>Forum</h3>
                <p>Find tutorials and discuss other 3D related matters</p>
                <a class="section_info" href="{{ route('register') }}">Join The Community</a>

            </div>
            <div class="col p-5">
                <img class="img-fluid"
                     src="https://assets.cgtrader.com/assets/home/cgtrader-community-705a6d514dfb8b1f48d2cb74ff0a20a0cdd8d5bbacbe38f9f2e76f277af0ced7.png"
                     alt="Community">
            </div>
        </div>
    </div>
</section>

<!-- FOOTER LINKS -->
<footer style="background-color: rgba(0,0,0,0.3)" class="customPadding">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="footerItems text-center">
                    <li><a href="{{ url('/home') }}">Company</a></li>
                    <li><a href="{{ url('/home') }}">Blog</a></li>
                    <li><a href="{{ url('/home') }}">Events</a></li>
                    <li><a href="{{ url('/home') }}">Careers</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="footerItems  text-center">
                    <li><a href="{{ url('/home') }}">Buy 3D Models</a></li>
                    <li><a href="{{ url('/home') }}">Freelance 3D Projects</a></li>
                    <li><a href="{{ url('/home') }}">Sell 3D Models</a></li>
                    <li><a href="{{ url('/home') }}">Discounts</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="footerItems  text-center">
                    <li><a href="{{ url('/home') }}">Help Center</a></li>
                    <li><a href="{{ url('/home') }}">Contact Us</a></li>
                    <li><a href="{{ url('/home') }}">Community</a></li>
                    <li><a href="{{ url('/home') }}">Forum</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
