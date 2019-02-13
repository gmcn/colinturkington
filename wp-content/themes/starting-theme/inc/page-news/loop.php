<div class="container-fluid news">

  <div class="row">

    <div class="col-md-6 news_posts">
      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();

      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', false);
      $thumb_url = $thumb_url_array[0];


      ?>

      <div class="col-md-6 news_section__post">
				<div class="news_posts__post__wrapper" style="background: url(<?php echo $thumb_url; ?>) #283C4F center center; background-size: cover;">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>

			</div>

      <?php endwhile;  ?>
    </div>

    <div class="col-md-6 social hidden-xs hidden-sm">
      <a href="https://www.facebook.com/colinturkington/" target="_blank">
        <div class="col-md-12 facebook wow fadeInRight">
          <div class="row">
            <div class="col-md-6">
              <div class="vert-align">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" alt="Follow Colin Turnkington on Facebook">
                <p>
                  Click here for more
                </p>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>

      </div>
      </a>
      <a href="https://twitter.com/colinturkington" target="_blank">
        <div class="col-md-12 twitter wow fadeInRight">
          <div class="row">
            <div class="col-md-6">
              <div class="vert-align">
                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.svg" alt="Follow Colin Turnkington on Twitter">
                <p>
                  Click here for more
                </p>
              </div>
            </div>
            <div class="col-md-6">



            </div>
          </div>

      </div>
      </a>
      <a href="https://www.instagram.com/colin.turkington/" target="_blank">
        <div class="col-md-12 instagram wow fadeInRight">
          <div class="row">
            <div class="col-md-6">
              <div class="vert-align">
                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.svg" alt="Follow Colin Turnkington on Instagram">
                <p>
                  Click here for more
                </p>
              </div>
            </div>
            <div class="col-md-6">

            </div>
          </div>

      </div>
      </a>
      <a href="https://www.youtube.com/channel/UCt_fnP7ZYpJZvN8w_DSHUug" target="_blank">
        <div class="col-md-12 youtube wow fadeInRight">
          <div class="row">
            <div class="col-md-6">
              <div class="vert-align">
                <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.svg" alt="Follow Colin Turnkington on Youtube">
                <p>
                  Click here for more
                </p>
              </div>
            </div>
            <div class="col-md-6">

            </div>
          </div>

      </div>
      </a>
    </div>



    </div>

    <div class="pagi clear">
      <?php the_posts_navigation(); ?>
    </div>



</div><!-- /.container-fluid.blog -->
