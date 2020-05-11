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

    <link rel="stylesheet" href="{{ asset('assets/css/filter_price.css') }}" type="text/css" />
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
    <div class="navbar" id="navbar">
        <div class="logo top">
            <a href="{{route('simple.index')}}">Restobron</a>
        </div>
    </div>


</header>

<div class="container main">
    <div class="middle_section">
        <div class="leftside">
            <form action="/action_page.php">
                <p>PRICE</p>
                <label class="container_check">700-1500 tg
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">1500-3000 tg
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">3000-4500 tg
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">4500-7000 tg
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">7000-10000tg
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">10000-15000 tg
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">15000-25000 tg
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Above 25000 tg
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>

            </form>

            <form action="/action_page.php">
                <p>CUSINE</p>
                <label class="container_check">American
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Asian
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Brazilian
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Chinese
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">European
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Filipino
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">French
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Greek
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>

            </form>

            <form action="/action_page.php">
                <p>FEATURES</p>
                <label class="container_check">Wi-Fi
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Breakfast
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Dance floor
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Live music
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Summer terrace
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Playground
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Hookah
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container_check">Smoking room
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>



            </form>

        </div>
        <div class="rightside">
            @foreach($products as $product)
            <div class="object">

                <div class="background_image">
                    <img src="{{ asset('assets/images/asia_mama.jpg')}}">
{{--                    <img src="assets/images/{{$product->product_images->image}}">--}}
                </div>
                <div class="desc">
                    <div class="restaurant_name">
                        {{$product->name}}
                    </div>
                    <p class="address">{{$product->address}}</p>
                    <form method="get" action="{{ route('simple.detail',[$product->id]) }}">
                        <input class="book_now" type="submit" name="" value="Book now">
                    </form>
                </div>
            </div>
            @endforeach
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
                    <img src="{{ asset('assets/images/phone.jpg')}}">
                    <p>+7 (747) 691-47-27
                    </p>
                </div>
                <div class="social_links">
                    <div>
                        <img src="{{ asset('assets/images/facebook.jpg')}}">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/instagram.jpg')}}">
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
