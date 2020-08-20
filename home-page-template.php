<?php /* Template Name: Home-page-tempalte */ ?>
<?php get_header();?>

	<main id="primary" class="site-main">


				<div class="row justify-content-center content-area"> 

					<div class="col-12">
					<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="page-title-wrapper d-flex justify-content-center" style="width:100%; min-height:60vh; background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size:cover;padding-top:20vh;">
							<h3 class="page-title" style="font-weight:600;">
								<a href="<?php the_permalink(); ?>" style="color:white;font-size:80px;"><?php the_title(); ?></a>
							</h3>
						</div>

					</div>

						


            			<div class="col-1"></div>
						<div class="col-10 inner-content-area">
							<?php the_content(); ?> 

							<br></br>
							<h4>OUR SELECTIONS</h4>
							<p>These images show several of the many options we offer. From healthy, fresh fruits, to warm dinner soups, we cater to any kind of diet.</p>
							 <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '245' ); }?> 
							 <br></br>
							 
							 <h4>BEHIND THE SCENES</h4>
							 <p>Click on any of the below videos to find out more about how we cook and our style.</p>
							 <?php echo do_shortcode("[origincode_videogallery id='2']"); ?>

							<br></br>


						</div> 
            			<div class="col-1"></div>

						<?php 
						endwhile; 
						endif; 
						?> 
				</div>


				<div class="row justify-content-center" style="padding-top:10vh;">
					<h2 class="col-12 page-title" style="font-weight:400;">Supported Payment Systems</h2>

					<div class="col-12 text-center" style="padding-top:5vh;">
						<i class="card-icon fa fa-cc-visa fa-4x" aria-hidden="true"></i>
						<i class="card-icon fa fa-cc-amex fa-4x" aria-hidden="true"></i>
						<i class="card-icon fa fa-cc-paypal fa-4x" aria-hidden="true"></i>
						<i class="card-icon fa fa-cc-mastercard fa-4x" aria-hidden="true"></i>
					</div>

				</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();