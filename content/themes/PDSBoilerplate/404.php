<?php
/**
* 404 page
**/?>

<?php get_header();?>

<div role="main" class="main">

			<div class="container">
			<div class="row mt-5">
				<div class="col text-center">
					<div class="logo">
						<a href="<?php home_url();?>">
							<img width="250px" src="<?php the_field('404_logo', 'options') ;?>" alt="page not found">
						</a>
					</div>
				</div>
			</div>
			<section class="http-error py-0">
				<div class="row justify-content-center py-3">
					<div class="col-6 text-center">
						<div class="http-error-main">
							<span class="text-6 font-weight-bold text-color-primary">PAGE NOT FOUND</span>
							<p class="text-3 my-4">We're sorry about this, but it looks like this page no longer exists.</p>
						</div>
						<a href="javascript: history.go(-1)" class="btn btn-primary btn-rounded btn-xl font-weight-semibold text-2 px-4 py-3 mt-1 mb-4"><i class="fas fa-angle-left pr-3"></i>GO BACK</a>
						<a href="<?php home_url();?>" class="btn btn-primary btn-rounded btn-xl font-weight-semibold text-2 px-4 py-3 mt-1 mb-4"><i class="fas fa-angle-right pr-3"></i>GO HOME</a>
					</div>
				</div>
			</section>
		</div>

</div>


<?php get_footer();?>
