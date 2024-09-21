<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $seoMeta->description ?? 'Default description' }}">
    <title>{{ $seoMeta->title ?? 'Default Title' }}</title>
    <link rel="website icon" type="png" href="{{ asset('assets_front/images/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/products.css') }}">
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
                                    <span style="color: #eb242c;">المنتجات</span>
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
                <h1>المنتجات</h1>
            </div>
            <div class="breadcrumbs">
                <a href="{{ url('/') }}">الصفحة الرئيسية</a>
                <span> / </span>
                <span style="color: #eb242c;">المنتجات</span>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <img src="{{ asset('assets_front/images/sub-banner.jpg') }}" class="mob"
                    style="width: 100%; height: 100%;">
            </div>
        </div>

    </header>

    <section class="logoMotor bg-secondary bg-opacity-10 p-5" oncontextmenu="return false;" oncopy="return false;"
        onpaste="return false;" oncut="return false;" onmousedown="return false;" onselectstart="return false;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <h2>يتوافق التزامنا بالجودة تمامًا مع العلامات التجارية الأكثر احترامًا في العالم</h2>
                <div class="line"></div>
            </div>
            <div class="d-flex justify-content-center">
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/53.png') }}" style="width: 100%;"
                            alt="...">
                    </div>
                </div>
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/54.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/50.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/49.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/55.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/51.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/52.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/56.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/58.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
                <div style="width: 180px;">
                    <div class="mx-auto image-logo">
                        <img src="{{ asset('assets_front/images/accessories/logoMotor/57.png') }}"
                            style="width: 100%;" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---->
    <section class="products mt-xl-5 mt-lg-5 mt-md-5 mb-xl-5 mb-lg-5 mb-md-5 rtl" oncontextmenu="return false;"
        oncopy="return false;" onpaste="return false;" oncut="return false;" onmousedown="return false;"
        onselectstart="return false;">
        <div class="container">
            <div class="all-products row justify-content-center text-center mb-5">
                <h2>اكتشف مجموعتنا الواسعة من المنتجات عالية الجودة</h2>
                <div class="line"></div>
                <p>نحن نقدم مجموعة واسعة من المنتجات التي تناسب جميع الاحتياجات وتتجاوز توقعاتك. سواء كنت تبحث عن حل
                    أمني لمنزلك أو عملك، فلدينا المنتج المثالي المناسب لك</p>
            </div>
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-xl-4 col-lg-4 mb-3">
                        <a href="{{ route('product_details', ['lang' => $lang, 'slug' => $category->slug_ar]) }}">
                            <div class="products-section">
                                <img src="{{ asset($category->cover ?: $category->images->first()->url) }}"
                                    class="image">
                                <div class="overlay-product">
                                    <div class="text">
                                        <h4>{{ $category->name_ar }}</h4>
                                        <p>{{ $category->title_ar }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!---->

    <!---->
    <section class="accessories-sec mt-xl-5 mt-lg-5 mt-md-5 mb-xl-5 mb-lg-5 mb-md-5 rtl" oncontextmenu="return false;"
        oncopy="return false;" onpaste="return false;" oncut="return false;" onmousedown="return false;"
        onselectstart="return false;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 my-auto mx-auto">
                    <h2>
                        الملحقات والمحركات
                    </h2>
                    <div class="line"></div>
                    <p>
                        حافظ على تشغيل بواباتك الأوتوماتيكية بسلاسة وأمان مع مجموعتنا الواسعة من الملحقات والمحركات.
                        لدينا كل ما تحتاجه
                        <br><br>
                        <span style="color: #eb242c;">انقر هنا لزيارة صفحة الملحقات والمحركات</span>
                    </p>
                    <div>
                        <a href="{{ route('accessories', $lang) }}" class="btn button rounded-0 p-3">الملحقات</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 my-auto mx-auto mt-3">
                    <img src="{{ asset('assets_front/images/accessories/accessories-and-motors.jpg') }}"
                        style="width: 100%;">
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
                <img src="{{ asset('assets_front/images/accessories/logo.png') }}">
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
