<?php
    /**********************************************

    Template Name: Portfolio

    **********************************************/
    get_header();
?>
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
<?php get_footer();?>