<?php
/**
* PDS Boilerplate functions and definitions
* This is built off of tehe Porto HTML 5 template.
**/

 /* Enqeue our new styles */
 function psd_enqueue_scripts() {

    //Web fonts
    wp_enqueue_style( 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7COswald' );

    // Vendor CSS
    wp_enqueue_style( 'pds-boostrap-style', get_stylesheet_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'pds-fontawesome-style', get_stylesheet_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css');
    wp_enqueue_style( 'pds-animate-style', get_stylesheet_directory_uri() . '/assets/vendor/animate/animate.min.css');
    wp_enqueue_style( 'pds-simple-line-icon-style', get_stylesheet_directory_uri() . '/assets/vendor/simple-line-icons/css/simple-line-icons.min.css');
    wp_enqueue_style( 'pds-owl-style', get_stylesheet_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css');
    wp_enqueue_style( 'pds-owl-theme-style', get_stylesheet_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.theme.default.min.css');
    wp_enqueue_style( 'pds-magnific-popup-style', get_stylesheet_directory_uri() . '/assets/vendor/magnific-popup/magnific-popup.min.css');

    // Theme CSS
    wp_enqueue_style( 'pds-theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css');
    wp_enqueue_style( 'pds-theme-elements-style', get_stylesheet_directory_uri() . '/assets/css/theme-elements.css');
    wp_enqueue_style( 'pds-theme-blog-style', get_stylesheet_directory_uri() . '/assets/css/theme-blog.css');
    wp_enqueue_style( 'pds-theme-shop-style', get_stylesheet_directory_uri() . '/assets/css/theme-shop.css');

   // Current Page CSS
   wp_enqueue_style( 'pds-style', get_stylesheet_directory_uri() . '/assets/vendor/rs-plugin/css/settings.css');
   wp_enqueue_style( 'pds-style', get_stylesheet_directory_uri() . '/assets/vendor/rs-plugin/css/layers.css');
   wp_enqueue_style( 'pds-style', get_stylesheet_directory_uri() . '/assets/vendor/rs-plugin/css/navigation.css');
   wp_enqueue_style( 'pds-style', get_stylesheet_directory_uri() . '/assets/vendor/circle-flip-slideshow/css/component.css');

   //Skin CSS
   wp_enqueue_style( 'pds-style', get_stylesheet_directory_uri() . '/assets/css/skins/default.css"');

   //Theme Custom CSS
   wp_enqueue_style( 'pds-style', get_stylesheet_directory_uri() . '/assets/css/custom.css');

   // Theme Style.css file
   wp_enqueue_style( 'pds-parent-theme-style', get_stylesheet_directory_uri() . '/style.css');

   //Header Libs
   wp_enqueue_script( 'pds-moderizer-script', get_stylesheet_directory_uri(). '/assets/vendor/modernizr/modernizr.min.js', array(''), '', false );

   //Footer Libs
   //wp_enqueue_script( 'pds-jquery-min-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery/jquery.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-appear-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery.appear/jquery.appear.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-easing-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery.easing/jquery.easing.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-cookie-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery.cookie/jquery.cookie.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-popper-script', get_stylesheet_directory_uri(). '/assets/vendor/popper/umd/popper.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-bootstrap-min-script', get_stylesheet_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-common-script', get_stylesheet_directory_uri(). '/assets/vendor/common/common.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-validation-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery.validation/jquery.validate.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-easy-pie-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-gmap-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery.gmap/jquery.gmap.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-lazyload-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery.lazyload/jquery.lazyload.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-isotope-script', get_stylesheet_directory_uri(). '/assets/vendor/isotope/jquery.isotope.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jqueryowl-carousel-script', get_stylesheet_directory_uri(). '/assets/vendor/owl.carousel/owl.carousel.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-magnific-script', get_stylesheet_directory_uri(). '/assets/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-vide-script', get_stylesheet_directory_uri(). '/assets/vendor/vide/jquery.vide.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-jquery-countdown-script', get_stylesheet_directory_uri(). '/assets/vendor/jquery.countdown/jquery.countdown.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-vivus-script', get_stylesheet_directory_uri(). '/assets/vendor/vivus/vivus.min.js', array('jquery'),'',true);


   // Theme Base, Components and Settings
   wp_enqueue_script( 'pds-theme-script', get_stylesheet_directory_uri(). '/assets/js/theme.js', array('jquery'),'',true);

   // Current Page Vendor and Views
   wp_enqueue_script( 'pds-jquery-themepunch-script', get_stylesheet_directory_uri(). '/assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-themepunch-revo-slide-script', get_stylesheet_directory_uri(). '/assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-flipshow-script', get_stylesheet_directory_uri(). '/assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js', array('jquery'),'',true);
   wp_enqueue_script( 'pds-views-script', get_stylesheet_directory_uri(). '/assets/js/views/view.home.js', array('jquery'),'',true);

   // Theme Custom
   wp_enqueue_script( 'pds-custom-script', get_stylesheet_directory_uri(). '/assets/js/custom.js', array('jquery'),'',true);
   // Theme Initialization Files
   wp_enqueue_script( 'pds-theme-init-script', get_stylesheet_directory_uri(). '/assets/js/theme.init.js', array('jquery'),'', true);

 }
 add_action( 'wp_enqueue_scripts', 'psd_enqueue_scripts' );

add_theme_support( 'menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ));
add_theme_support('title-tag');
add_theme_support('custom-selective-refresh-widgets' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// Register menus
function pds_register_my_menus(){
 pds_register_nav_menus(
	 array(
		 'header-menu' 	 => __( 'Header Menu' ),
		 'footer-menu-1' => __( 'Footer Menu 1' ),
		 'footer-menu-2' => __( 'Footer Menu 2' )
		)
	);
}
//add_action( 'init', 'pds_register_my_menus' );

/**
* Register our sidebars and widgetized areas.
*/
function pds_widgets_init() {

 register_sidebar( array(
	 'name'          => 'Footer Area 1 ',
	 'id'            => 'footer_area_1',
	 'before_widget' => '<div>',
	 'after_widget'  => '</div>',
	 'before_title'  => '<h2 class="rounded">',
	 'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => 'Footer Area 2',
		'id'            => 'footer_area_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
		 )
	);
  register_sidebar( array(
		'name'          => 'Footer Area 3',
		'id'            => 'footer_area_3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
		 )
	);
  register_sidebar( array(
		'name'          => 'Footer Area 4',
		'id'            => 'footer_area_4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
		 )
	);
	register_sidebar( array(
		'name'          => 'Blog Sidebar 1',
		'id'            => 'blog_sidebar_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
		 )
	);
	register_sidebar( array(
		'name'          => 'Blog Sidebar 2',
		'id'            => 'blog_sidebar_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
		 )
	);
	register_sidebar( array(
		'name'          => 'Blog Sidebar 3',
		'id'            => 'blog_sidebar_3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
		 )
	);
}
add_action( 'widgets_init', 'pds_widgets_init' );

// New page for the theme custom settings.
function register_acf_options_pages() {

   // Check function exists.
   if( !function_exists('acf_add_options_page') )
       return;

   // register options page.
   $option_page = acf_add_options_page(array(
       'page_title'    => __('PDS Settings'),
       'menu_title'    => __('PDS Settings'),
       'menu_slug'     => 'pds-settings',
       'capability'    => 'edit_posts',
       'redirect'      => false,
			 'icon_url'			 => 'dashicons-admin-settings'
   ));
}
// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');

// add default image setting to ACF image fields
  // let's you select a defualt image
  // this is simply taking advantage of a field setting that already exists

	add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
	function add_default_value_to_image_field($field) {
		acf_render_field_setting( $field, array(
			'label'			=> 'Default Image',
			'instructions'		=> 'Appears when creating a new post',
			'type'			=> 'image',
			'name'			=> 'default_value',
		));
	}

// Alter the Comments form to match our theme format.
 if ( !class_exists( 'PDS_Walker_Comment' ) ) {

    /**
     * Custom comment walker
     *
     * @users Walker_Comment
     */
    class PDS_Walker_Comment extends Walker_Comment {

        public function html5_comment( $comment, $depth, $args ) {
      		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

      		$commenter = wp_get_current_commenter();
      		if ( $commenter['comment_author_email'] ) {
      			$moderation_note = __( 'Your comment is awaiting moderation.' );
      		} else {
      			$moderation_note = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.' );
      		}

      		?>
      		<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?>>
          <div id="div-comment-<?php comment_ID(); ?>" class="comment">
            <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
              <?php
              if ( 0 != $args['avatar_size'] ) {
                echo get_avatar( $comment, $args['avatar_size'] );}
              ?>
            </div>
            <div class="comment-block">
              <div class="comment-arrow"></div>
              <span class="comment-by">
                <?php
                  /* translators: %s: comment author link */
                  printf( sprintf( '<strong>%s</strong>', get_comment_author_link( $comment ) ));
                ?>
                <span class="float-right">
                  <?php
          				comment_reply_link(
          					array_merge(
          						$args,
          						array(
          							'add_below' => '',
          							'depth'     => $depth,
          							'max_depth' => $args['max_depth'],
          							'before'    => '<span><i class="fas fa-reply"></i>',
          							'after'     => '</span>',
          						)
          					)
          				);
          				?>
                </span>
              </span>
              <p><?php comment_text(); ?></p>
              <span class="date float-right">
                <?php
                  /* translators: 1: comment date, 2: comment time */
                  printf( __( '%1$s at %2$s' ), get_comment_date( '', $comment ), get_comment_time() );
                ?>
              </span>
            </div>
          </div>


      		<?php
      	}
    }
    // end of WPSE_Walker_Comment
} // end of '!class_exists' condition

add_action('comment_form_before_fields', 'pds_comment_form_before_fields_row_html');
function pds_comment_form_before_fields_row_html(){?>
    <div class="form-row">
<?php }

add_action('comment_form_after_fields', 'pds_comment_form_after_fields_row_html');
function pds_comment_form_after_fields_row_html(){?>
    </div>
<?php }

add_filter('comment_form_fields', 'pds_alter_comment_form_fields');
function pds_alter_comment_form_fields($comment_fields){

     $comment_fields['comment'] = '<div class="form-row">
                                    <div class="form-group col">
                                      <label class="required font-weight-bold text-dark">Comment</label>
                                      <textarea maxlength="5000" data-msg-required="Please enter your comment." rows="8" class="form-control" name="comment" id="comment" required="" spellcheck="false"></textarea>
                                    </div>
                                  </div>';
     return $comment_fields;

}

add_filter( 'comment_form_fields', 'pds_move_comment_field_to_bottom' );
function pds_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}

add_filter('comment_form_default_fields', 'pds_alter_comment_form_default_fields');
function pds_alter_comment_form_default_fields($fields){
  $fields['author'] = '<div class="form-group col-lg-6">
                         <label class="required font-weight-bold text-dark">Full Name</label>
                         <input type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="author" id="author" required="" ' . $html_req . '>
                       </div>';
   $fields['email'] = '<div class="form-group col-lg-6">
                         <label class="required font-weight-bold text-dark">Email Address</label>
                         <input type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="">
                       </div>';
   unset($fields['url']);
   return $fields;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
function pds_custom_pagination($args = [], $class = 'pagination') {

    if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

    $args = wp_parse_args( $args, [
        'mid_size'           => 2,
        'prev_next'          => false,
        'prev_text'          => __('<i class="fas fa-angle-left"></i>', 'textdomain'),
        'next_text'          => __('<i class="fas fa-angle-right"></i>', 'textdomain'),
        'screen_reader_text' => __('', 'pds-boilerplate'),
        'type'               => ''
    ]);

    $links     = paginate_links($args);
    $next_link = get_previous_posts_link($args['next_text']);
    $prev_link = get_next_posts_link($args['prev_text']);
    $template  = apply_filters( 'pds_navigation_markup_template', '
    <h2 class="screen-reader-text">%2$s</h2>
     <ul class="pagination %1$s">
      <li class="page-item">%3$s</li>
        %4$s
        %5$s
      </ul>', $args, $class);

    echo sprintf($template, $class, $args['screen_reader_text'], $prev_link, $links, $next_link);
}

function pds_blog_sidebar_social_buttons(){ ;

  $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
  <ul class="social-icons social-icons-big mt-2">
    <!-- Facebook -->
    <li>
      <a href="http://www.facebook.com/sharer.php?u=<?php echo $url;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share On Facebook">
        <i class="text-dark fab fa-facebook-f"></i>
      </a>
    </li>
    <!-- LinkedIn -->
    <li>
      <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share On LinkedIn">
        <i class="text-dark fab fa-linkedin-in"></i>
      </a>
    </li>
    <!-- Print -->
    <li>
      <a href="javascript:;" onclick="window.print()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
        <i class="text-dark fas fa-print"></i>
      </a>
    </li>
    <!-- Reddit -->
    <li>
      <a href="http://reddit.com/submit?url=<?php echo $url;?>&amp;title=Share This Page" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share On Reddit">
        <i class="text-dark fab fa-reddit-alien"></i>
      </a>
    </li>
    <!-- Twitter -->
    <li>
      <a href="https://twitter.com/share?url=<?php echo $url;?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share On Twitter">
        <i class="text-dark fab fa-twitter"></i>
      </a>
    </li>
    <!-- Email -->
    <li>
      <a href="mailto:?Subject=Share This Page&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo $url;?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share By Email">
        <i class="text-dark far fa-envelope"></i>
      </a>
    </li>
  </ul>

<?php }

// Register and load the widget
include 'pds-widgets.php';
function pds_load_widget() {

    register_widget( 'pds_recent_posts_widget');
    register_widget( 'pds_login_widget');
    register_widget( 'pds_categories_widget');

}
add_action( 'widgets_init', 'pds_load_widget' );
