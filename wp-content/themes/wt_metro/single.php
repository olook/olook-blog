<?php
/**
 * The Template for displaying all single posts.
 *
 * @package  WellThemes
 * @file     single.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">
	
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
		<?php endwhile; // end of the loop. ?>
		<?php if(function_exists('the_views')) { the_views(); } ?>
	</div><!-- /content -->
</section><!-- /primary -->
<?php get_sidebar('left'); ?>
<?php get_footer(); ?>