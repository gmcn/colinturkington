<?php
/**
 * Note: The design shows a section in the banner 'tile' that seems to indicate that there should
 * be reference made to a particular project however none of the slides in the banner relate to
 * projects so this is not being coded.
 */
?>

<!-- BX Slider with Caption & Read More Link -->
<div id="bxslider">

	<?php if(have_rows('slider_content')): ?>

		<ul class="bxslider">

			<?php while(have_rows('slider_content')) : the_row();

					// ACF Sub fields
      		$slide_image = get_sub_field('slide_image');
      		$slide_title = get_sub_field('slide_tite');
					$slide_copy = get_sub_field('slide_copy');
      		$slide_video = get_sub_field('slide_video');
					$slide_mp4 = get_sub_field('slide_mp4_background');
					
				?>

				<li class="slide" style="background:url(<?php echo $slide_image; ?>) center; background-size: cover">

					<?php if ($slide_mp4): ?>
						<video autoplay="autoplay" muted="muted" loop="loop" id="myVideo">
							<source id="mp4" src="<?php echo $slide_mp4 ?>" type="video/mp4">
							<p>Your user agent does not support the HTML5 Video element.</p>
						</video>
					<?php endif; ?>


					<?php if($slide_title && $slide_copy) : ?>
						<div class="col-md-6 col-lg-4 col-md-offset-6 caption wow fadeInRightBig">
							<h2><?php echo $slide_title; ?></h2>
							<p><?php echo $slide_copy; ?></p>
						</div>
					<?php endif; ?>


          <?php if ($slide_video): ?>

            <div class="vert-align">
            	<a data-toggle="modal" data-target="#myModal">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 201.175 241.167">
								  <defs>
								    <style>
								      .cls-1 {
								        fill: none;
								        stroke: #fff;
								        stroke-miterlimit: 10;
								        stroke-width: 14px;
								      }

								      .cls-2 {
								        fill: #fff;
								        font-size: 22px;
								        font-family: Montserrat-Bold, Montserrat;
								        font-weight: 700;
								        letter-spacing: -0.01em;
								      }

								      .cls-3 {
								        filter: url(#GO);
								      }

								      .cls-4 {
								        filter: url(#Path_21424);
								      }
								    </style>
								    <filter id="Path_21424" x="0" y="0" width="201.175" height="241.167" filterUnits="userSpaceOnUse">
								      <feOffset dy="3" input="SourceAlpha"/>
								      <feGaussianBlur stdDeviation="16.5" result="blur"/>
								      <feFlood flood-opacity="0.788"/>
								      <feComposite operator="in" in2="blur"/>
								      <feComposite in="SourceGraphic"/>
								    </filter>
								    <filter id="GO" x="27" y="58.013" width="163" height="126" filterUnits="userSpaceOnUse">
								      <feOffset dy="3" input="SourceAlpha"/>
								      <feGaussianBlur stdDeviation="16.5" result="blur-2"/>
								      <feFlood flood-opacity="0.694"/>
								      <feComposite operator="in" in2="blur-2"/>
								      <feComposite in="SourceGraphic"/>
								    </filter>
								  </defs>
								  <g id="Group_337" data-name="Group 337" transform="translate(-619.5 -321.487)">
								    <g class="cls-4" transform="matrix(1, 0, 0, 1, 619.5, 321.49)">
								      <path id="Path_21424-2" data-name="Path 21424" class="cls-1" d="M88.5,55.9,41.8,12.6C28.5.3,7,9.7,7,27.8v86.6c0,18.1,21.5,27.5,34.8,15.2L88.5,86.3A20.644,20.644,0,0,0,88.5,55.9Z" transform="translate(49.5 46.48)"/>
								    </g>
								    <g class="cls-3" transform="matrix(1, 0, 0, 1, 619.5, 321.49)">
								      <text id="GO-2" data-name="GO" class="cls-2" transform="translate(76.5 104.51)"><tspan x="0" y="21">GO</tspan></text>
								    </g>
								  </g>
								</svg>

							</a>
            </div>

          <?php endif; ?>

				</li>

			<?php endwhile; ?>

		</ul>
  <?php endif; ?>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">

				<iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $slide_video ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

      </div>
    </div>

  </div>
</div>
