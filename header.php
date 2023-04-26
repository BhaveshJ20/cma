<?php
/*
 * The header for our theme
 */
// if ($_SERVER['HTTP_HOST'] == "localhost") {
//     $baseurl = "http://localhost/cma-html/";
//     $server_type = 'local';
// } else {
//     $baseurl = "https://themavenacademy.one/";
//     $server_type = 'live';
// }


$default_page_title = "Maven Academy";
$default_meta_keyword = "";
$default_meta_description = "Maven Academy";
$default_meta_image = $config['Image_Url'] . "tech-mavens.png";

if (trim(isset($dynamic_page_title)) == "") {
    $seo_page_title = $default_page_title;
} else {
    $seo_page_title = $dynamic_page_title;
}

if (trim(isset($dynamic_meta_keyword)) == "") {
    $seo_meta_keyword = $default_meta_keyword;
} else {
    $seo_meta_keyword = $dynamic_meta_keyword;
}

if (trim(isset($dynamic_meta_description)) == "") {
    $seo_meta_description = $default_meta_description;
} else {
    $seo_meta_description = $dynamic_meta_description;
}
if (trim(isset($dynamic_meta_image)) == "") {
    $seo_meta_image = $default_meta_image;
} else {
    $seo_meta_image = $dynamic_meta_image;
}

if (trim(isset($active_class)) == "") {
    $active_class_css = "";
} else {
    $active_class_css = $active_class;
}

list($og_image_width, $og_image_height) = getimagesize($seo_meta_image);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="theme-color" content="#5b9de3" />
   
    <meta name="description" content="<?php echo $seo_meta_description; ?>">
    <base href="<?php echo $config['virtual_path']; ?>" />

    <!-- General social media tags -->
    <meta property="og:title" content="<?php echo $seo_page_title; ?>">
    <meta property="og:url" content="<?php echo $current_page_link; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo $seo_meta_image; ?>">
    <meta property="og:image:alt" content="<?php echo $seo_page_title; ?>">
    <meta property="og:image:width" content="<?php echo $og_image_width; ?>px">
    <meta property="og:image:height" content="<?php echo $og_image_height; ?>px">
    <meta property="og:description" content="<?php echo $seo_meta_description; ?>">

    <!-- Schema social media tags -->
    <meta itemprop="name" content="<?php echo $seo_page_title; ?>">
    <html itemscope itemtype=<?php echo $current_page_link; ?>>
    <meta itemprop="description" content="<?php echo $seo_meta_description; ?>">
    <meta itemprop="image" content="<?php echo $seo_meta_image; ?>">

    <meta name="twitter:title" content="<?php echo $seo_page_title; ?>">
    <meta name="twitter:description" content="<?php echo $seo_meta_description; ?>">
    <meta name="twitter:image" content="<?php echo $seo_meta_image; ?>">
    <meta name="twitter:site" content="<?php echo $current_page_link; ?>">
    <meta name="twitter:creator" content="@AcademyMaven">

    <title><?php echo $seo_page_title; ?></title>

    <!-- required -->
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/gray.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- required -->
    <?php
    if ($server_type == "live") {
        ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124354731-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-124354731-4');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '434258257256544');
    fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=434258257256544&ev=PageView
			&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <?php
    }
    if ($server_type == "local") {
        ?>
    <!-- <script type='text/javascript'>
    (function(d, t) {
        var bh = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        bh.type = 'text/javascript';
        bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=fsimbkoygcxfgfxk1xectw';
        s.parentNode.insertBefore(bh, s);
    })(document, 'script');
    </script> -->
    <?php
    }
    ?>


</head>

