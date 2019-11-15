<?php
/**
** Template part: Countdown
** Module/Layout name: countdown
**
**/

//Get our fields and set our variables
$date = get_sub_field('date');
$font_weight = get_sub_field('font_weight');
$font_color = get_sub_field('font_color');
$section_background_color = get_sub_field('section_background_color');
$heading = get_sub_field('heading');
$intro_text = get_sub_field('intro_text');
$btn_link = get_sub_field('button_link');
$btn_text = get_sub_field('button_text');
$btn_color = get_sub_field('button_color');
?>
<section class="countdown-section" style="background-color: <?php echo $section_background_color;?>">
<style>
.countdown span.days,
.countdown span.hours,
.countdown span.minutes,
.countdown span.seconds,
.countdown span.days span,
.countdown span.hours span,
.countdown span.minutes span,
.countdown span.seconds span,
section.countdown-section h4,
section.countdown-section p {
  color: <?php echo $font_color;?>;
}
</style>
  <div class="container py-2">
      <div class="row">
				<div class="col">
          <?php if( !empty($heading)){ ;?>
              <h4 class="text-center mb-2 font-weight-bold"><?php echo $heading ;?></h4>
              <p class="text-center"><?php echo $intro_text;?></p>
          <?php } ?>
					<div class="countdown" data-plugin-countdown="" data-plugin-options="{'date': '<?php echo $date;?>', 'numberClass': '<?php echo $font_weight;?>'}">
            <span class="days">
              <span class="<?php echo $font_weight;?>"></span> DAY
              <div class="d-inline text-uppercase"></div>
            </span>
            <span class="hours">
              <span class="<?php echo $font_weight;?>"></span> HRS
            </span>
            <span class="minutes">
              <span class="<?php echo $font_weight;?>"></span> MIN
            </span>
            <span class="seconds">
              <span class="<?php echo $font_weight;?>"></span> SEC
            </span>
          </div>
          <?php if( !empty($btn_text)){?>
            <div class="button-container">
              <a href="<?php echo $btn_link;?>"><button type="button" style="background-color:<?php echo $btn_color;?>;" class="btn btn-modern mb-2"><?php echo $btn_text;?></button></a>
            </div>
          <?php } ?>
				</div>
			</div>
  </div>
</section>
