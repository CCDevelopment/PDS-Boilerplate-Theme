<?php
/**
** Template part: Three cards
** Module/Layout name: three_cards
**
**/

//Get our fields and set our variables
$section_title = get_sub_field('section_title');
$intro_text = get_sub_field('intro_text');
$allcards = [];


  if( have_rows('cards')):
      $y = 0;

      while(have_rows('cards')) :the_row();
        $image = get_sub_field('image');
        $headline = get_sub_field('headline');
        $text_blurb = get_sub_field('text_blurb');
        $button_text = get_sub_field('button_text');
        $button_link = get_sub_field('button_link');
        $allbadges = [];
        $badges = get_sub_field('badges');
        if( $badges ):
             foreach( $badges as $badge ):
                array_push($allbadges, $badge);
             endforeach;
         endif;

        $allcards[$y] = [$image, $headline, $text_blurb, $button_text, $button_link, $allbadges];
        $y++;
      endwhile;

  endif;
?>
<section class="three-cards-section">
  <div class="container py-2">

    <div class="row">
      <div class="col">
        <h3 class="text-center"><?php echo $section_title;?></h3>
        <p class="text-center"><?php echo $intro_text;?></p>
      </div>
    </div>

    <div class="row">

      <?php foreach ($allcards as $key => $value): ?>

            <div class="col-lg-4">
        			<div class="featured-box featured-box-primary border-radius-0 featured-box-effect-1">
        				<div class="box-content box-content-border-0 border-radius-0 p-5">
                  <img class="card-img mb-4" src="<?php echo $value[0];?>" alt="">
        					<!-- <i class="icon-featured far fa-heart mt-0"></i> -->
        					<h4 class="font-weight-normal text-5"><strong class="font-weight-extra-bold"><?php echo $value[1];?></strong></h4>
        					<p class="mb-0"><?php echo $value[2];?></p>
        					<p class="mb-3 mt-3"><a href="https://<?php echo $value[4];?>" class="text-primary text-decoration-none"><?php echo $value[3];?><i class="fas fa-angle-right"></i></a></p>
                  <div class="badges">
                    <?php if( $value[5] ):
                         foreach( $value[5] as $newbadge ):
                            echo '<span class="badge '. strtolower($newbadge) .'-badge badge-xs">'. $newbadge . '</span>';
                         endforeach;
                     endif;?>
                  </div>
                </div>
        			</div>
        		</div>

      <?php endforeach; ?>

  	</div>

  </div>
</section>
