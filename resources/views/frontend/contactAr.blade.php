<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $seoMeta->description ?? 'Default description' }}">
    <title>{{ $seoMeta->title ?? 'Default Title' }}</title>
    <link rel="website icon" type="png" href="{{ asset('assets_front/images/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/ar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://kit.fontawesome.com/cbcafb1e3c.js" crossorigin="anonymous"></script>
    <script async src="https://www.google.com/recaptcha/api.js"></script>
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
                                    <span style="color: #eb242c;">تواصل معنا</span>
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
                <h1>تواصل معنا</h1>
            </div>
            <div class="breadcrumbs">
                <a href="{{ url('/') }}">الصفحة الرئيسية</a>
                <span> / </span>
                <span style="color: #eb242c;">تواصل معنا</span>
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
    <section class="contact mt-xl-5 mt-lg-5 mt-md-5 rtl">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-xl-6 col-lg-6 my-auto mb-3">
                    @if (session()->has('success') > 0)
                        <div class="row alert alert-success fade show" role="alert">
                            <div class="col-11 text-lg-left">{{ session()->get('success') }}</div>
                            <div class="col-1 close">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @elseif(session()->has('error') > 0)
                        <div class="alert alert-danger" role="alert">
                            <div class="alert-text">
                                <h4 class="alert-heading">Input Errors !</h4>
                                <p>Some Error has been happened with New Inputs as Follows :</p>
                                <hr>
                                <p class="mb-0">{{ session()->get('error') }}</p>

                            </div>
                            <div class="col-1 close">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    <div>
                        <h2>ارسال رسالة</h2>
                        <div class="line"></div>
                    </div>
                    <form method="post" action="{{ route('contact_post') }}">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <div class="d-flex justify-content-center">
                                <div class="ms-3" style="width: 50%;">
                                    <input type="text" class="form-control rounded-0 p-3" name="name" required
                                        placeholder="الاسم">
                                </div>
                                <div style="width: 50%;">
                                    <input type="email" class="form-control rounded-0 p-3" name="email"required
                                        placeholder="البريد الالكتروني">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control rounded-0 p-3" name="phone" required
                                placeholder="رقم التليفون">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-0 p-5" name="message" requireds
                                placeholder="الرسالة">
                        </div>
                        <!-- Google Recaptcha -->
                        <div class="g-recaptcha mt-4" data-sitekey={{ config('services.recaptcha.key') }}></div>
                        <button type="submit" class="btn p-xl-3 p-lg-3 p-md-3 button rounded-0">ارسال رسالة</button>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-5 my-auto">
                    <div>
                        <h2>تفاصيل التواصل</h2>
                        <div class="line"></div>
                    </div>
                    <p>
                        نحن نبحث دائمًا عن طرق للتحسين. أرسل لنا بريدًا إلكترونيًا إذا كان لديك أي أسئلة وأفكار
                        واقتراحات .
                    </p>
                    <div class="d-flex justify-content-start mt-4">
                        <div class="ms-3 my-auto">
                            <div class="p-3 circle">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                        <div>
                            <h4>العنوان</h4>
                            <p>
                                مدينة الفردوس الاستثمارية أول طريق الواحات أمام دريم لاند
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-2">
                        <div class="ms-3 my-auto">
                            <div class="p-3 circle">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                        <div>
                            <h4>الايميل</h4>
                            <p class="text-decoration-underline fw-bold">
                                Info@grandgate-doors.com<br>
                                sales@grandgate-doors.com
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-2">
                        <div class="ms-3 my-auto">
                            <div class="p-3 circle">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <div>
                            <h4>التليفون</h4>
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
    <footer class="header-image " oncontextmenu="return false;" oncopy="return false;" onpaste="return false;"
        oncut="return false;" onmousedown="return false;" onselectstart="return false;">
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
