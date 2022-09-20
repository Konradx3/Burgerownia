<?php

namespace Templates;

class Page
{
    public static function displayHeader($title)
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <!-- Basic -->
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <!-- Site Metas -->
            <meta name="keywords" content="" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <link rel="shortcut icon" href="images/favicon.png" type="">
            <title> <?=$title?> </title>
            <!-- bootstrap core css -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <!--owl slider stylesheet -->
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
            <!-- nice select  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
            <!-- font awesome style -->
            <link href="css/font-awesome.min.css" rel="stylesheet" />
            <!-- Custom styles for this template -->
            <link href="css/style.css" rel="stylesheet" />
            <!-- responsive style -->
            <link href="css/responsive.css" rel="stylesheet" />
        </head>
        <body class="bg-dark">
        <?php
    }
    public static function displayNavigation()
    {
        ?>
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="https://<?=ROOT_LANDING_URL?>">
            <span>
              Burgerownia
            </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item active">
                                <a class="nav-link" href="https://<?=ROOT_LANDING_URL?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://<?=ROOT_LANDING_URL?>/menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://<?=ROOT_LANDING_URL?>/onas">O Nas</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="https://<?=ROOT_LANDING_URL?>/zamowienie" class="order_online">Zamów online</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <?php
    }
    public static function displayFooter()
    {
        ?>
        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-col">
                        <div class="footer_contact">
                            <h4>Kontakt</h4>
                            <div class="contact_link_box">
                                <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Miejsce</span>
                                </a>
                                <a href=""><i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Tel: +48 123 456 789</span>
                                </a>
                                <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>burgerownia@gmail.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-col">
                        <div class="footer_detail">
                            <a href="" class="footer-logo">Burgerownia</a>
                            <p>Dodaj krótki opis i social media</p>
                            <div class="footer_social">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-col">
                        <h4>Godziny otwarcia</h4>
                        <p>Codziennie</p>
                        <p>8:00 - 20:00</p>
                    </div>
                </div>
                <div class="footer-info">
                    <p>
                        &copy; <span id="displayYear"></span> Strona zrobiona przez:
                        <a class="text-primary" href="https://github.com/Konradx3">Konrad</a><br><br>
                        &copy; <span id="displayYear"></span> Distributed By
                        <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </footer>
        <!-- footer section -->

        <!-- jQery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <!-- owl slider -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <!-- isotope js -->
        <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
        <!-- nice select -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
        </script>
        <!-- End Google Map -->

        </body>

        </html>
    <?php
    }
}

