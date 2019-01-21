<?php

$profile_img = get_field( "profile_img" );
$shop_img = get_field( "shop_img" );
$countdown_img = get_field( "countdown_img" );
$partners_img = get_field( "partners_img" );
$social_img = get_field( "social_img" );
$gallery_img = get_field( "gallery_img" );

 ?>


<div class="container-fluid">
  <div class="row">

    <div class="col-sm-6 profile wow fadeInLeft" style="background-image: url(<?php echo $profile_img; ?>)">
      <h1>
        <a href="/profile">Profile</a>
      </h1>
    </div>
