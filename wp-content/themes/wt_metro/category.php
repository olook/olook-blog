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
                     global $paged;
                     global $featured_post_id;

                     $query_string = array(
                        'cat' => $cat,
                        'paged' => $paged,
                        'posts_per_page' => 8,
                        'post__not_in' => array($featured_post_id),
                        'orderby' => 'date',
                        'order' => 'DESC'
                     );
   						query_posts($query_string);

   					?>

                 
   					<?php if ( have_posts() ) : ?>
                     

   						<?php /* Start the Loop */ ?>
   						<?php while ( have_posts() ) : the_post(); ?>

                        
   							<?php 
                        /*$categories = get_the_category($post->ID);
                        $tendencies_post = false;
                        foreach($categories as $cat){
                           if($cat->slug == "tendencias-tips"){
                              $tendencies_post = true;
                              break;
                           }
                        }
                        
                        if($tendencies_post){
   								get_template_part( 'content', 'excerpt-tendencias' );
                        } else {*/
   								get_template_part( 'content', 'excerpt' );
                           //}                        
                           
   							?>
                        

   						<?php endwhile; ?>
   						<?php wt_pagination(); ?>

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
