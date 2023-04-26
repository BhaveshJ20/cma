<?php include 'common.php'; ?>
<?php
$dynamic_page_title = "Web Dev Courses - Developer Short Course | Maven Academy";
$dynamic_meta_keyword = "";
$dynamic_meta_description = "With Maven Academy, you can become a Full Stack Web Developer in just 12 weeks. View the course outline, FAQs and application process to enrol today!";
$dynamic_meta_image = $config['Image_Url']."full-stack-banner.png";

$active_class = "courses";
?>
<?php include 'header.php'; ?>

<section class="banner-wrap full-height bg-light-blue d-flex align-items-center top-section">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 mx-auto">
                <div class="banner-title mb-4 text-center">
                    <h1 class="regular">Become a Full Stack Web Developer in 12 Weeks</h1>
                </div>
                <div class="banner-img text-center mb-4">
                    <img src="images/full-stack-banner.png" srcset="images/full-stack-banner@2x.png 2x, images/full-stack-banner@3x.png 3x" alt="Courses Banner">
                </div>
                <div class="banner-text text-center">
                    <p class="f-semibold f-18">Increase your earning potential by taking your development skills to the next level</p>
                </div>
                <div class="text-center"><a href="applynow/" class="btn btn-blue btn-shadow large">Enrol Now</a></div>
            </div>
        </div>
    </div>
</section>

