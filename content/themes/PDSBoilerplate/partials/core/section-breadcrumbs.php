<?php
/**
** Breadcrumbs Template
**/
?>

<section class="page-header page-header-modern page-header-md bg-transparent border-top border-bottom">
	<div class="container">
		<div class="row">

			<div class="col-md-6 align-self-center order-2 order-md-1 p-static">

				<h1 class="text-dark">
					<strong>
					<?php
						if( is_search() ):
								printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' );
						elseif( is_home() ):
								echo "Blog";
						elseif( is_archive() ):
							if ( is_day() ) {
								/* translators: %s: Date. */
								printf( __( 'Daily Archives: %s', 'pds-boilerplate' ), get_the_date() );
							} elseif ( is_month() ) {
								/* translators: %s: Date. */
								printf( __( 'Monthly Archives: %s', 'pds-boilerplate' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'pds-boilerplate' ) ) );
							} elseif ( is_year() ) {
								/* translators: %s: Date. */
								printf( __( 'Yearly Archives: %s', 'pds-boilerplate' ), get_the_date( _x( 'Y', 'yearly archives date format', 'pds-boilerplate' ) ) );
							} else {
								_e( 'Archives', 'pds-boilerplate' );
							}
						else:
								the_title();
						endif;
					?>
				</strong>
			</h1>

			</div>

			<div class="col-md-6 align-self-center order-1 text-md-right">

				<ul class="breadcrumb d-block breadcrumb-block breadcrumb-light mb-2 mb-md-0">
					<li><a href="#">Home</a></li>
					<?php
					if( is_search() || is_404() ):?>
						<li class="active"><a href="#">Results<a></li>
					<?php elseif( is_home() ):?>
						<li class="active"><a href="#">Blog<a></li>
					<?php else:
						$crumbs = explode("/",$_SERVER["REQUEST_URI"]);
						foreach($crumbs as $crumb){

								if( strlen($crumb) > 1):

									if( end($crumbs)):
										echo	'<li class="active"><a href="#">'.ucfirst(str_replace(array(".php","_"),array("",""),$crumb) . '').'</a></li>';
									else:
										echo	'<li><a href="#">'.ucfirst(str_replace(array(".php","_"),array("",""),$crumb) . '').'</a></li>';
									endif;

								else:
									//
								endif;
						}
					endif;
					?>
				</ul>
			</div>
		</div>
	</div>
</section>
