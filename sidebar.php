<?php if ( is_active_sidebar( 'the_sidebar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'the_sidebar' ); ?>
	</div>
<?php endif; ?>