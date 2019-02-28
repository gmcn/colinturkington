<?php

$btcc_wins = get_field('btcc_wins');
$btcc_fastest_laps = get_field('btcc_fastest_laps');
$btcc_podiums = get_field('btcc_podiums');
$btcc_poles = get_field('btcc_poles');
$btcc_race_starts = get_field('btcc_race_starts');

 ?>

 <div class="container-fluid stats">

   <div class="container-fluid title-career">
      <div class="row">
        <div class="col-md-4 wow fadeInLeft">
          <h1>Stats</h1>
        </div>
        <div class="col-md-4 wow fadeInLeft">
          <p><?php the_content(); ?></p>
        </div>

        <div class="col-md-4 signature wow fadeInRight">
          <img src="<?php echo get_template_directory_uri() ?>/images/signature.svg" alt="Colin Turkinton Signature">
        </div>

      </div>
    </div>

   <div class="row top">
     <div class="col-md-6 stats__wins matchheight wow fadeInLeft">
       <img src="<?php echo get_template_directory_uri() ?>/images/cup.svg" alt="BTCC WINS">
       <div class="stats__wrapper">
         <p>BTCC WINS</p><br />
         <span><?php echo $btcc_wins; ?></span>
       </div>
     </div>
     <div class="col-md-6 stats__fastest matchheight wow fadeInRight">
       <img src="<?php echo get_template_directory_uri() ?>/images/tach.svg" alt="BTCC FASTEST LAPS">
       <div class="stats__wrapper">
         <p>BTCC FASTEST LAPS</p><br />
         <span><?php echo $btcc_fastest_laps; ?></span>
       </div>
     </div>
   </div>

   <div class="row bottom">
     <div class="col-md-3 stats__podiums matchheight wow fadeInLeft">
       <img src="<?php echo get_template_directory_uri() ?>/images/podium.svg" alt="BTCC PODIUMS">
       <p>BTCC PODIUMS</p>
       <span><?php echo $btcc_podiums; ?></span>
     </div>
     <div class="col-md-3 stats__poles matchheight wow fadeInLeft">
       <img src="<?php echo get_template_directory_uri() ?>/images/lights.svg" alt="BTCC POLES">
       <p>BTCC POLES</p>
       <span><?php echo $btcc_poles; ?></span>
     </div>
     <div class="col-md-6 stats__starts matchheight wow fadeInRight">
       <div class="starts__wrapper">
         <p>BTCC RACE STARTS</p>
         <span><?php echo $btcc_race_starts; ?><img class="hidden-md hidden-lg"  src="<?php echo get_template_directory_uri() ?>/images/wheel.svg" alt="BTCC POLES"></span>
       </div>
       <img class="starts_image hidden-xs hidden-sm" src="<?php echo get_template_directory_uri() ?>/images/wheel.svg" alt="BTCC POLES">
     </div>
   </div>

   <div class="row">
     <div class="col-md-12 wow fadeInUp">
       <div class="back__wrapper matchheight">
         <a href="/profile/"><img src="<?php echo get_template_directory_uri()  ?>/images/back_img.svg" alt="Back to Profile">Back to Profile</a>
       </div>
     </div>
   </div>

 </div>
