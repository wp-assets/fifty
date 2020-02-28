<?php 
// Here have header content from header.php file


/*

Theme Name: Fifty Front Page

*/
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="discrption" content="Fabon Personal Portfolio Template">
    <meta name="keyword" content="creative, business, freelancer, agency, responsive, corporate, interior, minimal, modern, personal, portfolio, simple">
    <meta name="author" content="Themescare">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/img/logo.png">    
    <!-- Title -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900|Titillium+Web:200,300,400,600,700" rel="stylesheet">
    
    <!-- Theme Style File -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="logo">
            <div class="center-circle"></div>
        </div>
        <div class="menu">

        <?php wp_nav_menu(array(
            'theme_location'=>'header_menu',
            'container_class'=>'<div class="menu</div>',
            'items_wrap'=>'<div class="menu-item" data-link=".hero-section"><i class="menu-item-icon lnr lnr-home">%3$s</div>',
            ''=>'',
        ))?>

<!-- 
            <div class="menu-item-box active"> <a href="#" class="menu-item" data-link=".hero-section"><i class="menu-item-icon lnr lnr-home"></i></a> <span class="menu-item-name sec-font">home</span> </div>
            <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".about"><i class="menu-item-icon lnr lnr-user"></i></a> <span class="menu-item-name sec-font">about</span> </div>
            <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".services"><i class="menu-item-icon lnr lnr-star"></i></a> <span class="menu-item-name sec-font">services</span> </div>
            <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".portfolio"><i class="menu-item-icon lnr lnr-briefcase"></i></a> <span class="menu-item-name sec-font">portfolio</span> </div>
            <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".blog"><i class="menu-item-icon lnr lnr-book"></i></a> <span class="menu-item-name sec-font">blog</span> </div>
            <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".contact"><i class="menu-item-icon lnr lnr-envelope"></i></a> <span class="menu-item-name sec-font">contact</span> </div> -->

        </div>
        <div class="go-down"> <i class="lnr-arrow-down lnr"></i> </div>
    </header>
    

<?php 
$options = get_option( 'my_framework' ); // // unique id of the framework

?>
    <div class="content">
        <div class="hero-section home-snow-with-typed">
            <div id="particles-js-one"></div>
            <div class="section-hero-content">
                <h1><?php echo $options['opt_hero'];?> <br> <span><?php echo $options['opt_hero2'];?></span><br><?php echo $options['opt_hero3'];?> </h1>
                <div class="block">
                    <h4 class="sec-font">I CREATE <span class="typed"></span></h4>
                </div><a href="#" class="sec-font btn theme-btn">Let's Start <span class="lnr lnr-arrow-right"></span></a>
            </div>
        </div>

        <a href="<?php echo get_theme_mod('link_setting');?>">Play</a>

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

        <section class="services">
            <div class="container">
                <div class="row align">
                    <div class="col-12 two-title">
                        <div class=" white section-title-uin"> Services </div>
                        <div class="section-title-white">
                            <h2 class="sec-font">i provide this services</h2>
                            <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Query -->
                    <?php $services = new WP_Query(
                        array(
                            'post_type'=>'Services',
                            'posts_per_page'=> 6,
                        )
                    );?>
                    <?php if($services->have_posts()): while($services->have_posts()): $services->the_post(); ?>
                    <?php $icon = get_post_meta($post-> ID, 'icon', true);?>
                    <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                        <div class="service-box"> <i class="<?php echo $icon ?>"></i>
                            <h3 class="text-bg"><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_content(),'19', false); ?></p><a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    <!-- Service Query -->
                </div>
            </div>
        </section>



        <section class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                        <div class=" section-title-uin"> Portfolio </div>
                        <div class="section-title">
                            <h2 class="sec-font">My Beuitful Portfolio</h2>
                            <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="projects-slider">
                            <!-- Portfolio Query -->
                            <?php 
                            global $post; 
                            $portfolio = new WP_Query(
                                array(
                                    'post_type'=>'my-work',
                                    'posts_per_page'=> -1,
                                )
                            );?>
                            <?php if($portfolio->have_posts()): while($portfolio->have_posts()): $portfolio->the_post(); ?>
                            <div class="item">
                                <div class="project-box">
                                    <div class="project-img"> <?php the_post_thumbnail(); ?> </div>
                                    <div class="project-info">
                                        <h3 class="sec-font"><?php the_title(); ?></h3>
                                        <h5 class="project-tag"><?php the_category(); ?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                            <!-- Portfolio Query -->
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="video-and-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                        <div class=" section-title-uin"> Opinions </div>
                        <div class="section-title">
                            <h2 class="sec-font">What my Clients Say.</h2>
                            <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p>
                        </div>
                    </div>
                </div>
                <div class="row align">
                    <div class="col-md-5">
                        <div class="video-section">
                            <div class="video-play"> <a href="#"><img src="<?php echo esc_url(get_template_directory_uri())?>/img/video-player-play.png" alt="" draggable="false"></a> </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="testimonials-section">
                            <div class="row ">
                            <!-- Client Say Query -->
                            <?php $client = new WP_Query(
                                array(
                                    'post_type'=>'my-client',
                                    'posts_per_page'=> -1,
                                )
                            );?>
                            <?php if($client->have_posts()): while($client->have_posts()): $client->the_post(); ?>
                                <div class="col-md-12 col-lg-6 col-sm-12">
                                    <div class="testimonials-box">
                                        <div class="quote-box"> <img src="<?php echo esc_url(get_template_directory_uri())?>/img/quote.png" alt="" draggable="false"> </div>
                                        <div class="testimonials-content">
                                            <p><?php echo wp_trim_words(get_the_content(), '15', false );?></p>
                                        </div>
                                        <hr>
                                        <div class="client-info">
                                            <div class="client-img-box"> <?php the_post_thumbnail(); ?> </div>
                                            <div class="client-info-box">
                                                <h4><?php the_title(); ?></h4>
                                                <h6>Los Angeles, CA</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                            <!-- Client Say Query -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 two-title">
                        <div class=" section-title-uin"> Contact </div>
                        <div class="section-title">
                            <h2 class="sec-font">Let's Talk.</h2>
                            <p>It is a long established fact that a reader readable content <br>of a page established fact that.</p>
                        </div>
                    </div>
                </div>
                <div class="row align">
                    <div class="col-md-4">
                        <div id="map"></div>
                    </div>
                    <div class="col-md-8">
                        <form>
                            <div class="row">
                                <div class="col-md-6"> <input type="text" placeholder="First Name"> </div>
                                <div class="col-md-6"> <input type="text" placeholder="Last Name"> </div>
                                <div class="col-md-6"> <input type="text" placeholder="Your Email Address"> </div>
                                <div class="col-md-6"> <input type="text" placeholder="where are you from?"> </div>
                                <div class="col-md-12"> <textarea placeholder="Enter Your Message"></textarea> </div>
                                <div class="col-lg-8 col-md-12">
                                    <p> we all know how important your information is.<br>they are always safe with us.</p>
                                </div>
                                <div class="col-lg-4 col-md-4"> <input type="submit" value="Send Message"> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


<!-- 
    Fifty Footer content from here.
 -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Made With All Love In Egypt</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s"></script>
    <?php wp_footer(); ?>
</body>
</html>