<?php
/**
** Template part: Call to Action
** Module/Layout name: call_to_action
**
**/

//Get our fields and set our variables
$style = get_sub_field('style');
$heading = get_sub_field('heading');
$subheading_text = get_sub_field('subheading_text');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
?>

<section class="cta">

<?php if($style == 1): ?>
	<div class="container py-2">
	<section class="call-to-action call-to-action-primary mb-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-lg-9">
					<div class="call-to-action-content">
						<h3><?php echo $heading;?></h3>
						<p class="mb-0"><?php echo $subheading_text;?></p>
					</div>
				</div>
				<div class="col-sm-3 col-lg-3">
					<div class="call-to-action-btn">
						<a href="<?php echo $button_link;?>" target="_blank" class="btn btn-modern text-2 btn-light border-0"><?php echo $button_text;?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>

<?php elseif ($style == 2): ?>

	<section class="call-to-action call-to-action-quaternary mb-5">
		<div class="col-sm-9 col-lg-9">
			<div class="call-to-action-content">
				<h3><?php echo $heading;?></h3>
				<p class="mb-0 opacity-7"><?php echo $subheading_text;?></p>
			</div>
		</div>
		<div class="col-sm-3 col-lg-3">
			<div class="call-to-action-btn">
				<a href="<?php echo $button_link;?>" target="_blank" class="btn btn-modern text-2 btn-light border-0"><?php echo $button_text;?></a>
			</div>
		</div>
	</section>

<?php endif;?>

</section>
