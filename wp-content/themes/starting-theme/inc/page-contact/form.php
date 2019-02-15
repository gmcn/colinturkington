<div class="container-fluid contact__wrapper">

  <?php include(locate_template("inc/page-elements/title-contact.php")); ?>

  <div class="row">
    <div class="col-md-10">
      <div class="col-md-12"><p>Message:</p></div>
      <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]') ?>
    </div>
    <div class="col-md-2 contact__wrapper__social">
      <p>Social:</p>
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
  </div><!-- /.row -->
</div><!-- /.container-fluid contact__wrapper -->
