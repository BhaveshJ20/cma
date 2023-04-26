<?php include 'common.php'; ?>

<?php
$dynamic_page_title = "Learn How to Code - Premium Coding Courses | The Maven Academy";
$dynamic_meta_keyword = "";
$dynamic_meta_description = "Become a formidable coder with The Maven Academy! Our coding courses are set to launch your career in tech. We provide an in class fully immersive experience to teach you the fundamentals of web coding and more";
$dynamic_meta_image = $config['Image_Url']."tech-mavens.png";
$active_class = "home_page";
?>

<?php include 'header.php'; ?>

<section class="banner-wrap full-height bg-light-blue d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="banner-title mb-4 text-center">
                    <h1 class="regular">
                        Next level training in
                        <div class="typewrite blue-text f-semibold" data-period="3000" data-type='[ "Web development", "User experience design", "User interface design", "Mobile development", "Software development" ]'>
                            <span class="wrap"></span></div>
                    </h1>
                </div>
                <div class="banner-img text-center mb-4">
                    <img src="images/tech-mavens.png" srcset="images/tech-mavens@2x.png 2x, images/tech-mavens@3x.png 3x" alt="Next Generation of Tech Experts">
                </div>
                <div class="banner-text text-center">
                    <p class="f-semibold f-18">Take your tech career to the next level with our immersive software development programmes
                </div>
                <div class="text-center"><a href="why-us/" class="btn btn-blue btn-shadow large">Find out more</a></div>
            </div>
        </div>
    </div>
</section>

<section class="why-us-wrap">
    <div class="odd-even-wrap">
        <div class="odd-block">
            <div class="odd-left why-should-ma">
                <div class="main-title">
                    <h2 class="regular mb-0">Why Maven Academy?</h2>
                </div>
                <div class="main-title-content">
                    <p>We’re disrupting the way you learn new technology by immersing you into real-world work conditions so you can learn what you need to hit the ground running in the top development jobs at the head of the line.</p>
                    <p>After two decades of building bespoke software solutions, and from our own hands-on coding experience, we’ve crafted a comprehensive software development curriculum that equips you for today’s complex technical work environments and prepares you for the future with exposure to cutting-edge technology.</p>
                    <a href="why-us/" class="btn btn-blue-outline small text-capitalize">Read More </a>
                </div>
            </div>
        </div>
        <div class="even-block">
            <div class="even-block-content d-flex">
                <div class="academy-info align-self-center">
                    <ul class="list-unstyled">
                        <li class="media">
                            <div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/career-changers.svg" alt="Learn by creating"></div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-2">Learn by creating </h5>
                                <p>Master the art of code by working on projects that reflect the kind of work you will carry out for future employers and clients.</p>
                            </div>
                        </li>
                        <li class="media my-5">
                            <div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/career-boosters.svg" alt="Expert Review"></div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-2">Expert coaching</h5>
                                <p>Adopt the best-practice development techniques with on-demand access to mentors bringing their global tech exposure directly to you. Consistent feedback and mentorship refine your skills until you are comfortable producing efficient, production-grade code without hesitation.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="icon-square bg-blue d-flex justify-content-center align-items-center"><img src="images/recent-graduates.svg" alt="Intern programme"></div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-2">Internship Programme</h5>
                                <p>Don’t struggle with the job hunt! Hit the ground sprinting with our exclusive platform that allows you to <a href="internship-programme/" class="blue-link">Work, Learn, and Earn</a> at the same time.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>

