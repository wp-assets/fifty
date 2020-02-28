<?php get_header(); ?>
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-12 two-title">
				<div class=" section-title-uin"> Lasted </div>
				<div class="section-title">
					<h2 class="sec-font">My Lasted Blog.</h2>
					<p>It is a long established fact that a reader readable content <br>of a page established fact that.</p>
				</div>
			</div>
			
			<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<div class="col-md-4">
				<div class="blog-body">
					<div class="category"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_category(); ?></a> </div>
					<div class="blog-img"><?php the_post_thumbnail();?></div>
					<div class="post-info">
						<div class="post-date"><?php the_date(); ?></div><a href="<?php the_permalink(); ?>">
							<h4 class="blog-item-title"><?php the_title(); ?></h4>
						</a>
					</div>
				</div>
			</div>
			
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>





<?php get_footer(); ?>
