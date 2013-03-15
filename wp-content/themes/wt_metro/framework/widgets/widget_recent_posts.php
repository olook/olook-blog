<?php
/**
 * Plugin Name: Well Themes: Recent Posts
 * Plugin URI: http://wellthemes.com/
 * Description: This widhet displays the most recent posts with thumbnails in the sidebar.
 * Version: 1.0
 * Author: Well Themes Team
 * Author URI: http://wellthemes.com/
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'wellthemes_recent_posts_widgets' );

function wellthemes_recent_posts_widgets() {
	register_widget( 'wellthemes_recent_posts_widget' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class wellthemes_recent_posts_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function wellthemes_recent_posts_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget_tile_posts', 'description' => __('Displays the recent posts with thumbnails. Suitable for sidebar only.', 'wellthemes') );

		/* Create the widget. */
		$this->WP_Widget( 'wellthemes_recent_posts_widget', __('Well Themes: Recent Posts', 'wellthemes'), $widget_ops);
	}

	/**
	 *display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters('widget_title', $instance['title'] );
		echo $before_widget;
		
		if ( $title )
		echo $before_title . $title . $after_title;
		
		if(empty($entries_display)){ $entries_display = '5'; }
		// $display_category = $instance['display_category'];
	  $cat_id = "";
	  $cat_id = wt_get_option('wt_feat_recent_products');  //get category id
		$latest_posts = new WP_Query();
    $latest_posts->query('ignore_sticky_posts=1&showposts='.$entries_display.'&cat='.$cat_id/*$display_category*/.'');
		$i = 0; 
		$data_delay = "3500"; ?>

		
		<div id="widget-posts-tiles">
			<?php while ($latest_posts->have_posts()) : $latest_posts->the_post();   ?>
				<?php if ( has_post_thumbnail() ) {	?>
					<?php
						global $post;  						 

						$args = array(
							'post_parent'	=> $post->ID, 
							'post_type' => 'attachment', 
							'post_mime_type' => 'image', 
							'orderby' => 'menu_order', 
							'order' => 'ASC', 
							'numberposts' => 1 );
										
						$images = get_posts($args);
                  
						?>											
							<div class="wide-slide">
                        <?php the_post_thumbnail( 'wt-tile-large' ); ?>
                        
                        <div class="excerpt">
                           <span>   
   									<?php 
            							//display only first 50 characters in the title.	
            							$subtitle = mb_substr(strip_tags(get_the_subtitle($post,'', '', FALSE)),0, 50);
            							echo $subtitle; 
            							if (strlen($subtitle) > 49){ 
            								echo '...'; 
            							} 
            						?>
                           </span>
                           <a class="see-more" href="<?php the_permalink() ?>" rel="bookmark">Leia tudo</a>
                        </div>
                        
                        <span class="tile-title">
									<?php 
										//display only first 60 characters in the title.	
										$short_title = mb_substr(the_title('','',FALSE),0, 60);
										echo $short_title; 
										if (strlen($short_title) > 59){ 
											echo '...'; 
										} 
									?>
                        </span>
							</div>
						
						<?php } ?>
					<?php endwhile; ?>	
				</div><!-- /tiles -->
	   <?php
		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {
		$defaults = array('title' => 'Recent Posts', 'entries_display' => 5, 'display_category' => '');
		$instance = wp_parse_args((array) $instance, $defaults);
	?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'wellthemes'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'entries_display' ); ?>"><?php _e('How many entries to display?', 'wellthemes'); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('entries_display'); ?>" name="<?php echo $this->get_field_name('entries_display'); ?>" value="<?php echo $instance['entries_display']; ?>" style="width:100%;" /></p>
 
		<p><label for="<?php echo $this->get_field_id( 'display_category' ); ?>"><?php _e('Display specific categories? Enter category ids separated with a comma (e.g. - 1, 3, 8)', 'wellthemes'); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('display_category'); ?>" name="<?php echo $this->get_field_name('display_category'); ?>" value="<?php echo $instance['display_category']; ?>" style="width:100%;" /></p>
	<?php
	}
}
?>