<section class="courses-for-wrap">
    <div class="container">
        <div class="row">
        <nav aria-label="breadcrumb" class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="JavaScript:void(0);">Courses</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Full Stack Web Developer</li>
                </ol>
            </nav>
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h2 class="regular mb-0">Who will benefit from our full stack web development programme?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="services-box d-flex flex-column">
                            <div class="services-image d-flex justify-content-center mb-3">
                                <div class="icon-square bg-blue d-flex justify-content-center"><img src="images/career-changers.svg" alt="Career Changers"></div>
                            </div>
                            <div class="services-title d-flex justify-content-center mb-2">
                                <h5 class="f-bold text-capitalize">Career Changers</h5>
                            </div>
                            <div class="service-description">
                                <p>Looking to transition into a technical career? Maven Academy’s full stack web development programme equips you with the skills to become an industry leader earning a top salary.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-box d-flex flex-column">
                            <div class="services-image d-flex justify-content-center mb-3">
                                <div class="icon-square bg-blue d-flex justify-content-center"><img src="images/career-boosters.svg" alt="Career Boosters"></div>
                            </div>
                            <div class="services-title d-flex justify-content-center mb-2">
                                <h5 class="f-bold text-capitalize">Career Boosters</h5>
                            </div>
                            <div class="service-description">
                                <p>If you’re already familiar with programming but you’re looking to develop valuable specialised skills, this programme is ideal for building upon your existing foundation to increase your earning potential.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-box d-flex flex-column">
                            <div class="services-image d-flex justify-content-center mb-3">
                                <div class="icon-square bg-blue d-flex justify-content-center"><img src="images/recent-graduates.svg" alt="Recent Graduates"></div>
                            </div>
                            <div class="services-title d-flex justify-content-center mb-2">
                                <h5 class="f-bold text-capitalize">Recent Graduates </h5>
                            </div>
                            <div class="service-description">
                                <p>College graduates often require more practical experience in their field to build themselves into a valuable asset in the industry. This programme equips you with fundamental real-world experience in building high-end web applications using the latest full stack technologies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-outline-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-none d-lg-block">
                <div id="stick-here"></div>
                <div class="course-outline-left sticky-box" id="stickThis">
                    <div class="co-list" id="course-outline-list">
                        <div id="list-example" class="list-group">
                            <a class="list-group-item list-group-item-action" href="<?php echo $baseurl ?>courses/full-stack-web-developer/#course-outline-code" data-target="#course-outline-code">Course Outline Code</a>
                            <a class="list-group-item list-group-item-action" href="<?php echo $baseurl ?>courses/full-stack-web-developer/#gurus" data-target="#gurus">Gurus</a>
                            <a class="list-group-item list-group-item-action" href="<?php echo $baseurl ?>courses/full-stack-web-developer/#weekly-schedule" data-target="#weekly-schedule">Typical lecture day</a>
                            <a class="list-group-item list-group-item-action" href="<?php echo $baseurl ?>courses/full-stack-web-developer/#codemaven-internship" data-target="#codemaven-internship">Code Maven Internship</a>
                            <a class="list-group-item list-group-item-action" href="<?php echo $baseurl ?>courses/full-stack-web-developer/#application-process" data-target="#application-process">Application Process</a>
                            <a class="list-group-item list-group-item-action" href="<?php echo $baseurl ?>courses/full-stack-web-developer/#tution-start-dates" data-target="#tution-start-dates">Tuition and start dates</a>
                            <a class="list-group-item list-group-item-action" href="<?php echo $baseurl ?>courses/full-stack-web-developer/#faq" data-target="#faq">FAQ</a>
                        </div>
                        <div class="mt-4"><a href="applynow/" class="btn btn-blue btn-shadow btn-full">Enrol Now</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="course-outline-rightside scrollspy-content" data-spy="scroll" data-target="#course-outline-list" data-offset="85">
                    <div class="course-outline-tabs-block">
                        <div class="main-title scroll-title mb-5">
                            <h2 id="course-outline-code" class="regular mb-0">Course Outline </h2>
                        </div>
                        <div class="custom-tabs">
                            <div class="modules-dropdown d-xl-none d-lg-none d-md-block d-flex" id="tab-title">Pre Work</div>
                            <ul class="nav nav-tabs modules-tabs">
                                <li class="sub-tabs-item">
                                    <a class="sub-tabs-link active" href="javascript:void(0);" data-tab="pre-work-tab">Pre-work</a>
                                </li>
                                <li class="sub-tabs-item">
                                    <a class="sub-tabs-link" href="javascript:void(0);" data-tab="module1-tab">Module 1</a>
                                </li>
                                <li class="sub-tabs-item">
                                    <a class="sub-tabs-link" href="javascript:void(0);" data-tab="module2-tab">Module 2</a>
                                </li>
                                <li class="sub-tabs-item">
                                    <a class="sub-tabs-link" href="javascript:void(0);" data-tab="module3-tab">Module 3</a>
                                </li>
                                <li class="sub-tabs-item">
                                    <a class="sub-tabs-link" href="javascript:void(0);" data-tab="module4-tab">Module 4</a>
                                </li>
                                <li class="sub-tabs-item">
                                    <a class="sub-tabs-link" href="javascript:void(0);" data-tab="module5-tab">Master Class Electives</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content module-tab-cont">
                            <div class="tab-pane fade show active sub-tab-body" id="pre-work-tab">
                                <div class="block-text bg-light-blue p-5 mb-5">
                                    <div class="title mb-4">
                                        <h4 class="f-bold">Pre-work</h4>
                                    </div>
                                    <p class="mb-0">You don’t have to understand everything about the MEAN stack to dive in to the introductory tutorial. Your initial challenge will be to build Google’s official “Tour of Heroes” app. Don’t worry! We’re going to explain the hard parts in great detail during your course.</p>
                                </div>
                               
                            </div>
                            <div class="tab-pane fade sub-tab-body" id="module1-tab">
                                <div class="block-text bg-light-blue p-5 mb-5">
                                    <div class="title mb-4">
                                        <h4 class="f-bold">Module 1: Review (1 Week)</h4>
                                    </div>
                                    <p class="mb-0">You’ve completed the Tour of Heroes tutorial as your pre-work; now we’ll build upon that together as a class with a “Tour of Students” app. We’ll review some core concepts in HTML, JS, and CSS to make sure they’re fresh, then jump into HTML5 advanced features, TypeScript, and SCSS to give your code superpowers.</p>
                                </div>
                               
                            </div>
                            <div class="tab-pane fade sub-tab-body" id="module2-tab">
                                <div class="block-text bg-light-blue p-5 mb-5">
                                    <div class="title mb-4">
                                        <h4 class="f-bold">Module 2: Angular 8 (4 Weeks)</h4>
                                    </div>
                                    <p class="mb-0">Get ready to jump into the deep end! Our detailed study of Angular will simulate a real-world onboarding experience, just as you may expect to experience when you’re hired and beginning your first job with Angular. You’ll look over an Angular app running in production, and dissect it piece by piece as you build it back up from the ground up as a class. You’ll make the leap from your Tour of Students app to the production-grade final solution where you’ll add yourself to the database as a Maven Academy Alumni for all the world to see!</p>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade sub-tab-body" id="module3-tab">
                                <div class="block-text bg-light-blue p-5 mb-5">
                                    <div class="title mb-4">
                                        <h4 class="f-bold">Module 3: Back End (3 Weeks)</h4>
                                    </div>
                                    <p class="mb-0">Node.js is a powerful back end environment, and you’ll learn everything you need to support your Angular app with a back end server running the Express framework, MongoDB with the Mongoose ORM, and a REST API you can be proud of.</p>
                                </div>
                               
                            </div>
                            <div class="tab-pane fade sub-tab-body" id="module4-tab">
                                <div class="block-text bg-light-blue p-5 mb-5">
                                    <div class="title mb-4">
                                        <h4 class="f-bold">Module 4: Refactor and Extend (4 Weeks)</h4>
                                    </div>
                                    <p class="mb-0">Cutting your teeth in new territory, you’ll be asked to change how certain parts of the app behave, as well as adding new features on your own. This is when the going gets tough, but don’t worry! Your instructors will guide you through everything you need to prepare for a self-sufficient mindset as you prepare to graduate and enter the workforce.</p>
                                </div>
                               
                            </div>
                            <div class="tab-pane fade sub-tab-body" id="module5-tab">
                                <div class="block-text bg-light-blue p-5 mb-5">
                                    <div class="title mb-4">
                                        <h4 class="f-bold">Master Class Electives</h4>
                                    </div>
                                    <p class="mb-0">We take you the extra mile in our standard curriculum, but for those that want to go even further beyond that—check out our Master Class Electives.</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="box study-ct-campus p-5">
                                    <div class="media">
                                        <div class="icon-square bg-blue d-flex justify-content-center">
                                            <img src="images/bachler-icon.svg" alt="Study at Cape Town Campus">
                                        </div>
                                        <div class="media-body">
                                            <p>Want to find out more about what you will learn during our 12 Week Full Stack Web Developer Course. </p>
                                            <p>Download the full syllabus by entering your email address below. We will send you a link via email to download the brochure.</p>
                                            <form id="frmcourse" name="frmcourse" method="post" class="form-error">
                                                <div class="row">
                                                    <div class="col-md-8 align-self-center">
                                                        <div class="mb-3 mb-md-0">
                                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your email" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" autocapitalize="none" autocomplete="off">
															<input type="hidden" id="course_name" name="course_name" value="Full Stack Web Developer in 12 Weeks" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 align-self-center">
                                                        <div class="join-email-list">
                                                            <button type="button" class="btn btn-blue-outline small d-block" onclick="javascript: validateCourse();">Send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                    <div class="guru-cont">
                        <div class="main-title scroll-title mb-5">
                            <h2 id="gurus" class="regular mb-0">Gurus </h2>
                        </div>
                        <div class="block-text bg-light-blue p-5 mb-5">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="guru-pic mb-4"><img src="images/david-leidle.jpg" class="img-fluid" alt="David Liedle"></div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="title mb-4">
                                        <h3 class="blue-text regular"><span class="f-bold">David Liedle</span></h3>
                                        <h4 class="blue-text regular">Course Creator - MEAN Stack</h4>
                                    </div>
                                    <p class="mb-4">Programming passionately since 1988, David opened his own development studio in Central Georgia a decade later. From 1998-2001 he built his business around the country and, in January of 2001, incorporated in the State of Georgia. As the web development industry continued to grow out of its infancy, David began to apply his skills and experience to startups that were advancing the state of the industry, leading teams in Georgia, Hawaii, Virginia, New York, California, Florida, and Arizona.</p>
                                    <p>David’s work continues to be on the cutting edge of what is possible on the web and has been validated with awards, industry certifications, and media attention from the likes of Reader’s Digest and PC Magazine. </p>
                                    <a href="https://www.linkedin.com/in/davidchristianliedle/" target="_blank" class="blue-link d-inline-flex">
                                        <div class="align-self-end"><span class="icon-box-small rounded bg-blue d-block f-22"><i class="fab fa-linkedin-in text-white"></i></span></div>
                                        <div class="f-16 align-self-end ml-3">Learn more about David Liedle</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="weekly-schedule-wrap mb-5">
                        <div class="main-title scroll-title mb-3">
                            <h2 id="weekly-schedule" class="regular mb-0">Typical Lecture Day</h2>
                        </div>
                        <p>Your educational environment will mirror the real-world environment of an office, helping you to prepare for your first job upon graduation. Some teachers try to push their classes to exhaustion in the name of progress, but we believe you will learn more and be better prepared by practicing a positive work/life balance. As a result, our schedule is structured around a typical 8-hour workday, with a 1-hour lunch break.</p>
                        <div class="mb-5">
                            <h4 class="f-bold blue-text">Monday to Friday</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="media mb-5">
                                <div class="icon-square bg-blue d-flex justify-content-center p-0 mr-4">
                                    <h3 class="text-white text-center mb-0 align-self-center">09:00</h3>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 f-bold">Coffee and Review</h5>
                                    <p class="mb-0">Each class will start with a thorough review and discussion of the previous day’s exercises. This is an opportunity for students to identify areas that may need further attention and more self-study.</p>
                                </div>
                            </li>
                            <li class="media mb-5">
                                <div class="icon-square bg-blue d-flex justify-content-center p-0 mr-4">
                                    <h3 class="text-white text-center mb-0 align-self-center">09:30</h3>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 f-bold">Lecture Block Zero</h5>
                                    <p class="mb-0">Time flies when you’re having fun! We’ll take advantage of the freshest part of each morning for a solid 2-hour block of instruction.</p>
                                </div>
                            </li>
                            <li class="media mb-5">
                                <div class="icon-square bg-blue d-flex justify-content-center p-0 mr-4">
                                    <h3 class="text-white text-center mb-0 align-self-center">11:30</h3>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 f-bold">Pair Programming</h5>
                                    <p class="mb-0">Peer-to-peer learning at its best. You and another student will team up to complete new tasks that correspond with the day’s teachings.</p>
                                </div>
                            </li>
                            <li class="media mb-5">
                                <div class="icon-square bg-blue d-flex justify-content-center p-0 mr-4">
                                    <h3 class="text-white text-center mb-0 align-self-center">13:00</h3>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 f-bold">Lunch</h5>
                                    <p class="mb-0">An hour-long break to rest and recharge. Our campuses are centrally located, so there are many options available for a light and healthy lunch.</p>
                                </div>
                            </li>
                            <li class="media mb-5">
                                <div class="icon-square bg-blue d-flex justify-content-center p-0 mr-4">
                                    <h3 class="text-white text-center mb-0 align-self-center">14:00</h3>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 f-bold">Lecture Block One</h5>
                                    <p class="mb-0">Save that afternoon nap for later! There’s work to be done. This after-lunch lecture block will incorporate activities to keep your blood flowing and your brain on and in receive-mode.</p>
                                </div>
                            </li>
                            <li class="media mb-5">
                                <div class="icon-square bg-blue d-flex justify-content-center p-0 mr-4">
                                    <h3 class="text-white text-center mb-0 align-self-center">16:00</h3>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 f-bold">Individual Project</h5>
                                    <p class="mb-0">Spend the last portion of the day improving the online world as you know it! You will be tasked with identifying an existing app and applying the concepts of the day to improve upon the programme.</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="icon-square bg-blue d-flex justify-content-center p-0 mr-4">
                                    <h3 class="text-white text-center mb-0 align-self-center">18:00</h3>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 f-bold">Get outta here!</h5>
                                    <p class="mb-0">Go eat. Unwind. A rested brain will prepare you for tomorrow!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="cd-internship mb-5">
                        <div class="main-title scroll-title mb-3">
                            <h2 id="codemaven-internship" class="regular mb-0">Code Maven - Intern Programme </h2>
                        </div>
                        <div class="main-title-content mb-5">
                            <p class="mb-0">The Maven Academy is committed to helping you secure a new job after finishing your bootcamp. With your hard-work and our help, we’re confident that you can get hired by a fantastic company.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="services-box d-flex flex-column">
                                    <div class="services-image d-flex justify-content-center mb-3">
                                        <div class="icon-square bg-blue d-flex justify-content-center"><img src="images/expert-review.svg" alt="Expert Review"></div>
                                    </div>
                                    <div class="services-title d-flex justify-content-center mb-2">
                                        <h5 class="f-bold text-capitalize">Career Guidance</h5>
                                    </div>
                                    <div class="service-description">
                                        <p>It’s hard to achieve success Through one-on-one mentorship and exposure to our local tech ecosystems, we help you understand what options are out there and which ones to pursue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="services-box d-flex flex-column">
                                    <div class="services-image d-flex justify-content-center mb-3">
                                        <div class="icon-square bg-blue d-flex justify-content-center"><img src="images/search.svg" alt="Job Search"></div>
                                    </div>
                                    <div class="services-title d-flex justify-content-center mb-2">
                                        <h5 class="f-bold text-capitalize">Job Search </h5>
                                    </div>
                                    <div class="service-description">
                                        <p>We show you how to structure your search, optimize your digital presence, ace your personal and technical interviews, and build a killer portfolio. You'll be ready to take advantage of every opportunity. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="services-box d-flex flex-column">
                                    <div class="services-image d-flex justify-content-center mb-3">
                                        <div class="icon-square bg-blue d-flex justify-content-center"><img src="images/intern-programme.svg" alt="Intern programme"></div>
                                    </div>
                                    <div class="services-title d-flex justify-content-center mb-2">
                                        <h5 class="f-bold text-capitalize">Code Maven Internship </h5>
                                    </div>
                                    <div class="service-description">
                                        <p>There is not learning like wokring in the real world, Maven acedmy has a unique intern programme whereby we place you at a client with the help of a senior mentor. </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="internship-programme/" class="btn btn-blue-outline small text-capitalize">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light-blue mt-5 p-4">
                            <div class="company-logo-block">
                                <div class="main-title scroll-title">
                                    <h3>Work for great companies </h3>
                                </div>
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
                    </div>
                    <div class="application-process">
                        <div class="main-title scroll-title mb-5">
                            <h2 id="application-process" class="regular mb-0">Application Process </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="process-list first">
                                    <div class="process-top">
                                        <h5 class="process-header d-flex f-bold"><span class="count bg-blue rounded-circle text-white mr-3">1</span><span class="process-header-text">Apply online</span></h5>
                                    </div>
                                    <div class="service-description">
                                        <p>Identify the course that best suits your needs and fill in our online forms. Applications must be submitted by DATE.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="process-list">
                                    <div class="process-top">
                                        <h5 class="process-header d-flex f-bold"><span class="count bg-blue rounded-circle text-white mr-3">2</span><span class="process-header-text">Interview</span> </h5>
                                    </div>
                                    <div class="service-description">
                                        <p>Once we’ve assessed your application, we’ll set up an interview with you to further discuss the program you’ve chosen and make sure its the right fit for your requirements and current skill level.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="process-list three">
                                    <div class="process-top">
                                        <h5 class="process-header d-flex f-bold"><span class="count bg-blue rounded-circle text-white mr-3">3</span><span class="process-header-text">Pre-qualifying test</span> </h5>
                                    </div>
                                    <div class="service-description">
                                        <p>Our full stack web development programme requires that you are familiar with some fundamental skills in programming. We will test your current skills to ensure that you are sufficiently prepared to succeed in this programme.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="process-list">
                                    <div class="process-top">
                                        <h5 class="process-header d-flex f-bold"><span class="count bg-blue rounded-circle text-white mr-3">4</span><span class="process-header-text">Deposit & pre-work</span></h5>
                                    </div>
                                    <div class="service-description">
                                        <p>Once your tuition deposit is received, we will send you two weeks of course material to review prior to first day of lectures.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="process-list five">
                                    <div class="process-top">
                                        <h5 class="process-header d-flex f-bold"><span class="count bg-blue rounded-circle text-white mr-3">5</span><span class="process-header-text">Programme begins</span> </h5>
                                    </div>
                                    <div class="service-description">
                                        <p>Our programme kicks off with an orientation session, where you will meet your lecturers and peers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box study-ct-campus p-4">
                            <div class="media mb-0">
                                <div class="icon-square d-flex justify-content-center align-self-center p-0">
                                    <img src="images/enquiry-icon.png" srcset="images/enquiry-icon@2x.png 2x, images/enquiry-icon@3x.png 3x" alt="Enquiry Icon">
                                </div>
                                <div class="media-body align-self-center">
                                    <p class="mb-0">Need to find out more about the course, get in touch with us here, <br><a href="contact-us/" class="blue-link">Send us an enquiry</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tution-date-wrap">
                        <div class="main-title scroll-title mb-3">
                            <h2 id="tution-start-dates" class="regular mb-0">Tuition and Start Dates </h2>
                        </div>
                        <div class="main-title-content">
                            <p>Please see below for our next available course start dates. </p>
                        </div>
                        <div class="table-responsive course-date-table">
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
                                                <div class="table-top-cont"><label class="">Course</label>
                                                    <div class="avail-seat"><span class="badge badge-pill badge-red">5 Seats left</span></div>
                                                </div>
                                                <div class="table-desc">
                                                    <h6 class="regular">Full Stack Web Developer</h6>
                                                    <p class="mb-2">12 Week in Classroom</p>
                                                    <span class="badge badge-pill badge-red">20 Seats left</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-row-cont">
                                                <div class="table-top-cont"><label class="">Location </label></div>
                                                <div class="table-desc">
                                                    <h6 class="regular">Cape Town </h6>
                                                    <p class="mb-2">Brookside Office Park - Claremont</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-row-cont">
                                                <div class="table-top-cont"><label class="">Start Date</label></div>
                                                <div class="table-desc">
                                                    <h6 class="regular">3rd February 2020</h6>
                                                    <p class="mb-2">9:00 am</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-row-cont">
                                                <div class="table-top-cont"><label class="">Price</label></div>
                                                <div class="table-desc">
                                                    <h6><strong>R36,000</strong> <small>Once off</small></h6>
                                                    <p class="mb-2">R12,000 <small>Per month</small></p>
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
                    <div class="faq-wrap">
                        <div class="main-title scroll-title mb-5">
                            <h2 id="faq" class="regular mb-0">Frequenty Asked Questions </h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 font-weight-normal">
                                        <a href="javascript:void(0);" class="blue-text" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Do I need any programming skills or experience?</a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0">Previous exposure to coding is essential, whether it’s self-taught, through on-the-job learning, or from a college or an online course. Our programmes move through lots of important information over a relatively short period of time, and they’re created on the premise that students already have a foundational knowledge of coding, as well as a genuine interest and extreme motivation to learn efficiently.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0 font-weight-normal blue2">
                                        <a href="javascript:void(0);" class="blue-text collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Why do you teach the MEAN stack for full stack web development?</a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>As one of the most popular programming languages in the world, JavaScript operates on a wide variety of platforms and devices. It’s an essential language for web development and front- and back-end development. JavaScript is also one of the most sought-after technologies today, which translates into great career opportunities and massive earning potential. Because JavaScript has been around for so long and is so prolific in the industry, there is a large and highly engaged developer community willing to mentor junior programmers and help others learn from their past experiences.</p>
                                        <p class="mb-0">TypeScript is a superset of JavaScript. It is used by professional developers to write effective, scalable, enterprise-grade code. TypeScript compiles down to JavaScript for final deployment to the browser, but there are a few unique advantages that make it worth learning and using. Google ships Angular 8 with TypeScript as the default language, and students will become intimately familiar with its effective use in professional software development, giving them a leap forward in the industry as they enter the workforce.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0 font-weight-normal blue2">
                                        <a href="javascript:void(0);" class="blue-text collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">If I already know how to code, is the full stack web development programme right for me?</a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0">Yes! Our full stack web development programme will help elevate your career in tech. You will learn software development best practices, SOLID principles and how to use professional tools like GitHub, and the workflows most relevant in many startups and software companies. Additionally, you will be able to find your way around other technologies that are useful in the workplace, namely Mongo, Express, Angular and Node.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0 font-weight-normal blue2">
                                        <a href="javascript:void(0);" class="blue-text collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Is it really full-time, or can I work and do the programme at the same time?</a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0">It’s best to be entirely dedicated to the programme so you’re able to absorb and learn all the information we share with you over 12 weeks. Due to the sheer amount of work covered, it’s not possible to juggle other major responsibilities during the programme.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="stick-end"></div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>


<script>
    $(document).ready(function() {

        $('body').scrollspy({
            target: '#course-outline-list'
        })

        $('.sub-tabs-link').click(function() {
            var tab_id = jQuery(this).attr('data-tab');
            $('.sub-tabs-link').removeClass('active');
            $('.sub-tab-body').hide();
            $(this).addClass('active ');
            $("#" + tab_id).addClass('active  show').show();
        });

    });

    function myFunction(x) {
        if (x.matches) { // If media query matches
            $(".custom-tabs").click(function() {
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
</script>

<script>
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