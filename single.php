<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Creare Boilerplate
 */
get_header(); ?>
<section class="wrapper">
  <div id="primary" class="content-area wrap">
    <main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post();
        	get_template_part( 'content', 'single' );
        	creare_boilerplate_post_nav();
        	// If comments are open or we have at least one comment, load up the comment template
        	if ( comments_open() || '0' != get_comments_number() ) :
        		comments_template();
        	endif;
        endwhile; // end of the loop. ?>
    </main>
    <!-- #main -->
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!-- #primary --> 
</section>
<?php get_footer(); ?>