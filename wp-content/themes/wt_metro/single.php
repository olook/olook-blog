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
<?php get_header(); 

$categories = get_the_category($post->ID);
$tendencies_post = false;
foreach($categories as $cat){
   if($cat->slug == "editoriais" || $cat->slug == "especiais"){
      $tendencies_post = true;
      break;
   }
}
?>

<section id="primary">
	<div id="content" role="main" class="<?php if($tendencies_post){echo 'especiais';} ?>">

		<?php while ( have_posts() ) : the_post(); ?>

         <?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>


		
	</div><!-- /content -->
</section><!-- /primary -->
<?php 


if(!$tendencies_post){
   get_sidebar('left'); 
}                        
      
?>

<?php get_footer(); ?>