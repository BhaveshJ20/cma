<?php include 'common.php'; ?>
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
    <link rel="stylesheet" href="css/all.min.css">
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
    <section class="container">
        <div class="py-5">
            <div class="media">
                <img class="mr-3" src="images/logo_big.svg" alt="Company Logo">
                <div class="media-body align-self-center">
                    <div class="banner-title"><h1 class="regular mb-0">The Maven Academy</h1></div>
                    <div class="banner-text mb-0"><p class="f-20 mb-0">HTML / CSS Library</p></div>  
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-blue py-3">
        <div class="container">
            <div class="sub-title mb-2">
                <h2 class="regular f-22 mb-0">Style Tile & Component Library </h2>
            </div>
            <div class="ml-3">
                <p class="mb-0">Here you will find all the HTML / CSS </p>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="mb-3"><a href="styleguide/" target="_blank" class="blue-link">Style Tile</a></div>
            <div class=""><a href="https://front-end.deployme.co.za/cma-admin-html/styleguide.html" target="_blank" class="blue-link">Style Tile Admin</a></div>
        </div>
    </section>
    <section class="bg-light-blue py-3">
        <div class="container">
            <div class="sub-title mb-2">
                <h2 class="regular f-22 mb-0">Marketing site -  Front End </h2>
            </div>
            <div class="ml-3">
                <p class="mb-0">Here you will find all the HTML / CSS </p>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="mb-4"><a href="index.php" target="_blank" class="blue-link">Home</a></div>    
            <div class="mb-4">
                <h6 class="f-bold blue-text">Why us</h6>
                <ul class="list2">
                    <li><a href="why-us/" target="_blank" class="blue-link">Overview</a></li>
                    <li><a href="internship-programme/" target="_blank" class="blue-link">Internship programme</a></li>
                    <li><a href="financial-aid/" target="_blank" class="blue-link">Scholarships and financial aid</a></li>
                </ul>
            </div>
            <!-- <div class="mb-4">
                <h6 class="f-bold blue-text">Study Abroad</h6>
                <ul class="list2">
                    <li><a href="study-abroad/" target="_blank" class="blue-link">Cape Town South Africa</a></li>
                </ul>
            </div> -->
            <div>
                <h6 class="f-bold blue-text">Training</h6>
                <ul class="list2">
                    <li><a href="courses/full-stack-web-developer/" target="_blank" class="blue-link">Become Full Stack Web Developer in 12 Weeks</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- <section class="pb-4">
        <div class="container">
            <a href="location.php" target="_blank" class="blue-link">Our Location</a>
        </div>
    </section> -->
    <section class="pb-3">
        <div class="container">
            <a href="contact-us/" target="_blank" class="blue-link">Contact us</a>
        </div>
    </section>
    <section class="py-4">
        <div class="container">   
            <div class="mb-4">
                <h6 class="f-bold blue-text">General Faq</h6>
                <ul class="list2">
                    <li><a href="faq/" target="_blank" class="blue-link">General </a></li>
                    <li><a href="faq/" target="_blank" class="blue-link">Financial Aid - Study for Just R1</a></li>
                    <li><a href="faq/" target="_blank" class="blue-link">Internship - Work, Learn & Earn</a></li>
                    <!-- <li><a href="faq/" target="_blank" class="blue-link">Study Abroad programme</a></li> -->
                    <li><a href="faq/" target="_blank" class="blue-link">Full Stack Web Developer Course (12 Weeks)</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="pb-4">
        <div class="container">
            <div class="mb-4"><a href="applynow/" target="_blank" class="blue-link">Enrol now</a></div>
            <div class="mb-4"><a href="thankyou/" target="_blank" class="blue-link">Thank you</a></div>
        </div>
    </section>
    <section class="bg-light-blue py-3">
        <div class="container">
            <div class="sub-title mb-2">
                <h2 class="regular f-22 mb-0">Alumni Portal - Front End </h2>
            </div>
            <div class="ml-3">
                <p class="mb-0">Here you will find all the HTML / CSS </p>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <ul class="list2">
                <li><a href="internship-programme/" target="_blank" class="blue-link">Find Alumni</a></li>
                <li><a href="find-alumni-magnus-esterhuizen/" target="_blank" class="blue-link">Full details</a></li>
                <li><a href="contact-alumni-magnus-esterhuizen/" target="_blank" class="blue-link">Hire me</a></li>
            </ul>
        </div>
    </section>
    <section class="bg-light-blue py-3">
        <div class="container">
            <div class="sub-title mb-2">
                <h2 class="regular f-22 mb-0">Alumni Portal - Backend </h2>
            </div>
            <div class="ml-3">
                <p class="mb-0">Here you will find all the HTML / CSS </p>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <ul class="list2">
                <li><a href="login/" target="_blank" class="blue-link">Login</a></li>
                <li><a href="https://front-end.deployme.co.za/cma-admin-html/" target="_blank" class="blue-link">Dashboard</a></li>
                <li><a href="https://front-end.deployme.co.za/cma-admin-html/myaccount.html" target="_blank" class="blue-link">My Profile</a></li>
                <li><a href="https://front-end.deployme.co.za/cma-admin-html/mycv.html" target="_blank" class="blue-link">My CV builder</a></li>
                <li><a href="https://front-end.deployme.co.za/cma-admin-html/my-requests.html" target="_blank" class="blue-link">My requests</a></li>
            </ul>
        </div>
    </section>
    <section class="bg-light-blue py-3">
        <div class="container">
            <div class="sub-title mb-2">
                <h2 class="regular f-22 mb-0">CRM Mailers </h2>
            </div>
            <div class="ml-3">
                <p class="mb-0">Here you will find all the HTML / CSS </p>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <ul class="list2">
                <li><a href="https://front-end.deployme.co.za/crm-emailer/thanks_for_enquiry.html" target="_blank" class="blue-link">Thanks for your enquiry</a></li>
                <li><a href="https://front-end.deployme.co.za/crm-emailer/pre-qualification.html" target="_blank" class="blue-link">Pre qualification</a></li>
                <li><a href="https://front-end.deployme.co.za/crm-emailer/pre-qualification-pass.html" target="_blank" class="blue-link">Pre qualification pass</a></li>
                <li><a href="https://front-end.deployme.co.za/crm-emailer/pre-qualification-fail.html" target="_blank" class="blue-link">Pre qualification fail</a></li>
                <li><a href="https://front-end.deployme.co.za/crm-emailer/payment-notification.html" target="_blank" class="blue-link">Payment notification</a></li>
                <li><a href="https://front-end.deployme.co.za/crm-emailer/payment-notification-success.html" target="_blank" class="blue-link">Payment notification-success</a></li>
                <li><a href="https://front-end.deployme.co.za/crm-emailer/pre-work-notification.html" target="_blank" class="blue-link">Pre-work-notification</a></li>
                <li><a href="https://front-end.deployme.co.za/crm-emailer/pre-course-notice.html" target="_blank" class="blue-link">Pre-course-notice</a></li>
            </ul>
        </div>
    </section>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>