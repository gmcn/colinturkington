    <div class="col-sm-6 countdown wow fadeInLeft" style="background-image: url(<?php echo $countdown_img; ?>)">

      <?php
      $today = date('Ymd');
      $args = array (
          'post_type' => 'calendar',
          'order' => 'ASC',
          'posts_per_page' => 1,
          'meta_query' => array(
             array(
                'key'		=> 'date_from',
                'compare'	=> '>=',
                'value'		=> $today,
            )
          ),

      );

      // The Query
      $calendar = new WP_Query( $args );

      // The Loop
      $i = event1;
      while ( $calendar->have_posts() ) : $calendar->the_post();
      $startDate = get_field('date_from', false, false);
      $endDate = get_field('date_to');
      $startDate = new DateTime($startDate);
      ?>

      <div class="vert-align <?php echo $i ?>">

        <div id="DateCountdown" data-date="<?php echo $startDate->format('j M Y'); ?>" style="width: 100%;"></div>
        <h2><a href="/calendar"> <?php the_title() ?> ROUNDS <?php echo the_field('rounds') ?> | <?php echo $startDate->format('j M Y'); ?></a></h2>

      </div>

      <h1>
        <a href="/calendar">Next Event</a>
      </h1>

      <?php $i++; endwhile; ?>



      <?php wp_reset_postdata(); ?>

    </div>
