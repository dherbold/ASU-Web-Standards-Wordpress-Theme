<?php
/**
 * The template for displaying Archive pages.
 *
 * @see http://codex.wordpress.org/Template_Hierarchy
 *
 * @author The Julie Ann Wrigley Global Institute of Sustainability
 * @author Ivan Montiel
 *
 * @copyright 2014-2015 Arizona State University
 *
 * @license MIT
 * @license http://opensource.org/licenses/MIT
 *
 * @package asu-wordpress-web-standards-theme
 */

get_header(); ?>

<div id="main-wrapper" class="clearfix">
  <div id="main" class="clearfix">
    <?php echo do_shortcode( '[page_feature]' ); ?>

    <div id="content" class="site-content">
      <?php echo do_shortcode( '[asu_breadcrumbs]' ); ?>
      <main id="main" class="site-main space-top-md" role="main">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2><?php single_cat_title(); ?></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <?php echo category_description(); ?>

              <?php
              while ( have_posts() ) {
                the_post();
                get_template_part( 'content', get_post_format() );

                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) {
                  comments_template();
                }
              } // end of the loop.
              ?>
            </div>
            <div class="col-sm-4 hidden-xs">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
      </main><!-- #main -->
    </div>
  </div><!-- #main -->
</div><!-- #main-wrapper -->

<?php get_footer(); ?>
