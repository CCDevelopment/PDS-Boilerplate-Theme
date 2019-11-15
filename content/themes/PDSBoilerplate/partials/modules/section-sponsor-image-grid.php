<?php
/**
** Template part: Sponsor Image Grid
** Module/Layout name: sponsor_image_grid
**
**/

//Get our fields and set our variables
$section_title = get_sub_field('section_title');
$intro_text = get_sub_field('intro_text');
$background_color = get_sub_field('background_color');
if(have_rows('sponsors')):
  $all_sponsors = [];
  $y = 0;
  while(have_rows('sponsors')): the_row();
    $sponsor_image = get_sub_field('sponsor_image');
    $sponsor_link  = get_sub_field('sponsor_link');
    $all_sponsors[$y] = [$sponsor_image, $sponsor_link];
    $y++;
  endwhile;

endif;

$column_count = sizeof($all_sponsors);

switch ($column_count) {
  case 8:
    $column_count = 3;
    break;
  case 7:
    $column_count = 3;
    break;
  case 6:
    $column_count = 2;
    break;
  case 5:
    $column_count = 2;
    break;
  case 4:
    $column_count = 3;
    break;
  case 3:
    $column_count = 4;
    break;
  case 2:
    $column_count = 6;
    break;
  default:
    $column_count = 12;
    break;
}

;?>
<section class="sponsorship-grid-section">
  <div class="">

    <div class="row">
      <div class="col">
        <h3 class="text-center"><?php echo $section_title;?></h3>
        <p class="text-center"><?php echo $intro_text;?></p>

        <div class="content-grid mt-4 mb-4" style="background-color: <?php echo $background_color;?>;">
            <div class="row content-grid-row">
          <?php foreach ($all_sponsors as $key => $value):?>

                     <div class="content-grid-item col-lg-<?php echo $column_count;?> text-center">
                       <div class="p-4">
                        <a href="<?php echo $value[1];?>"><img class="img-fluid" src="<?php echo $value[0];?>" alt=""></a>
                       </div>
                     </div>

          <?php endforeach; ?>

          </div>
				</div>

      </div>
    </div>

  </div>
</section>
