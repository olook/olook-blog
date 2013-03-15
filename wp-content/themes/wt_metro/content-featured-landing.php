<?php
	global $cat;
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('wt-cat-img'); ?></a>
	
	<div class="post-right">
	
		<header class="entry-header">
			<h3 class="entry-title">				
				<a href="<?php the_permalink() ?>">
					<?php 
						//display only first 70 characters in the title.	
						$short_title = mb_substr(the_title('','',FALSE),0, 70);
						echo $short_title; 
						if (strlen($short_title) > 69){ 
							echo '...'; 
						} 
					?>	
				</a>
									
			</h3>
		
		
		</header><!-- /entry-header -->

		<div class="entry-content">
			<?php 
				//display only first 200 characters in the slide description.								
				$excerpt = get_the_excerpt();																
				echo mb_substr($excerpt,0, 199);									
				if (strlen($excerpt) > 200){ 
					echo '...'; 
				} 
			?>
		</div><!-- /entry-content -->

		<footer class="entry-footer">

		</footer><!-- /entry-footer -->
		
	</div> <!-- /post-right -->
	
</article><!-- /post-<?php the_ID(); ?> -->
       <?php endwhile; ?>           
     <?php endif; ?> 
   <?php wp_reset_query();   //reset the query ?>    
