<?php/**
 * The template for displaying 404 pages (Not Found)
 */
?>


<main id="primary" class="site-main">

	<div class="row justify-content-center">

		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
		</header>

		<div class="page-wrapper">
			<div class="page-content">
				<h2><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'custom-theme' ); ?></h2>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</div>

		<div>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>