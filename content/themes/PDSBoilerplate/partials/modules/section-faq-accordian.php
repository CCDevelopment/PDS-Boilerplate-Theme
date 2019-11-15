<?php
/**
** Template part: F.A.Q.
** Module/Layout name: faq_accordian
**
**/
$tabs = [];
$tabHeadings = [];
$tabContents = [];
$heading = get_sub_field('heading');
$intro_text = get_sub_field('intro_text');
$heading_alignment = get_sub_field('heading_alignment');

if($heading_alignment == 'text-left'){
	$heading_alignment = 'text-left';
} elseif ($heading_alignment == 'text-center') {
	$heading_alignment = 'text-center';
} elseif ($heading_alignment == 'text-right') {
	$heading_alignment = 'text-right';
} else {
	$heading_alignment = 'text-left';
}
//Get our fields and set our variables
if( have_rows('accordian') ):
	$y = 0;
	while( have_rows('accordian') ) : the_row();
		$tab_heading = get_sub_field('tab_heading');
		$tab_content = get_sub_field('tab_content');
		$tabs[$y] = [$tab_heading, $tab_content];
		$y++;
	endwhile;
else:
endif;?>

<section class="faq-accordian">

	<div class="container py-2">
		<div class="row">
			<div class="col">
				<?php if( !empty($heading)):?>
					<h3 class="<?php echo $heading_alignment;?>"><?php echo $heading ;?></h3>
					<?php echo $intro_text ;?>
				<?php endif;?>
				<div class="toggle toggle-primary" data-plugin-toggle="">

					<?php foreach ($tabs as $key => $value): ?>

							<section class="toggle">
									<label><?php echo $value[0] ;?></label>
									<?php echo $value[1] ;?>
							</section>

					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>

</section>
