<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo e($seoMeta->description ?? 'Default description'); ?>">
    <title><?php echo e($seoMeta->title ?? 'Default Title'); ?></title>
    <link rel="website icon" type="png" href="<?php echo e(asset('assets_front/images/icon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_front/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_front/css/contact.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@200&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://kit.fontawesome.com/cbcafb1e3c.js" crossorigin="anonymous"></script>
    <script async src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body>
    <header class="header-image " oncontextmenu="return false;" oncopy="return false;" onpaste="return false;"
        oncut="return false;" onmousedown="return false;" onselectstart="return false;">
        <!--navbar-->
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light main-nav">
                <div class="container">
                    <a class="navbar-brand logo" href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(asset('assets_front/images/logo.png')); ?>" style="width: 40%; height: 100%;"
                            alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link active rounded-1" aria-current="page" href="<?php echo e(url('/')); ?>">
                                    <span>HOME</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active rounded-1" aria-current="page"
                                    href="<?php echo e(route('about-us', $lang)); ?>">
                                    <span class="">ABOUT US</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('products', $lang)); ?>">
                                    <span class="">PRODUCTS</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('projects', $lang)); ?>">
                                    <span class="">PROJECTS</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('blog', $lang)); ?>">
                                    <span class="">BLOG</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('contact-us', $lang)); ?>">
                                    <span style="color: #eb242c;">CONTACT US</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('change-lang', 'ar')); ?>">
                                    <span class="">العربية</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--end navbar-->


        <div class="d-flex justify-content-between header-content">
            <div>
                <h1>Contact Us</h1>
            </div>
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #eb242c;">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <img src="<?php echo e(asset('assets_front/images/sub-banner.jpg')); ?>" class="mob"
                    style="width: 100%; height: 100%;">
            </div>
        </div>

    </header>

    <!---->
    <section class="contact mt-xl-5 mt-lg-5 mt-md-5">

        <div class="container">
            <div class="row justify-content-around">
                <div class="col-xl-6 col-lg-6 my-auto mb-3">
                    <?php if(session()->has('success') > 0): ?>
                        <div class="row alert alert-success fade show" role="alert">
                            <div class="col-11 text-lg-left"><?php echo e(session()->get('success')); ?></div>
                            <div class="col-1 close">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    <?php elseif(session()->has('error') > 0): ?>
                        <div class="alert alert-danger" role="alert">
                            <div class="alert-text">
                                <h4 class="alert-heading">Input Errors !</h4>
                                <p>Some Error has been happened with New Inputs as Follows :</p>
                                <hr>
                                <p class="mb-0"><?php echo e(session()->get('error')); ?></p>

                            </div>
                            <div class="col-1 close">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div>
                        <h2>Send Message</h2>
                        <div class="line"></div>
                    </div>
                    <form method="post" action="<?php echo e(route('contact_post')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="mb-3">
                            <div class="d-flex justify-content-center">
                                <div class="me-3" style="width: 50%;">
                                    <input type="text" class="form-control rounded-0 p-3" name="name" required
                                        placeholder="Your Name">
                                </div>
                                <div style="width: 50%;">
                                    <input type="email" class="form-control rounded-0 p-3" name="email" required
                                        placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control rounded-0 p-3" name="phone" required
                                placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-0 p-5" name="message" required
                                placeholder="Message">
                        </div>
                        <!-- Google Recaptcha -->
                        <div class="g-recaptcha mt-4" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                        <button type="submit" class="btn p-xl-3 p-lg-3 p-md-3 button rounded-0">Send Mssage</butt>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-5 my-auto">
                    <div>
                        <h2>Contact Details</h2>
                        <div class="line"></div>
                    </div>
                    <p>
                        We're always looking for ways to improve . <br>
                        Send us an email if you have any Questions , thoughts and suggestions .
                    </p>
                    <div class="d-flex justify-content-start mt-4">
                        <div class="me-3 my-auto">
                            <div class="p-3 circle">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                        <div>
                            <h4>Address</h4>
                            <p>
                                Al-Fardous Investment City, first on Al-Wahat Road,in front of Dreamland .
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-2">
                        <div class="me-3 my-auto">
                            <div class="p-3 circle">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p class="text-decoration-underline fw-bold">
                                Info@grandgate-doors.com<br>
                                sales@grandgate-doors.com
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-2">
                        <div class="me-3 my-auto">
                            <div class="p-3 circle">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <p>
                                01111222011
                                <br>
                                01033326433
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!---->
    <section class="map mt-xl-5 mt-lg-5 mt-md-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3457.1559574663115!2d31.04620097554993!3d29.946192374973226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjnCsDU2JzQ2LjMiTiAzMcKwMDInNTUuNiJF!5e0!3m2!1sen!2seg!4v1699474324926!5m2!1sen!2seg"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!---->


    <!--
        <section class="social-platform  mb-xl-5 mb-lg-5 mb-md-5">
        <div class="container text-center">
            <div class="row justify-content-between mx-auto">
                <h2 class="fw-lighter mb-5">Get In Touch With Us !</h2>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 mb-3">
                    <a href="https://twitter.com/GrandGate1">
                        <div  class="p-3 circle mx-auto">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                    </a>
                    <h4 class="mt-2 fw-lighter">Twitter</h4>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 mb-3">
                    <a  href="https://www.youtube.com/@Grandgate1" >
                        <div class="p-3 circle mx-auto">
                            <i class="fa-brands fa-youtube"></i>
                        </div>
                    </a>
                    <h4 class="mt-2 fw-lighter">Youtube</h4>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 mb-3">
                    <a href="https://www.instagram.com/grandgate1/" >
                        <div class="p-3 circle mx-auto">
                            <i class="fa-brands fa-square-instagram"></i>
                        </div>
                    </a>
                    <h4 class="mt-2 fw-lighter">Instagram</h4>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 mb-3">
                    <a href="https://www.facebook.com/profile.php?id=100063859848274" >
                        <div class="p-3 circle mx-auto">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                    </a>
                    <h4 class="mt-2 fw-lighter">Facebook</h4>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 mb-3">
                    <a href="https://www.linkedin.com/company/grandgate1/">
                        <div  class="p-3 circle mx-auto">
                            <i class="fa-brands fa-linkedin"></i>
                        </div>
                    </a>
                    <h4 class="mt-2 fw-lighter">LinkedIn</h4>
                </div>
            </div>
        </div>
    </section>
    -->


    <!--start footer-->
    <footer>
        <div class="container main-footer">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3">
                    <h6 class="mb-3">GRAND GATE</h6>
                    <ul>
                        <li>
                            <div class="d-flex justify-content-start mb-1">
                                <a href="https://twitter.com/GrandGate1">
                                    <div class="p-2 icon me-2">
                                        <i class="fa-brands fa-twitter"></i>
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/grandgate1/">
                                    <div class="p-2 icon me-2">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/@Grandgate1">
                                    <div class="p-2 icon me-2">
                                        <i class="fa-brands fa-youtube"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-start mb-3">
                                <a href="https://www.linkedin.com/company/grandgate1/">
                                    <div class="p-2 icon me-2">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </div>
                                </a>
                                <a
                                    href="https://api.whatsapp.com/send/?phone=%2B201111222011&text&type=phone_number&app_absent=0">
                                    <div class="p-2 icon me-2">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </div>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100063859848274">
                                    <div class="p-2 icon">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <p class="text-white">
                                Bring to the table win-win survival strategies to ensure proactive.
                            </p>
                        </li>

                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 icons-footer">
                    <h6 class="mb-3">WHO WE ARE</h6>
                    <ul>
                        <li>
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about-us', $lang)); ?>">About us</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('products', $lang)); ?>">Products</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('projects', $lang)); ?>">Projects</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('blog', $lang)); ?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('contact-us', $lang)); ?>">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <h6 class="mb-3">CONTACT US</h6>
                    <ul>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i
                                        class="fa-solid fa-location-dot"></i></span>
                                Al-Fardous Investment City, first on Al-Wahat Road, in front of Dreamland
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i class="fa-solid fa-phone"></i></span>
                                01111222011
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i class="fa-solid fa-phone"></i></span>
                                01033326433
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i
                                        class="fa-solid fa-building-user"></i></span>
                                0238875358
                            </p>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="d-flex justify-content-between text-center small-footer">
            <div class="mx-auto my-auto" style="width: 33%;">
                <img src="<?php echo e(asset('assets_front/images/logo.png')); ?>">
            </div>
            <div class="mx-auto my-auto" style="width: 65%;">
                <small>Copyright 2023 - GRAND GATE by Arena</small>
            </div>
            <!--
                  <div class="mx-auto my-auto" style="width: 33%;">
                <div class="d-flex justify-content-center">
                    <a href="https://www.facebook.com/profile.php?id=100063859848274&mibextid=PzaGJu">
                        <div class="p-xl-2 p-lg-2 p-md-2 circle me-3">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                    </a>
                    <a href="tel:+201111222011">
                        <div class="p-xl-2 p-lg-2 p-md-2 circle me-3">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=%2B201111222011&text&type=phone_number&app_absent=0">
                        <div class="p-xl-2 p-lg-2 p-md-2 circle">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                    </a>
                </div>
            </div>
            -->
        </div>
    </footer>
    <!--end footer-->

    <!--button-Up-->
    <div class="button-up shadow-lg">
        <span>
            <i class="fa-solid fa-chevron-up"></i>
            <p>TOP</p>
        </span>
    </div>

    <!-- script tags -->
    <script src="<?php echo e(asset('assets_front/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_front/js/index.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/1216096.cloudwaysapps.com/ncaabhugrv/public_html/resources/views/frontend/contact.blade.php ENDPATH**/ ?>