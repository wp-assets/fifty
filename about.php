<?php

    /**********************************************

    Template Name: About Us

    **********************************************/
    get_header(); 
?>
<section class="about">
<div class="container">
    <div class="row" style="align-items: center;">
        <div class="col-12">
            <div class="section-title-uin"> About Me </div>
        </div>
        <div class="col-md-5">
            <div class="my-img-box">
                <div class="my-img"> <img src="<?php echo esc_url(get_template_directory_uri())?>/img/my-img.jpg" alt="" draggable="false" class="img-fluid"> </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="info">
                <h5 class="sec-font">HELLO, I'M Alex Smith</h5>
                <h1>I'm In The Design Industry<span> With<br>10 Years</span> Of Experience.</h1>
                <ul class="row text-center">
                    <li class="col-lg-4 col-md-4 col-4 col-sm-4 ">
                        <div class="about-box">
                            <h3>490K</h3>
                            <h4 class="sec-font">Followers</h4>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-4 col-sm-4 ">
                        <div class="about-box">
                            <h3>230+</h3>
                            <h4 class="sec-font">Happy Clients</h4>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-4 col-sm-4 ">
                        <div class="about-box bn">
                            <h3>950</h3>
                            <h4 class="sec-font">Requests</h4>
                        </div>
                    </li>
                </ul>
                <p>There are many variations of <b>passages of Lorem Ipsum</b> available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <ul class="social-media">
                    <li> <a href="#"><i class="ti-facebook"></i></a></li>
                    <li> <a href="#"><i class="ti-twitter"></i></a></li>
                    <li> <a href="#"><i class="ti-instagram"></i></a></li>
                    <li> <a href="#"><i class="ti-youtube"></i></a></li>
                    <li> <a href="#"><i class="ti-google"></i></a></li>
                </ul>
                <div class="skills">
                    <div class="skill-box">
                        <h4 class="skill-title sec-font">web desing</h4>
                        <div class="progress-line"> <span data-percent="90" style="width: 90%;"><span class="percent-tooltip">90%</span></span> </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title sec-font">photoshop &amp; illustrator</h4>
                        <div class="progress-line"> <span data-percent="75" style="width: 75%;"><span class="percent-tooltip">75%</span></span> </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title sec-font">web programing</h4>
                        <div class="progress-line"> <span data-percent="55" style="width: 55%;"><span class="percent-tooltip">55%</span></span> </div>
                    </div><a href="#" class="btn effect-btn theme-btn">download cv <span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php get_footer(); ?>