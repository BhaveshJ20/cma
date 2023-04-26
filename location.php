<?php include 'common.php'; ?>
<?php
$dynamic_page_title = "Maven Academy";
$dynamic_meta_keyword = "Maven Academy";
$dynamic_meta_description = "Maven Academy";
$dynamic_meta_image = $config['Image_Url']."our-location-banner.png";
?>
<?php include 'header.php'; ?>

<section class="banner-wrap full-height bg-light-blue d-flex align-items-center">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Loacation</li>
                </ol>
            </nav>
            <div class="col-lg-8 mx-auto">
                <div class="banner-title mb-4 text-center">
                    <h1 class="regular">Our locations </h1>
                </div>
                <div class="banner-img text-center mb-4">
                    <img src="images/our-location-banner.png" alt="Next Generation of Tech Experts">
                </div>
                <div class="banner-text text-center">
                    <p class="f-semibold f-18">Welcome to the pleasure dome </p>
                </div>
                <div class="text-center"><a href="applynow/" class="btn btn-blue btn-shadow large">Enrol Now </a></div>
            </div>
        </div>
    </div>
</section>

<section class="ct-campus-wrap pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h2 class="regular mb-0">Cape Town Campus </h2>
                </div>
                <div class="main-title-content">
                    <p class="mb-4"><strong>Campus:</strong> Maven Academy - Cape Town</p>
                    <p><strong>Address:</strong> Office F01A, Brookside Office Park, 11 Imam Haron Road, Claremont, Western Cape, 7708</p>
                </div>
            </div>
        </div>
        <div class="ct-campus-img mb-5">
            <img src="images/ct-campus.jpg" class="img-full" alt="Cape Town Campus">
        </div>
        <div class="box study-ct-campus p-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="media">
                        <div class="icon-square bg-blue d-flex justify-content-center">
                            <img src="images/bachler-icon.svg" alt="Study at Cape Town Campus">
                        </div>
                        <div class="media-body align-self-center">
                            <p class="mb-0 f-22">Do you want to study at our Cape Town Campus ? </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="ct-enroll-btn">
                        <a href="applynow/" class="btn btn-blue btn-shadow large text-uppercase">Enrol Now </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="get-pumped-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-lg-auto">
                <div class="text-center">
                    <div class="mb-5"><img src="images/contact-banner.png" srcset="images/contact-banner@2x.png 2x, images/contact-banner@3x.png 3x" alt="Get in touch"></div>
                    <div class="main-title mb-4">
                        <h2 class="regular mb-0">Get pumped, get skilled</h2>
                    </div>
                    <div class="main-title-content">
                        <p>Schedule a call with one of our friendly course consultants and we’ll get back to you within 24 hours.</p>
                        <p><strong class="dark-gray">Or call us directly on</strong> <a href="tel:+27 21 461 68 17" class="num-link"><strong>+27 21 461 68 17</strong></a></p>
                        <p><strong class="dark-gray">Address:</strong> Office F01A, Brookside Office Park, 11 Imam Haron Road, Claremont, <br>Western Cape, 7708</p>
                        <p><strong class="dark-gray">Say hello:</strong> <a href="mailto:hello@themavenacademy.one" class="blk-link">hello@themavenacademy.one</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>