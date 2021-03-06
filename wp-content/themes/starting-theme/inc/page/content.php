<div class="container-fluid page-single">
  <div class="row">

    <?php
    if ( have_posts() ) : /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

      <div class="col-md-12 title">
        <h1><?php the_title(); ?></h1>
        <p><?php the_excerpt(); ?></p>
      </div>

      <div class="col-md-6 content wow fadeInLeft">
        <?php the_content() ?>
      </div>
      <div class="col-md-6 thumbimg wow fadeInRight">
        <?php if( have_rows('gallery') ): ?>

          <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

          </a>


          <img class="more" src="<?php echo get_template_directory_uri() ?>/images/photo-camera.svg" alt="View <?php the_title() ?> Gallery">
        <?php else : ?>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <div class="col-md-12 galleryinfo">
          <div class="galleryinfo__wrapper">
            <h3><?php echo the_title(); ?></h3>
            <?php echo the_excerpt(); ?>
          </div>

        </div>
      </div>
        <?php if( have_rows('gallery') ): ?>
        <!-- Hidden Gallery -->
        <div class="hidden">
          <?php while( have_rows('gallery') ): the_row();
            // vars
            $image = get_sub_field('image');
            $image_title = get_sub_field('image_title');
            $image_url = $image['sizes']['thumbnail'];
            ?>

              <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
                <?php echo $image_title ?>
              <?php else : ?>
                <?php the_title(); ?>
              <?php endif; ?>">

                  <img src="<?php echo $image_url; ?>" alt="<?php if($image_title) : ?>
                    <?php echo $image_title ?>
                  <?php else : ?>
                    <?php the_title(); ?>
                  <?php endif; ?>" />
              </a>

          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>

</div>
