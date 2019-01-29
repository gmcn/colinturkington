<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer>

		<div class="row">
			<div class="col-md-3">
				<a href="/">
					<img class="branding wow fadeInLeft" width="300px" src="<?php echo get_template_directory_uri(); ?>/images/colin-turkington-logo.svg" alt="<?php bloginfo( 'name' ); ?> | <?php echo $description; ?>"  />
				</a>
			</div>
			<div class="col-md-9 navig">
				<div class="row">
					<div class="footer__nav">
						<h6>Profile</h6>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-1' ) );
							?>
					</div>
					<div class="footer__nav">
						<h6>News</h6>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-2' ) );
							?>
					</div>
					<div class="footer__nav">
						<h6>Shop</h6>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-3' ) );
							?>
					</div>
					<div class="footer__nav">
						<h6>Partners</h6>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-4' ) );
							?>
					</div>
					<div class="footer__nav">
						<h6>2018 Calendar</h6>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-5' ) );
							?>
					</div>
					<div class="footer__nav">
						<h6>Gallery</h6>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-6' ) );
							?>
					</div>
					<div class="footer__nav">
						<h6>Coaching</h6>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-7' ) );
							?>
					</div>
					<div class="footer__nav">
						<h6>Contact</h6>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-8' ) );
							?>
					</div>
				</div>
				<div class="row thanks no-gutter">
					<div class="col-md-6">
						<p>Thanks for taking the time to visit my website. </p>
						<p>2017 marked a fantastic occasion for me returning to West Surrey Racing and representing TEAM BMW.  Taking the 100th BTCC win for BMW was a huge highlight and I look back at the season with immense pride at my performance on the track.</p>
					</div>
				</div>
				© COLIN TURKINGTON <?php echo date('Y') ?>  |  <a href="/data-policy">DATA POLICY</a>  |  <a href="https://www.facebook.com/colinturkington/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" alt="">
				</a>
				<a href="https://twitter.com/colinturkington" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.svg" alt="">
				</a>
				<a href="https://www.instagram.com/colin.turkington/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.svg" alt="">
				</a>
				<a href="https://www.youtube.com/channel/UCt_fnP7ZYpJZvN8w_DSHUug" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.svg" alt="">
				</a>
			</div>
		</div>

		</div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
