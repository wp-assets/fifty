<?php

    /**********************************************

    Template Name: Service

    **********************************************/
    get_header();
?>

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
<?php get_footer(); ?>