<?php
/**
** Template part: Image Grid
** Module/Layout name: image_grid
**
**/

//Get our fields and set our variables
$section_title = get_sub_field('section_title');
$intro_text = get_sub_field('intro_text');

$images = get_sub_field('images');
$size = 'full'; // (thumbnail, medium, large, full or custom size)?>

<section class="image-grid-section">

  <?php if(!empty($section_title)):?>
    <div class="row">
      <div class="col">
        <h3 class="text-center"><?php echo $section_title;?></h3>
        <p class="text-center"><?php echo $intro_text;?></p>
      </div>
    </div>
  <?php endif;?>

  <?php if( $images ): ?>

    <div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
      <div class="image-gallery sort-destination full-width">

    <?php foreach( $images as $image_id ): ?>

        <div class="isotope-item">
          <div class="image-gallery-item">

              <a href="<?php echo $image_id;?>">
  							<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-centered-info thumb-info-block">
  								<span class="thumb-info-wrapper">
  									<img src="<?php echo $image_id;?>" class="img-fluid" alt="">
  									<span class="thumb-info-title">
  										<span class="thumb-info-inner text-dark">View</span>
  										<span class="thumb-info-type">Thailand</span>
  									</span>
  									<span class="thumb-info-action">
  										<span class="thumb-info-action-icon background-transparent"><i class="fas fa-plus text-primary"></i></span>
  									</span>
  								</span>
  							</span>
  						</a>

          </div>
        </div>

    <?php endforeach; ?>

    </div>
	</div>






  <?php endif; ?>

</section>
