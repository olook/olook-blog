<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package  WellThemes
 * @file     category.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<?php get_header(); ?>

		<section id="primary">
			<div id="content" role="main">
				<div class="archive">
					<?php get_template_part( 'content', 'featured-landing' ); ?>
					<?php 
						global $query_string;
						global $cat;
						$matches = array();
						preg_match("/cat=(([0-9]|,|-[0-9]|%2C)*)/", $query_string, $matches);
						$landing_description_cat = wt_get_option('wt_landing_description');
						$query_string = str_replace($matches[0],$matches[0].",-".$landing_description_cat,$query_string);
						query_posts( $query_string);

					?>

					<?php if ( have_posts() ) : ?>

						
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								* If you want to overload this in a child theme then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/                        
								get_template_part( 'content', 'excerpt' );
							?>

						<?php endwhile; ?>
						<?php wt_pagination(); ?>

					<?php else : ?>

						<article id="post-0" class="post no-results not-found">
							<header class="entry-header">
								<h1 class="entry-title"><?php _e( 'Nothing Found', 'wellthemes' ); ?></h1>
							</header><!-- /entry-header -->

							<div class="entry-content">
								<p><?php _e( 'Desculpe, mas não foi encontrado nenhum post relacionado a sua busca. Talvez procurando por outro termo você encontre.', 'wellthemes' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- /entry-content -->
						</article><!-- /post-0 -->

					<?php endif; ?>
				</div> <!-- /archive -->			
			</div><!-- /content -->
		</section><!-- /primary -->


<?php get_footer(); ?>
