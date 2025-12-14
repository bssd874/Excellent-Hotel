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

        <!-- menu overlay begin -->
        <div id="menu-overlay" class="slideDown">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12">
                        <div id="mo-button-close">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                        </div>

                        <div class="pt80 pb80">
                            <div class="mo-nav text-center">
                                <a href="/">
                                    <img class="logo" src="images/Excellent.svg"
                                        alt="">
                                </a>

                                <div class="spacer-single"></div>

                                <!-- mainmenu begin -->
                                <ul id="mo-menu">
                                    <li>
                                        Home
                                        <ul>
                                            <li><a href="02-index.html">Fullscreen Slider</a></li>
                                            <li><a href="02-index-slider-2.html">Fullscreen Slider 2</a></li>
                                            <li><a href="02-index-slider-3.html">Fullscreen Slider 3</a></li>
                                            <li><a href="02-index-full-page.html">Full Page</a></li>
                                            <li><a href="02-index-video-background.html">Fullsreen Video</a></li>
                                            <li><a href="02-index-room-slider-1.html">New: Room Slider 1</a></li>
                                            <li><a href="02-index-snowy.html">New: Slider + Snow</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="02-about.html">About</a></li>
                                    <li>
                                        Rooms
                                        <ul>
                                            <li><a href="02-room-2-cols.html">2 Columns</a></li>
                                            <li><a href="02-room.html">3 Columns</a></li>
                                            <li><a href="02-room-single.html">Room Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="02-booking.html">Booking</a></li>
                                    <li><a href="02-offer.html">Offers</a></li>
                                    <li><a href="02-blog.html">Blog</a></li>
                                    <li><a href="02-gallery.html">Gallery</a></li>
                                    <li><a href="02-contact.html">Contact</a></li>
                                </ul>
                                <!-- mainmenu close -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu overlay close -->

    <div id="background" data-bgimage="url(images/background/2.jpg) fixed"></div>
    <div id="content-absolute">

        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Booking</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="de-content-overlay">
                            <form name="contactForm" id='contact_form' method="post"
                                action="<?php echo e(route('pesanReservasi.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <div id="step-1" class="row">
                                    <div class="col-md-12 mb10">
                                        <h4>Check In</h4>
                                        <input type="date" class="form-control" name="tgl_check_in" >
                                        <h4>Check Out</h4>
                                        <input type="date" class="form-control" name="tgl_check_out">
                                    </div>
                                </div>

                                <div class="select-room">
                                    <h4>Select Room</h4>
                                    <select name="tipe_kamar" id="tipe_kamar" class="form-control" required
                                    value="<?php echo e(old('tipe_kamar')); ?>">
                                    <?php $__currentLoopData = $dataKamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->tipe_kamar); ?>"><?php echo e($row->tipe_kamar); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-12 mb10">
                                    <div id='name_error' class='error'>Please enter your name.</div>
                                    <div>
                                        <input type='number' name='jumlah_kamar' id='jumlah_kamar'
                                            class="form-control" placeholder="Input jumlah kamar" required>
                                    </div>
                                </div>
                                <div id="step-2" class="row">
                                    <h4>Enter your details</h4>

                                    <div class="col-md-12 mb10">
                                        <div id='name_error' class='error'>Please enter your name.</div>
                                        <div>
                                            <input type='text' name='nama_tamu' id='nama_tamu'
                                                class="form-control" placeholder="nama" required
                                                value="<?php echo e(old('nama_tamu')); ?>" autofocus>
                                        </div>

                                        <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                        <div>
                                            <input type='email' name='email' id='email' class="form-control"
                                                placeholder="Email" required value="<?php echo e(old('email')); ?>">
                                        </div>

                                        <div id='phone_error' class='error'>Please enter your phone number.</div>
                                        <div>
                                            <input type='text' name='no_hp' id='no_hp' class="form-control"
                                                placeholder="No HP" required value="<?php echo e(old('no_hp')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-btn">
                                            <p id='submit' class="mt20 form-btn">
                                                <input type='submit' value='PESAN' class="btn btn-line">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="form.js"></script>
</body>

</html>
<?php /**PATH D:\hotel-hebat-Boni\resources\views/tamu/pesanReservasi.blade.php ENDPATH**/ ?>