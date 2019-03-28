<?php

$standings_img = get_field( "standings_img" );
$news_img = get_field( "news_img" );
$profile_img = get_field( "profile_img" );
$shop_img = get_field( "shop_img" );
$countdown_img = get_field( "countdown_img" );
$partners_img = get_field( "partners_img" );
$social_img = get_field( "social_img" );
$gallery_img = get_field( "gallery_img" );

 ?>


<div class="container-fluid">
  <div class="row">
    <a href="/standings">
      <div class="col-sm-6 fp_standings wow fadeInLeft">

        <div class="wrapper" style="background-image: url(<?php echo $standings_img; ?>)">
          <div class="vert-align">
            <img src="<?php echo get_template_directory_uri() ?>/images/btcc_logo.png" alt="" />
          </div>
        </div>
        <h1>
          Standings
        </h1>
      </div>
    </a>
