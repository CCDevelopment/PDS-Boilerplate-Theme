<?php
/**
** Template part: Tour Module
** Module/Layout name: tour_section
**
**/

//Get our fields and set our variables
$section_title = get_sub_field('section_title');
$intro_text = get_sub_field('intro_text');
$navigation_label = get_sub_field('navigation_label');

$tabs = [];

if( have_rows('tabs') ):
	$y = 0;
	while( have_rows('tabs') ) : the_row();
		$tab_heading = get_sub_field('tab_heading');
		$tab_content = get_sub_field('tab_content');
		$tabs[$y] = [$tab_heading, $tab_content];
		$y++;
	endwhile;
else:
endif;?>
<section class="tour-section">
  <div class="container py-2">

    <div class="row">
      <div class="col">
        <h3 class="text-center"><?php echo $section_title;?></h3>
        <p class="text-center"><?php echo $intro_text;?></p>
      </div>
    </div>

    <div class="row mt-5">
				<div class="col">
					<h4 class="mb-4"><?php echo $navigation_label;?></h4>

					<div class="row">
						<div class="col-lg-4">
							<div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
								<ul class="nav nav-tabs col-sm-3">

                  <?php $counter = 0;
                    foreach ($tabs as $key => $value): ?>

                      <li class="nav-item <?php if($counter === 0){ echo 'active';};?>">
    										<a class="nav-link <?php if($counter === 0){ echo 'active';};?>" href="#<?php echo str_replace(' ', '', $value[0]);?>" data-toggle="tab"><?php echo $value[0] ;?></a>
    									</li>

        					<?php $counter++;
                    endforeach; ?>

								</ul>
							</div>
						</div>
						<div class="col-lg-8">
              <?php $counter = 0;
                foreach ($tabs as $key => $value): ?>

                  <div class="tab-pane tab-pane-navigation <?php if($counter === 0){ echo 'active';};?>" id="<?php echo str_replace(' ', '', $value[0]);?>">
    								<?php echo $value[1];?>
    							</div>

    					<?php $counter++;
                endforeach; ?>

						</div>
					</div>
				</div>
			</div>


  </div>
</section>
