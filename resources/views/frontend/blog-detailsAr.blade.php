<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $seoMeta->description ?? 'Default description' }}">
    <title>{{ $seoMeta->title ?? 'Default Title' }}</title>
    <link rel="website icon" type="png" href="{{ asset('assets_front/images/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/ar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://kit.fontawesome.com/cbcafb1e3c.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header-image " oncontextmenu="return false;" oncopy="return false;" onpaste="return false;"
        oncut="return false;" onmousedown="return false;" onselectstart="return false;">
        <!--navbar-->
        <div class="nav-bar rtl">
            <nav class="navbar navbar-expand-lg navbar-light main-nav">
                <div class="container">
                    <a class="navbar-brand logo" href="{{ url('/') }}">
                        <img src="{{ asset('assets_front/images/logo.png') }}" style="width: 40%; height: 100%;"
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
                                <a class="nav-link active rounded-1" aria-current="page" href="{{ url('/') }}">
                                    <span>الرئيسية</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active rounded-1" aria-current="page"
                                    href="{{ route('about-us', $lang) }}">
                                    <span>من نحن</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="{{ route('products', $lang) }}">
                                    <span class="">المنتجات</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="{{ route('projects', $lang) }}">
                                    <span class="">المشاريع</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="{{ route('blog', $lang) }}">
                                    <span class="">مقالات</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="{{ route('contact-us', $lang) }}">
                                    <span class="">تواصل معنا</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="{{ route('change-lang', 'en') }}">
                                    <span class="">English</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--end navbar-->


        <div class="d-flex justify-content-between header-content rtl">
            <div>
                <h1>مقالات</h1>
            </div>
            <div class="breadcrumbs">
                <a href="{{ url('/') }}">الصفحة الرئيسية</a>
                <span> / </span>
                <a href="{{ route('blog', $lang) }}">مقالات</a>
                <span> / </span>
                <span style="color: #eb242c;">تفاصيل المقالة</span>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <img src="{{ asset('assets_front/images/sub-banner.jpg') }}" class="mob"
                    style="width: 100%; height: 100%;">
            </div>
        </div>

    </header>

    <!---->
    <section class="blog mt-xl-5 mt-lg-5 mt-md-5 mb-xl-5 mb-lg-5 mb-md-5 rtl" oncontextmenu="return false;"
        oncopy="return false;" onpaste="return false;" oncut="return false;" onmousedown="return false;"
        onselectstart="return false;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8  border border-1 p-4">
                    <h2 class="mb-4">
                        <span style="color: #c8545c; font-size: medium;">Why choose us ?</span><br>
                        Grand Gate : {{$post->title_ar}}
                    </h2>
                    <img src="{{ asset('assets_front/images/blog.jpg') }}" style="width: 100%;">
                    <p class="mt-4">
                       {{$post->description_ar}}
                    </p>
                    <h3>There are many reasons why businesses choose Grand Gate. Here are just a few :</h3>
                    <h4>Commitment</h4>
                    <p>
                        We are committed to providing our clients with the highest quality products and services. We use
                        only the best materials and construction methods to ensure that our gates are durable, reliable,
                        and secure. We also offer a comprehensive warranty on all of our products, so you can be
                        confident that you are making a wise investment.
                    </p>
                    <h4>Responsibility</h4>
                    <p>
                        We take our responsibility to our clients seriously. We understand that when you trust us with
                        your security, you are placing your business in our hands. That's why we go above and beyond to
                        ensure that your gates are installed correctly and that they meet all of your safety and
                        security requirements.
                    </p>
                    <h4>Time</h4>
                    <p>
                        We know that time is money for businesses. That's why we offer prompt and efficient installation
                        services. We will work with you to schedule a time that is convenient for your business, and we
                        will get the job done quickly and without disruption.
                    </p>
                    <p>
                        If you are looking for a reliable and trustworthy partner for your automatic gates, roller
                        shutters, and emergency gates, <a href="{{ route('contact-us', $lang) }}"
                            style="color: #c8545c; font-weight: bolder;">contact Grand Gate today</a> . We will be
                        happy
                        to discuss your needs
                        and recommend the best solution for your business.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!--start footer-->
    <footer>
        <div class="container main-footer rtl">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3">
                    <h6 class="mb-3">جراند جيت</h6>
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
                                    <div class="p-2 icon me-2">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <p class="text-white">
                                أحضر إلى الطاولة استراتيجيات البقاء المربحة للجانبين لضمان استباقية .
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 icons-footer">
                    <h6 class="mb-3">من نكون نحن </h6>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">الرئيسية</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us', $lang) }}">من نحن</a>
                        </li>
                        <li>
                            <a href="{{ route('products', $lang) }}">المنتجات</a>
                        </li>
                        <li>
                            <a href="{{ route('projects', $lang) }}">المشاريع</a>
                        </li>
                        <li>
                            <a href="{{ route('blog', $lang) }}">مقالات</a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us', $lang) }}">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <h6 class="mb-3">تواصل معنا</h6>
                    <ul>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i
                                        class="fa-solid fa-location-dot"></i></span>
                                مدينة الفردوس الاستثمارية أول طريق الواحات أمام دريم لاند
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
                {{--  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 images-footer">
                    <h6 class="mb-3">المشاريع</h6>
                    <div class="d-flex justify-content-center mb-3">
                        @foreach ($footer as $project)
                            <div class="square-footer ms-2">
                                <a href="{{ route('project_details', ['lang' => $lang, 'slug' => $project->slug]) }}">
                                    <img src="{{ asset($project->cover) }}" style="width: 100%; height: 100%;">
                                    <div class="overlay">
                                        <div class="text">شاهد المزيد</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>  --}}
            </div>
        </div>
        <div class="d-flex justify-content-between text-center small-footer rtl">
            <div class="mx-auto my-auto" style="width: 33%;">
                <img src="{{ asset('assets_front/images/logo.png') }}">
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
    <!--end footer-->


    <!--button-Up-->
    <div class="button-up shadow-lg">
        <span>
            <i class="fa-solid fa-chevron-up"></i>
            <p>لأعلى</p>
        </span>
    </div>

    <!-- script tags -->
    <script src="{{ asset('assets_front/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets_front/js/index.js') }}"></script>
</body>

</html>
