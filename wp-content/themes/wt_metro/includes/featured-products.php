<?php
/**
 * The template for displaying the featured category posts on homepage.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, does not display.
 *
 * @package  WellThemes
 * @file     feat-cat1.php
 * @author   Well Themes Team
 * @link   http://wellthemes.com
 *
 */
?>
<?php
  $cat_id = "";
  $cat_id = wt_get_option('wt_feat_cat_prod');  //get category id
  $cat_name = get_cat_name($cat_id);      //get category name
  $cat_url = get_category_link($cat_id );   //get category url
  
  $args = array(
    'cat' => $cat_id,
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => 3
  );
?>
<div class="featured-posts">
   <h3>CONFIRA A SELEÇÃO DAS NOSSAS STYLISTS</h3>   
   <?php $query = new WP_Query( $args ); ?>
     <?php if ( $query -> have_posts() ) : ?>
           <?php $i = 1; ?>
           <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>           
             <article class="main-post">     
    
             <?php if ( has_post_thumbnail() ) { 
               $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
               $img_link = $img[0];
             ?>
          
             <div class="thumb-wrap">
               <div class="thumb">
                 <a class="amo-<?php echo $i; ?>" href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt-stylist-choices' ); ?></a>
                 <!--p><?php echo $img_link = $img[0]; ?> </p-->
               </div>
             </div>
             <p>
                <a class="amo-<?php echo $i; ?>" href="<?php the_permalink() ?>">
					<?php 
						$short_title = mb_substr(the_title('','',FALSE),0, 45);
						echo $short_title; 
					?>	
               <br/>
               <strong>
   					<?php 
   						$subtitle = strip_tags(mb_substr(get_the_subtitle($post,'', '', FALSE),0, 50));
   						echo $subtitle; 
   						if (strlen($subtitle) > 49){ 
   							echo '...'; 
   						} 
   					?>
               </strong>
               </a>
             </p>            
             <?php } ?>
          </article> 
          <?php $i++;?>
       <?php endwhile; ?>           
     <?php endif; ?> 
   <?php wp_reset_query();   //reset the query ?>    
</div>
