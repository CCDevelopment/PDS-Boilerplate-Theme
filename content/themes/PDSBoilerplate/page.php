<?php
/**
* PDS Boilerplate main page template
**/?>

<?php get_header();?>

<?php if( have_rows('master_layout') ): ?>
    <?php while( have_rows('master_layout') ): the_row(); ?>


        <?php // Full Width section with video background
          if( get_row_layout() == 'module_-_full_width_video_background' ):
             get_template_part('partials/modules/section','full-width-video-background');
          endif; ?>

        <?php // Call To Actions
          if( get_row_layout() == 'call_to_action' ):
            get_template_part('partials/modules/section','call-to-action');
          endif; ?>

          <?php // Centered Table
            if( get_row_layout() == 'centered_table' ):
              get_template_part('partials/modules/section','centered-table');
            endif; ?>

          <?php // Centered Table
            if( get_row_layout() == 'faq_accordian' ):
              get_template_part('partials/modules/section','faq-accordian');
            endif; ?>

          <?php // Countdown
            if( get_row_layout() == 'countdown' ):
              get_template_part('partials/modules/section','countdown');
            endif; ?>

          <?php // Three Cards
            if( get_row_layout() == 'three_cards' ):
              get_template_part('partials/modules/section','three-cards');
            endif; ?>

          <?php // Tour Section
            if( get_row_layout() == 'tour_section' ):
              get_template_part('partials/modules/section','tour-section');
            endif; ?>

          <?php // Process Section
            if( get_row_layout() == 'process_section' ):
              get_template_part('partials/modules/section','process-section');
            endif; ?>

          <?php // Sponsor Images
            if( get_row_layout() == 'sponsor_image_grid' ):
              get_template_part('partials/modules/section','sponsor-image-grid');
            endif; ?>

          <?php // USP Section
            if( get_row_layout() == 'usp_section' ):
              get_template_part('partials/modules/section','usp-section');
            endif; ?>

          <?php // Image Grid
            if( get_row_layout() == 'image_grid' ):
              get_template_part('partials/modules/section','image-grid');
            endif; ?>

          <?php // Hotspot Image
            if( get_row_layout() == 'hotspot_image' ):
              get_template_part('partials/modules/section','hotspot-image');
            endif; ?>

          <?php // Testimonials
            if( get_row_layout() == 'testimonials' ):
              get_template_part('partials/modules/section','testimonials');
            endif; ?>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
