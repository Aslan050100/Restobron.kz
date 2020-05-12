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

    <link rel="stylesheet" href="{{ asset('assets/css/reservation.css') }}" type="text/css" />
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

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        .container.main {
            box-shadow: 1px 4px 4px rgba(0, 0, 0, 0.25);
        }
    </style>


</head>



<body>
<header>
    <div class="background1">
        <img src="{{asset('assets/images/'.$product->product_images[0]->image)}}">
    </div>
    <div class="background2">

    </div>
    <div class="navbar" id="navbar">
        <div class="logo top">
            <a href="{{route('simple.index')}}">Restobron</a>
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
            {{$product->name}}
        </h1>
        <p>  {{$product->address}}</p>
    </div>

</header>
<div class="container main">
    <div class="middle_section">
        <form class="" method="post" action="{{route('simple.reserv',[$product->id,Auth::user()->id])}}">
            {{ csrf_field() }}
            <div class="datepickers">
                <div class="date first">
                    <h3>Date</h3>
                    <input id="datepicker" name="date" width="276" />
                    <script>
                        $('#datepicker').datepicker();
                    </script>

                </div>
                <div class="date second">
                    <h3>TIME</h3>
                    <input id="timepicker" name="time" width="276" />
                    <script>
                        $('#timepicker').timepicker();
                    </script>
                </div>
                <div class="people">
                    <h3>PEOPLE</h3>
                    <input type="number" name="adult" width="276" />
                </div>
                <textarea class="commentary" rows="3" cols="100" name="comment"  placeholder="Add a comment..."></textarea>

                <input data-toggle="modal" data-target="#myModal" class="book_yo" type="button" name="" value="BOOK YOUR TABLE">

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="color:black;">Payment</h4>
                            </div>
                            <div class="modal-body">
                                <div class="four_inputs">
                                    <div class="name">
                                        NAME ON CARD
                                    </div>
                                    <input type="text" name="name" placeholder="Name/Surname">
                                    <div class="name">
                                        CARD NUMBER
                                    </div>
                                    <input type="number" name="number" placeholder="---- ---- ---- ----">
                                    <div class="lastones">
                                        <div class="left">
                                            <div class="name">
                                                EXPIRY DATE
                                            </div>
                                            <input type="text" name="card_date" placeholder="MM/YYYY">
                                        </div>
                                        <div class="right">
                                            <div class="name">
                                                CVV
                                            </div>
                                            <input type="text" name="code" placeholder="Code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input class="book_yo" type="submit" name="" value="PAW NOW">
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </form>




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
