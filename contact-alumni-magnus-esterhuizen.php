<?php include 'common.php'; ?>
<?php
$dynamic_page_title = "Contact Magnus Esterhuizen - Alumni | The Maven Academy";
$dynamic_meta_keyword = "";
$dynamic_meta_description = "";
$dynamic_meta_image = $config['Image_Url']."full-stack-banner.png";

$active_class = "why_us";
?>
<?php include 'header.php'; ?>

<section class="inner-page-wrap">
    <div class="container">

        <div class="contact-alumni-page">
            <nav aria-label="breadcrumb" class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="internship-programme/">Internship</a></li>
                    <li class="breadcrumb-item"><a href="find-alumni-magnus-esterhuizen/">Alumni</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hire me</li>
                </ol>
            </nav>
            <div class="mb-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"> <a class="page-link prev" href="find-alumni-magnus-esterhuizen/" tabindex="-1"><i class="fa fa-chevron-left pr-1" aria-hidden="true"></i> Previous</a> </li>
                    </ul>
                </nav>
            </div>
            <div class="contact-alumni-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="developer-details">
                            <div class="text-center">
                                <div class="service-box-top">
                                    <div class="developer-name-area">
                                        <h2 class="name regular mb-3">Magnus Esterhuizen</h2>
                                    </div>
                                    <div class="developer-pic mt-3">
                                        <img src="images/Magnus-Esterhuizen.png" srcset="images/Magnus-Esterhuizen@2x.png 2x, images/Magnus-Esterhuizen@3x.png 3x" class="rounded-circle w-auto d-inline" alt="Magnus Esterhuizen">
                                    </div>
                                    <div class="developer-short-info mb-4">
                                        <h5 class="designation mb-2">Senior Full Stack Developer</h5>
                                        <small class="exp-text">10+ years experience</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="py-4">
                            <div class="heading mb-4">
                                <h3 class="regular"><strong>Request to contact</strong> Magnus Esterhuizen</h3>
                            </div>
                            <div class="hor-line"></div>
                            <div class="sub-title mb-4">
                                <h3 class="text-uppercase f-bold mb-0">General Info </h3>
                            </div>
                            <form>
                                <div class="px-3">
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputName1" class="col-sm-3 col-form-label">Your name:</label>
                                            <div class="col-sm-9 align-self-center">
                                                <input type="name" class="form-control" id="inputName1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputCompName2" class="col-sm-3 col-form-label">Company name:</label>
                                            <div class="col-sm-9 align-self-center">
                                                <input type="name" class="form-control" id="inputCompName2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputAddress4" class="col-sm-3 col-form-label">Company address:</label>
                                            <div class="col-sm-9 align-self-center">
                                                <input type="text" class="form-control" id="inputAddress4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputContactNum5" class="col-sm-3 col-form-label">Contact number:</label>
                                            <div class="col-sm-9 align-self-center">
                                                <input type="text" class="form-control contact-input" id="inputContactNum5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputEmail6" class="col-sm-3 col-form-label">Email address:</label>
                                            <div class="col-sm-9 align-self-center">
                                                <input type="email" class="form-control contact-input" id="inputEmail6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hor-line"></div>
                                <div class="sub-title mb-4">
                                    <h3 class="text-uppercase f-bold mb-0">Work Required </h3>
                                </div>
                                <div class="px-3">
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputKeyTechnololgy7" class="col-sm-3 col-form-label">Key technologies required</label>
                                            <div class="col-sm-9 align-self-center">
                                                <div class="search-control">
                                                    <input type="email" class="form-control contact-input mb-3" id="inputKeyTechnololgy7" placeholder="Type skill in here ">
                                                    <div class="badge badge-pill v-light-blue"> <span>Javascript</span> <i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                                    <div class="badge badge-pill v-light-blue"> <span>HTML 5 </span><i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                                    <div class="badge badge-pill v-light-blue"> <span>CSS 3</span><i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputBriefDesc" class="col-sm-3 col-form-label">Brief description of the work / job. </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="8" cols="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="ml-sm-auto">
                                            <button type="submit" class="btn btn-blue-outline medium text-capitalize">Send enquiry </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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