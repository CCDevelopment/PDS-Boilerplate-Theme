<?php
/**
** Template part: USP Section
** Module/Layout name: usp_section
**
**/

//Get our fields and set our variables
$section_title = get_sub_field('section_title');
$intro_text = get_sub_field('intro_text');
$section_style = get_sub_field('style');
;?>

<section class="usp-section">

    <div class="container">

    <?php if( !empty($section_title)): ?>
      <h3 class="text-center"><?php echo $section_title ;?></h3>
      <p class="text-center"><?php echo $intro_text ;?></p>
    <?php endif;?>

    <?php if($section_style == 1):  ?>

    <?php // Get this style specific fields.
          $intro_heading = get_sub_field('intro_heading');
          $intro_paragraph = get_sub_field('intro_paragraph');

          $usps = [];
          if( have_rows('usps_large_section_with_info_sidebar_right') ):
            $y = 0;
            while( have_rows('usps_large_section_with_info_sidebar_right') ) : the_row();
              $icon = get_sub_field('icon');
              $title = get_sub_field('title');
              $text_blurb = get_sub_field('text_blurb');
              $usps[$y] = [$icon, $title, $text_blurb];
              $y++;
            endwhile;
          else:
          endif;

          $map_heading = get_sub_field('map_heading');
          $google_map_address = get_sub_field('google_map_address');
          $address = get_sub_field('address');
          $phone = get_sub_field('phone');
          $email = get_sub_field('email');
          $information_list_title = get_sub_field('information_list_title');

          $information_list = [];
          if( have_rows('information_list') ):
            $y = 0;
            while( have_rows('information_list') ) : the_row();
              $item = get_sub_field('item');
              $information_list[$y] = [$item];
              $y++;
            endwhile;
          else:
          endif;

          ?>

				<div class="row pt-4 appear-animation animated appear-animation-visible" data-appear-animation="fadeInUpShorter">
					<div class="col-lg-7 pr-lg-5">
						<h2 class="font-weight-normal line-height-1"><?php echo $intro_heading;?></h2>
						<p class="lead"><?php echo $intro_paragraph;?></p>
						<div class="row pt-4 my-5">

              <?php $x = 1;
                   foreach ($usps as $key => $value):?>
                    <?php if($x == 1): echo '<div class="col-lg-6">'; endif;?>
                    <div class="feature-box feature-box-style-2 mb-4">
                      <div class="feature-box-icon">
                        <i class="icons icon-support text-color-primary"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-0"><?php echo $value[1];?></h4>
                        <?php echo $value[2];?>
                      </div>
                    </div>

                  <?php if($x % 3 == 0):
                          echo '</div>';
                          $x = 1;
                        else:
                          $x++;
                        endif;

                    endforeach;?>

						</div>

					</div>
					<div class="col-lg-5">
						<h4 class="font-weight-normal line-height-1 mb-5"><?php echo $map_heading ;?></h4>

						<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
						<!-- <div id="googlemaps" class="google-map small" style="position: relative; overflow: hidden;">
              <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                <div class="gm-err-container">
                  <div class="gm-err-content">
                    <div class="gm-err-icon">
                      <img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;">
                    </div>
                    <div class="gm-err-title">Oops! Something went wrong.</div>
                    <div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div>
                  </div>
                </div>
              </div>
            </div> -->

            <?php if( have_rows('accordian') ):
                $y = 0;
                $rand = rand();
                $w = 0;
                $show = 'show';?>

                <div class="accordion accordion-modern without-bg" id="accordion<?php echo $rand;?>">

            <?php while( have_rows('accordian') ) : the_row();?>

                  <div class="card card-default">
                    <div class="card-header">
                      <h4 class="card-title m-0">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion<?php echo $rand;?>" href="#collapse<?php echo $rand . '-' . $w;?>" aria-expanded="false">
                          <i class="fas fa-users"></i> <?php echo get_sub_field('tab_title');?>
                        </a>
                      </h4>
                    </div>
                    <div id="collapse<?php echo $rand . '-' . $w;?>" class="collapse <?php if($w == 0): echo $show; endif;?>" style="">
                      <div class="card-body">
                        <p class="mb-0"><?php echo get_sub_field('tab_content');?></p>
                      </div>
                    </div>
                  </div>

                <?php
                $y++;
                $w++;
              endwhile;?>
              	</div>
            <?php
              else:
                // no rows
              endif;

              if($address): ;?>
  						<ul class="list list-icons list-icons-style-3 mt-5">
  							<li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> <?php echo $address ;?></li>
  							<li><i class="fas fa-phone"></i> <strong>Phone:</strong><?php echo $phone;?></li>
  							<li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></li>
  						</ul>
            <?php endif;?>

            <?php if($information_list_title): ;?>
              <hr class="my-5">
  						<h4 class="font-weight-normal"><?php echo $information_list_title ;?></h4>
  						<ul class="list list-icons list-dark mt-4">
                  <?php foreach ($information_list as $key => $value): ?>
                      <li><i class="far fa-clock"></i><?php echo $value[0];?></li>
                  <?php endforeach; ?>
  						</ul>
            <?php endif;?>
					</div>
				</div>

			</div>

    <?php elseif( $section_style == 2): ?>

      <?php // Get this style specific fields

      $usps = [];

      if( have_rows('usps_3_x_icons_wblurbs') ):
        $y = 0;
        while( have_rows('usps_3_x_icons_wblurbs') ) : the_row();
          $icon = get_sub_field('icon');
          $heading = get_sub_field('heading');
          $blurb = get_sub_field('blurb');
          $usps[$y] = [$icon, $heading, $blurb];
          $y++;
        endwhile;
      else:
      endif;

      ?>

      <div class="container">
        <div class="row text-center text-md-left mt-4">

          <?php foreach ($usps as $key => $value):?>

            <div class="col-md-4 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
              <div class="row justify-content-center justify-content-md-start">
                <div class="col-4">
                  <img class="img-fluid mb-4" src="<?php echo $value[0];?>" alt="">
                </div>
                <div class="col-lg-8">
                  <h2 class="font-weight-bold text-5 line-height-5 mb-1"><?php echo $value[1];?></h2>
                  <?php echo $value[2];?>
                </div>
              </div>
            </div>

          <?php endforeach; ?>

        </div>
      </div>


    <?php elseif($section_style == 3): ?>

      <?php // Get this style specific fields

      $usps = [];

      if( have_rows('usps_grid_w_small_icons_heading_blurb') ):
        $y = 0;
        while( have_rows('usps_grid_w_small_icons_heading_blurb') ) : the_row();
          $icon = get_sub_field('icon');
          $heading = get_sub_field('heading');
          $blurb = get_sub_field('blurb');
          $usps[$y] = [$icon, $heading, $blurb];
          $y++;
        endwhile;
      else:
      endif;
      ?>

      <div class="container my-5 py-3" id="main">
        <div class="row pt-4">

          <?php foreach ($usps as $key => $value):?>

            <div class="col-lg-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
              <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                  <i class="<?php echo $value[0];?> icons"></i>
                </div>
                <div class="feature-box-info">
                  <h4 class="font-weight-bold mb-2"><?php echo $value[1];?></h4>
                  <?php echo $value[2];?>
                </div>
              </div>
            </div>

          <?php endforeach; ?>

        </div>

      </div>


    <?php elseif( $section_style == 4): ?>

      <?php // Get this style specific fields.

        $intro_heading = get_sub_field('intro_heading');
        $intro_text = get_sub_field('intro_text');
        $intro_link_text = get_sub_field('intro_link_text');
        $intro_link_url = get_sub_field('intro_link_url');

        $usps = [];

        if( have_rows('usps_grid_wsmall_icons_head_blurb_&_intro_paragraph_left') ):
          $y = 0;
          while( have_rows('usps_grid_wsmall_icons_head_blurb_&_intro_paragraph_left') ) : the_row();
            $icon = get_sub_field('icon');
            $heading = get_sub_field('heading');
            $blurb = get_sub_field('blurb');
            $usps[$y] = [$icon, $heading, $blurb];
            $y++;
          endwhile;
        else:
        endif;

        $row_count = sizeof($usps);

      ?>

      <div class="container">
					<div class="row py-5 my-5">
						<div class="col-lg-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
							<h2 class="font-weight-normal text-6 line-heigh-2 mb-4"><?php echo $intro_heading;?></h2>
							<?php echo $intro_text;?><br>
							<a href="<?php echo $intro_link_url;?>" class="learn-more text-color-primary font-weight-semibold text-2"><?php echo $intro_link_text;?><i class="pl-2 fas fa-chevron-right text-2"></i></a>
						</div>
						<div class="col-lg-8 mt-5 mt-lg-0">

              <div class="row">
                <?php foreach ($usps as $key => $value):?>

                  <div class="col-lg-6 mb-4 mb-lg-5 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                   <div class="feature-box feature-box-style-2">
                     <div class="feature-box-icon">
                       <i class="<?php echo $value[0];?> icons"></i>
                     </div>
                     <div class="feature-box-info">
                       <h4 class="font-weight-bold mb-2"><?php echo $value[1];?></h4>
                       <p class="mb-0"><?php echo $value[2];?></p>
                     </div>
                   </div>
                 </div>

                <?php endforeach; ?>
							</div>

						</div>
					</div>
				</div>


    <?php else: ?>

      <? // No style selected ?>

    <?php endif; ?>

</section>
