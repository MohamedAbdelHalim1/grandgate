<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo e($seoMeta->description ?? 'Default description'); ?>">
    <title><?php echo e($seoMeta->title ?? 'Default Title'); ?></title>
    <link rel="website icon" type="png" href="<?php echo e(asset('assets_front/images/icon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_front/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_front/css/product-details.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_front/css/ar.css')); ?>">
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
                                    <span>الرئيسية</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active rounded-1" aria-current="page"
                                    href="<?php echo e(route('about-us', $lang)); ?>">
                                    <span>من نحن</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('products', $lang)); ?>">
                                    <span>المنتجات</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('projects', $lang)); ?>">
                                    <span class="">المشاريع</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('blog', $lang)); ?>">
                                    <span class="">مقالات</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('contact-us', $lang)); ?>">
                                    <span class="">تواصل معنا</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="<?php echo e(route('change-lang', 'en')); ?>">
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
                <h1><?php echo e($category->name_ar); ?></h1>
            </div>
            <div class="breadcrumbs">
                <a href="<?php echo e(url('/')); ?>">الصفحة الرئيسية</a>
                <span> / </span>
                <a href="<?php echo e(route('products', $lang)); ?>">المنتجات</a>
                <span> / </span>
                <span style="color: #eb242c;"><?php echo e($category->name_ar); ?></span>
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
    <section class="products-details mt-xl-5 mt-lg-5 mt-md-5 mb-xl-5 mb-lg-5 mb-md-5 rtl" oncontextmenu="return false;"
        oncopy="return false;" onpaste="return false;" oncut="return false;" onmousedown="return false;"
        onselectstart="return false;">
        <div class="container">
            <div class="row justify-content-center box">
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <h2><?php echo e($category->name_ar); ?></h2>
                    <div class="line"></div>
                    <p style="color: #eb242c;"><?php echo e($category->title_ar); ?></p>
                    <p>
                        <?php echo e($category->description_ar); ?>

                    </p>
                    <?php
                        if ($category->list_ar) {
                            $list = explode(',', $category->list_ar);
                        }
                    ?>
                    <?php if($category->list_ar && $category->list_ar != '' && $category->list_ar != ' '): ?>
                        <ul>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="mb-1">
                                    <?php echo e($li); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 my-auto mx-auto ">
                    <div id="carouselExampleIndicators" class="carousel slide mb-4">
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $category->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="carousel-item <?php if($key == 0): ?> active <?php endif; ?>">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12 col-lg-12">
                                            <div>
                                                <img src="<?php echo e(asset($image->url)); ?>"
                                                    style="width: 636px; height:471px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"
                                style="background-color: rgba(200, 84, 92,.6)!important; margin-right: 30px;  padding: 20px; border-radius: 50%;"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon"
                                style="background-color: rgba(200, 84, 92,.6)!important; margin-left: 30px;  padding: 20px; border-radius: 50%;"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!---->
    <section class="related-proj mt-xl-5 mt-lg-5 mt-md-5 mb-xl-5 mb-lg-5 mb-md-5 rtl" oncontextmenu="return false;"
        oncopy="return false;" onpaste="return false;" oncut="return false;" onmousedown="return false;"
        onselectstart="return false;">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-4">
                    <h3>مشاريع متعلقة</h3>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row justify-content-start">
                <?php $__currentLoopData = $category->projects->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-3 mb-3">
                        <a href="<?php echo e(route('project_details', ['lang' => $lang, 'slug' => $project->slug_ar])); ?>">
                            <div class="projects-section">
                                <img src="<?php echo e(asset($project->cover)); ?>" class="image">
                                <div class="overlay-product">
                                    <div class="text">
                                        <h4><?php echo e($project->name_ar); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <a href="<?php echo e(url('/')); ?>">الرئيسية</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about-us', $lang)); ?>">من نحن</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('products', $lang)); ?>">المنتجات</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('projects', $lang)); ?>">المشاريع</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('blog', $lang)); ?>">مقالات</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('contact-us', $lang)); ?>">تواصل معنا</a>
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
                
            </div>
        </div>
        <div class="d-flex justify-content-between text-center small-footer rtl">
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
    <!--end footer-->


    <!--button-Up-->
    <div class="button-up shadow-lg">
        <span>
            <i class="fa-solid fa-chevron-up"></i>
            <p>لأعلى</p>
        </span>
    </div>

    <!-- script tags -->
    <script src="<?php echo e(asset('assets_front/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_front/js/index.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/1216096.cloudwaysapps.com/ncaabhugrv/public_html/resources/views/frontend/product-detailsAr.blade.php ENDPATH**/ ?>