<?php
/*
Template Name: Archives
*/
get_header(); ?>

	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div>
				<?php if ( has_post_thumbnail() ) {
    				the_post_thumbnail();
				}?>
			</div>

			<div class="entry-title">
				<h4 class="entry-title"><?php the_title(); ?></h4>
			</div>

			<div class="entry-content">
				<p class="the_excerpt"><?php the_excerpt(); ?></p>
			</div>

		<?php endwhile; // end of the loop. ?>
		
	</main>

<?php
get_sidebar();
get_footer();
