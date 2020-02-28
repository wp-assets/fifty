<?php get_header(); ?>


        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-8 two-title">
                        <div class=" section-title-uin"> Lasted </div>
                        <div class="section-title">
                            <h2 class="sec-font"><?php bloginfo('name');?></h2>
                            <?php bloginfo('description');?>
                        </div>
                    </div>
                    
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <?php the_title(); ?>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section>





<?php get_footer(); ?>
