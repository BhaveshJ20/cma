<?php include '../common.php';?>
<?php
$dynamic_page_title = "Knowledge Base - Learn Javascript | The Maven Academy";
$dynamic_meta_keyword = "";
$dynamic_meta_description = "";
$dynamic_meta_image = $config['Image_Url'] . "faq-banner.png";
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

<section class="banner-wrap full-height bg-light-blue d-flex align-items-center mt-0">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 order-lg-2">
                <div class="banner-title text-lg-left text-center d-sm-block d-lg-none learn-banner-title">
                    <h1 class="regular">An introduction to Javascript, check out the article below. </h1>
                </div>
                <div class="banner-img text-center mb-4">
                    <img src="images/faq-banner.png" srcset="images/faq-banner@2x.png 2x, images/faq-banner@3x.png 3x"
                        alt="An introduction to Javascript">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 align-self-center">
                <div class="text-lg-left text-center learn-banner-subtile">
                    <h6 class="f-bold">JAVASCRIPT GUIDES</h4>
                </div>
                <div class="banner-title mb-5 text-lg-left text-center d-none d-lg-block learn-banner-title">
                    <h1 class="regular">An introduction to Javascript, check out the article below. </h1>
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
        <div class="row">
            <nav aria-label="Page navigation" class="col-12 mb-5">
                <ul class="pagination justify-content-between">
                    <li class="page-item align-self-center"> <a class="page-link prev" href="JavaScript:void(0);"
                            tabindex="-1"><i class="fa fa-chevron-left pr-1" aria-hidden="true"></i> Previous</a> </li>
                    <li class="page-item align-self-center"> <a class="page-link next" href="JavaScript:void(0);">Next
                            <i class="fa fa-chevron-right pl-1" aria-hidden="true"></i> </a> </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-md-2">
                <div class="social-media v-list">
                    <ul>
                        <li>
                            <a href="https://web.facebook.com/The-Maven-Academy-108366197273447/?modal=admin_todo_tour"
                                target="_blank" class="d-flex justify-content-center">
                                <img src="images/facebook.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/AcademyMaven" target="_blank"
                                class="d-flex justify-content-center">
                                <img src="images/twitter.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="d-flex justify-content-center">
                                <img src="images/googleplus.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/themavenacademysa/" target="_blank"
                                class="d-flex justify-content-center">
                                <img src="images/instagram.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div>
                    <div>
                        <div class="main-title">
                            <h2 class="regular mb-0">An Introduction to JavaScript</h2>
                        </div>
                        <p>Let’s see what’s so special about JavaScript, what we can achieve with it, and which other
                            technologies play well with it.
                            What is JavaScript? JavaScript was initially created to “make web pages alive”. The programs
                            in
                            this language are called scripts. </p>

                        <p>They can be written right in a web page’s HTML and run automatically as the page loads.
                            Scripts
                            are provided and executed as plain text. They don’t need special preparation or compilation
                            to
                            run. In this aspect, JavaScript is very different from another language called Java</p>
                    </div>
                    <div class="box study-ct-campus p-5 mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="d-flex justify-content-center">
                                        <img src="images/icon-intro.svg" alt="Why is it called JavaScript?">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="main-title mb-3">
                                            <h2 id="codemaven-internship" class="regular mb-0">Why is it called
                                                JavaScript?</h2>
                                        </div>
                                        <p>When JavaScript was created, it initially had another name: “LiveScript”. But
                                            Java was very popular at that time, so it was decided that positioning a new
                                            language as a “younger brother” of Java would help.</p>
                                        <p>But as it evolved, JavaScript became a fully independent language with its
                                            own specification called ECMAScript, and now it has no relation to Java at
                                            all.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                        <p>Today, JavaScript can execute not only in the browser, but also on the server, or actually on
                            any device that has a special program called the JavaScript engine. The browser has an
                            embedded engine sometimes called a “JavaScript virtual machine”.</p>

                        <p><strong>Different engines have different “codenames”. For example:</strong></p>
                        <ul class="dash-list">
                            <li class="f-16"><i>-</i>V8 – in Chrome and Opera.</li>
                            <li class="f-16"><i>-</i>SpiderMonkey – in Firefox.</li>

                        </ul>
                        <p>…There are other codenames like “Trident” and “Chakra” for different versions of IE,
                            “ChakraCore” for Microsoft Edge, “Nitro” and “SquirrelFish” for Safari, etc. The terms above
                            are good to remember because they are used in developer articles on the internet. We’ll use
                            them too. For instance, if “a feature X is supported by V8”, then it probably works in
                            Chrome and Opera.</p>
                    </div>
                    <div class="box study-ct-campus p-5 mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="d-flex justify-content-center">
                                        <img src="images/icon-intro.svg" alt="Why is it called JavaScript?">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="main-title mb-3">
                                            <h2 id="codemaven-internship" class="regular mb-0">How do engines work?</h2>
                                        </div>
                                        <p><strong>Engines are complicated. But the basics are easy.</strong></p>
                                        <ul class="dash-list">
                                            <li class="f-16"><i>-</i>The engine (embedded if it’s a browser) reads
                                                (“parses”) the script.</li>
                                            <li class="f-16"><i>-</i>Then it converts (“compiles”) the script to the
                                                machine language.</li>
                                            <li class="f-16"><i>-</i>And then the machine code runs, pretty fast.</li>
                                        </ul>
                                        <p>The engine applies optimizations at each step of the process. It even watches
                                            the compiled script as it runs, analyzes the data that flows through it, and
                                            further optimizes the machine code based on that knowledge.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="main-title">
                            <h2 class="regular mb-0">What can in-browser JavaScript do?</h2>
                        </div>
                        <p>Modern JavaScript is a “safe” programming language. It does not provide low-level access to
                            memory or CPU, because it was initially created for browsers which do not require it.
                            JavaScript’s capabilities greatly depend on the environment it’s running in. For instance,
                            Node.js supports functions that allow JavaScript to read/write arbitrary files, perform
                            network requests, etc.</p>

                        <p>In-browser JavaScript can do everything related to webpage manipulation, interaction with the
                            user, and the webserver.</p>
                        <p><strong>For instance, in-browser JavaScript is able to:</strong></p>
                        <ul class="dash-list">
                            <li class="f-16"><i>-</i>Add new HTML to the page, change the existing content, modify
                                styles.</li>
                            <li class="f-16"><i>-</i>React to user actions, run on mouse clicks, pointer movements, key
                                presses.</li>
                            <li class="f-16"><i>-</i>Send requests over the network to remote servers, download and
                                upload files (so-called AJAX and COMET technologies).</li>
                            <li class="f-16"><i>-</i>Get and set cookies, ask questions to the visitor, show messages.
                            </li>
                            <li class="f-16"><i>-</i>Remember the data on the client-side (“local storage”).</li>
                        </ul>

                    </div>
                    <div class="mb-5">
                        <div class="main-title">
                            <h2 class="regular mb-0">What CAN’T in-browser JavaScript do?</h2>
                        </div>
                        <p>JavaScript’s abilities in the browser are limited for the sake of the user’s safety. The aim
                            is to prevent an evil webpage from accessing private information or harming the user’s data.
                        </p>
                        <p><strong>Examples of such restrictions include:</strong></p>
                        <p>JavaScript on a webpage may not read/write arbitrary files on the hard disk, copy them or
                            execute programs. It has no direct access to OS system functions. Modern browsers allow it
                            to work with files, but the access is limited and only provided if the user does certain
                            actions, like “dropping” a file into a browser window or selecting it via an &lt;input&gt;
                            tag.
                            There are ways to interact with camera/microphone and other devices, but they require a
                            user’s explicit permission. So a JavaScript-enabled page may not sneakily enable a
                            web-camera, observe the surroundings and send the information to the NSA.</p>
                        <p>Different tabs/windows generally do not know about each other. Sometimes they do, for example
                            when one window uses JavaScript to open the other one. But even in this case, JavaScript
                            from one page may not access the other if they come from different sites (from a different
                            domain, protocol or port). This is called the “Same Origin Policy”. To work around that,
                            both pages must agree for data exchange and contain a special JavaScript code that handles
                            it. We’ll cover that in the tutorial. This limitation is, again, for the user’s safety. A
                            page from https://anysite.com which a user has opened must not be able to access another
                            browser tab with the URL https://gmail.com and steal information from there. JavaScript can
                            easily communicate over the net to the server where the current page came from. But its
                            ability to receive data from other sites/domains is crippled. Though possible, it requires
                            explicit agreement (expressed in HTTP headers) from the remote side. Once again, that’s a
                            safety limitation.</p>
                        <p>Such limits do not exist if JavaScript is used outside of the browser, for example on a
                            server. Modern browsers also allow plugin/extensions which may ask for extended permissions.
                            What makes JavaScript unique?</p>
                        <p><strong>There are at least three great things about JavaScript:</strong></p>
                        <ul class="dash-list">
                            <li class="f-16"><i>-</i>Full integration with HTML/CSS.</li>
                            <li class="f-16"><i>-</i>Simple things are done simply.</li>
                            <li class="f-16"><i>-</i>Support by all major browsers and enabled by default.</li>
                        </ul>
                        <p>JavaScript is the only browser technology that combines these three things. That’s what makes
                            JavaScript unique. That’s why it’s the most widespread tool for creating browser interfaces.
                            That said, JavaScript also allows to create servers, mobile applications, etc.
                            Languages “over” JavaScript The syntax of JavaScript does not suit everyone’s needs.
                            Different people want different features. That’s to be expected, because projects and
                            requirements are different for everyone. So recently a plethora of new languages appeared,
                            which are transpiled (converted) to JavaScript before they run in the browser. Modern tools
                            make the transpilation very fast and transparent, actually allowing developers to code in
                            another language and auto-converting it “under the hood”.</p>
                        <p><strong>Examples of such languages:</strong></p>
                        <ul class="dash-list">
                            <li class="f-16"><i>-</i>ReactJS</li>
                            <li class="f-16"><i>-</i>Angular 8</li>
                            <li class="f-16"><i>-</i>TypeScript is concentrated on adding “strict data typing” to
                                simplify the development and support of complex systems. It is developed by Microsoft.
                            </li>
                            <li class="f-16"><i>-</i>Dart is a standalone language that has its own engine that runs in
                                non-browser environments (like mobile apps), but also can be transpiled to JavaScript.
                                Developed by Google.</li>
                        </ul>
                        <p>There are more. Of course, even if we use one of transpiled languages, we should also know
                            JavaScript to really understand what we’re doing.</p>
                    </div>
                    <div class="box study-ct-campus p-5 mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="d-flex justify-content-center">
                                        <img src="images/icon-intro.svg" alt="Why is it called JavaScript?">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="main-title mb-3">
                                            <h2 id="codemaven-internship" class="regular mb-0">Summary</h2>
                                        </div>
                                        <p>JavaScript was initially created as a browser-only language, but is now used
                                            in many other environments as well. Today, JavaScript has a unique position
                                            as the most widely-adopted browser language with full integration with
                                            HTML/CSS. There are many languages that get “transpiled” to JavaScript and
                                            provide certain features. It is recommended to take a look at them, at least
                                            briefly, after mastering JavaScript.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <nav aria-label="Page navigation" class="col-12 mb-5">
                <ul class="pagination justify-content-between">
                    <li class="page-item align-self-center"> <a class="page-link prev" href="JavaScript:void(0);"
                            tabindex="-1"><i class="fa fa-chevron-left pr-1" aria-hidden="true"></i> Previous</a> </li>
                    <li class="page-item align-self-center"> <a class="page-link next" href="JavaScript:void(0);">Next
                            <i class="fa fa-chevron-right pl-1" aria-hidden="true"></i> </a> </li>
                </ul>
            </nav>
        </div>
    </div>
