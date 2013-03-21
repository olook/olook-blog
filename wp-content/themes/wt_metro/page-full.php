<?php
/**
 * Template Name: Full Width
 * Description: A Page Template to display full width page contents.
 *
 * @package  WellThemes
 * @file     page-full.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<?php get_header(); ?>

<section id="primary">
	<div id="content" class="full-content" role="main">
   	<?php if (have_posts()) : ?>
   		<?php while ( have_posts() ) : the_post(); ?>				
   			<?php get_template_part( 'content', 'page' ); ?>
   		<?php endwhile; // end of the loop. ?>
   	<?php endif ?>
   
   	<div id="featured-cats">
      	<?php
      		//include featured categories
      		if ( wt_get_option( 'wt_feat_cat1' ) != 0 ) {
      			get_template_part( 'includes/feat-cat1' );						
      		}

      	?>
   
         <div class="mais-vistos">
            <h3>Posts mais vistos</h3>
            <?php the_widget('wellthemes_popular_posts_widget', 'number=5'); ?>	
         </div>
   	</div>
   
	</div><!-- /content -->
</section><!-- /primary -->

<?php get_footer(); ?>