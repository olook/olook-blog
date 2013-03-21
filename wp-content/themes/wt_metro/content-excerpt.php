<?php
/**
 * The template for displaying content in the archive and search results template
 *
 * @package  WellThemes
 * @file     content-excerpt.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
global $cfs;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
   <a href="<?php the_permalink() ?>" class="landing-photo"><img src="<?php echo $cfs->get('landing_photo'); ?>" /></a>

	<div class="post-excerpt">
      <div class="tag-look">
         <p class="tag-link"><span class="tag-esquerda"><?php echo $cfs->get('tag_esquerda'); ?></span><span class="tag-direita"><?php echo $cfs->get('tag_direita'); ?></span></p>
      </div>
		<div class="entry-content">
			<p><a href="<?php the_permalink() ?>">
            <?php 
				//display only first 70 characters in the slide description.								
				$excerpt = strip_tags(get_the_subtitle($post,'', '', FALSE));
				echo mb_substr($excerpt,0, 85);									
				if (strlen($excerpt) > 84){ 
					echo '...'; 
				} 
			   ?>
         </a></p>
		</div><!-- /entry-content -->

		
	</div> <!-- /post-excerpt -->
	
</article><!-- /post-<?php the_ID(); ?> -->
