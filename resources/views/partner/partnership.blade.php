<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{ asset('assets/css/system.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}" type="text/css" />



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/hamburgers.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mmenu.all.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css" type="text/css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css') }}" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/partner_rest.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/media.css" type="text/css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/maskedinput.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>




</head>

<body>
<header>
    <div class="background1">
        <img src="{{asset('assets/images/asia_mama.jpg')}}">
    </div>
    <div class="background2">

    </div>
    <div class="navbar" id="navbar">
        <div class="logo top">
            <a href="{{route('partner.index')}}">Restobron</a>
        </div>
        @if(!Auth::check())
            <div class="autorization">
                <div class="sign_up">
                    <a href="{{route('simple.signUp')}}">SIGN UP</a>
                </div>
                <div class="login">
                    <a href="{{route('simple.signIn')}}">LOGIN</a>
                </div>
            </div>
        @endif
        @if(Auth::check())
            <div class="autorization">
                <div class="sign_up" >
                    <a href="#">{{Auth::user()->name}}</a>
                    <div class="dropdown-content">
                        <a href="{{route('simple.logout')}}">Logout</a>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="onlinebooking">
        <h1>
            + <span>Restaurant</span>
        </h1>
    </div>

</header>

<div class="container main">
    <div class="middle_section">
        <div class="leftside">
            <form>
                <p>Price</p>
                <div class="tokens">
                    <img src="{{asset('assets/images/seclipse.png')}}">
                    Above 25000
                </div>
            </form>
            <form>
                <p>
                    CUISINE
                </p>
                <div class="tokens">
                    <img src="{{asset('assets/images/seclipse.png')}}">
                    Asian
                </div>
                <div class="tokens">
                    <img src="{{asset('assets/images/seclipse.png')}}">
                    Mexican
                </div>
            </form>
            <form>
                <p>
                    Restaurant features
                </p>
                <div class="tokens">
                    <img src="{{asset('assets/images/seclipse.png')}}">
                    Smoking allowed
                </div>

            </form>

        </div>
        <div class="rightside">
            <div class="minicontainer">

                <h1>ABOUT RESTAURANT</h1>
                <form class="book_yo" action="{{route('partner.add_product')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <h4>Restaurant Name</h4>
                    <textarea style="width: 100%" placeholder="Azia Mama" name="name"></textarea>


                    <h4>Short Description</h4>
                <textarea style="width: 100%" placeholder="Azia Mama, located in the center of Almaty..." name="description"></textarea>
                    <h4>Phone Number</h4>
                    <textarea style="width: 100%" placeholder="+77089429592" name="number"></textarea>

                <h4>Location</h4>
                <div class="address">
                    <textarea style="width: 100%" name="address" placeholder="Dostyk, 32"></textarea>
                </div>
                <h4>Map</h4>
                <div class="address">
                    <textarea style="width: 100%" name="map" placeholder="ifame"></textarea>
                </div>

                <div style="position:relative;overflow:hidden;"><a href="https://yandex.kz/maps/org/1085403697/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Mamma mia & Ciao Pizza</a><a href="https://yandex.kz/maps/162/almaty/category/restaurant/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Ресторан в Алматы</a><a href="https://yandex.kz/maps/162/almaty/category/food_delivery_service/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Доставка еды и обедов в Алматы</a><iframe src="https://yandex.kz/map-widget/v1/-/CSsVJS5q" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>


                    <input type="submit" name="" value="SAVE CHANGES">
                </form>



            </div>

        </div>
    </div>

</div>

<footer>
    <div class="container">
        <div class="logo bottom">
            <a href="">Restobron</a>
        </div>
        <div class="three_blocks">
            <div class="rights">
                <p>© 2020. All rigths reserved.</p>
                <div>
                    <a href="">Terms of use</a>
                </div>
            </div>
            <div class="links">
                <div class="link">
                    <a href="">About us</a>
                </div>
                <div class="link">
                    <a href="">For Partners</a>
                </div>
                <div class="link">
                    <a href="">Payment</a>
                </div>
                <div class="link">
                    <a href="">FAQ</a>
                </div>

            </div>
            <div class="social_media">
                <div class="phone">
                    <img src="{{ asset('assets/images/phone.png')}}">
                    <p>+7 (747) 691-47-27
                    </p>
                </div>
                <div class="social_links">
                    <div>
                        <img src="{{ asset('assets/images/facebook.png')}}">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/instagram.png')}}">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/vk.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


</body>


</html>
