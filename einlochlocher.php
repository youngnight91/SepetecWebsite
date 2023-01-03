<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Pocketlocher</title>

    <style>
        .col {
            padding: 1rem;
            background-color: aquamarine;
            border: 2px solid rebeccapurple;
            color: pink;
        }

        body {
            background-color: #E7E7E7;
            /*font-family: "Montserrat", sans-serif;*/
            color: cornflowerblue;
        }


        /* GALLERY SLIDESHOW */
        * {
            box-sizing: border-box
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 600px;
            max-height: 400px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            justify-items: flex-start;
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 4s;
            animation: fade 2s 1 forwards;
        }

        .modal-backdrop {
            background-color: rgba(0, 0, 0, .0001) !important;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body>
    <div class="fixed-top">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar site-navbar-target bg-white" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-lg-4">
                        <nav class="site-navigation text-right ml-auto " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                                <li><a href="products.html" class="nav-link">Produkte</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="site-logo">
                            <img class="header-img" src="images/Sepetec_Logo.png">
                        </div>


                        <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#"
                                class="site-menu-toggle py-5 js-menu-toggle text-black"><span
                                    class="icon-menu h3 text-black"></span></a></div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="site-navigation text-left mr-auto " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li><a href="staff.html" class="nav-link">Team</a></li>

                                <li><a href="contact.html" class="nav-link">Kontakt</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <b>
                <hr>
            </b>
        </header>
    </div>

    <!-- Abstand weil Navbar durchsichtig ist -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



    <!-- Eigentliche Seite -->
    <!-- Shortcut for creating a container: .container + tab -->
    <div class="container">
        <div class="row">
            <div class="col-sm-fluid">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 2</div>
                        <img src="images/einlochlocher_1.jpeg" class="img-fluid">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 2</div>
                        <img src="images/einlochlocher_2.jpeg" class="img-fluid">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </div>

            <div class="col-sm my-5 align-items-center"
                style="display: flex; justify-content: center; vertical-align: center;">
                <div class="start">
                    <h1> Pocketlocher </h1>
                    <p style="margin-top: center; margin-bottom: center; border-top: 0px;"> Purchase now </p>
                    <button class="btn btn-primary btn-sm text-center" data-toggle="modal"
                        data-target="#modalSubscriptionForm">Order</button>
                </div>
            </div>

            <form method="POST" action="success.php">
                <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Order</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient</label>
                                    <input type="text" class="form-control" name="name" id="recipient-name"
                                        onkeydown="return /[a-z, ]/i.test(event.key)" required>
                                        <!-- Validation: only string + space input -->
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="recipient-email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-number" class="col-form-label">Amount</label>
                                    <input type="number" min="0" max="100" class="form-control" name="amount"
                                        id="recipient-number" required>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-indigo" name="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <script>
                /// 
                //Slider JS
                ///
                let slideIndex = 1;
                showSlides(slideIndex);

                // Next/previous controls
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                // Thumbnail image controls
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) { slideIndex = 1 }
                    if (n < 1) { slideIndex = slides.length }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                } 
            </script>


</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>

</html>