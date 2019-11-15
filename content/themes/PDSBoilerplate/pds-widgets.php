<?php
/**
* Custom Additional Widgets
**/

// Search Form Widget
class pds_recent_posts_widget extends WP_Widget {

    function __construct() {
    parent::__construct(

    // Base ID of your widget
    'pds_recent_posts_widget',

    // Widget name will appear in UI
    __('PDS Recent/Popular Posts Sidebar Widget', 'pds_widget_domain'),

    // Widget description
    array( 'description' => __( 'Recent Posts Sidebar widget', 'pds_widget_domain' ), )
    );
    }

    // Creating widget front-end

    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );

    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];

    // This is where you run the code and display the output?>
      <?php $recent_posts = wp_get_recent_posts();
        //print_r($recent_posts);?>
      <div class="tabs tabs-dark mb-4 pb-2">
        <ul class="nav nav-tabs">
          <li class="nav-item active"><a class="nav-link text-1 font-weight-bold text-uppercase active" href="#recentPosts" data-toggle="tab">Recent</a></li>
          <li class="nav-item"><a class="nav-link show text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Popular</a></li>
        </ul>
        <div class="tab-content">

          <div class="tab-pane active" id="recentPosts">
            <ul class="simple-post-list">

              <?php foreach ($recent_posts as $key => $value): ;?>
                
                <li>
                  <div class="post-image">
                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                      <a href="<?php the_permalink($value['ID']);?>">
                        <img src="<?php echo get_the_post_thumbnail_url($value['ID'], array(50,50));?>" width="50" height="50" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="post-info">
                    <a href="<?php the_permalink($value['ID']);?>"><?php echo get_the_title($value['ID']);?></a>
                    <div class="post-meta"><?php echo substr($value['post_date'],5, 5);?></div>
                  </div>
                </li>

              <?php endforeach; ?>

            </ul>
          </div>
          <div class="tab-pane" id="popularPosts">
            <ul class="simple-post-list">
                <?php $args = array(
                    'post_type'   => 'post',
                    'status'      => 'publish',
                    'orderby'     => 'comment_count',
                    'order'       => 'DESC',
                    'limit'       => 3
                );
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {
                	while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                    echo '<li>
                            <div class="post-image">
                              <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="'. get_the_permalink() .'">
                                  <img src="'. get_the_post_thumbnail_url() .'" width="50" height="50" alt="">
                                </a>
                              </div>
                            </div>
                            <div class="post-info">
                              <a href="'. get_the_permalink() .'">'. get_the_title() .'</a>
                              <div class="post-meta">'. get_the_date() .'</div>
                            </div>
                          </li>';
                	} // end while
                } // endif

                // Reset Post Data
                wp_reset_postdata();?>
            </ul>
          </div>

        </div>
      </div>

      <?php
    echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'pds_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
} // Class pds_widget ends here


// Login Form Widget
class pds_login_widget extends WP_Widget {

    function __construct() {
    parent::__construct(

    // Base ID of your widget
    'pds_login_widget',

    // Widget name will appear in UI
    __('PDS Login Sidebar Widget', 'pds_widget_domain'),

    // Widget description
    array( 'description' => __( 'Login Form Sidebar widget', 'pds_widget_domain' ), )
    );
    }

    // Creating widget front-end

    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );

    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];

    // This is where you run the code and display the output?>

        <div class="featured-box featured-box-primary text-left" style="">
          <div class="box-content">
            <?php if(is_user_logged_in()): ?>
              <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Welcome, <?php $user = wp_get_current_user(); print_r($user->display_name); ?></h4>
                <p>Thanks for being a part of the community.</p>
                <div class="form-row">
                  <div class="form-group col">
                    <input type="submit" name="wp-submit" id="wp-submit" value="Log Out" class="btn btn-primary btn-block btn-modern float-right" data-loading-text="Loading...">
                    <input type="hidden" name="redirect_to" value="<?php echo home_url();?>">
                  </div>
                </div>

            <?php else: ?>
              <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Log in</h4>
              <form action="<?php echo wp_login_url();?>" id="frmSignIn" method="post" name="loginform" id="loginform" class="needs-validation" novalidate="novalidate">
                <div class="form-row">
                  <div class="form-group col">
                    <label for="user_login" class="font-weight-bold text-dark text-2">Username or E-mail</label>
                    <input type="text" value="" class="form-control form-control-lg" required="" autocomplete="off" style="" name="log" id="user_login">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <a class="float-right" href="#">(Lost Password?)</a>
                    <label class="font-weight-bold text-dark text-2">Password</label>
                    <input type="password" value="" name="pwd" id="user_pass" class="form-control form-control-lg" required="" autocomplete="off" style="">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <input type="submit" name="wp-submit" id="wp-submit" value="Log In" class="btn btn-primary btn-block btn-modern float-right" data-loading-text="Loading...">
                    <input type="hidden" name="redirect_to" value="<?php the_permalink();?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="rememberme">
                      <label class="custom-control-label text-2" for="rememberme">Remember Me</label>
                    </div>
                  </div>
                </div>
              </form>
            <?php endif;?>

          </div>
        </div>

      <?php
    echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'pds_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
} // Class pds_login_widget ends here


// Login Form Widget
class pds_categories_widget extends WP_Widget {

    function __construct() {
    parent::__construct(

    // Base ID of your widget
    'pds_categories_widget',

    // Widget name will appear in UI
    __('PDS Categories Display Sidebar Widget', 'pds_widget_domain'),

    // Widget description
    array( 'description' => __( 'Categories List Sidebar widget', 'pds_widget_domain' ), )
    );
    }

    // Creating widget front-end

    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );

    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];

    // This is where you run the code and display the output?>
        <ul class="nav nav-list flex-column mb-5">
          <?php
          $categories = get_categories();
          foreach ($categories as $category => $value) {
            echo '<li class="nav-item"><a class="nav-link" href="'. get_category_link($categories[$category]->term_id) .'">'.$categories[$category]->name.' ('. $categories[$category]->category_count .') </a></li>';
          }?>
        </ul>

      <?php
    echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'pds_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
} // Class pds_categoies_widget ends here
