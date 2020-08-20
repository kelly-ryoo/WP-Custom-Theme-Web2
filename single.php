<?php get_header(); ?>

<main id="primary" class="site-main">

  <div class="row">
    <div class="col-1"></div>
    <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
  </div>

  <div class="row justify-content-center content-area"> 

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="col-1"></div>

      <?php if ( has_post_thumbnail() ) { ?>
        <div class="col-5 post-image">
          <?php the_post_thumbnail("post-thumbnails"); ?>
        </div>
        <script type="text/javascript">
            var element = document.getElementById("wp-post-image");
            element.classList.add("img-fluid");
        </script>
      <?php } ?>


      <div class="entry-content <?=has_post_thumbnail() ? 'col-5' : 'col-10'?> inner-content-area"> 
        <?php the_content(); ?> 
      </div> 

      <div class="col-1"></div>

      <?php 
      endwhile; 
      endif; 
      ?> 
  </div>
</main>

<?php
get_sidebar();
get_footer();
