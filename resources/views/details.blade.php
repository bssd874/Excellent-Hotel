<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <title>Excellent Hotel</title>
        <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- CSS Files
        ================================================== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" id="bootstrap">
        <link rel="stylesheet" href="css/plugins.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/color.css" type="text/css">

        <!-- color scheme -->
        <link rel="stylesheet" href="css/colors/brown.css" type="text/css" id="colors">
    </head>

    <body class="has-menu-bar">

        
        <div id="wrapper">
            <!-- header begin -->
            <header class="header-fullwidth transparent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="/">
                                            <img class="logo" src="images/Excellent.svg" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>

                                <div class="de-flex-col">

                                    <ul id="mainmenu">
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li><a href="/about">About</a></li>
                                        <li>
                                            <a href="/rooms">Rooms</a>
                                        </li>
                                        <li><a href="/pesanReservasi">Booking</a></li>
                                    </ul>
                                </div>

                                <div class="de-flex-col">
                                    <div class="d-extra">
                                        <a class="btn-main" href="/login">Login</a>
                                    </div>
                                    <div id="menu-btn"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </header>
            <!-- header close -->

            
        </div>
        <!-- menu overlay close -->

        <div id="background" data-bgimage="url(images/room-single/bg.jpg) fixed"></div>
        <div id="content-absolute">

            <!-- subheader -->
            @foreach($fasilitasKamar as $row)
            <section id="subheader" class="no-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Excellent</h4>
                            <h1>Hotel</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-main" class="no-bg no-top" aria-label="section-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Room Overview</h3>
                                    <p>{{$row->description}}</p>
                                </div>
                                <div class="col-md-4">
                                    <h3>Room Facilities</h3>
                                    <ul class="ul-style-2">
                                        <li>{{$row->fasilitas}}</li>
                                    </ul>
                                </div>
                                </div>
                                    <div class="de-flex-col">
                                        <a href="/pesanReservasi" class="btn-main"><span>Book Now</span></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
            <!-- subheader close -->
            <!-- footer begin -->
            <footer class="no-top pl20 pr20">
                <div class="subfooter">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">&copy; Copyright 2022 - Excellent Hotel by <span class="id-color">Designesia</span></div>
                            <div class="col-md-6 text-right">
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top"></a>
            </footer>
            <!-- footer close -->
        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/designesia.js"></script>
    </body>
</html>
