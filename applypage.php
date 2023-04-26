<?php include 'common.php'; ?>
<?php
$dynamic_page_title = "Apply Now - Enrol at Our Training Academy for Coders | The Maven Academy";
$dynamic_meta_keyword = "";
$dynamic_meta_description = "Ready to become a formidable coder ? Apply for a spot in one of our upcoming courses. Enrol at The Maven Academy by applying online today.";
//$dynamic_meta_image = $config['Image_Url']."tech-mavens.png";

?>
<?php include 'header.php'; ?>

<section class="inner-page-wrap">
    <div class="container">

        <div class="apply-page">
            <div class="row">
                <nav aria-label="breadcrumb" class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Enrol Now</li>
                    </ol>
                </nav>
                <div class="col-lg-8">
                    <div id="stick-here"></div>
                    <div data-spy="scroll" data-target="#application-summary" data-offset="0">
                        <div class="title2 mb-4">
                            <h1 class="regular">Enrol into the Maven Academy </h1>
                        </div>
                        <div class="heading mb-4">
                            <h3 class="regular"><strong>Apply for</strong> a spot in the upcoming courses</h3>
                        </div>
                        <div class="hor-line"></div>
                        <div class="sub-title mb-4">
                            <h3 class="text-uppercase f-bold mb-0">General Info </h3>
                        </div>
                        <form id="frmapply" name="frmapply" method="post" class="form-error">
                            <div class="px-3">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputName1" class="col-sm-3 col-form-label">Your name:</label>
                                        <div class="col-sm-9 align-self-center">
                                            <input type="text" class="form-control" id="inputName1" name="fname" data-rule-required="true" data-msg-required="Please enter Your name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputSurName2" class="col-sm-3 col-form-label">Your surname:</label>
                                        <div class="col-sm-9 align-self-center">
                                            <input type="text" class="form-control" id="inputSurName2" name="surname" data-rule-required="true" data-msg-required="Please enter Your surname">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputEmailAddress3" class="col-sm-3 col-form-label">Your email address:</label>
                                        <div class="col-sm-9 align-self-center">
                                            <input type="email" class="form-control" id="inputEmailAddress3" name="email" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" autocapitalize="none" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputContactNum5" class="col-sm-3 col-form-label">Your contact number:</label>
                                        <div class="col-sm-9 align-self-center">
                                            <input type="text" class="form-control contact-input" id="inputContactNum5" name="cnumber" data-rule-required="true" data-msg-required="Please enter your contact number" data-msg-number="Please enter valid contact Number" data-rule-pattern="[0-9\-\(\)\s]+" data-rule-minlength="10" data-rule-maxlength="15">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hor-line"></div>
                            <div class="sub-title mb-4">
                                <h3 class="text-uppercase f-bold mb-0">WHAT CAMPUS DO YOU WANT TO STUDY AT ? </h3>
                            </div>
                            <div class="form-group pb-4">
                                <div class="row">
                                    <div class="col-md-6 customselect">
                                        <select class="selectpicker w-100" name="campus" data-rule-required="true" data-msg-required="Please select campus">
                                            <option value="">Please Select</option>
                                            <option value="cape-town-claremont-campus">Cape Town - Claremont Campus</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-title mb-4">
                                <h3 class="text-uppercase f-bold mb-0">WHAT COURSE ARE YOU INTERESTED IN ? </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="cma-custom_checkbox">
                                            <input type="checkbox" id="course1" name="course" data-rule-required="true" data-msg-required="Please select course" value="Full Stack Web Developer">
                                            <label for="course1">Full Stack Web Developer - 12 Week in Classroom</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="cma-custom_checkbox">
                                            <input type="checkbox" id="course2" name="course" data-rule-required="true" data-msg-required="Please select course" value="Front End Web Fundamentals">
                                            <label for="course2">Front End Web Fundamentals - 4 Weeks in classroom</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hor-line"></div>
                            <div class="sub-title mb-4">
                                <h3 class="text-uppercase f-bold mb-0">WHAT DATES ARE YOU INTERESTED IN JOINING ? </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="cma-custom_checkbox">
                                            <input type="checkbox" id="joiningdate1" name="joiningdate" data-rule-required="true" data-msg-required="Please select joining date" value="3rd February 2020">
                                            <label for="joiningdate1">3rd February 2020</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hor-line"></div>
                            <div class="sub-title mb-4">
                                <h3 class="text-uppercase f-bold mb-0">TERMS AND CONDITIONS </h3>
                            </div>
                            <div class="px-3">
                                <div class="form-copy-text mb-4">
                                    <p><span class="text-danger">*</span>All fields are required</p>
                                </div>
                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="condtion1" name="tandc" data-rule-required="true" data-msg-required="Please check Privacy Policy and Terms" value="agree">
                                        <label for="condtion1">By applying I accept the Privacy Policy and the Terms of Use</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="condtion2" name="update" checked data-rule-required="true" data-msg-required="Please check for updates" value="agree">
                                        <label for="condtion2">I do want to receive updates and stay in touch with the Maven community</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <!--a href="javascript:void(0);" class="btn btn-blue btn-shadow large">Apply now </a-->
                                <button type="button" class="btn btn-blue btn-shadow large" onclick="javascript: validateapply();">Apply now </button>
                            </div>
                        </form>
                    </div>
                    <div id="stick-end"></div>
                </div>
                <div class="col-lg-4">
                    <div class="app-sum-box sticky-box" id="stickThis">
                        <div class="square-box" id="application-summary">
                            <div class="bg-light-blue p-4">
                                <div class="media">
                                    <div class="icon-square d-flex justify-content-center bg-blue align-self-center mr-4">
                                        <img src="images/app-summary-icon.svg" alt="App Summary">
                                    </div>    
                                    <div class="media-body  align-self-center">
                                        <h3 class="regular mt-0">Application  Summary </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-list p-4">
                                <ul>
                                    <li>
                                        <b class="blue-text">Course:</b>
                                        <p>Full stack Developer ( 9 Week On-site )</p>
                                    </li>
                                    <li>
                                        <b class="blue-text">Campus:</b>
                                        <p>Cape Town  79 Roeland Street</p>
                                    </li>
                                    <li>
                                        <b class="blue-text">Dates :</b>
                                        <p>28 Janaury 2020 - 28 January 2020</p>
                                    </li>
                                    <li>
                                        <b class="blue-text">Price: </b>
                                        <p><strong>R54,000</strong> Once off or <br>R5,300 Per month over 12 months</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {

        $('body').scrollspy({
            target: '#application-summary'
        })

    });

    (function($) {

        // Check if Navigator is Internet Explorer
        if (navigator.userAgent.indexOf('MSIE') !== -1 ||
            navigator.appVersion.indexOf('Trident/') > -1) {

            function sticktothetop() {
                var window_top = $(window).scrollTop();
                var top = $('#stick-here').offset().top;
                var bottom = $('#stick-end').offset().top;
                if (window_top > top && window_top < bottom) {
                    $('#stickThis').addClass('sticky-top-ie');
                    $('#stick-here').height($('#stickThis').outerHeight());
                    $('#stick-end').height($('#stickThis').outerHeight());
                } else {
                    $('#stickThis').removeClass('sticky-top-ie');
                    $('#stick-here').height(0);
                    $('#stick-end').height(0);
                }
            }
            $(function() {
                $(window).scroll(sticktothetop);
                sticktothetop();
            });

        }

    })(jQuery);
</script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/sendMail.js"></script>