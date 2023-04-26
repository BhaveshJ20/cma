<?php include 'common.php'; ?>
<?php
   $dynamic_page_title = "FAQ - Get Answers About Our Training | The Maven Academy";
   $dynamic_meta_keyword = "";
   $dynamic_meta_description = "Got some questions? We’ve got the answers. Check out our Frequently Asked Questions page. If the general FAQs don’t cover it, just get in touch.";
   $dynamic_meta_image = $config['Image_Url']."faq-banner.png";
   $active_class = "faq";
   ?>
<?php include 'header.php'; ?>
<section class="banner-wrap full-height bg-light-blue d-flex align-items-center top-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <div class="banner-title mb-4 text-center">
               <h1 class="regular">Frequently asked questions</h1>
            </div>
            <div class="banner-img text-center mb-4">
               <img src="images/faq-banner.png" srcset="images/faq-banner@2x.png 2x, images/faq-banner@3x.png 3x"
                  alt="FAQs">
            </div>
            <div class="banner-text text-center mb-0">
               <p class="f-semibold f-18">You’ve got questions; we’ve got answers!</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="general-faq-wrap">
   <div class="container">
      <nav aria-label="breadcrumb" class="col-12">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQ's</li>
         </ol>
      </nav>
      <div class="cma-v_tabs d-lg-flex">
         <div class="cma-v_tabs_left mr-lg-5">
            <div class="custom-tabs">
               <div class="modules-dropdown d-xl-none d-lg-none d-md-block d-flex" id="tab-title">Financial Aid
               </div>
               <ul class="nav nav-tabs modules-tabs">
                  <li class="sub-tabs-item">
                     <a class="sub-tabs-link active" href="javascript:void(0);"
                        data-tab="general-faq-tab">General FAQ</a>
                  </li>
                  <li class="sub-tabs-item">
                     <a class="sub-tabs-link" href="javascript:void(0);" data-tab="financial-aid-tab">Financial
                     Aid - Study for Just R1</a>
                  </li>
                  <li class="sub-tabs-item">
                     <a class="sub-tabs-link" href="javascript:void(0);" data-tab="ct-intership-tab">Internship -
                     Work, Learn & Earn</a>
                  </li>
                  <!-- <li class="sub-tabs-item">
                     <a class="sub-tabs-link" href="javascript:void(0);" data-tab="study-abroad-pg-tab">Study Abroad Programme</a>
                     </li> -->
                  <li class="sub-tabs-item">
                     <a class="sub-tabs-link" href="javascript:void(0);" data-tab="full-stack-js-course-tab">Full
                     Stack Web Developer Course <br>(12 Weeks)</a>
                  </li>
                  <li class="sub-tabs-item">
                     <a class="sub-tabs-link" href="javascript:void(0);"
                        data-tab="front-end-web-course-tab">Front End Web Fundamentals Course <br>(4 Weeks)</a>
                  </li>
               </ul>
            </div>
            <div class="mt-5 d-none d-lg-block"><a href="applynow/" class="btn btn-blue btn-shadow btn-full">Enrol
               Now</a>
            </div>
         </div>
         <div class="cma-v_tabs_right ml-lg-5">
            <div class="tab-content module-tab-cont mt-xl-0">
               <div class="tab-pane fade show active sub-tab-body" id="general-faq-tab">
                  <div class="faq-wrap p-0">
                     <div class="main-title mb-4">
                        <h2 class="regular mb-0">General FAQ</h2>
                     </div>
                     <div class="accordion mb-5" id="accordionExample5">
                        <div class="card">
                           <div class="card-header" id="headingTwentyOne">
                              <h5 class="mb-0 font-weight-normal">
                                 <a href="javascript:void(0);" class="blue-text" data-toggle="collapse"
                                    data-target="#collapseTwentyOne" aria-expanded="true"
                                    aria-controls="collapseTwentyOne">How does the admissions process
                                 work?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentyOne" class="collapse show" aria-labelledby="headingTwentyOne"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">Once you’ve decided on the correct course for you, submit an
                                    online application form. After that, we will interview you to get to
                                    know you better and to assess suitability. A final tech interview will
                                    follow, where we assess your ability to understand the concepts covered
                                    in the programme.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentyTwo">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentyTwo"
                                    aria-expanded="false" aria-controls="collapseTwentyTwo">When should I
                                 apply?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">The sooner, the better! We keep our classes small to ensure
                                    the best teacher-student ratio and to be able to offer more one-on-one
                                    interaction, so our classes fill up quickly. You will also need at least
                                    two weeks to complete the pre-work assignments and revisions before
                                    lectures start.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentyThree">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentyThree"
                                    aria-expanded="false" aria-controls="collapseTwentyThree">Can't I learn
                                 all of this online?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">You can learn most things online nowadays. However,
                                    self-study often takes longer and fails to keep most students motivated.
                                    With Maven Academy, you get world-class mentorship and support, as well
                                    as access to teachers and other like-minded individuals. What’s more,
                                    our students have access to our <a href="internship-programme/"
                                       class="blue-link">Work, Learn, and Earn</a>, where we pair expert
                                    remote developers alongside recently graduated candidates on real-world
                                    jobs. Most of our interns are selected for a permanent position once
                                    they complete their internship program, however this depends on your
                                    performance.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentyFour">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentyFour"
                                    aria-expanded="false" aria-controls="collapseTwentyFour">Do you offer
                                 scholarships?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentyFour" class="collapse" aria-labelledby="headingTwentyFour"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">Yes! We are proud of our unique approach to helping
                                    financially disadvantaged students benefit from our life-changing
                                    programs. Check out our Income Share Agreement programme, where we allow
                                    a select few students learn for just R1! <a href="financial-aid/"
                                       class="blue-link">Click here for more information.</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentyFive">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentyFive"
                                    aria-expanded="false" aria-controls="collapseTwentyFive">Will I be able
                                 to create my own project after the programme is complete?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentyFive" class="collapse" aria-labelledby="headingTwentyFive"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">Yes! When you graduate from our programme, you'll be
                                    equipped with the tools and skills necessary to develop a full web
                                    application on your own.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentySix">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentySix"
                                    aria-expanded="false" aria-controls="collapseTwentySix">Is it really
                                 possible to learn so much in this short period of time?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentySix" class="collapse" aria-labelledby="headingTwentySix"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">Yes it’s possible, but not without hard work. Maven Academy
                                    will provide you with the tools—educational materials, teachers,
                                    mentors, and ongoing support—it’s up to you to use these tools to create
                                    a new career for yourself.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentySeven">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentySeven"
                                    aria-expanded="false" aria-controls="collapseTwentySeven">Do I need my
                                 own laptop?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentySeven" class="collapse" aria-labelledby="headingTwentySeven"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">Yes, you do. If you are doing the full stack web development
                                    programme, it doesn’t matter what OS you're running, although we'd
                                    prefer if it were a Mac or Linux laptop less than five years old.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentyEight">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentyEight"
                                    aria-expanded="false" aria-controls="collapseTwentyEight">How do you
                                 reconcile the knowledge gap between students with different experience
                                 levels?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentyEight" class="collapse" aria-labelledby="headingTwentyEight"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">Our admission processes are built with fail-safes that
                                    ensure all the students of one class move in cohesion. The goal of our
                                    admissions process is to select a team of people who will learn at
                                    approximately the same pace. Our pre-work assignment also ensures that
                                    everyone starts with a similar foundational knowledge. That being said,
                                    some people will naturally move faster than others, but our curriculum
                                    is designed to adapt to each student’s individual needs.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentyNine">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentyNine"
                                    aria-expanded="false" aria-controls="collapseTwentyNine">What happens
                                 when you graduate?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentyNine" class="collapse" aria-labelledby="headingTwentyNine"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">That depends on your objective. If you’re in the market for
                                    a developer job, the fun doesn’t stop once you graduate! We have a
                                    unique <a href="internship-programme/" class="blue-link">Work, Learn,
                                    and Earn</a> that you may qualify for.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwentyTen">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwentyTen"
                                    aria-expanded="false" aria-controls="collapseTwentyTen">How many hours
                                 per week will I be working?</a>
                              </h5>
                           </div>
                           <div id="collapseTwentyTen" class="collapse" aria-labelledby="headingTwentyTen"
                              data-parent="#accordionExample5">
                              <div class="card-body">
                                 <p class="mb-0">Our full-time programmes require around 40 hours per week.
                                    Classes are from Monday to Friday, typically from 9:00am until 6:00pm,
                                    with a one-hour lunch break. However, once the class is over, you may
                                    continue to work on exercises and personal projects alongside your
                                    colleagues. On Fridays, you will complete an assessment exercise that
                                    reviews all the topics covered in that week, and gives you an idea of
                                    your progress (and whether you need to catch up on your studies over the
                                    weekend). Ideally, you will practice a healthy work/life balance by
                                    accomplishing all of your work within “business hours”, so you can relax
                                    and let everything soak in to your brain as you rest.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade sub-tab-body" id="financial-aid-tab">
                  <div class="faq-wrap p-0">
                     <div class="main-title mb-4">
                        <h2 class="regular mb-0">Financial Aid - Study for Just R1</h2>
                     </div>
                     <div class="accordion mb-5" id="accordionExample">
                        <div class="card">
                           <div class="card-header" id="headingOne">
                              <h5 class="mb-0 font-weight-normal">
                                 <a href="javascript:void(0);" class="blue-text" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">What if I have an ISA and get a job outside
                                 of South Africa ? </a>
                              </h5>
                           </div>
                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                              data-parent="#accordionExample">
                              <div class="card-body">
                                 <p class="mb-0">ISA repayment schedules are the same no matter where in the
                                    world your job is, you just have to be making a salary of at least
                                    R15,000.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwo">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">Can I pay off my ISA early in a lump sum?
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                              data-parent="#accordionExample">
                              <div class="card-body">
                                 <p class="mb-0">If you want to pay off your Income Share Agreement early you
                                    can do so by making a lump sum payment. To pay off your ISA you will be
                                    required to pay the payment cap of R48,000
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">How are my
                                 re-payments made ?</a>
                              </h5>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                              data-parent="#accordionExample">
                              <div class="card-body">
                                 <p class="mb-0">The Maven Academy goes into an a financial agreement with
                                    your future employer. We will therefore manage your monthly salary
                                    payments.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade sub-tab-body" id="ct-intership-tab">
                  <div class="faq-wrap p-0">
                     <div class="main-title mb-4">
                        <h2 class="regular mb-0">Internship - Work, Learn & Earn</h2>
                     </div>
                     <div class="accordion mb-5" id="accordionExample1">
                        <div class="card">
                           <div class="card-header" id="headingFive">
                              <h5 class="mb-0 font-weight-normal">
                                 <a href="javascript:void(0);" class="blue-text" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="true"
                                    aria-controls="collapseFive">Does everyone who finishes the course,
                                 qualify for the internship programme?</a>
                              </h5>
                           </div>
                           <div id="collapseFive" class="collapse show" aria-labelledby="headingFive"
                              data-parent="#accordionExample1">
                              <div class="card-body">
                                 <p class="mb-0">While it’s our experience, and our intention, that the
                                    majority of our students receive an internship offer after graduation,
                                    we cannot guarantee that everyone will be placed in an internship.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingSix">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">How long is the internship?</a>
                              </h5>
                           </div>
                           <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                              data-parent="#accordionExample1">
                              <div class="card-body">
                                 <p class="mb-0">On average, internships run from one to three months.</p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingSeven">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">Will I receive
                                 permanent employment after my internship?</a>
                              </h5>
                           </div>
                           <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                              data-parent="#accordionExample1">
                              <div class="card-body">
                                 <p class="mb-0">Most of our interns are selected for a permanent position
                                    once they complete their internship program, however this is not
                                    guaranteed. Whether or not you are awarded a permanent position is
                                    entirely dependent on your own performance.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingEight">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">Will I be paid for
                                 the internship?</a>
                              </h5>
                           </div>
                           <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                              data-parent="#accordionExample1">
                              <div class="card-body">
                                 <p class="mb-0">Yes, however, the salaries may vary based on the company
                                    that sponsors you.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingNine">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseNine" aria-expanded="false"
                                    aria-controls="collapseNine">Who will be my code mentor? </a>
                              </h5>
                           </div>
                           <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                              data-parent="#accordionExample1">
                              <div class="card-body">
                                 <p class="mb-0">Maven Academy will review your individual needs and the
                                    position you have been placed in, and assign you to a code mentor that
                                    will work alongside you for the duration of your internship. This
                                    individual will be based in South Africa, India, or Ukraine.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade sub-tab-body" id="full-stack-js-course-tab">
                  <div class="faq-wrap p-0">
                     <div class="main-title mb-4">
                        <h2 class="regular mb-0">Full Stack Web Developer Course (12 Weeks)</h2>
                     </div>
                     <div class="accordion mb-5" id="accordionExample3">
                        <div class="card">
                           <div class="card-header" id="headingThirteen">
                              <h5 class="mb-0 font-weight-normal">
                                 <a href="javascript:void(0);" class="blue-text" data-toggle="collapse"
                                    data-target="#collapseThirteen" aria-expanded="true"
                                    aria-controls="collapseThirteen">Do I need any programming skills or
                                 experience?</a>
                              </h5>
                           </div>
                           <div id="collapseThirteen" class="collapse show" aria-labelledby="headingThirteen"
                              data-parent="#accordionExample3">
                              <div class="card-body">
                                 <p class="mb-0">Previous exposure to coding is essential, whether it’s
                                    self-taught, through on-the-job learning, or from a college or an online
                                    course. Our programmes move through lots of important information over a
                                    relatively short period of time, and they’re created on the premise that
                                    students already have a foundational knowledge of coding, as well as a
                                    genuine interest and extreme motivation to learn efficiently.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingFourteen">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseFourteen"
                                    aria-expanded="false" aria-controls="collapseFourteen">Why do you teach
                                 the MEAN stack for full stack web development?</a>
                              </h5>
                           </div>
                           <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
                              data-parent="#accordionExample3">
                              <div class="card-body">
                                 <p>As one of the most popular programming languages in the world, JavaScript
                                    operates on a wide variety of platforms and devices. It’s an essential
                                    language for web development and front- and back-end development.
                                    JavaScript is also one of the most sought-after technologies today,
                                    which translates into great career opportunities and massive earning
                                    potential. Because JavaScript has been around for so long and is so
                                    prolific in the industry, there is a large and highly engaged developer
                                    community willing to mentor junior programmers and help others learn
                                    from their past experiences.
                                 </p>
                                 <p class="mb-0">TypeScript is a superset of JavaScript. It is used by
                                    professional developers to write effective, scalable, enterprise-grade
                                    code. TypeScript compiles down to JavaScript for final deployment to the
                                    browser, but there are a few unique advantages that make it worth
                                    learning and using. Google ships Angular 8 with TypeScript as the
                                    default language, and students will become intimately familiar with its
                                    effective use in professional software development, giving them a leap
                                    forward in the industry as they enter the workforce.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingFifthteen">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseFifthteen"
                                    aria-expanded="false" aria-controls="collapseFifthteen">If I already
                                 know how to code, is the full stack web development programme right for
                                 me? </a>
                              </h5>
                           </div>
                           <div id="collapseFifthteen" class="collapse" aria-labelledby="headingFifthteen"
                              data-parent="#accordionExample3">
                              <div class="card-body">
                                 <p class="mb-0">Yes! Our full stack web development programme will help
                                    elevate your career in tech. You will learn software development best
                                    practices, SOLID principles and how to use professional tools like
                                    GitHub, and the workflows most relevant in many startups and software
                                    companies. Additionally, you will be able to find your way around other
                                    technologies that are useful in the workplace, namely Mongo, Express,
                                    Angular and Node.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingSixteen">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseSixteen"
                                    aria-expanded="false" aria-controls="collapseSixteen">Is it really
                                 full-time, or can I work and do the programme at the same time?</a>
                              </h5>
                           </div>
                           <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen"
                              data-parent="#accordionExample3">
                              <div class="card-body">
                                 <p class="mb-0">It’s best to be entirely dedicated to the programme so
                                    you’re able to absorb and learn all the information we share with you
                                    over 12 weeks. Due to the sheer amount of work covered, it’s not
                                    possible to juggle other major responsibilities during the programme.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade sub-tab-body" id="front-end-web-course-tab">
                  <div class="faq-wrap p-0">
                     <div class="main-title mb-4">
                        <h2 class="regular mb-0">Front End Web Fundamentals Course (4 Weeks)</h2>
                     </div>
                     <div class="accordion mb-5" id="accordionExample4">
                        <div class="card">
                           <div class="card-header" id="headingSeventeen">
                              <h5 class="mb-0 font-weight-normal">
                                 <a href="javascript:void(0);" class="blue-text" data-toggle="collapse"
                                    data-target="#collapseSeventeen" aria-expanded="true"
                                    aria-controls="collapseSeventeen">Do I need any programming skills or
                                 experience?</a>
                              </h5>
                           </div>
                           <div id="collapseSeventeen" class="collapse show" aria-labelledby="headingSeventeen"
                              data-parent="#accordionExample4">
                              <div class="card-body">
                                 <p class="mb-0">Previous exposure to coding is essential, whether it’s
                                    self-taught, through on-the-job learning, or from a college or an online
                                    course. Our programmes move through lots of important information over a
                                    relatively short period of time, and they’re created on the premise that
                                    students already have a foundational knowledge of coding, as well as a
                                    genuine interest and extreme motivation to learn efficiently.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingEighteen">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseEighteen"
                                    aria-expanded="false" aria-controls="collapseEighteen">Why do you teach
                                 the MEAN stack for front end web development?</a>
                              </h5>
                           </div>
                           <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen"
                              data-parent="#accordionExample4">
                              <div class="card-body">
                                 <p>As one of the most popular programming languages in the world, JavaScript
                                    operates on a wide variety of platforms and devices. It’s an essential
                                    language for web development and front- and back-end development.
                                    JavaScript is also one of the most sought-after technologies today,
                                    which translates into great career opportunities and massive earning
                                    potential. Because JavaScript has been around for so long and is so
                                    prolific in the industry, there is a large and highly engaged developer
                                    community willing to mentor junior programmers and help others learn
                                    from their past experiences.
                                 </p>
                                 <p class="mb-0">TypeScript is a superset of JavaScript. It is used by
                                    professional developers to write effective, scalable, enterprise-grade
                                    code. TypeScript compiles down to JavaScript for final deployment to the
                                    browser, but there are a few unique advantages that make it worth
                                    learning and using. Google ships Angular 8 with TypeScript as the
                                    default language, and students will become intimately familiar with its
                                    effective use in professional software development, giving them a leap
                                    forward in the industry as they enter the workforce.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingNineteen">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseNineteen"
                                    aria-expanded="false" aria-controls="collapseNineteen">If I already
                                 know how to code, is the front end web development programme right for
                                 me? </a>
                              </h5>
                           </div>
                           <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen"
                              data-parent="#accordionExample4">
                              <div class="card-body">
                                 <p class="mb-0">Yes! Our full stack web development programme will help
                                    elevate your career in tech. You will learn software development best
                                    practices, SOLID principles and how to use professional tools like
                                    GitHub, and the workflows most relevant in many startups and software
                                    companies. Additionally, you will be able to find your way around other
                                    technologies that are useful in the workplace, namely Mongo, Express,
                                    Angular and Node.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwenty">
                              <h5 class="mb-0 font-weight-normal blue2">
                                 <a href="javascript:void(0);" class="blue-text collapsed"
                                    data-toggle="collapse" data-target="#collapseTwenty"
                                    aria-expanded="false" aria-controls="collapseTwenty">Is it really
                                 full-time, or can I work and do the programme at the same time?</a>
                              </h5>
                           </div>
                           <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty"
                              data-parent="#accordionExample4">
                              <div class="card-body">
                                 <p class="mb-0">It’s best to be entirely dedicated to the programme so
                                    you’re able to absorb and learn all the information we share with you
                                    over 12 weeks. Due to the sheer amount of work covered, it’s not
                                    possible to juggle other major responsibilities during the programme.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="box study-ct-campus p-4">
                  <div class="media">
                     <div class="icon-square d-flex justify-content-center align-self-center p-0">
                        <img src="images/enquiry-icon.png"
                           srcset="images/enquiry-icon@2x.png 2x, images/enquiry-icon@3x.png 3x"
                           alt="Enquiry Icon">
                     </div>
                     <div class="media-body align-self-center">
                        <p class="mb-0 f-18">Need to find out more, please contact us directly on <a
                           href="tel:+27 21 461 68 17">+27 21 461 68 17</a><br> or , <a
                           href="contact-us/" class="blue-link">Send us an enquiry</a></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="d-xl-none d-lg-none d-md-block"><a href="applynow/"
               class="btn btn-blue btn-shadow btn-full">Enroll Now </a></div>
         </div>
      </div>
   </div>
</section>
<?php include 'footer.php';?>
<script>
   $(document).ready(function() {
   
       $('.sub-tabs-link').click(function() {
           var tab_id = jQuery(this).attr('data-tab');
           $('.sub-tabs-link').removeClass('active ');
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