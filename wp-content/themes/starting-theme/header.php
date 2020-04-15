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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96846330-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-96846330-1', { 'anonymize_ip': true });
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="/humans.txt" />
<link type="text/plain" rel="robots" href="/robots.txt" />
<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>


  <!-- Modal -->
<div class="modal fade" id="mcModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close nothanks" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- Begin Mailchimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="https://colinturkington.us13.list-manage.com/subscribe/post?u=120b6b3a3f70dbd74be585fca&amp;id=4bf8250303" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <h2>Stay on track with the latest from colinturkington.com</h2>
              <p>Sign up below to our mailing list for all the latest news.</p>
              <div class="mc-field-group form-group">
                <input type="text" value="" name="FNAME" class="form-control" placeholder="First Name" id="mce-FNAME">
              </div>
                <div class="mc-field-group form-group">
                <input type="text" value="" name="LNAME" class="form-control " placeholder="Last Name" id="mce-LNAME">
              </div>
              <div class="mc-field-group form-group">
                <input type="email" value="" name="EMAIL" class="form-control required email" placeholder="Email" id="mce-EMAIL">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_120b6b3a3f70dbd74be585fca_4bf8250303" tabindex="-1" value=""></div>
              <div class="clear">
                <div class="row">
                  <div class="col-md-12 links">
                    <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button nothanks">
                    <a class="data" href="/data-policy/">View our data policy</a>
                  </div>
                </div>

              </div>
            </div>
          </form>
          </div>
          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
          <!--End mc_embed_signup-->
        </div>
      </div>

    </div>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6">
					<a href="/">
						<img class="branding" src="<?php echo get_template_directory_uri(); ?>/images/colin-turkington-logo_stapline-white.svg" alt="<?php bloginfo( 'name' ); ?> | <?php echo $description; ?>"  />
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
