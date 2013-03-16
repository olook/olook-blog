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

			<div id="content" class="landing-page" role="main">

					<?php get_template_part( 'content', 'featured-landing' ); ?>
               
               <div class="result-posts">
   					<?php 
   						global $query_string;
   						global $cat;
   						$matches = array();
   						preg_match("/cat=(([0-9]|,|-[0-9]|%2C)*)/", $query_string, $matches);
   						$landing_description_cat = wt_get_option('wt_landing_description');
   						$query_string = str_replace($matches[0],$matches[0].",-".$landing_description_cat."&posts_per_page=8",$query_string);
   						query_posts( $query_string);

   					?>


   					<?php if ( have_posts() ) : ?>

						
   						<?php /* Start the Loop */ ?>
   						<?php while ( have_posts() ) : the_post(); ?>

   							<?php

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

   							</div><!-- /entry-content -->
   						</article><!-- /post-0 -->

   					<?php endif; ?>
               </div>
               
				</div> <!-- /content -->

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
