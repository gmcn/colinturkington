<div class="container-fluid child-profile">
   <?php
        $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $post->ID,
            'order'          => 'ASC',
            'orderby'        => 'menu_order'
         );
     $parent = new WP_Query( $args );
     if ( $parent->have_posts() ) : ?>
     <div class="row no-gutter wow fadeInUp">
         <?php $i = 1; while ( $parent->have_posts() ) : $parent->the_post();
         ?>

           <div class="col-sm-6 col-lg-3 child<?php echo $i; ?>" style="background: url(<?php echo the_post_thumbnail_url(); ?>) center center; background-size: cover;">
             <div class="wrapper">
               <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
               <span>0<?php echo $i; ?></span>
             </div>
           </div>


         <?php $i++; endwhile; ?>
       </div>
     <?php endif; wp_reset_postdata(); ?>


</div>
