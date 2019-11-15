<?php
/**
* PDS Boilerplate main page template
**/?>

<?php get_header();?>

<?php
  if ( post_password_required() )
    return;?>

    <?php get_template_part('partials/core/section','innerpage-banner');?>

    <?php get_template_part('partials/core/section', 'breadcrumbs');?>

    <div class="container py-4">

					<div class="row">
						<div class="col-lg-3 order-lg-2">
							<aside class="sidebar">

                <?php dynamic_sidebar('Blog Sidebar 1');?>

              </aside>
						</div>
						<div class="col-lg-9 order-lg-1">
              <?php
                if(have_posts()):
                    while(have_posts()): the_post();
                    $post_id = get_the_ID();
                    $categories = get_the_category();
                    if( empty( get_the_post_thumbnail_url() ) ):
                      $post_thumb_url = get_field('default_post_featured_image', 'options');
                    else:
                      $post_thumb_url = get_the_post_thumbnail_url();
                    endif;
                    ?>

                    <div class="blog-posts single-post">

      								<article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
      										<a href="<?php echo $post_thumb_url;?>">
      											<img src="<?php echo $post_thumb_url;?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
      										</a>
      									</div>

      									<div class="post-date ml-0">
      										<span class="day"><?php echo get_the_date('d');?></span>
      										<span class="month"><?php echo get_the_date('M');?></span>
      									</div>

      									<div class="post-content ml-0">

      										<h2 class="font-weight-bold"><a href="#"><? the_title();?></a></h2>

      										<div class="post-meta">
      											<span><i class="far fa-user"></i> By <a href="#"><?php the_author();?></a> </span>
      											<span><i class="far fa-folder"></i>
                              <?php for ($i=0; $i < sizeof($categories) ; $i++) {
                                  echo '<a href="#">'.$categories[$i]->name.'</a>,';
                              }?>
                            </span>
      											<span><i class="far fa-comments"></i> <a href="#"><?php echo get_comments_number();?> Comment(s)</a></span>
      										</div>

      									  <?php the_content();?>


      										<div class="post-block mt-5 post-share">
      											<h4 class="mb-3">Share this Post</h4>
                            <?php pds_blog_sidebar_social_buttons() ;?>

      										</div>

      										<div class="post-block mt-4 pt-2 post-author">
      											<h4 class="mb-3">Author</h4>
      											<div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
      												<a href="#">
      													<img src="<?php $author_id = get_the_author_meta('ID');  echo get_avatar_url($author_id);?>" alt="">
      												</a>
      											</div>
      											<p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block"><?php the_author();?></a></strong></p>
      											<p><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></p>
      										</div>

                          <?php if ( comments_open() || get_comments_number() ) :
                              comments_template();
                          endif;?>

      									</div>
      								</article>

      							</div>

                <?php endwhile;
                endif;
               ?>

						</div> <!-- End Col -->
					</div>

				</div>


<?php get_footer();?>
