<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package  WellThemes
 * @file     content-single.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( wt_get_option( 'wt_show_post_nav' ) == 1 ) { ?>
			<div class="post-nav">
				<?php previous_post_link( '<div class="prev"><div class="wrap">%link</div></div>', '%title' ); ?>
				<?php next_post_link( '<div class="next"><div class="wrap">%link</div></div>', '%title' ); ?>
			</div>
		<?php } ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">			
			<span class="date"><?php the_time('F j, Y'); ?> </span>
			<span class="author"><?php the_author_posts_link(); ?></span>
			<span class="category"><?php the_category(', ' ); ?></span>
			<?php if ( comments_open() ) : ?>
				<span class="comments"><?php comments_popup_link( __('No comments', 'wellthemes'), __( '1 comment', 'wellthemes'), __('% comments', 'wellthemes')); ?></span>		
			<?php endif; ?>	
		</div><!-- /entry-meta -->		
	</header><!-- /entry-header -->
	
	<div class="entry-content">	
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'wellthemes' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- /entry-content -->

	
</article><!-- /post-<?php the_ID(); ?> -->