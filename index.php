<?php get_header(); ?>

<main id="primary" class="site-main">


	<div class="row align-bottom">
		<div class="col-1"></div>
		<div class="col-5"><h2>Posts Archive</h2></div>
		<div class="col-5 d-flex justify-content-end"><?php get_search_form(); ?></div>
		<div class="col-1"></div>
	</div>

	<br>


		<?php while ( have_posts() ) : the_post(); ?>


			<div class="row index" style="margin-top:5vh;">
				<div class="col-1"></div>
				<div class="col-10">					
						<div class="entry-title">
							<h4 class="entry-title"><a id="post-title" href="<?php echo get_permalink() ?>" ><?php the_title(); ?></a></h4>
						</div>

					<div class="row" style="margin-top:2vh">
						
						<div class="<?php if( has_post_thumbnail() ) { echo 'col-3'; } ?>">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}?>
						</div>

						<div class="entry-content <?=has_post_thumbnail() ? 'col-9' : 'col-12'?>">
							<p class="the_excerpt"><?php the_excerpt(); ?></p>
						</div>

					</div>
				</div>
				<div class="col-1"></div>
			</div>

		<?php endwhile; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
