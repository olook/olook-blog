<?php
   global $cfs;
	global $cat;
   global $featured_post_id;
  $cat_id = "";
  $cat_id = wt_get_option('wt_landing_description');  //get category id

  $args = array(
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,    
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => array( $cat, $cat_id ),
            'operator' => 'AND'
        )
    )  	
  );
?>

<?php $query = new WP_Query( $args ); ?>
  <?php if ( $query -> have_posts() ) : ?>
           <?php $i = 0 ; ?>
           <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>           

<div id="post-<?php the_ID(); ?>" class="destaque-landing">
   <?php $featured_post_id = get_the_ID();?>
	<?php if ( has_post_thumbnail()) { ?>
	   <a href="<?php the_permalink() ?>" class="link-post"><?php the_post_thumbnail( 'wt-home-tv' ); ?></a>
	<?php } ?>
	<div class="post-right">
	
		<header class="entry-header">
			<h3 class="entry-title">				
				<?php 
					//display only first 70 characters in the title.	
					$short_title = mb_substr(the_title('','',FALSE),0, 70);
					echo $short_title; 
					if (strlen($short_title) > 69){ 
						echo '...'; 
					} 
				?>	
			</h3>
		</header><!-- /entry-header -->
      
		<div class="entry-content">
         <p>
			<?php 
				//display only first 300 characters in the slide description.								
				$excerpt = get_the_excerpt();																
				echo mb_substr($excerpt,0, 300);									
				if (strlen($excerpt) > 299){ 
					echo '...'; 
				} 
			?>
         </p>
         <a class="see-more" href="<?php the_permalink() ?>">Leia tudo</a>
		</div><!-- /entry-content -->

		
	</div> <!-- /post-right -->
	
</div><!-- /post-<?php the_ID(); ?> -->
       <?php endwhile; ?>           
     <?php endif; ?> 
   <?php wp_reset_query();   //reset the query ?>    