<section class="our-courses-wrap bg-light-blue">
    <div class="container">
        <div class="main-title text-center">
            <h2 class="regular mb-0">Our Courses </h2>
        </div>
        <div class="main-title text-center">
            <p>Immersive training programs aimed at accelerating your career in tech, regardless of your experience level. We meet you where you’re at, and support you far beyond your goals!</p>
        </div>
        <div class="our-course-slider mt-5">
            <div class="owl-carousel owl-theme box-slider">
                <div class="item">
                    <div class="box d-flex flex-column text-center">
                        <div class="box-header"><a href="courses/full-stack-web-developer/" class="blue-link f-15 f-bold text-decoration-none">Become a Full Stack Web Developer</a> </div>
                        <div class="box-content">
                            <div class="course-img">
                                <img src="images/webdeveloper.png" srcset="images/webdeveloper@2x.png 2x, images/webdeveloper@3x.png 3x" alt="Web Development">
                            </div>
                            <div class="course-title">
                                <h6 class="f-bold">12 weeks - In classroom</h6>
                            </div>
                            <div class="course-desc">
                                <p>Ideal for programmers with a fundamental knowledge of coding who want to enhance their skills and take their careers to the next level. Our all-inclusive, full-stack web development programme teaches you to build dynamic, data-driven web applications using an entire workshop of progressive tech.</p>
                                <p><strong>Learn;</strong> Advanced HTML, SCSS, Material Design, Angular 8, Node.js, Mongo DB, Express.</p>

                            </div>
                        </div>
                        <div class="box-footer text-center mb-4">
                            <a href="courses/full-stack-web-developer/" class="btn btn-blue-outline btn-md small text-capitalize">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box d-flex flex-column text-center">
                        <div class="box-header"><a href="courses/4-week-front-end-web-developer/" class="blue-link f-15 f-bold text-decoration-none">Become a Front End Developer</a> </div>
                        <div class="box-content">
                            <div class="course-img text-center">
                                <img src="images/frontend-dev.png" srcset="images/frontend-dev@2x.png 2x, images/frontend-dev@3x.png 3x" alt="Front End Developer">
                            </div>
                            <div class="course-title">
                                <h6 class="f-bold">4 Week Course - In classroom </h6>
                            </div>
                            <div class="course-desc">
                                <p>A fully immersive on-site course providing an introduction to HTML, CSS, and JavaScript for beginners. The course is Ideal for individuals with zero knowledge of HTML, CSS, and JavaScript who want to begin learning the skills necessary to work in this field.</p>

                            </div>
                        </div>
                        <div class="box-footer text-center mb-4">
                        <a href="courses/4-week-front-end-web-developer/" class="btn btn-blue-outline btn-md small text-capitalize">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box d-flex flex-column course-unavailable comming-soon text-center">
                        <div class="box-header"><a href="javascript:void(0);" class="blue-link f-15 f-bold text-decoration-none">Become a Ui/Ux Designer</a> </div>
                        <div class="box-content">
                            <div class="course-img text-center">
                                <img src="images/ui-ux-designer.png" srcset="images/ui-ux-designer@2x.png 2x, images/ui-ux-designer@3x.png 3x" alt="UI UX Design">
                            </div>
                            <div class="course-title">
                                <h6 class="f-bold">4 Week Course - In classroom </h6>
                            </div>
                            <div class="mt-4"><a href="javascript:void(0);" class="btn btn-blue-outline btn-md small text-capitalize">Coming soon! </a></div>
                        </div>
                        <div class="box-footer text-center mb-4">
                            <!-- <a href="javascript:void(0);" class="btn btn-blue-outline btn-md small text-capitalize">Coming soon! </a> -->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box d-flex flex-column course-unavailable comming-soon text-center">
                        <div class="box-header"><a href="javascript:void(0);" class="blue-link f-15 f-bold text-decoration-none">Become a Java Spring Boot Developer</a> </div>
                        <div class="box-content">
                            <div class="course-img text-center">
                                <img src="images/spring-boot-dev.png" srcset="images/spring-boot-dev@2x.png 2x, images/spring-boot-dev@3x.png 3x" alt="Java Spring Boot Developer">
                            </div>
                            <div class="course-title">
                                <h6 class="f-bold">12 Week Course - In classroom </h6>
                            </div>
                            <div class="mt-4"><a href="javascript:void(0);" class="btn btn-blue-outline btn-md small text-capitalize">Coming soon! </a></div>
                        </div>
                        <div class="box-footer text-center mb-4">
                            <!-- <a href="javascript:void(0);" class="btn btn-blue-outline btn-md small text-capitalize">Coming soon!</a> -->
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex">
            <!-- <a href="javascript:void(0)" class="customPrevBtn">
            <span class="arrow-icon arrow-left ml-2"></span>
            </a> -->
            <a href="javascript:void(0)" class="customNextBtn arrow-click">
                <span class="arrow-icon arrow-right ml-2"></span>
            </a>
        </div>
    </div>
</section>

<section class="career-services-wrap">
    <div class="container">
        <div class="main-title">
            <h2 class="regular mb-0">Career Services </h2>
        </div>
        <div class="main-title-content">
            <p>Learning to code is one thing, finding your place in the industry is quite another. With the knowledge that our graduates are well equipped for the working world, our Career Services aim to help you find a job once your programme is complete. With your hard work and our network, your future is bright!</p>
        </div>
    </div>
    <div class="container-fluid wrap-container">
        <div class="company-logo-block mb-4">
            <div class="owl-carousel logo-slider">
                <div class="item">
                    <div class="company-logo"><img src="images/companies-logo/logo-zando.png" class="grayscale grayscale-fade img-fluid" alt="Zando"></div>
                </div>
                <div class="item">
                    <div class="company-logo"><img src="images/companies-logo/logo-nedbank.png" class="grayscale grayscale-fade img-fluid" alt="Netbank"></div>
                </div>
                <div class="item">
                    <div class="company-logo"><img src="images/companies-logo/logo-vuma.png" class="grayscale grayscale-fade img-fluid" alt="Vuma"></div>
                </div>
                <div class="item">
                    <div class="company-logo"><img src="images/companies-logo/logo-flash.png" class="grayscale grayscale-fade img-fluid" alt="Flash"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex mb-5">
            <!-- <a href="javascript:void(0)" class="customPrevBtn1">
            <span class="arrow-icon arrow-left ml-2"></span>
            </a> -->
            <a href="javascript:void(0)" class="customNextBtn1 arrow-click">
                <span class="arrow-icon arrow-right ml-2"></span>
            </a>
        </div>
    </div>
    <div class="container">
        <a href="why-us/" class="btn btn-blue-outline small text-capitalize">Find out more </a>
    </div>