<body>
    <div class="preloader">
        <div class="preloader-section preloader-right"></div>
        <div class="preloader-section preloader-left"></div>
        <div class="preloader-icon">
            <span class="loading-dot loading-dot-1"></span>
            <span class="loading-dot loading-dot-2"></span>
            <span class="loading-dot loading-dot-3"></span>
        </div>
    </div>
    <header class="main-nav fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/maven_academy.png"
                        srcset="images/maven_academy@2x.png 2x, images/maven_academy@3x.png 3x"
                        alt="The Maven Academy" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="nav-container">
                        <div class="nav-sub-container">
                            <ul class="navbar-nav ml-lg-auto align-self-lg-center">
                                <li class="nav-item">
                                    <a class="nav-link <?php if (trim($active_class_css) == 'home_page') {
                                                            echo "active";
                                                        } ?>" href="index.php">Home</a>
                                </li>
                                <li class="nav-item mega-dropdown d-none d-md-none d-sm-none d-lg-block">
                                    <a class="nav-link <?php if (trim($active_class_css) == 'why_us') {
                                                            echo "active";
                                                        } ?>" href="javascript:void(0);">Why Us ?</a>
                                    <div class="menu-container dark-gray-bg">
                                        <div class="menu-container-inner content-m content">
                                            <div class="container">
                                                <div class="main-title mb-3">
                                                    <h2 class="regular text-white text-uppercase">Why us </h2>
                                                </div>
                                                <div class="mb-5">
                                                    <p class="text-white f-22">Find out why Maven Academy is the best
                                                        way to launch your career.</p>
                                                </div>
                                                <div class="row d-flex justify-content-between">
                                                    <div class="col-md-4">
                                                        <div class="box d-flex flex-column">
                                                            <a href="why-us/">
                                                                <div class="box-header p-4">
                                                                    <p class="blue-text f-15 f-bold mb-0">Why study with
                                                                        us ? </p>
                                                                </div>
                                                                <div class="box-content pt-4">
                                                                    <div class="course-img text-center">
                                                                        <img src="images/why-study-thumb.png"
                                                                            srcset="images/why-study-thumb@2x.png 2x, images/why-study-thumb@3x.png 3x"
                                                                            alt="Why study with us">
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center mb-4">
                                                                    <a href="why-us/"
                                                                        class="btn btn-blue-outline btn-md small text-capitalize">Find
                                                                        out More </a>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="box d-flex flex-column">
                                                            <a href="financial-aid/">
                                                                <div class="box-header p-4">
                                                                    <p class="blue-text f-15 f-bold mb-0">Financial Aid
                                                                        - Study for Just R1 </p>
                                                                </div>
                                                                <div class="box-content pt-4">
                                                                    <div class="course-img text-center">
                                                                        <img src="images/financial-aid-thumb.png"
                                                                            srcset="images/financial-aid-thumb@2x.png 2x, images/financial-aid-thumb@3x.png 3x"
                                                                            alt="Scholarships">
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center mb-4">
                                                                    <a href="financial-aid/"
                                                                        class="btn btn-blue-outline btn-md small text-capitalize">Find
                                                                        out More </a>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="box d-flex flex-column">
                                                            <a href="internship-programme/">
                                                                <div class="box-header p-4">
                                                                    <p class="blue-text f-15 f-bold mb-0">Internship -
                                                                        Work, Learn & Earn</p>
                                                                </div>
                                                                <div class="box-content pt-4">
                                                                    <div class="course-img text-center">
                                                                        <img src="images/intership-thumb.png"
                                                                            srcset="images/intership-thumb@2x.png 2x, images/intership-thumb@3x.png 3x"
                                                                            alt="Internship Programme">
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center mb-4">
                                                                    <a href="internship-programme/"
                                                                        class="btn btn-blue-outline btn-md small text-capitalize">Find
                                                                        out More </a>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown d-md-block d-sm-block d-lg-none">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Why Us
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="why-us/">Why study with us ?</a></li>
                                        <li><a class="dropdown-item" href="financial-aid/">Scholarships - Study for Just
                                                R1</a></li>
                                        <li><a class="dropdown-item" href="internship-programme/">Internship - Work,
                                                Learn & Earn</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item mega-dropdown d-none d-md-none d-sm-none d-lg-block">
                                    <a href="javascript:void(0);" class="nav-link <?php if (trim($active_class_css) == 'courses') {
                                                                                        echo "active";
                                                                                    } ?>">Our Courses</a>
                                    <div class="menu-container dark-gray-bg">
                                        <div class="menu-container-inner content-m content">
                                            <div class="container">
                                                <div class="main-title mb-3">
                                                    <h2 class="regular text-white text-uppercase">Courses </h2>
                                                </div>
                                                <div class="mb-5">
                                                    <p class="text-white f-22">Comprehensive in-class training to help
                                                        you accelerate your career in tech no matter your experience
                                                        level.</p>
                                                </div>
                                                <div class="row mb-3 d-flex justify-content-between">
                                                    <div class="col-md-4">
                                                        <div class="box d-flex flex-column">
                                                            <a href="courses/full-stack-web-developer/">
                                                                <div class="course-title p-4">
                                                                    <p class="blue-text f-15 f-bold mb-0">Become a Full
                                                                        Stack Web Developer</p>
                                                                    <p class="mt-1">12 Week Course - In classroom</p>
                                                                </div>
                                                                <div class="box-content">
                                                                    <div class="course-img text-center">
                                                                        <img src="images/webdeveloper.png"
                                                                            srcset="images/webdeveloper@2x.png 2x, images/webdeveloper@3x.png 3x"
                                                                            alt="Web Development">
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center mb-4">
                                                                    <a href="courses/full-stack-web-developer/"
                                                                        class="btn btn-blue-outline btn-md small">View
                                                                        course detail </a>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="box d-flex flex-column">
                                                            <a href="courses/4-week-front-end-web-developer/">
                                                                <div class="course-title p-4">
                                                                    <p class="blue-text f-15 f-bold mb-0">Become a Front
                                                                        End Developer</p>
                                                                    <p class="mt-1">4 Week Course - In classroom</p>
                                                                </div>
                                                                <div class="box-content">
                                                                    <div class="course-img text-center">
                                                                        <img src="images/frontend-dev.png"
                                                                            srcset="images/frontend-dev@2x.png 2x, images/frontend-dev@3x.png 3x"
                                                                            alt="Front End Developer">
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center mb-4">
                                                                    <a href="courses/4-week-front-end-web-developer/"
                                                                        class="btn btn-blue-outline btn-md small">View
                                                                        course detail </a>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div
                                                            class="box d-flex flex-column menu-course-unavailable comming-soon">
                                                            <a href="javascript:void(0);">
                                                                <div class="course-title p-4">
                                                                    <p class="blue-text f-15 f-bold mb-0">Become a Ui/Ux
                                                                        Designer</p>
                                                                    <p class="mt-1">4 Week Course - In classroom</p>
                                                                </div>
                                                                <div class="box-content">
                                                                    <div class="course-img text-center">
                                                                        <img src="images/ui-ux-designer.png"
                                                                            srcset="images/ui-ux-designer@2x.png 2x, images/ui-ux-designer@3x.png 3x"
                                                                            alt="UI UX Design">
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center mb-4">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-blue-outline btn-md small">Coming
                                                                        soon! </a>
                                                                </div>
                                                            </a>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="main-title mb-3">
                                                    <h2 class="regular text-white text-uppercase">Study Abroad Programme
                                                    </h2>
                                                </div>
                                                <div class="mb-5">
                                                    <p class="text-white f-22">International study programme for
                                                        international students visiting South Africa </p>
                                                </div>
                                                <div class="row d-flex justify-content-between">
                                                    <div class="col-md-4">

                                                        <div
                                                            class="box d-flex flex-column menu-course-unavailable comming-soon">
                                                            <a href="javascript:void(0);">
                                                                <div class="course-title p-4">
                                                                    <p class="blue-text f-15 f-bold mb-0">Become a Full
                                                                        Stack Web Developer</p>
                                                                    <p class="mt-1">12 Week Course - In classroom</p>
                                                                </div>
                                                                <div class="box-content">
                                                                    <div class="course-img text-center">
                                                                        <img src="images/webdeveloper.png"
                                                                            srcset="images/webdeveloper@2x.png 2x, images/webdeveloper@3x.png 3x"
                                                                            alt="Web Development">
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center mb-4">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-blue-outline btn-md small">Comingsoon!</a>
                                                                </div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown d-md-block d-sm-block d-lg-none">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Our Courses
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="courses/full-stack-web-developer/">Become a
                                                Full Stack Web Developer <br>in 12 Weeks</a></li>
                                        <li><a class="dropdown-item"
                                                href="courses/4-week-front-end-web-developer/">Become a
                                                Front End Developer <br>in 4 Weeks</a></li>
                                        <li><a class="dropdown-item opacity-40" href="javascript:void(0);">Become a
                                                Ui/Ux Designer </a></li>
                                        <li><a class="dropdown-item opacity-40" href="javascript:void(0);">Become a Java
                                                Spring Boot Developer </a></li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="faq/" class="nav-link <?php if (trim($active_class_css) == 'faq') {
                                                                        echo "active";
                                                                    } ?>">Faq</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="knowledge-base/learn-javascript/" class="nav-link <?php if ($active_class == 'knowledge_base') {
                                                                            echo "active";
                                                                        } ?>">Knowledge Base</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link <?php if (trim($active_class_css) == 'contact_us') {
                                                            echo "active";
                                                        } ?>" href="contact-us/">Contact Us </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="find-alumni/">Alumni</a>
                                </li> -->
                            </ul>
                            <div class="enroll-btn">
                                <a href="applynow/" class="btn btn-blue text-capitalize">Enrol Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>