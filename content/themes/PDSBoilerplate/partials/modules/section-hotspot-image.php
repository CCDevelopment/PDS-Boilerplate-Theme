<?php
/**
** Template part: Hotspot Image
** Module/Layout name: hotspot_image
**
**/

//Get our fields and set our variables
$section_title = get_sub_field('section_title');
$intro_text = get_sub_field('intro_text');
$image_url = get_sub_field('image');
$width_class = get_sub_field('width');
if($width_class === 'full-width'):
  $width_class = '';
elseif($width_class === 'boxed'):
  $width_class = 'container py-4';
else:
  $width_class = 'container py-4';
endif;
?>
<section class="hotspot-image-section">

  <?php if(!empty($section_title)):?>
    <div class="row">
      <div class="col">
        <h3 class="text-center"><?php echo $section_title;?></h3>
        <p class="text-center"><?php echo $intro_text;?></p>
      </div>
    </div>
  <?php endif;?>

  <div class="<?php echo $width_class;?>">
		<div class="row py-4 mb-4">
			<div class="col">
        <?php if( have_rows('hotspots') ):?>
        	 <div class="image-hotspots">
             <img src="<?php echo $image_url;?>" class="img-fluid">
        	<?php
                while( have_rows('hotspots') ) : the_row();?>

                  <a style="left: <?php echo get_sub_field('left_position');?>%; top: <?php echo get_sub_field('top_position');?>%;" class="image-hotspot image-hotspot-primary" data-container="body" data-toggle="popover" data-placement="top" data-content="<?php echo get_sub_field('blurb');?>" data-original-title="" title="">
        						<strong><?php echo get_sub_field('label');?></strong>
        					<span class="ring"></span><span class="circle"></span></a>

        	<?php endwhile;?>
            </div>

        <?php else:
        endif;?>

			</div>
		</div>
	</div>
</section>
