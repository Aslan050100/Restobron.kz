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

    <link rel="stylesheet" href="{{ asset('assets/css/personal.css') }}" type="text/css" />
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
        <img src="{{ asset('assets/images/back1.jpg')}}">
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
        @if (Session::has('success'))
            <div class="alert alert-info">{{ Session::get('success') }}</div>
        @endif
        <h1>
            BOOK YOUR TABLE ONLINE
        </h1>
        <p>Discover amazing dining experiences in your city and book in seconds</p>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <form method="post" class="form_class" action="{{ route('simple.filter_page') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="custom-select1">
                <select id="cities" name="city">
                    <option value="Nur-Sultan">Nur-Sultan</option>
                    <option value="Almaty">Almaty</option>
                    <option value="Aqtau">Aqtau</option>
                    <option value="Aqtobe">Aqtobe</option>
                </select>
            </div>
            <input class="find_a_rest" type="submit" name="" value="FIND A RESTAURANT">
        </form>
    </div>

</header>



<div class="section2">
    <div class="container">
        <div class="upper_bound">
            <h2>Fine-dining at
                your finger tips</h2>
            <p>We've partnered with the very best eateries in town to give you a carefully curated list of the local fine-dining scene. We genuinely love these places, and we're sure you will too!</p>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/images/logos.jpg')}}">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/images/logos.jpg')}}">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/images/logos.jpg')}}">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/images/logos.jpg')}}">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/images/logos.jpg')}}">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/images/logos.jpg')}}">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/images/logos.jpg')}}">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/images/logos.jpg')}}">
            </div>
        </div>
    </div>

</div>

<div class="section3">
    <div class="background1">
        <img src="{{ asset('assets/images/back2.jpg')}}">
    </div>
    <div class="background2 second">

    </div>
    <div class="wish_a_table">
        <h1>WISH A LAID TABLE?</h1>
        <p>Make an order right now, everything will be ready for your arrival</p>
    </div>

</div>

<div class="section4">
    <div class="container">


        <div class="heading">

            <h1>
                See what our users <br>
                have to say</h1>
            <p> We think we're awesome, but don't just take our word for it! See<br> what our users have to say about restobron </p>

        </div>
        <div class="feedbacks">
            <div class="one_of_three">
                <div class="quote">
                    <img src="{{ asset('assets/images/quote.jpg')}}">
                </div>
                <p>
                    ”Love how I can find the address, directions, menu and get a description - perfect for Dubai with all its restaurants!”
                </p>
                <div class="social_link">
                    <a href="">@Kabidollayeva</a>
                </div>
            </div>
            <div class="one_of_three">
                <div class="quote">
                    <img src="{{ asset('assets/images/quote.jpg')}}">
                </div>
                <p>
                    ”Love how I can find the address, directions, menu and get a description - perfect for Dubai with all its restaurants!”
                </p>
                <div class="social_link">
                    <a href="">@Aslan050100</a>
                </div>
            </div>
            <div class="one_of_three last">
                <div class="quote">
                    <img src="{{ asset('assets/images/quote.jpg')}}">
                </div>
                <p>
                    ”Love how I can find the address, directions, menu and get a description - perfect for Dubai with all its restaurants!”
                </p>
                <div class="social_link">
                    <a href="">@Aknur</a>
                </div>

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


<script>
    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select1");
    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < selElmnt.length; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);







    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.background = "rgba(202, 74, 46, 0.8)";
        } else {
            document.getElementById("navbar").style.background = "transparent";
        }
    }
</script>


</body>


</html>
