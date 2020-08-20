<?php get_header();?>

	<main id="primary" class="site-main">


				<div class="row justify-content-center content-area"> 

					<div class="col-12">
					<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="page-title-wrapper d-flex justify-content-center" style="width:100%; min-height:60vh; background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size:cover;padding-top:20vh;opacity:80%;">
							<h2 class="page-title" style="font-weight:600;">
								<a href="<?php the_permalink(); ?>" style="color:white;font-size:80px; text-shadow: 1px 1px 3px gray;"><?php the_title(); ?></a>
							</h2>
						</div>
	



					</div>

					<div class="col-1"></div>
					<div class="col-10 d-flex justify-content-start "> 
						<div class="breadcrumb "><?php get_breadcrumb(); ?></div>
					</div> 
					<div class="col-1"></div>
				</div>

				<div class="row content-area">
           			<div class="col-1"></div>
					<div class="col-10 inner-content-area"> 
						<?php the_content(); ?> 
					</div> 
					<div class="col-1"></div>
				</div>

						<?php 
						endwhile; 
						endif; 
						?> 



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();