<?php
/**
** Template part: Process Section
** Module/Layout name: process_section
**
**/

//Get our fields and set our variables
$section_title = get_sub_field('section_title');
$intro_text = get_sub_field('intro_text');
$steps_header = get_sub_field('steps_header');
$orientation = get_sub_field('orientation');

if(have_rows('steps')):
  $all_steps = [];
  $y = 0;
  while(have_rows('steps')): the_row();
    $step_title = get_sub_field('step_title');
    $step_content = get_sub_field('step_content');
    $all_steps[$y] = [$step_title, $step_content];
    $y++;
  endwhile;

endif;

$column_count = sizeof($all_steps);

switch ($column_count) {
  case 6:
    $column_count = 2;
    break;
  case 5:
    $column_count = 3;
    break;
  case 4:
    $column_count = 4;
    break;
  case 3:
    $column_count = 4;
    break;
  case 2:
    $column_count = 6;
    break;
  default:
    $column_count = 6;
    break;
}

;?>
<section class="process-section">
  <div class="container py-2">

    <div class="row">
      <div class="col">
        <h3 class="text-center"><?php echo $section_title;?></h3>
        <p class="text-center"><?php echo $intro_text;?></p>
      </div>
    </div>

    <div class="row">

      <?php if($orientation === 'horizontal'):?>

        <div class="col">
							<h4 class="mb-2"><?php echo $steps_header;?></h4>

							<div class="row process mt-5">

                <?php $w = 1;?>
                <?php foreach ($all_steps as $key => $value): ?>
                  <div class="process-step col-md-6 col-lg-<?php echo $column_count;?> mb-5 mb-md-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
  									<div class="process-step-circle">
  										<strong class="process-step-circle-content"><?php echo $w;?></strong>
  									</div>
  									<div class="process-step-content">
  										<h4 class="mb-0 text-4 font-weight-bold"><?php echo $value[0] ;?></h4>
  										<?php echo $value[1] ;?>
  									</div>
  								</div>
                  <?php $w++;?>
                <?php endforeach; ?>

							</div>

						</div>

      <?php else:?>

            <div class="col">
              <h4 class="mb-2 mt-5"><?php echo $steps_header;?></h4>

              <div class="process process-vertical py-4">

                <?php $w = 1;?>
                <?php foreach ($all_steps as $key => $value): ?>

                  <div class="process-step appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="<?php echo$w;?>00" style="animation-delay: 200ms;">
                    <div class="process-step-circle">
                      <strong class="process-step-circle-content"><?php echo $w;?></strong>
                    </div>
                    <div class="process-step-content">
                      <h4 class="mb-1 text-4 font-weight-bold"><?php echo $value[0] ;?></h4>
                      <?php echo $value[1] ;?>
                    </div>
                  </div>
                  <?php $w++;?>
                <?php endforeach; ?>

              </div>

            </div>

      <?php endif; ?>

    </div>

  </div>
</section>
