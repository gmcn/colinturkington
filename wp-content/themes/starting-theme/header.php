<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6">
					<a href="/">
						<img class="branding" width="300px" src="<?php echo get_template_directory_uri(); ?>/images/colin-turkington-logo.svg" alt="<?php bloginfo( 'name' ); ?> | <?php echo $description; ?>"  />
					</a>
				</div>
				<div class="col-xs-6 hamburger">

        <!-- <span class="open" onclick="openSearch()">
          <img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.svg" alt="Search Our Site" />
        </span> -->


					<!-- Use any element to open/show the overlay navigation menu -->
					<span class="open" onclick="openNav()">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hamburger-menu.svg" />
          </span>
				</div>
			</div>
		</div>


		<!-- The overlay -->
			<div id="myNav" class="overlay">

			  <!-- Button to close the overlay navigation -->
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			  <!-- Overlay content -->
			  <div class="container overlay-content">

					<div class="row">
						<?php wp_nav_menu( array(
							'theme_location' => 'menu-1' ) );
							?>
							<a href="https://www.facebook.com/colinturkington/" target="_blank">
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


	</header>

	<div id="content" class="site-content">
