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
 global $cfs;
?>
<?php
  $cat_id = "";
  $cat_id = wt_get_option('wt_look_inspiracao');  //get category id
  $cat_name = get_cat_name($cat_id);      //get category name
  $cat_url = get_category_link($cat_id );   //get category url
  
  $args = array(
    'cat' => $cat_id,
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => 1
  );
?>

<?php $query = new WP_Query( $args ); ?>
  <?php if ( $query -> have_posts() ) : ?>
        <?php $i = 0 ; ?>
        <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>           
          <article class="main-post">     
    
          <?php if ( has_post_thumbnail() ) { 
            $img = wp_get_attachment_image_src( get_post_thumbnail_id(  $post->ID ), "full" );
            $img_link = $img[0];
          ?>
          <?php } ?>
          <aside class="look-inspiracao">
             <div class="thumb-wrap">
               <div class="thumb">
                 <a class="inspiracao-look" href="<?php the_permalink() ?>"><img src="<?php echo $cfs->get('look_inspiracao'); ?>" /></a>
               </div>
             </div>

             <p>
               <a class="inspiracao-look" href="<?php the_permalink() ?>">
               <?php 
                 //display only first 150 characters in the excerpt.               
                 $excerpt = get_the_excerpt();                               
                 echo mb_substr($excerpt,0, 65);   
                 if (strlen($excerpt) > 64){ 
                   echo '...'; 
                 } 
               ?>
               </a>
             </p>
             <a href="<?php the_permalink() ?>" class="see-more inspiracao-look">Inspire-se com este look!</a>
          </aside>
    <?php endwhile; ?>           
  <?php endif; ?>
<?php wp_reset_query();   //reset the query ?>    
