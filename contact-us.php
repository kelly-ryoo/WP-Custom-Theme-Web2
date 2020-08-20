<?php /* Template Name: Contact Us */ ?>

<?php 
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(mail($to,$subject,$message,$headers)){
    	mail($from,$subject2,$message2,$headers2);
    	echo "Thanks.";
    }
 }
?>

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
						<h5>CONTACT US</h5> 
						<p>Please feel free to reach out to us if you have any questions! Send us a quick email and we'll get back to you within 3 to 5 business days.</p>


						<form action="" method="post">
						First Name: <input type="text" name="first_name"><br>
						Last Name: <input type="text" name="last_name"><br>
						Email: <input type="text" name="email"><br>
						Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
						<input type="submit" name="submit" value="Submit" id="submit">
						</form>

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