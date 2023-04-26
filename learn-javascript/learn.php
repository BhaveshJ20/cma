<?php include '../common.php';?>
<?php
$dynamic_page_title = "Knowledge Base - Learn Javascript | The Maven Academy";
$dynamic_meta_keyword = "";
$dynamic_meta_description = "";
$dynamic_meta_image = $config['Image_Url'] . "why-study-banner.png";
$active_class = "knowledge_base";
?>
<?php include '../header.php';?>
<div class="sub-navbar">
    <div class="container">
        <div class="row">
            <ul class="nav col-auto mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="learn-javascript/learn.php">Learn Javascript</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="JavaScript:void(0);">Learn HTML & CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="JavaScript:void(0);">Learn Mobile Development</a>
                </li>
            </ul>
            <div class="col-auto align-self-center">
                <button type="button" class="search-btn-learn" onclick="openSearch()"> <img
                        src="images/search-icon.svg"></button>
            </div>
        </div>
    </div>
</div>

<section class="banner-wrap full-height light-yellow-bg d-flex align-items-center mt-0">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 order-lg-2">
                <div class="banner-title text-lg-left text-center d-sm-block d-lg-none learn-banner-title">
                    <h1 class="regular">learn The fundamentals of Javascript, check out our helpful guides below.</h1>
                </div>
                <div class="banner-img text-center mb-4">
                    <img src="images/why-study-banner.png"
                        srcset="images/why-study-banner@2x.png 2x, images/why-study-banner@3x.png 3x"
                        alt="Learn Javascript">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 align-self-center">
                <div class="text-lg-left text-center learn-banner-subtile">
                    <h6 class="f-bold">JAVASCRIPT GUIDES</h4>
                </div>
                <div class="banner-title mb-5 text-lg-left text-center d-none d-lg-block learn-banner-title">
                    <h1 class="regular">learn The fundamentals of Javascript, check out our helpful guides below.</h1>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="we-support-you-wrap pb-0">
    <div class="container">
        <!-- <nav aria-label="breadcrumb" class="col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Internship</li>
            </ol>
        </nav> -->

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 learn-box">
            <div class="col mb-5">
                <a class="card h-100 text-center" href="learn-javascript/learn-detail.php">
                    <div class="card-img-top bg-light-blue "><img src="images/icon-intro.svg" class="" alt="..."></div>

                    <div class="card-body">
                        <h5 class="card-title">Learn Javascript</h5>
                        <p class="card-text">An Introduction to JavaScript</p>
                    </div>
                </a>
            </div>
            <div class="col mb-5">
                <a class="card h-100 text-center" href="learn-javascript/learn-detail.php">
                    <div class="card-img-top pink-bg-400"><img src="images/icon-manual.svg" class="" alt=""></div>
                    <div class="card-body">
                        <h5 class="card-title">Learn Javascript</h5>
                        <p class="card-text">Manuals and specifications</p>
                    </div>
                </a>
            </div>
            <div class="col mb-5">
                <a class="card h-100 text-center" href="learn-javascript/learn-detail.php">
                    <div class="card-img-top light-yellow-bg"><img src="images/icon-code-editor.svg" class="" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Learn Javascript</h5>
                        <p class="card-text">Code editors</p>
                    </div>
                </a>
            </div>
            <div class="col mb-5">
                <a class="card h-100 text-center" href="learn-javascript/learn-detail.php">
                    <div class="card-img-top light-green-bg"><img src="images/icon-dev-console.svg" class="" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Learn Javascript</h5>
                        <p class="card-text">Developer console</p>
                    </div>
                </a>
            </div>
            <div class="col mb-5">
                <a class="card h-100 text-center" href="learn-javascript/learn-detail.php">
                    <div class="card-img-top light-yellow-bg"><img src="images/icon-code-editor.svg" class="" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Learn Javascript</h5>
                        <p class="card-text">?</p>
                    </div>
                </a>
            </div>
            <div class="col mb-5">
                <a class="card h-100 text-center" href="learn-javascript/learn-detail.php">
                    <div class="card-img-top bg-light-blue "><img src="images/icon-intro.svg" class="" alt=""></div>

                    <div class="card-body">
                        <h5 class="card-title">Learn Javascript</h5>
                        <p class="card-text">?</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="our-courses-wrap bg-light-blue">
    <div class="container">
        <div class="main-title text-md-left text-center">
            <h2 class="regular mb-0">Javascript courses </h2>
        </div>
        <div class="our-course-slider">
            <div class="owl-carousel owl-theme learn-slider">
                <div class="item">
                    <div class="box d-flex flex-column">
                        <div class="box-header"><a href="JavaScript:void(0);"
                                class="blue-link f-15 f-bold text-decoration-none">Become a
                                Full Stack Web Developer</a>
                            <p>12 weeks - In classroom</p>
                        </div>
                        <div class="box-content">
                            <div class="course-img">
                                <img src="images/webdeveloper.png"
                                    srcset="images/webdeveloper@2x.png 2x, images/webdeveloper@3x.png 3x"
                                    alt="Web Development">
                            </div>
                        </div>
                        <div class="box-footer text-center mb-4">
                            <a href="#" class="btn btn-blue-outline btn-md small">View course detail </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="box d-flex flex-column">
                        <div class="box-header"><a href="JavaScript:void(0);"
                                class="blue-link f-15 f-bold text-decoration-none">Become a Front End Developer </a>
                            <p>4 Week Course - In classroom </p>
                        </div>
                        <div class="box-content">
                            <div class="course-img">
                                <img src="images/frontend-dev.png"
                                    srcset="images/frontend-dev@2x.png 2x, images/frontend-dev@3x.png 3x"
                                    alt="Front End Developer">
                            </div>
                        </div>
                        <div class="box-footer text-center mb-4">
                            <a href="#" class="btn btn-blue-outline btn-md small">View course detail </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between mt-5">
            <!-- <a href="javascript:void(0);" class="customPrevBtn">
            <span class="arrow-icon arrow-left ml-2"></span>
            </a> -->
            <a href="javascript:void(0);" class="customNextBtn arrow-click align-self-center">
                <span class="arrow-icon arrow-right ml-2"></span>
            </a>
            <!-- <a href="javascript:void(0);" class="btn btn-blue btn-shadow text-capitalize medium">More Mentors</a> -->
        </div>
    </div>
</section>
<div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <div class="container">
            <div class="col-md-10 m-auto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." aria-label="Recipient's username"
                        aria-describedby="button-addon2" required autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary search-btn" type="button" id="button-addon2"><img
                                src="images/search-icon.svg"></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include '../footer.php';?>