<?php
/**
** template for main navigation bar
**
**/
;?>

<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
  <div class="header-body">
    <div class="header-container container">
      <div class="header-row">
        <div class="header-column">
          <div class="header-row">
            <div class="header-logo">
              <a href="<?php echo home_url();?>">
                <img alt="<?php bloginfo('description');?>" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="25" src="<?php echo get_field('header_logo', 'options');?>">
              </a>
            </div>
          </div>
        </div>
        <div class="header-column justify-content-end">
          <div class="header-row pt-3">
            <nav class="header-nav-top">
              <?php $args = array(
                        'menu'            => 'Top Bar Contact Menu',
                        'container'       => 'nav',
                        'container_class' => 'header-nav-top',
                        'container_id'    => '',
                        'menu_class'      => 'nav nav-pills',
                        'menu_id'         => 'topBarNav',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                        // 'walker'          => new PDS_Walker_Nav_Menu
                        // 'theme_location'  => '',
                      );
                      wp_nav_menu($args);?>
										<!-- <ul class="nav nav-pills">
											<li class="nav-item nav-item-anim-icon d-none d-md-block">
												<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
											</li>
											<li class="nav-item nav-item-anim-icon d-none d-md-block">
												<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
											</li>
											<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
												<span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
											</li>
										</ul> -->
									</nav>
            <div class="header-nav-features">
							<div class="header-nav-feature header-nav-features-search d-inline-flex">
								<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
								<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
									<!-- <form role="search" action="page-search-results.html" method="get"> -->
										<div class="simple-search input-group">
                      <?php echo get_search_form();?>
											<!-- <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
											<span class="input-group-append">
												<button class="btn" type="submit">
													<i class="fa fa-search header-nav-top-icon"></i>
												</button>
											</span> -->
										</div>
									<!-- </form> -->
								</div>
							</div>
						</div>
          </div>
          <div class="header-row">
            <div class="header-nav pt-1">
              <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                <?php $args = array(
                          'menu'            => 'Main Menu',
                          'container'       => 'nav',
                          'container_class' => 'collapse',
                          'container_id'    => '',
                          'menu_class'      => 'nav nav-pills',
                          'menu_id'         => 'mainNav',
                          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                          // 'walker'          => new PDS_Walker_Nav_Menu
                          // 'theme_location'  => '',
                        );
                        wp_nav_menu($args);?>
              </div>
              <ul class="header-social-icons social-icons d-none d-sm-block">
                <li class="social-icons-facebook"><a href="https://<?php the_field('facebook', 'options');?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-twitter"><a href="https://<?php the_field('twitter', 'options');?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="https://<?php the_field('linkedin', 'options');?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
              <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                <i class="fas fa-bars"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
