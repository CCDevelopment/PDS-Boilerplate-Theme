<?php
/**
** Template part: Testimonials
** Module/Layout name: testimonals
**
**/

//Get our fields and set our variables
$section_title = get_sub_field('section_title');
$intro_text = get_sub_field('intro_text');
$background_color = get_sub_field('background_color');
$section_height = get_sub_field('section_height');

switch ($section_height) {
  case 1:
    $section_height = 1;
    break;
  case 2:
    $section_height = 3;
    break;
  case 3:
    $section_height = 4;
    break;
  case 4:
    $section_height = 5;
    break;
  default:
    $section_height = 3;
    break;
}
?>

<section class="section section-height-<?php echo $section_height;?> border-0 m-0 appear-animation animated fadeIn appear-animation-visible" style="background-color:<?php echo $background_color;?> !important;" data-appear-animation="fadeIn" style="animation-delay: 100ms;">

  <?php if(!empty($section_title)):?>
    <div class="row">
      <div class="col">
        <h3 class="text-center"><?php echo $section_title;?></h3>
        <p class="text-center"><?php echo $intro_text;?></p>
      </div>
    </div>
  <?php endif;?>

  <div class="container">
		<div class="row">
			<div class="col appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">

				<div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-dark nav-style-2 mb-0 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100, 'autoHeight': true}" style="height: auto;">
				<div class="owl-stage-outer owl-height" style="height: 241px;">
          <div class="owl-stage" style="transform: translate3d(-1010px, 0px, 0px); transition: all 0.25s ease 0s; width: 2220px; padding-left: 100px; padding-right: 100px;">

            <?php
              if(have_rows('testimonial')):
                while(have_rows('testimonial')): the_row();?>

                <div class="owl-item active" style="width: 910px; margin-right: 100px;">
                  <div>
        						<div class="testimonial testimonial-style-2 mb-0">
        							<div class="testimonial-author">
        								<img src="<?php echo get_sub_field('image');?>" class="img-fluid rounded-circle" alt="">
        							</div>
        							<blockquote>
        								<p class="text-color-dark text-5 line-height-5 mb-0"><?php echo get_sub_field('quote');?></p>
        							</blockquote>
        							<div class="testimonial-author">
        								<p><strong class="font-weight-extra-bold text-2">- <?php echo get_sub_field('name');?></strong></p>
        							</div>
        						</div>
        					</div>
                </div>

          <?php  endwhile;
              endif;?>

          </div>
        </div>
        <div class="owl-nav">
          <button type="button" role="presentation" class="owl-prev"></button>
          <button type="button" role="presentation" class="owl-next disabled"></button>
        </div>
        <div class="owl-dots disabled"></div>
      </div>

			</div>
		</div>
	</div>
</section>
