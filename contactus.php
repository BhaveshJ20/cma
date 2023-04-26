<?php include 'common.php'; ?>

<?php
$dynamic_page_title = "Contact Us - Get in Touch to Get Skilled | The Maven Academy";
$dynamic_meta_keyword = "";
$dynamic_meta_description = "Let’s chat! You can email us, call us, leave a message online or even come and see us in person. Get in touch for more details. Get skilled.";
$dynamic_meta_image = $config['Image_Url']."contact-banner.png";

$active_class = "contact_us";

?>
<?php include 'header.php'; ?>

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="banner-title mb-5 text-center">
                    <h1 class="regular">Get in touch with us</h1>
                </div>
                <div class="banner-img text-center mb-4">
                    <img src="images/contact-banner.png" srcset="images/contact-banner@2x.png 2x, images/contact-banner@3x.png 3x" alt="Get in touch">
                </div>
                <div class="banner-text text-center mb-0">
                    <p class="f-semibold f-18">Get pumped, get skilled</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ct-campus-wrap">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
            <div class="col-lg-6">
                <div class="main-title">
                    <h2 class="regular">The Maven Academy </h2>
                </div>
                <div class="main-title-content">
                    <p class="mb-3"><strong>Address:</strong></p>
                    <p class="mb-4">Office F01A, Brookside Office Park, 11 Imam Haron Road, <br>Claremont, Western Cape, 7708</p>
                    <p class="mb-3"><strong>Say hello:</strong></p>
                    <p class="mb-4"><a href="mailto:hello@themavenacademy.one" class="blk-link">hello@themavenacademy.one</a></p>
                    <p>Or call us directly on <a href="tel:+27 21 461 68 17" class="num-link"><strong>+27 21 461 68 17 </strong></a></p>
                    <p>Schedule a call with one of our friendly course consultants and <br>we’ll get back to you within 24 hours.</p>
                </div>
                <div class="social-media">
                    <ul>
                        <li>
                            <a href="https://web.facebook.com/The-Maven-Academy-108366197273447/?modal=admin_todo_tour" target="_blank" class="d-flex justify-content-center">
                                <img src="images/facebook.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/AcademyMaven" target="_blank" class="d-flex justify-content-center">
                                <img src="images/twitter.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/themavenacademysa/" target="_blank" class="d-flex justify-content-center">
                                <img src="images/instagram.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-light-blue inquiry-form mb-5">
                    <div class="main-title-content mb-5">
                        <p class="mb-3"><strong>Send us an enquiry </strong></p>
                        <p>Schedule a call with one of our friendly course consultants and we’ll get back to you within 24 hours. </p>
                    </div>
                    <form id="frmcontactus" name="frmcontactus" method="post" class="form-error">
                        <div class="form-group">
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Your name" data-rule-required="true" data-msg-required="Please enter Your name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="surname" id="surname" class="form-control" placeholder="Your surname" data-rule-required="true" data-msg-required="Please enter Your surname">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your email address" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" autocapitalize="none" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="cnumber" id="cnumber" class="form-control" placeholder="Your contact number" data-rule-required="true" data-rule-number="true" data-msg-required="Please enter Your contact number" data-msg-number="Please enter valid contact Number">
                        </div>
                        <div class="form-group">
                            <textarea name="query" id="query" class="form-control" rows="5" cols="1" placeholder="Your query" data-rule-required="true" data-msg-required="Please enter Your query"></textarea>
                        </div>
                        <button type="button" class="btn btn-blue small d-block" onclick="javascript: validateContactus();">Send enquiry </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="box study-ct-campus p-5 mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="media">
                        <div class="icon-square d-flex justify-content-center bg-blue">
                            <img src="images/paper-plane.svg" alt="Paper Plane">
                        </div>
                        <div class="media-body align-self-center">
                            <p class="mb-0">Join our mailing list to stay up-to-date on upcoming courses and events.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-md-8 align-self-center">
                            <div class="mb-3 mb-md-0">
                                <input type="email" class="form-control" placeholder="Your email" autocapitalize="none" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4 align-self-center">
                            <div class="join-email-list">
                                <button type="submit" class="btn btn-blue-outline small d-block">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="html5lightbox/html5lightbox.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/sendMail.js"></script>