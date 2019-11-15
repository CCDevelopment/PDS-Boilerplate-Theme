<?php
/**
** Template part: Centered Table
** Module/Layout name: centered_table
**
**/

//Get our fields and set our variables
$heading = get_sub_field('heading');
$intro_text = get_sub_field('intro_text');
$table_columns = get_sub_field('table_columns');
$columnheaders = [];
$columnrows = [];
$text_alignment = get_sub_field('text_alignment');

if( have_rows('table_headers') ):
    while ( have_rows('table_headers') ) : the_row();
				$heading_color_class = get_sub_field('heading_color_class');
				$column_1_heading = get_sub_field('column_1_heading');
				$column_2_heading = get_sub_field('column_2_heading');
				$column_3_heading = get_sub_field('column_3_heading');
				$column_4_heading = get_sub_field('column_4_heading');
				$column_5_heading = get_sub_field('column_5_heading');
        $column_6_heading = get_sub_field('column_6_heading');
				array_push($columnheaders, $column_1_heading, $column_2_heading, $column_3_heading, $column_4_heading, $column_5_heading, $column_6_heading);
    endwhile;
else :
endif;

if( have_rows('table_row') ):
	$y = 0;
	while( have_rows('table_row') ) : the_row();
		$column_1 = get_sub_field('column_1');
		$column_2 = get_sub_field('column_2');
		$column_3 = get_sub_field('column_3');
		$column_4 = get_sub_field('column_4');
		$column_5 = get_sub_field('column_5');
    $column_6 = get_sub_field('column_6');
		$columnrows[$y] = [$column_1, $column_2, $column_3, $column_4, $column_5, $column_6];
		$y++;
	endwhile;
else:
endif;?>
<section class="centered-table-section">
	<div class="container py-2">
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col pb-3">
						<?php if( !empty($heading) ): ;?>
						<h3 class="text-center"><?php echo $heading ;?></h3>
						<?php echo $intro_text;
						endif;?>
						<table class="table table-bordered table-hover <?php echo $text_alignment;?>">
							<thead>
								<tr class="<?php echo $heading_color_class;?>">
									<?php for ($i=0; $i < sizeof($columnheaders); $i++) {;?>
										<?php if ( !empty($columnheaders[$i]) ) { ?>
											<th><?php echo $columnheaders[$i];?></th>
										<?php }
										 } ?>
								</tr>
							</thead>
							<tbody>

								<?php foreach ($columnrows as $key => $value):;?>

										<tr class="active">
										<?php foreach ($value as $k => $e): ?>
											<?php if( !empty($e)) { ?>
												<td><?php echo $e;?></td>
										<?php	}
										endforeach; ?>
										</tr>
								<?php endforeach; ?>

							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
