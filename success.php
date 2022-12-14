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
                                <li><a href="einlochlocher.php" class="nav-link">Produkte</a></li>

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
    <br>



    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $amount = $_POST["amount"];
        $result = "Name: " . $name . "<br>" . "Email: " . $email . "<br>" . "Amount: " . $amount;
    }
    ?>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>
        </div>
    </div>


</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>

</html>