<?php
/**
 * The template for displaying the featured category posts on homepage.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, does not display.
 *
 * @package  WellThemes
 * @file     feat-cat1.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 *
 */
?>
<?php
	$cat_id = "";
	$cat_id = wt_get_option('wt_feat_cat1');	//get category id
	$cat_name = get_cat_name($cat_id);			//get category name
	$cat_url = get_category_link($cat_id );		//get category url
	
	$args = array(
		'cat' => $cat_id,
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
		'posts_per_page' => 1
	);
?>

<section id="feat-cat1" class="feat-cat">

	<header class="cat-header">	
		<h3><a href="<?php echo esc_url( $cat_url ); ?>" ><?php echo $cat_name; ?></a></h3>	
	</header>	
	
		<?php $query = new WP_Query( $args ); ?>
			<?php if ( $query -> have_posts() ) : ?>
				<div class="one-half">
				<?php $i = 0 ; ?>
				<?php while ( $query -> have_posts() ) : $query -> the_post(); ?>						
					<article class="main-post">			
		
					<?php if ( has_post_thumbnail() ) {	
						$img = wp_get_attachment_image_src( get_post_thumbnail_id(  $post->ID ), "full" );
						$img_link = $img[0];
					?>
					<div class="thumb-wrap">
						<div class="thumb">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt-cat-img' ); ?></a>
						</div>
						<div class="overlay">
							<a class="img-link" rel="lightbox" href="<?php echo $img_link; ?>">View Image</a>
							<a class="post-link" href="<?php the_permalink() ?>">View Post</a>							
						</div>
					</div>
					<?php } ?>
				
				<div class="post-wrap">
					<header class="entry-header">
						<?php wellthemes_first_post_tag_link(); ?>					
					</header>
					
					<p>
						<?php 
							//display only first 150 characters in the excerpt.								
							$excerpt = get_the_excerpt();																
							echo mb_substr($excerpt,0, 150);									
							if (strlen($excerpt) > 149){ 
								echo '...'; 
							} 
						?>
					</p>
               <a href="<?php the_permalink() ?>" class="see-more">Leia tudo</a>	
				</div>	
		</article> <!-- main-post -->
		
			<?php endwhile; ?>
			</div><!-- /one-half -->	
		<?php endif; ?>	
	<?php wp_reset_query();		//reset the query ?>	
	
	<?php
		$args = array(
		'cat' => $cat_id,
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
		'posts_per_page' => 4,
		 'offset' => 1
		);	?>
	
	<?php $query = new WP_Query( $args ); ?>
			<?php if ( $query -> have_posts() ) : ?>
				<div class="slide-cat1 one-half last-col">
					<ul class="slides">
				<?php $i = 0 ; ?>
				<?php while ( $query -> have_posts() ) : $query -> the_post(); ?>					
						<?php
							echo ($i % 4 === 0) ? "<li>" : null;
							$i++;
						?>
						<article class="item-post">
						<?php if ( has_post_thumbnail() ) {	
							$img = wp_get_attachment_image_src( get_post_thumbnail_id(  $post->ID ), "full" );
							$img_link = $img[0];
							?>
							<div class="thumb-wrap">
								<div class="thumb">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt-medium-thumb' ); ?></a>
								</div>
								
								<div class="overlay">
									<a class="img-link" rel="lightbox" href="<?php echo $img_link; ?>">View Image</a>
								</div>
							</div>
					
						<?php } ?>
						
						<div class="post-wrap">
							<header class="entry-header">
								<a href="<?php the_permalink() ?>">
                           <h4>									
										<?php 
											//display only first 45 characters in the title.	
											$short_title = mb_substr(the_title('','',FALSE),0, 45);
											echo $short_title; 
											if (strlen($short_title) > 44){ 
												echo '...'; 
											} 
										?>	
									</h4>											
							
         					   <p>
            						<?php 
            							$excerpt = get_the_excerpt();																
            							echo mb_substr($excerpt,0, 45);									
            							if (strlen($excerpt) > 44){ 
            								echo '...'; 
            							} 
            						?>
         					   </p>
                        </a>
                     </header>   
						</div>
					</article>
				<?php echo ($i % 4 === 0) ? "</li>" : null;	 ?>
			<?php endwhile; ?>
			<?php echo ($i % 4 !== 0) ? "</li>" : null;	 ?>
			</ul>
			</div><!-- /one-half -->
		<?php endif; ?>	
	<?php wp_reset_query();		//reset the query ?>	
</section><!-- /category -->