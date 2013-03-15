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
			<div id="content" class="category-page" role="main">
				<div class="archive landing-page">

					<?php if ( have_posts() ) : ?>

						
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								* If you want to overload this in a child theme then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
                        /*get_template_part( 'content', 'featured-landing' );*/
                        
								get_template_part( 'content', 'excerpt' );
							?>

						<?php endwhile; ?>
						<?php wt_pagination(); ?>

					<?php else : ?>

						<article id="post-0" class="post no-results not-found">
							<header class="entry-header">
								<h1 class="entry-title"><?php _e( 'Nada encontrado', 'wellthemes' ); ?></h1>
							</header><!-- /entry-header -->

							<div class="entry-content">
								<p><?php _e( 'Desculpe, mas não foi encontrado nenhum post relacionado a sua busca. Talvez procurando por outro termo você encontre.', 'wellthemes' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- /entry-content -->
						</article><!-- /post-0 -->

					<?php endif; ?>
				</div> <!-- /archive -->

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
