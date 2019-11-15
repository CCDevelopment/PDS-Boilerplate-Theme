<?php
/**
** Template part: Full width video background section
** Module/Layout name: module_-_full_width_video_background
**
**/

//Get our fields and set our variables
$heading = get_sub_field('heading');
$min_height = get_sub_field('min_height');
if(!empty($min_height)){ $min_height = $min_height; } else { $min_height = 250; }
$background_video = get_sub_field('background_video');
$content = get_sub_field('content');
$center_content_vertically = get_sub_field('center_content_veritcally');
if($center_content_vertically != 1) {
	$center_attributes = '';
} else {
	$center_attributes = "position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);";
}


?>
<section class="video section section-text-light section-video section-center section-overlay-opacity section-overlay-opacity-scale-8" data-video-path="<?php echo $background_video;?>" data-plugin-video-background="" data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="z-index: 0; min-height: <?php echo $min_height;?>px;">
	<!-- <div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
		<video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity: 1; width: 1249px; height: auto;">
			<source src="<?php // echo $background_video ;?>" type="video/mp4">
		</video>
	</div> -->
		<div class="container" style="<?php echo $center_attributes;?>">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<h4 class="mb-0"><?php echo $heading;?></h4>
					<p class="mb-0"><?php echo $content;?></p>
				</div>
			</div>
		</div>
</section>
