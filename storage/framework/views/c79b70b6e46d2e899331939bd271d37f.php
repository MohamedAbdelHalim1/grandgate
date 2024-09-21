<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo e($seoMeta->description ?? 'Default description'); ?>">
    <title><?php echo e($seoMeta->title ?? 'Default Title'); ?></title>
    <link rel="website icon" type="png" href="<?php echo e(asset('assets_front/images/icon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_front/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_front/css/about.css')); ?>">
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
                                    <span style="color: #eb242c;">ABOUT US</span>
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
                                    <span class="">CONTACT US</span>
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
                <h1>About Us</h1>
            </div>
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #eb242c;">About Us</li>
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
    <section class="who-we mt-xl-5 mt-lg-5 mt-md-5" oncontextmenu="return false;" oncopy="return false;"
        onpaste="return false;" oncut="return false;" onmousedown="return false;" onselectstart="return false;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 my-auto mx-auto">
                    <h1>
                        Grand Gate Built to last , <br>
                        built to impress.
                    </h1>
                    <div class="line"></div>
                    <h2>
                        Grand Gate, a renowned manufacturer of electronic gates and access control solutions, was
                        approached by a new client with a unique request: a custom-designed gate system for their new
                        building.
                    </h2>
                    <p>
                        Grand Gate's team of engineers and designers quickly got to work, creating a proposal that
                        exceeded the client's expectations in every way. The new gate system was both highly secure and
                        aesthetically pleasing, and it was built with the latest technologies and materials.
                        <br>
                        Grand Gate was proud to have played a role in this project, and their custom-designed gate
                        system was a testament to their commitment to innovation and customer satisfaction.
                    </p>
                    <a class="btn button p-3 mb-3" download href="<?php echo e(asset('assets_front/company profile.pdf')); ?>"
                        role="button">Company Profile</a>
                </div>
                <div class="col-xl-5 col-lg-5 my-auto mx-auto">
                    <img src="<?php echo e(asset('assets_front/images/banner-2.jpg')); ?>" style="width: 100%;">
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!---->
    <section class="num-sec mt-xl-5 mt-lg-5 mt-md-5" oncontextmenu="return false;" oncopy="return false;"
        onpaste="return false;" oncut="return false;" onmousedown="return false;" onselectstart="return false;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div style="width: 80px;" class="mx-auto">
                        <img src="<?php echo e(asset('assets_front/images/icon-1.png')); ?>" style="width: 100%; height: 100%;">
                    </div>
                    <h4>
                        425+
                    </h4>
                    <div class="d-flex justify-content-center">
                        <div class="me-2">
                            <div class="line"></div>
                        </div>
                        <div>
                            <p>
                                Projects
                            </p>
                        </div>
                        <div class="ms-2">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div style="width: 80px;" class="mx-auto">
                        <img src="<?php echo e(asset('assets_front/images/icon-3.png')); ?>" style="width: 100%; height: 100%;">
                    </div>
                    <h4>
                        1000+
                    </h4>
                    <div class="d-flex justify-content-center">
                        <div class="me-2">
                            <div class="line"></div>
                        </div>
                        <div>
                            <p>
                                Clients
                            </p>
                        </div>
                        <div class="ms-2">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div style="width: 80px;" class="mx-auto">
                        <img src="<?php echo e(asset('assets_front/images/icon-2.png')); ?>" style="width: 100%; height: 100%;">
                    </div>
                    <h4>
                        45+
                    </h4>
                    <div class="d-flex justify-content-center">
                        <div class="me-2">
                            <div class="line"></div>
                        </div>
                        <div>
                            <p>
                                workers
                            </p>
                        </div>
                        <div class="ms-2">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <section class="client-logo" oncontextmenu="return false;" oncopy="return false;" onpaste="return false;"
        oncut="return false;" onmousedown="return false;" onselectstart="return false;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <h2>Trusted by businesses and homeowners</h2>
                <div class="line"></div>
                <p>We are proud to be the trusted partner of businesses and homeowners alike</p>
            </div>
            <div id="carouselExampleRide" class="carousel slide show-in-pc" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/53.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/2.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/3.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/4.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/5.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/6.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/7.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/8.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/9.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/10.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/11.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/12.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/13.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/14.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/15.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/16.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/17.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/18.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/19.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/20.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/21.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/22.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/23.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/24.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/25.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/26.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/27.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/28.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/29.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/30.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/31.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/32.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/33.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/34.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/35.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/36.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/37.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/38.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/39.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/40.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/41.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/42.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/43.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/44.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/45.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/46.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/47.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/48.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/49.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/50.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/51.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="<?php echo e(asset('assets_front/images/clients/52.png')); ?>"
                                            style="width: 100%;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"
                        style="background-color: rgba(200, 84, 92,.6)!important; margin-right: 30px;  padding: 20px; border-radius: 50%;"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"
                        style="background-color: rgba(200, 84, 92,.6)!important; margin-left: 30px;  padding: 20px; border-radius: 50%;"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!---->
            <div class="slider-container-mob show-in-mob">
                <div class="slider-mob">
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/53.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/2.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/3.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/4.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/5.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/6.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/7.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/8.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/9.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/10.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/11.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/12.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/13.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/14.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/15.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/16.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/17.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/18.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/19.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/20.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/21.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/22.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/23.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/24.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/25.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/26.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/27.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/28.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/29.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/30.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/31.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/32.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/33.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/34.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/35.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/36.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/37.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/38.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/39.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/40.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/41.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/42.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/43.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/44.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/45.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/46.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/47.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/48.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/49.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/50.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/51.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                    <div class="slide-mob">
                        <img src="<?php echo e(asset('assets_front/images/clients/52.png')); ?>" style="width: 100%;"
                            alt="...">
                    </div>
                </div>

                <button class="prev-mob"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="next-mob"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!---->
    <section class="contact-us mt-xl-5 mt-lg-5 mt-md-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 mx-auto">
                    <h2>We're always <br> looking for ways to <br> improve</h2>
                    <div class="d-flex justify-content-start">
                        <div class="line"></div>
                    </div>
                    <p>
                        Send us an email if you have any Questions , <br> thoughts and suggestions
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 mx-auto">
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
                    <form method="POST" action="<?php echo e(route('contact_post')); ?>">
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
                            <input type="text" class="form-control rounded-0 p-3" name="subject" required
                                placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-0 p-5" name="message" required
                                placeholder="Message">
                        </div>
                        <!-- Google Recaptcha -->
                        <div class="g-recaptcha mt-4" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                        <button type="submit" class="btn p-xl-3 p-lg-3 p-md-3 button rounded-0">Send Mssage</button>
                    </form>
                </div>
            </div>
        </div>
    </section><!---->


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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
    <script src="<?php echo e(asset('assets_front/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_front/js/index.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_front/js/about.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/1216096.cloudwaysapps.com/ncaabhugrv/public_html/resources/views/frontend/about.blade.php ENDPATH**/ ?>