</section>



<section class="our-courses-wrap bg-light-blue">
    <div class="container">
        <div class="main-title text-md-left text-center">
            <h2 class="regular mb-0">Javascript courses </h2>
        </div>
        <div class="our-course-slider">
            <div class="owl-carousel owl-theme learn-box box-slider">
                <div class="item">
                    <a class="card h-100 text-center" href="learn-javascript/learn.php">
                        <div class="card-img-top bg-light-blue "><img src="images/icon-intro.svg" class="" alt=""></div>

                        <div class="card-body">
                            <h5 class="card-title">Learn Javascript</h5>
                            <p class="card-text">What is Javascirpt,<br>
                                and why is it so popular ? </p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a class="card h-100 text-center" href="learn-javascript/learn.php">
                        <div class="card-img-top pink-bg-400 "><img src="images/icon-manual.svg" class="" alt=""></div>

                        <div class="card-body">
                            <h5 class="card-title">Learn Javascript</h5>
                            <p class="card-text">Why Study JavaScript?</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a class="card h-100 text-center" href="learn-javascript/learn.php">
                        <div class="card-img-top light-yellow-bg"><img src="images/icon-code-editor.svg" class=""
                                alt=""></div>

                        <div class="card-body">
                            <h5 class="card-title">Learn Javascript</h5>
                            <p class="card-text">What is a Javascript Framework ? </p>
                        </div>
                    </a>
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