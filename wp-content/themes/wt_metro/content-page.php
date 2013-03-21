<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package  WellThemes
 * @file     content-page.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
      <div class="olook-tv mb30">
         <p class="logo"><?php the_title() ?></p>
   		<?php the_content(); ?>
      </div>
	
	</div><!-- /entry-content -->
	
	
</article><!-- /post-<?php the_ID(); ?> -->