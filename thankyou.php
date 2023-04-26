<?php include 'common.php'; ?>
<?php
$dynamic_page_title = "Thank You | The Maven Academy";
$dynamic_meta_keyword = "Maven Academy";
$dynamic_meta_description = "Thank you for your enquiry with The Maven Academy";
$dynamic_meta_image = $config['Image_Url']."contact-banner.png";
?>
<?php include 'header.php'; ?>

<section class="banner-wrap full-height d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="banner-img text-center mb-4">
                    <img src="images/contact-banner.png" srcset="images/contact-banner@2x.png 2x, images/contact-banner@3x.png 3x" alt="Get in touch">
                </div>
                <div class="banner-title mb-4 text-center">
                    <h1 class="regular">
                    Thank you for your enquiry.
                    </h1>
                </div>
                <div class="banner-text text-center">
                    <p class="f-18 mb-5">One of our friendly course consultants and we’ll get back to you within 24 hours.</p>
                    <p><strong class="dark-gray">Or call us directly on </strong> <a href="tel:+27 21 461 68 17" class="num-link"><strong>+27 21 461 68 17</strong></a></p> 
                    <p><strong class="dark-gray">Need a quicker answer ? visit out Faq page : </strong> <a href="faq/" class="blue-link">Click here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
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

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 100 - Math.random() * 50;

        if (this.isDeleting) { delta /= 2; }

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
        for (var i=0; i<elements.length; i++) {
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