<?php
/**
* Archive
**/

if ( post_password_required() )
    return;?>

<?php get_header();?>
<?php get_template_part('partials/core/section', 'breadcrumbs');?>
<div role="main" class="main">

				<div class="container py-4">
					<div class="row">
						<div class="col-lg-9 order-lg-1"> <!-- Blog Roll Column -->
							<div class="blog-posts">

                <?php if( have_posts() ) :

                        while( have_posts() ): the_post();

                        $categories = get_the_category();
                        if( empty( get_the_post_thumbnail_url() ) ):
                          $post_thumb_url = get_field('default_post_featured_image', 'options');
                        else:
                          $post_thumb_url = get_the_post_thumbnail_url();
                        endif;
                        ?>

                          <article class="post post-large">
                              <div class="post-image">
                                <a href="<?php the_permalink();?>">
                                  <img src="<?php echo $post_thumb_url;?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                              </div>

                              <div class="post-date">
                                <span class="day"><?php echo get_the_date('d');?></span>
                                <span class="month"><?php echo get_the_date('M');?></span>
                              </div>

                              <div class="post-content">

                                <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                <p><?php the_excerpt();?></p>

                                <div class="post-meta">
                                  <span><i class="far fa-user"></i> By <a href="#"><?php the_author();?></a> </span>
                                  <span><i class="far fa-folder"></i>
                                    <?php for ($i=0; $i < sizeof($categories) ; $i++) {
                                      echo '<a href="#">'.$categories[$i]->name.'</a>,';
                                     }?>
                                  </span>
                                  <span><i class="far fa-comments"></i> <a href="#"><?php echo get_comments_number();?> Comment(s)</a></span>
                                  <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="<?php the_permalink();?>" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                </div>

                              </div>
                          </article>

                <?php   endwhile;
                      endif; ?>

							</div>
							<?php pds_custom_pagination();?>


						</div>
            <div class="col-lg-3 order-lg-2"> <!-- Sidebar -->
							<aside class="sidebar">

                  <?php dynamic_sidebar('Blog Sidebar 1');?>

              </aside>
						</div>
					</div>

				</div>

			</div>


<?php get_footer();?>
