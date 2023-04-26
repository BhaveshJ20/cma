<?php
    /*
    * The header for our theme
    */
    if($_SERVER['HTTP_HOST'] == "localhost"){
        $baseurl = "https://localhost/cma-html/"; 
    }else{
        $baseurl = "https://themavenacademy.one/";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="theme-color" content="#5b9de3"/>
    <script>
        const newBase = document.createElement('base');
        if (document.location.hostname == 'themavenacademy.one') {
            newBase.setAttribute('href', 'https://themavenacademy.one/');
            document.getElementsByTagName('head')[0].appendChild(newBase);
        } else {
            newBase.setAttribute('href', 'https://localhost/cma-html/');
            document.getElementsByTagName('head')[0].appendChild(newBase);
        }
    </script>

    <title>Maven Academy</title>

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
    <script type='text/javascript'>
        (function (d, t) {
        var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
        bh.type = 'text/javascript';
        bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=fsimbkoygcxfgfxk1xectw';
        s.parentNode.insertBefore(bh, s);
        })(document, 'script');
    </script>
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
    <div class="styleguide-wrap">
        <div class="container">
            <div class="py-5">
                <div class="text-center mt-5 mb-3">
                    <div class="mb-3"><img src="images/logo_big.svg" alt="Company Logo"></div>
                    <div class="banner-title"><h1 class="regular mb-0">The Maven Academy</h1></div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-7 mx-auto">
                        <div class="text-center mb-5">
                            <h2 class="regular line-behindtitle"><span>Styletile</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Typography</h3>
            </div>
            <div class="py-5">
                <div class="row mb-3">
                    <div class="col-md-3 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Font-Family</h5>
                        </div>
                        <div class="mb-4 text-break">
                            <p>Titillium</p>
                            <p class="">ABCČĆDĐEFGHIJKLMNOPQRSŠTUVWXYZŽ<br>abcčćdđefghijklmnopqrsštuvwxyzž<br>1234567890<br>‘?’“!”(%)[#]{@}/&\<-+÷×=>®©$€£¥¢:;,.*</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Headings</h5>
                        </div>
                        <div class="banner-title mb-3">
                            <h1 class="regular">H1 Titillium - 56px</h1>
                        </div>
                        <div class="banner-title mb-3">
                            <h2 class="regular">H2 Titillium - 45px</h2>
                        </div>
                        <div class="banner-title mb-3">
                            <h3 class="regular">H3 Titillium - 30px</h3>
                        </div>
                        <div class="banner-title mb-3">
                            <h4 class="regular">H4 Titillium - 20px</h4>
                        </div>
                        <div class="banner-title mb-3">
                            <h5 class="regular">H5 Titillium - 18px</h5>
                        </div>
                        <div class="banner-title mb-3">
                            <h6 class="regular">H6 Titillium - 15px</h6>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Body Copy</h5>
                        </div>
                        <div class="mb-4">
                            <p>Titillium 16px</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Colors</h5>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="rounded bg-dark-gray mr-2 align-self-center" style="width: 20px; height: 20px;"></div>
                            <div class="rounded bg-blue" style="width: 20px; height: 20px;"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Font-Weight</h5>
                        </div>
                        <p>Regular</p>
                        <p class="f-bold">Bold</p>
                        <p class="f-semibold">Semi-Bold</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">List Type</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list1">
                                    <li class="f-16">Lorem ipsum dolor sit amet</li>
                                    <li class="f-16">Consectetur adipiscing elit</li>
                                    <li class="f-16">Duis aute irure dolor in reprehenderit</li>
                                    <li class="f-16">Excepteur sint occaecat cupidatat</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="dash-list">
                                    <li class="f-16"><i>-</i>Lorem ipsum dolor sit amet</li>
                                    <li class="f-16"><i>-</i>Consectetur adipiscing elit</li>
                                    <li class="f-16"><i>-</i>Duis aute irure dolor in reprehenderit</li>
                                    <li class="f-16"><i>-</i>Excepteur sint occaecat cupidatat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Copy Colors</h5>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="rounded bg-blue mr-3" style="width: 20px; height: 20px;"></div>
                            <div class="blue-text">Blue Indicater Copy</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="rounded text-gray-50 mr-3" style="width: 20px; height: 20px;"></div>
                            <div class="small-text">Smaller Description Copy</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="rounded text-gray-bg mr-3" style="width: 20px; height: 20px;"></div>
                            <div><a class="link_grey link" href="javascript:void(0);">Copy Link grey</a></div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="rounded bg-dark-gray mr-3" style="width: 20px; height: 20px;"></div>
                            <div><a class="blk-link" href="javascript:void(0);">Copy Link black</a></div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="rounded bg-blue mr-3" style="width: 20px; height: 20px;"></div>
                            <div><a class="blue-link" href="javascript:void(0);">Copy Link blue</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Color Palette</h4>
            </div>
            <div class="py-5">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Primary Colors</h5>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="bg-blue rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#5b9de3</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="black-bg rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#1f262d</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="dark-gray-bg rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#36414c</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Secondary Colors</h5>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="v-light-blue rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#aed4f4</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="pink-bg rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#ff0074</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="green-bg rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#00c083</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Background Colors</h5>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="bg-light-blue rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">rgba(91, 157, 227, 0.08)</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="light-pink-bg rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#ffeaf1</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="light-green-bg rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#e2f9f3</div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="red-bg rounded mr-3" style="width: 50px; height: 50px;"></div>
                            <div class="align-self-center">#00c083</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Borders</h5>
                        </div>
                        <div class="blue-box text-center d-flex align-items-center justify-content-center mb-3" style="height: 100px;">#5b9de3</div>
                        <div class="square-box text-center d-flex align-items-center justify-content-center" style="height: 100px;">rgba(73, 73, 73, 0.11)</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Navigation</h3>
            </div>
            <div class="py-5 position-relative styleguide">
                <header class="main-nav">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container">
                            <a class="navbar-brand" href="index.php"><img src="images/maven_academy.svg" height="42" alt="The Maven Academy"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="nav-container">
                                    <div class="nav-sub-container">
                                        <ul class="navbar-nav ml-lg-auto align-self-lg-center">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item mega-dropdown d-none d-md-none d-sm-none d-lg-block">
                                                <a class="nav-link" href="javascript:void(0);">Why Us ?</a>
                                                <div class="menu-container dark-gray-bg">
                                                    <div class="menu-container-inner content-m content">
                                                        <div class="container">
                                                            <div class="main-title mb-3">
                                                                <h2 class="regular text-white text-uppercase">Why us </h2>
                                                            </div>
                                                            <div class="mb-5">
                                                                <p class="text-white f-22">Find out why Maven Academy is the best way to launch your career.</p>
                                                            </div>
                                                            <div class="row d-flex justify-content-between">
                                                                <div class="col-md-4">
                                                                    <div class="box d-flex flex-column">
                                                                        <a href="why-us/">
                                                                            <div class="box-header p-4">
                                                                                <p class="blue-text f-15 f-bold mb-0">Why study with us ? </p>
                                                                            </div>
                                                                            <div class="box-content pt-4">
                                                                                <div class="course-img text-center">
                                                                                <img src="images/why-study-thumb.png" srcset="images/why-study-thumb@2x.png 2x, images/why-study-thumb@3x.png 3x" alt="Why study with us">
                                                                                </div>
                                                                            </div>
                                                                            <div class="box-footer text-center mb-4">
                                                                                <a href="why-us/" class="btn btn-blue-outline btn-md small text-capitalize">Find out More </a>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="box d-flex flex-column">
                                                                        <a href="financial-aid/">
                                                                            <div class="box-header p-4">
                                                                                <p class="blue-text f-15 f-bold mb-0">Financial Aid - Study for Just R1 </p>
                                                                            </div>
                                                                            <div class="box-content pt-4">
                                                                                <div class="course-img text-center">
                                                                                    <img src="images/financial-aid-thumb.png" srcset="images/financial-aid-thumb@2x.png 2x, images/financial-aid-thumb@3x.png 3x" alt="Scholarships">
                                                                                </div>
                                                                            </div>
                                                                            <div class="box-footer text-center mb-4">
                                                                                <a href="financial-aid/" class="btn btn-blue-outline btn-md small text-capitalize">Find out More </a>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="box d-flex flex-column">
                                                                        <a href="internship-programme/">
                                                                            <div class="box-header p-4">
                                                                                <p class="blue-text f-15 f-bold mb-0">Internship - Work, Learn & Earn</p>
                                                                            </div>
                                                                            <div class="box-content pt-4">
                                                                                <div class="course-img text-center">
                                                                                    <img src="images/intership-thumb.png" srcset="images/intership-thumb@2x.png 2x, images/intership-thumb@3x.png 3x" alt=Internship Programme">
                                                                                </div>
                                                                            </div>
                                                                            <div class="box-footer text-center mb-4">
                                                                                <a href="internship-programme/" class="btn btn-blue-outline btn-md small text-capitalize">Find out More </a>
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
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Why Us
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li><a class="dropdown-item" href="why-us/">Why study with us ?</a></li>
                                                    <li><a class="dropdown-item" href="financial-aid/">Scholarships - Study for Just R1</a></li>
                                                    <li><a class="dropdown-item" href="internship-programme/">Internship - Work, Learn & Earn</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item mega-dropdown d-none d-md-none d-sm-none d-lg-block">
                                                <a href="javascript:void(0);" class="nav-link">Our Courses</a>
                                                <div class="menu-container dark-gray-bg">
                                                    <div class="menu-container-inner content-m content">
                                                        <div class="container">
                                                            <div class="main-title mb-3">
                                                                <h2 class="regular text-white text-uppercase">Courses </h2>
                                                            </div>
                                                            <div class="mb-5">
                                                                <p class="text-white f-22">Comprehensive in-class training to help you accelerate your career in tech no matter your experience level.</p>
                                                            </div>
                                                            <div class="row mb-3 d-flex justify-content-between">
                                                                <div class="col-md-4">
                                                                    <div class="box d-flex flex-column">
                                                                        <a href="courses/full-stack-web-developer/">
                                                                            <div class="course-title p-4">
                                                                                <p class="blue-text f-15 f-bold mb-0">Become a Full Stack Web Developer</p>
                                                                                <p class="mt-1">12 week Course - In classroom</p>
                                                                            </div>
                                                                            <div class="box-content">
                                                                                <div class="course-img text-center">
                                                                                    <img src="images/webdeveloper.png" srcset="images/webdeveloper@2x.png 2x, images/webdeveloper@3x.png 3x" alt="Web Development">
                                                                                </div>
                                                                            </div>
                                                                            <div class="box-footer text-center mb-4">
                                                                                <a href="courses/full-stack-web-developer/" class="btn btn-blue-outline btn-md small">View course detail </a>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="box d-flex flex-column menu-course-unavailable">
                                                                        <a href="javascript:void(0);">
                                                                            <div class="course-title p-4">
                                                                                <p class="blue-text f-15 f-bold mb-0">Become a Ui/Ux Designer</p>
                                                                                <p class="mt-1">4 week Course - In classroom</p>
                                                                            </div>
                                                                            <div class="box-content">
                                                                                <div class="course-img text-center">
                                                                                    <img src="images/ui-ux-designer.png" srcset="images/ui-ux-designer@2x.png 2x, images/ui-ux-designer@3x.png 3x" alt="UI UX Design">
                                                                                </div>
                                                                            </div>
                                                                            <div class="box-footer text-center mb-4">
                                                                                <a href="javascript:void(0);" class="btn btn-blue-outline btn-md small">Coming soon! </a>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="box d-flex flex-column menu-course-unavailable">
                                                                        <a href="javascript:void(0);">
                                                                            <div class="course-title p-4">
                                                                                <p class="blue-text f-15 f-bold mb-0">Become a Front End Developer</p>
                                                                                <p class="mt-1">4 week Course - In classroom</p>
                                                                            </div>
                                                                            <div class="box-content">
                                                                                <div class="course-img text-center">
                                                                                    <img src="images/frontend-dev.png" srcset="images/frontend-dev@2x.png 2x, images/frontend-dev@3x.png 3x" alt="Front End Developer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="box-footer text-center mb-4">
                                                                                <a href="javascript:void(0);" class="btn btn-blue-outline btn-md small">Coming soon! </a>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="main-title mb-3">
                                                                <h2 class="regular text-white text-uppercase">Study Abroad Programme </h2>
                                                            </div>
                                                            <div class="mb-5">
                                                                <p class="text-white f-22">International study programme for international students visiting South Africa </p>
                                                            </div>
                                                            <div class="row d-flex justify-content-between">
                                                                <div class="col-md-4">
                                                                    <div class="box d-flex flex-column menu-course-unavailable">
                                                                        <a href="javascript:void(0);">
                                                                            <div class="course-title p-4">
                                                                                <p class="blue-text f-15 f-bold mb-0">Become a Front End Developer</p>
                                                                                <p class="mt-1">4 week Course - In classroom</p>
                                                                            </div>
                                                                            <div class="box-content">
                                                                                <div class="course-img text-center">
                                                                                    <img src="images/frontend-dev.png" srcset="images/frontend-dev@2x.png 2x, images/frontend-dev@3x.png 3x" alt="Front End Developer">
                                                                                </div>
                                                                            </div>
                                                                            <div class="box-footer text-center mb-4">
                                                                                <a href="javascript:void(0);" class="btn btn-blue-outline btn-md small">Comingsoon!</a>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="faq/" class="nav-link">Faq</a>
                                            </li>
                                            <li class="nav-item dropdown d-md-block d-sm-block d-lg-none">
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Our Courses
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li><a class="dropdown-item" href="courses/full-stack-web-developer/">Become a Full Stack Web Developer <br>in 12 week</a></li>
                                                    <li><a class="dropdown-item opacity-40" href="javascript:void(0);">Become a Ui/Ux Designer </a></li>
                                                    <li><a class="dropdown-item opacity-40" href="javascript:void(0);">Become a Java Spring Boot Developer </a></li>
                                                    <li><a class="dropdown-item opacity-40" href="javascript:void(0);">Become a Front End Developer </a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact-us/">Contact Us </a>
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
            </div>
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Tabs</h3>
            </div>
            <div class="py-5">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular">Tab Type 1</h5>
                        </div>
                        <div class="custom-tabs">
                            <div class="modules-dropdown d-xl-none d-lg-none d-md-block d-flex" id="tab-title">Tab 1</div>
                            <ul class="nav nav-tabs modules-tabs">
                                <li class="sub-tabs-item">
                                    <a href="javascript:void(0);" class="sub-tabs-link active" data-tab="module1-tab">Tab 1</a>
                                </li>
                                <li class="sub-tabs-item">
                                    <a href="javascript:void(0);" class="sub-tabs-link" data-tab="module2-tab">Tab 2</a>
                                </li>
                                <li class="sub-tabs-item">
                                    <a href="javascript:void(0);" class="sub-tabs-link" data-tab="module3-tab">Tab 3</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content module-tab-cont">
                            <div class="tab-pane fade show active sub-tab-body" id="module1-tab">
                                <div class="block-text bg-light-blue p-5 mb-3">
                                    <div class="title mb-4"><h4 class="f-bold">Tab 1</h4></div>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade sub-tab-body" id="module2-tab">
                                <div class="block-text bg-light-blue mb-3 p-5">
                                    <div class="title mb-4"><h4 class="f-bold">Tab 2</h4></div>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                            </div>
                            <div class="tab-pane fade sub-tab-body" id="module3-tab">
                                <div class="block-text bg-light-blue mb-3 p-5">
                                    <div class="title mb-4"><h4 class="f-bold">Tab 3</h4></div>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="sub-title mb-4">
                            <h5 class="regular">Tab Type 2</h5>
                        </div>
                        <div class="cma-tab">
                            <div class="custom-round-tabs">
                                <div class="cma-tabs-round-dropdown d-xl-none d-lg-none d-md-block d-flex" id="round-tab-title">Tab 1</div>
                                <ul class="nav nav-tabs cma-tabs-round">
                                    <li class="sub-tabs-item2">
                                        <a href="javascript:void(0);" class="sub-tabs-link2 active" data-tab="ashanti-tab">Tab 1</a>
                                    </li>
                                    <li class="sub-tabs-item2">
                                        <a href="javascript:void(0);" class="sub-tabs-link2" data-tab="student-life-tab">Tab 2</a>
                                    </li>
                                    <li class="sub-tabs-item2">
                                        <a href="javascript:void(0);" class="sub-tabs-link2" data-tab="other-tab">Tab 3</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content module-tab-cont">
                                <div class="tab-pane fade show active sub-tab-body2" id="ashanti-tab">
                                    <div class="block-text bg-light-blue mb-3 p-5">
                                        <div class="title mb-4"><h4 class="blue-text f-bold">Tab 1</h4></div>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade sub-tab-body2" id="student-life-tab">
                                    <div class="block-text bg-light-blue mb-3 p-5">
                                        <div class="title mb-4"><h4 class="blue-text f-bold">Tab 2</h4></div>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade sub-tab-body2" id="other-tab">
                                    <div class="block-text bg-light-blue mb-3 p-5">
                                        <div class="title mb-4"><h4 class="blue-text f-bold">Tab 3</h4></div>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Pagination</h3>
            </div>
            <div class="py-5">
                <div class="pagination-block py-md-5 py-0">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"> <a class="page-link prev" href="#" tabindex="-1"><i class="fa fa-chevron-left pr-1" aria-hidden="true"></i> Previous</a> </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"> <a class="page-link next" href="#">Next <i class="fa fa-chevron-right pl-1" aria-hidden="true"></i> </a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="title border-bottom pb-2 d-flex">
                        <h3>Buttons</h3>
                    </div>
                    <div class="py-5">
                        <div class="row mb-4">
                            <div class="col-md-6 align-self-center mb-4">
                                <div class="sub-title mb-4">
                                    <h5 class="regular mb-0">Button Normal</h5>
                                </div>
                                <div class="mb-3"><a href="javascript:void(0);" class="btn btn-blue text-capitalize w-100">Button</a></div>
                            </div>
                            <div class="col-md-6 align-self-center mb-4">
                                <div class="sub-title mb-4">
                                    <h5 class="regular mb-0">Button Outline</h5>
                                </div>
                                <div class="mb-3"><a href="javascript:void(0);" class="btn btn-blue-outline text-capitalize w-100">Button</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center mb-4">
                                <div class="sub-title mb-4">
                                    <h5 class="regular mb-0">Button with Shadow</h5>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-blue btn-shadow text-capitalize w-100">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="title border-bottom pb-2 d-flex">
                        <h3>Modals</h3>
                    </div>
                    <div class="py-5">
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Modal Type</h5>
                        </div>
                        <div class="mb-4">
                            <a href="javascript:void(0);" class="btn btn-blue btn-shadow medium" data-toggle="modal" data-target=".bd-example-modal-lg">Launch</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Forms & Fields</h3>
            </div>
            <div class="py-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sub-title mb-4">
                            <h5 class="regular">Normal Forms</h5>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputName1" class="col-sm-4 col-form-label">Your name:</label>
                                <div class="col-sm-8 align-self-center">
                                    <input type="name" class="form-control" id="inputName1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputYourOption" class="col-sm-4 col-form-label">Dropdown:</label>
                                <div class="col-sm-8 align-self-center">
                                    <select class="selectpicker form-control" title="Select">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="yourmessage" class="col-sm-4 col-form-label">Type Your Message:</label>
                                <div class="col-sm-8 align-self-center">
                                    <textarea class="form-control" rows="5" cols="1" placeholder="" spellcheck="false"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="sub-title mb-4">
                            <h5 class="regular mb-0">Badges</h5>
                        </div>
                        <div class="mb-4">
                            <div class="badge badge-pill v-light-blue mb-2"> <span>Javascript</span> <i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                            <div class="badge badge-pill v-light-blue mb-2"> <span>HTML 5</span> <i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                            <div class="badge badge-pill v-light-blue mb-2"> <span>CSS 3</span> <i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sub-title mb-4">
                            <h5 class="regular">Radio Buttons & Checkbox</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="condtion1" name="condtion1">
                                        <label for="condtion1"><i></i>Checkbox 1</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="condtion2" name="condtion2" checked>
                                        <label for="condtion2"><i></i>Checkbox 2</label>
                                    </div>
                                </div>
                            </div>           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check radio-btn">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            <b></b>
                                            <span>Radio 1</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check radio-btn">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            <b></b>
                                            <span>Radio 2</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="cma-custom_checkbox">
                                <input type="checkbox" id="course1" name="course1">
                                <label for="course1">Course name here</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="cma-custom_checkbox">
                                <input type="checkbox" id="course2" name="course2" checked>
                                <label for="course2">Other course name here</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="cma-custom_checkbox">
                                <input type="checkbox" id="course3" name="course3">
                                <label for="course3">Another course name here </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Tables</h3>
            </div>
            <div class="py-5">
                <div class="table-responsive course-date-table mb-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Course </th>
                                <th scope="col">Location </th>
                                <th scope="col">Start Date </th>
                                <th scope="col">Price </th>
                                <th scope="col">Apply </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Course</label><div class="avail-seat"><span class="badge badge-pill badge-red">5 Seats left</span></div></div>
                                        <div class="table-desc">
                                            <h6 class="regular">Full stack Developer</h6>   
                                            <p class="mb-2">9 Week On-site</p>
                                            <span class="badge badge-pill badge-red">5 Seats left</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Location </label></div>
                                        <div class="table-desc">
                                            <h6 class="regular">Cape Town </h6>   
                                            <p class="mb-2">79 Roeland Street</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Start Date</label></div>
                                        <div class="table-desc">
                                            <h6 class="regular">28 Janaury 2020</h6>   
                                            <p class="mb-2">8:30 am </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Price</label></div>
                                        <div class="table-desc">
                                            <h6><strong>R78,000</strong> <small>Once off</small></h6>   
                                            <p class="mb-2">R5,300 <small>Per month</small></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-desc">
                                            <a href="applynow/" class="btn btn-blue-outline small text-capitalize">Apply Now</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Course</label><div class="avail-seat"><span class="badge badge-pill badge-green">15 Seats left</span></div></div>
                                        <div class="table-desc">
                                            <h6 class="regular">Full stack Developer</h6>   
                                            <p class="mb-2">9 Week On-site</p>
                                            <span class="badge badge-pill badge-green">15 Seats left</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Location </label></div>
                                        <div class="table-desc">
                                            <h6 class="regular">Cape Town </h6>   
                                            <p class="mb-2">79 Roeland Street</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Start Date</label></div>
                                        <div class="table-desc">
                                            <h6 class="regular">28 Janaury 2020</h6>   
                                            <p class="mb-2">8:30 am </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Price</label></div>
                                        <div class="table-desc">
                                            <h6><strong>R78,000</strong> <small>Once off</small></h6>   
                                            <p class="mb-2">R5,300 <small>Per month</small></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-desc">
                                            <a href="applynow/" class="btn btn-blue-outline small text-capitalize">Apply Now</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Course</label><div class="avail-seat"><span class="badge badge-pill badge-green">15 Seats left</span></div></div>
                                        <div class="table-desc">
                                            <h6 class="regular">Full stack Developer</h6>   
                                            <p class="mb-2">9 Week On-site</p>
                                            <span class="badge badge-pill badge-green">15 Seats left</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Location </label></div>
                                        <div class="table-desc">
                                            <h6 class="regular">Cape Town </h6>   
                                            <p class="mb-2">79 Roeland Street</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Start Date</label></div>
                                        <div class="table-desc">
                                            <h6 class="regular">28 Janaury 2020</h6>   
                                            <p class="mb-2">8:30 am </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Price</label></div>
                                        <div class="table-desc">
                                            <h6><strong>R78,000</strong> <small>Once off</small></h6>   
                                            <p class="mb-2">R5,300 <small>Per month</small></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-desc">
                                            <a href="applynow/" class="btn btn-blue-outline small text-capitalize">Apply Now</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            <td scope="row">
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Course</label><div class="avail-seat"><span class="badge badge-pill badge-green">15 Seats left</span></div></div>
                                        <div class="table-desc">
                                            <h6 class="regular">Full stack Developer</h6>   
                                            <p class="mb-2">9 Week On-site</p>
                                            <span class="badge badge-pill badge-green">15 Seats left</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Location </label></div>
                                        <div class="table-desc">
                                            <h6 class="regular">Cape Town </h6>   
                                            <p class="mb-2">79 Roeland Street</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Start Date</label></div>
                                        <div class="table-desc">
                                            <h6 class="regular">28 Janaury 2020</h6>   
                                            <p class="mb-2">8:30 am </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-top-cont"><label class="">Price</label></div>
                                        <div class="table-desc">
                                            <h6><strong>R78,000</strong> <small>Once off</small></h6>   
                                            <p class="mb-2">R5,300 <small>Per month</small></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-row-cont">
                                        <div class="table-desc">
                                            <a href="applynow/" class="btn btn-blue-outline small text-capitalize">Apply Now</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Collapsible</h3>
            </div>
            <div class="faq-wrap py-5">
                <div class="accordion mb-5" id="accordionExample1">
                    <div class="card">
                        <div class="card-header" id="headingFive">
                        <h5 class="mb-0 font-weight-normal">
                            <a href="javascript:void(0);" class="blue-text" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">Lorem ipsum dolor sit amet</a>
                        </h5>
                        </div>

                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample1">
                        <div class="card-body">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                        <h5 class="mb-0 font-weight-normal blue2">
                            <a href="javascript:void(0);" class="blue-text collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">Lorem ipsum dolor sit amet</a>
                        </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample1">
                        <div class="card-body">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                        <h5 class="mb-0 font-weight-normal blue2">
                            <a href="javascript:void(0);" class="blue-text collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">Lorem ipsum dolor sit amet</a>
                        </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample1">
                        <div class="card-body">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEight">
                        <h5 class="mb-0 font-weight-normal blue2">
                            <a href="javascript:void(0);" class="blue-text collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseFour">Example ? </a>
                        </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample1">
                        <div class="card-body">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Iconography</h3>
            </div>
            <div class="py-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap">
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/learn-creating.svg" alt="Learn by creating"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/expert-review.svg" alt="Expert Review"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/intern-programme.svg" alt="Intern programme"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/gift-icon.svg" alt="Gift Icon"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/candidates.svg" alt="Cadidates"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/find-intership.svg" alt="Find Intership"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/thumsUp.svg" alt="ThumsUp"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/bachler-icon.svg" alt="Study at Cape Town Campus"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/search.svg" alt="Job Search"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/paper-plane.svg" alt="Paper Plane"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/app-summary-icon.svg" alt="App Summary"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/clock-icon.svg" alt="Clock-icon"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/study-icon.svg" alt="Study-icon"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/telescope-icon.svg" alt="Telescope-icon"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/sun-icon.svg" alt="Sun-icon"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/sunrise-icon.svg" alt="Sunrise-icon"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/medal-icon.svg" alt="Medal-icon"></div></div>
                            <div class="mr-4 mb-4"><div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/camera-icon.svg" alt="Camera-icon"></div></div>                       
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dark-gray-bg p-4 mb-4">
                            <div class="sub-title mb-4">
                                <h6 class="regular text-white">Numbers</h5>
                            </div>
                            <div class="d-flex flex-row mb-4">
                                <div class="mb-3"><span class="count bg-blue rounded-circle text-white mr-3">1</span></div>
                                <div class="mb-3"><span class="count bg-blue rounded-circle text-white mr-3">2</span></div>
                                <div class="mb-3"><span class="count bg-blue rounded-circle text-white mr-3">3</span></div>
                                <div class="mb-3"><span class="count bg-blue rounded-circle text-white mr-3">4</span></div>
                                <div class="mb-3"><span class="count bg-blue rounded-circle text-white mr-3">5</span></div>
                            </div>
                            <div class="d-flex flex-row mb-4">
                                <div class="mr-3"><img src="images/search-icon.svg" alt="Search Icon"></div>
                                <div class="mr-3"><img src="images/filter.svg" alt="Filter"></div>
                                <div class="mr-3"><img src="images/phone-icon.svg" alt="Phone"></div>
                                <div class="mr-3"><img src="images/email-icon.svg" alt="Email"></div>
                                <div class="mr-3"><img src="images/location-icon.svg" alt="Location"></div>
                                <div class="mr-3"><img src="images/security-icon.svg" alt="Security"></div>
                            </div>
                            <div class="social-media mb-4">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="d-flex justify-content-center">
                                            <img src="images/facebook.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="d-flex justify-content-center">
                                            <img src="images/twitter.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="d-flex justify-content-center">
                                            <img src="images/instagram.svg" alt="">
                                        </a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="d-flex justify-content-center"><img src="images/linked.svg" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="search-icon-btn bg-blue text-white d-flex justify-content-center align-items-center" href="#"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="title border-bottom pb-2 d-flex">
                <h3>Image and video look and feel</h3>
            </div>
            <div class="py-5">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="videosizer">
                            <div class="video-background h-100" style="min-height: 26.2rem;">
                                <div class="overlay"></div>
                                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="images/video-transparent.png" style="background-image:url(images/studyabroad-banner.jpg)">
                                    <source src="video/capetownbydron.mp4" type="video/mp4">
                                </video>
                                <div class="container">
                                    <div class="" style="padding-top: 15%;">
                                        <div class="banner-title mb-4 text-lg-left text-center">
                                            <h2 class="regular text-white">Lorem ipsum dolor sit </h2>
                                        </div>
                                        <div class="banner-text text-lg-left text-center">
                                            <h4 class="regular text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h4>
                                        </div>
                                        <div class="text-lg-left text-center pt-4"><a href="javascript:void(0);" class="btn btn-blue btn-shadow text-capitalize large">Find out more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="cma-video">             
                            <!-- <video id="player1" poster="images/academic-degree-accomplishment-adult-2408471.jpg" preload="none">
                                <source src="https://www.youtube.com/watch?v=9xwazD5SyVg" type="video/youtube">
                            </video> -->
                            <a href="https://www.youtube.com/watch?v=9xwazD5SyVg" class="html5lightbox">
                                <figure class="clear" style="background: url(images/academic-degree-accomplishment-adult-2408471.jpg) no-repeat center / cover; ">
                                    <div class="play-btn"> <img src="images/play-icon.svg" alt=""> </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-4 text-center"><img src="images/tech-mavens.png" srcset="images/tech-mavens@2x.png 2x, images/tech-mavens@3x.png 3x" alt="Next Generation of Tech Experts"></div>
                    <div class="col-md-3 mb-4 text-center"><img src="images/why-study-banner.png" srcset="images/why-study-banner@2x.png 2x, images/why-study-banner@3x.png 3x" alt="Why study with us"></div>
                    <div class="col-md-3 mb-4 text-center"><img src="images/financial-aid-banner.png" srcset="images/financial-aid-banner@2x.png 2x, images/financial-aid-banner@3x.png 3x" alt="Financial Aid"></div>
                    <div class="col-md-3 mb-4 text-center"><img src="images/intership-banner.png" srcset="images/intership-banner@2x.png 2x, images/intership-banner@3x.png 3x" alt="Work Learn &amp; Earn"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-4 text-center"><img src="images/full-stack-banner.png" srcset="images/full-stack-banner@2x.png 2x, images/full-stack-banner@3x.png 3x" alt="Courses Banner"></div>
                    <div class="col-md-3 mb-4 text-center"><img src="images/ui-ux-designer.png" srcset="images/ui-ux-designer@2x.png 2x, images/ui-ux-designer@3x.png 3x" alt="UI UX Design"></div>
                    <div class="col-md-3 mb-4 text-center"><img src="images/spring-boot-dev.png" srcset="images/spring-boot-dev@2x.png 2x, images/spring-boot-dev@3x.png 3x" alt="Java Spring Boot Developer"></div>
                    <div class="col-md-3 mb-4 text-center"><img src="images/frontend-dev.png" srcset="images/frontend-dev@2x.png 2x, images/frontend-dev@3x.png 3x" alt="Front End Developer"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4 text-center"><img src="images/faq-banner.png" srcset="images/faq-banner@2x.png 2x, images/faq-banner@3x.png 3x" alt="FAQs"></div>
                    <div class="col-md-4 mb-4 text-center"><img src="images/contact-banner.png" srcset="images/contact-banner@2x.png 2x, images/contact-banner@3x.png 3x" alt="Get in touch"></div>
                    <div class="col-md-4 mb-4 text-center"><img src="images/enquiry-icon.png" srcset="images/enquiry-icon@2x.png 2x, images/enquiry-icon@3x.png 3x" alt="Enquiry Icon"></div>
                </div> 
            </div>
        </section>
    </div>

    <div class="modal fade bd-example-modal-lg cma-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabelSample" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title blue-text" id="exampleModalCenterTitleSample">modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-md-flex border-bottom modal-body-header">
                <div class="modal-heading">
                    
                </div>
                </div>
                <div class="modal-body-content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-blue large">Send</button>
                <a href="javascript:void(0);" data-dismiss="modal" class="gray300"><i class="fas fa-trash fa-2x"></i></a>
            </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.gray.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="html5lightbox/html5lightbox.js"></script>
    <script src="js/script.js"></script>
    <script>

        $(document).ready(function () {
            $('.sub-tabs-link').click(function () {
                var tab_id = jQuery(this).attr('data-tab');
                $('.sub-tabs-link').removeClass('active ');
                $('.sub-tab-body').hide();
                $(this).addClass('active ');
                $("#" + tab_id).addClass('active  show').show();
            });
        });

        function myFunction(x) {
            if (x.matches) { // If media query matches
                $(".custom-tabs").click(function(){
                    // $(this).next(".nav-tabs.modules-tabs").stop(true,true).slideToggle("fast"),
                    $(".modules-tabs").toggleClass("opened");  
                    $(".modules-dropdown").toggleClass("opened");  
                });
                $('ul.modules-tabs li').on('click', function() {
                    var getText = $(this).text();
                    $("#tab-title").text(getText);
                });
            } else {
                $(".modules-tabs").show()
            }
        }

        var x = window.matchMedia("(max-width: 992px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes

        $(document).ready(function () {
            $('.sub-tabs-link2').click(function () {
                var tab_id = jQuery(this).attr('data-tab');
                $('.sub-tabs-link2').removeClass('active ');
                $('.sub-tab-body2').hide();
                $(this).addClass('active ');
                $("#" + tab_id).addClass('active  show').show();
            });
        });

        function myFunction1(y) {
            if (y.matches) { // If media query matches
                $(".custom-round-tabs").click(function(){
                    // $(this).next(".nav-tabs.modules-tabs").stop(true,true).slideToggle("fast"),
                    $(".cma-tabs-round").toggleClass("opened");  
                    $(".cma-tabs-round-dropdown").toggleClass("opened");  
                });
                $('ul.cma-tabs-round li').on('click', function() {
                    var getText = $(this).text();
                    $("#round-tab-title").text(getText);
                });
            } else {
                $(".cma-tabs-round").show()
            }
        }

        var y = window.matchMedia("(max-width: 992px)")
        myFunction1(y) // Call listener function at run time
        y.addListener(myFunction1) // Attach listener function on state changes

    </script>

</body>
</html>