</section>

<section class="what-our-student-wrap dark-gray-bg">
    <div class="container">
        <div class="owl-carousel testimonial-slider">
            <div class="item">
                <div class="row">
                    <div class="col-lg-7 order-lg-2">
                        <div class="mb-5 mb-lg-0"><img src="images/Kay.jpg" alt="Kay"></div>
                    </div>
                    <div class="col-lg-5 order-lg-1 align-self-center">
                        <div class="main-title">
                            <h2 class="regular mb-0 text-white">What our students think about our courses </h2>
                        </div>
                        <div class="main-title-content mb-5">
                            <p class="text-white mb-4">Being a Digital Account Manager I’ve wanted to transition into the world of programming to better understand how to manage teams and build my own digital assets for web and mobile. I found that this 4 week web fundamentals course truly gave me all the necessary skills and tools to achieve my goals. </p>
                            <p class="blue-text mb-0">- Kay Solomons</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-7 order-lg-2">
                        <div class="mb-5 mb-lg-0"><img src="images/neil.jpg" alt="Neil"></div>
                    </div>
                    <div class="col-lg-5 order-lg-1 align-self-center">
                        <div class="main-title">
                            <h2 class="regular mb-0 text-white">What our students think about our courses </h2>
                        </div>
                        <div class="main-title-content mb-5">
                            <p class="text-white mb-4">Being a certified Scrum Master & Product Owner - I have a general love for process and systems. The 4 Week Web Fundamentals course was the perfect fit to help me better equip myself for the technical roles I fulfil as a team lead in web projects. This course has helped take my career to new heights, and has thought me some seriously valuable insights into coding.</p>
                            <p class="blue-text mb-0">- Neil Lennon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex">
            <!-- <a href="javascript:void(0)" class="customPrevBtn2">
            <span class="arrow-icon-blue arrow-left ml-2"></span>
            </a> -->
            <a href="javascript:void(0)" class="customNextBtn2 arrow-click">
                <span class="arrow-icon-blue arrow-right ml-2"></span>
            </a>
        </div>
    </div>
</section>

<!-- <section class="ct-campus-wrap pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-title">
                    <h2 class="regular mb-0">Cape Town Campus </h2>
                </div>
                <div class="main-title-content">
                    <p class="mb-4"><strong>Campus:</strong> Maven Academy - Cape Town</p> 
                    <p><strong>Address:</strong> Office F01A, Brookside Office Park, 11 Imam Haron Road, Claremont, Western Cape, 7708</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ct-enroll-btn mt-4">
                    <a href="applynow/" class="btn btn-blue btn-shadow large text-uppercase">Enrol Now </a>
                </div>
            </div>
        </div>
        <div class="ct-campus-img">
            <img src="images/ct-campus.jpg" class="img-full" alt="Cape Town Campus">
        </div>
    </div>
</section> -->

<section class="get-pumped-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-lg-auto">
                <div class="text-center">
                    <div class="mb-5"><img src="images/contact-banner.png" srcset="images/contact-banner@2x.png 2x, images/contact-banner@3x.png 3x" alt="Get in touch"></div>
                    <div class="main-title mb-4">
                        <h2 class="regular mb-0">Get pumped, get skilled</h2>
                    </div>
                    <div class="main-title-content">
                        <p>Schedule a call with one of our friendly course consultants and we’ll get back to you within 24 hours.</p>
                        <p><strong class="dark-gray">Address:</strong> Office F01A, Brookside Office Park, 11 Imam Haron Road, Claremont, <br>Western Cape, 7708</p>
                        <p><strong class="dark-gray">Call us: </strong> <a href="tel:+27 21 461 68 17" class="num-link"><strong>+27 21 461 68 17</strong></a></p>
                        <p><strong class="dark-gray">Say hello:</strong> <a href="mailto:hello@themavenacademy.one" class="blk-link">hello@themavenacademy.one</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="html5lightbox/html5lightbox.js"></script>
<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 100 - Math.random() * 50;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap {border-right: 5px solid transparent;}";
        document.body.appendChild(css);
    };
</script>