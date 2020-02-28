<?php

    /**********************************************

    Template Name: Testimonial

    **********************************************/
    get_header();
?>
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
<?php get_footer(); ?>