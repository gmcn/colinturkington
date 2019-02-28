<?php if( have_rows('content_rows') ): ?>

   <div class="container-fluid coaching">

     <div class="container">

       <div class="start hidden-xs hidden-sm wow fadeInDown">
         <img src="<?php echo get_template_directory_uri(); ?>/images/start-spot.svg" alt="Start Spot">
       </div>



     <?php $i = 0; while( have_rows('content_rows') ): the_row();
       // vars
       $contentRowHeading = get_sub_field('content_row_heading');
       $contentRowCopy = get_sub_field('content_row_copy');
       $contentRowImg = get_sub_field('content_row_image');
       $imageDetailsHeading = get_sub_field('image_details_heading');
       $imageDetails = get_sub_field('image_details');
       ?>

       <div class="row content_rows">

         <?php if($i % 2) : ?>
           <div class="col-sm-6 img__holder left  wow fadeInLeft matchheight">
             <img src="<?php echo $contentRowImg ?>" alt="<?php echo $contentRowHeading ?>">
             <?php if ($imageDetails): ?>
               <div class="col-md-12 galleryinfo">
                <div class="galleryinfo__wrapper">
                  <?php if ($contentRowHeading): ?>
                    <h3><?php echo $contentRowHeading ?></h3>
                  <?php endif; ?>
                  <p>
                    <?php echo $imageDetails ?>
                  </p>
                </div>
              </div>
             <?php endif; ?>
           </div>
           <div class="col-sm-6 wow fadeInRight matchheight">
             <h2><?php echo $contentRowHeading ?></h2>
             <?php echo $contentRowCopy ?>
           </div>
         <?php else : ?>
           <div class="col-sm-6 right wow fadeInRight matchheight">
             <h2><?php echo $contentRowHeading ?></h2>
             <?php echo $contentRowCopy ?>
           </div>
           <div class="col-sm-6 img__holder wow fadeInLeft matchheight">
             <img src="<?php echo $contentRowImg ?>" alt="<?php echo $contentRowHeading ?>">
             <?php if ($imageDetails): ?>
               <div class="col-md-12 galleryinfo">
                <div class="galleryinfo__wrapper">
                  <?php if ($imageDetailsHeading): ?>
                    <h3><?php echo $imageDetailsHeading ?></h3>
                  <?php endif; ?>
                  <p>
                    <?php echo $imageDetails ?>
                  </p>
                </div>
              </div>
             <?php endif; ?>
           </div>
         <?php endif; ?>

       </div>

     <?php $i++; endwhile; ?>
   </div>
 </div>
 <?php endif; ?>
