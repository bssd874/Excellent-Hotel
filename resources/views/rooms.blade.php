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

    <!-- float text begin -->
    <div class="float-text">
        <div class="de_social-icons">
            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
        </div>
        <span><a href="#">Book Now</a></span>
    </div>
    <!-- float text close -->

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
                                        <img class="logo" src="images/Excellent.svg"
                                            alt="">
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

    <div id="background" data-bgimage="url(images/background/6.jpg) fixed"></div>
    <div id="content-absolute">

        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Pilih</h4>
                        <h1>Ruangan</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row g-4">
                    @foreach ($fasilitasKamar as $row)
                    <div class="col-lg-4">
                        <div class="de-room">
                            <div class="d-image">
                                <a href="/details">
                                    <img src="{{ asset('storage/' . $row->image) }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="d-text">
                                <h3>{{$row->tipe_kamar}}</h3>
                                <p>
                                    {{$row->description}}
                                </p>
                                <a href="/details" class="btn-line"><span>Pesan</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </section>
        <!-- subheader close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
</body>

</html>
