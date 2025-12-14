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
                                    <a href="02-index.html">
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
                                    <a class="btn-main" href="/pesanReservasi">Booking</a>
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

    <div id="background" data-bgimage="url(images/background/2.jpg) fixed"></div>
    <div id="content-absolute">

        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Kami Adalah</h4>
                        <h1>Excellent Hotel</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6">
                        <div class="spacer-double sm-hide"></div>
                        <img src="images/misc/1.jpg" alt="" class="img-responsive wow fadeInUp"
                            data-wow-duration="1s">
                    </div>

                    <div class="col-lg-3 col-6">
                        <img src="images/misc/2.jpg" alt="" class="img-responsive wow fadeInUp"
                            data-wow-duration="1.5s">
                    </div>

                    <div class="col-lg-6 wow fadeIn">
                        <div class="padding20">
                            <h2 class="title mb10">Pengalaman Ternyaman<br>Yang Akan Selalu Kamu Ingat
                                <span class="small-border"></span>
                            </h2>

                            <p>Menginap di hotel atau penginapan yang nyaman merupakan salah satu cara terbaik untuk
                                menikmati perjalanan, baik itu untuk liburan ataupun perjalanan bisnis.Oleh karena itu
                                Excellent Hotel sebagai hotel bintang 5 hadir untuk menjadi solusi anda,anda bisa dengan
                                mudah menemukan kamar yang pas dengan selera dan bujet anda mulai dari kamar yang murah
                                sampai dengan kamar yang mewah.Nah, momen mencari kamar terbaik ini juga menjadi hal
                                yang penting, khususnya bagi Anda yang berencana liburan bersama keluarga. Anda perlu
                                melengkapi informasi mengenai fasilitas dan keunikan yang ditawarkan dari masing-masing
                                hotel untuk menyesuaikannya dengan kebutuhan Anda.</p>

                            <a href="02-room-2-cols.html" class="btn-line"><span>Choose Room</span>s</a>

                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>


                <div class="spacer-double"></div>

                <div class="row gx-4">
                    <div class="col-lg-12 text-center">
                        <h2 class="title center">Hotel Facilities
                            <span class="small-border"></span>
                        </h2>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        @foreach ($fasilitasHotel as $row)
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ asset('storage/' . $row->image) }}"
                                        alt=" {{ $row->nama_fasilitas }} " style="border-radius: 5px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><a> {{ $row->nama_fasilitas }} </a></h5>
                                        <p class="card-text"> {{ $row->keterangan }} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>

        <!-- subheader close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="form.js"></script>
</body>

</html>
