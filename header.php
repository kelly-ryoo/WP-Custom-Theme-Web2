<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kellys-theme
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/1555801de5.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">



  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> >
  <div id="page" class="container-fluid" style="padding-left:0;padding-right:0;">
    <header class="row">

      <!-- logo and titles -->
      <div class="col-12 logo-titles">
          <section class="d-flex justify-content-center">
                <div>
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                      the_custom_logo();
                      }
                    ?>

                    <!-- for the site title -->
                    <h1 class="site-title align-bottom" style="display:inline-block;"><a href="http://localhost:8080/web2/"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
          </section>
      </div>

      <div class="col-12 d-flex justify-content-center" class="descrip-wrapper">
        <!-- for the site description under the title -->
                    <?php $kellys_theme_description = get_bloginfo( 'description', 'display' ); ?>
                    <p class="site-description"><?php echo $kellys_theme_description; ?></p>
      </div>


      <!-- for the navigation section -->
      <section class="col-12 d-flex justify-content-center">
        <nav id="site-navigation" class="main-navigation align-middle justify-content-end text-center">
          <!-- navigation -->
          <?php wp_nav_menu( array(
            'theme_location' => 'primary_menu',
            'menu_id' => 'site-navigation',
            'container' => 'nav',
            'container_class' => 'nav-wrapper',
            'fallback_cb' => false
          ) ); ?>
        </nav>
        <script type="text/javascript">
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("site-navigation");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>



    </section>


    </header>


