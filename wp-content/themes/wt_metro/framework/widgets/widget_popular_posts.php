<?php
/**
 * Plugin Name: Well Themes: Popular Posts
 * Plugin URI: http://wellthemes.com/
 * Description: This widhet displays the most popular posts with numbers in the sidebar.
 * Version: 1.0
 * Author: Well Themes Team
 * Author URI: http://wellthemes.com/
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'wellthemes_popular_posts_widgets' );

function wellthemes_popular_posts_widgets() {
	register_widget( 'wellthemes_popular_posts_widget' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class wellthemes_popular_posts_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function wellthemes_popular_posts_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget_popular_posts', 'description' => __('Displays the most popular posts with numbers in the sidebar.', 'wellthemes') );

		/* Create the widget. */
		$this->WP_Widget( 'wellthemes_popular_posts_widget', __('Well Themes: Popular Posts', 'wellthemes'), $widget_ops);
	}

	/**
	 * display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		
		extract( $args );
	    $title = apply_filters('widget_title', $instance['title'] );
		echo $before_widget;
		if ( $title )
		echo $before_title . $title . $after_title;
  
       ?>
       <?php
	   $entries_display = $instance['entries_display'];
	   if(empty($entries_display)){ $entries_display = '5'; }


			global $wpdb;
			$views_options = get_option('views_options');
			$where = '';
			$temp = '';
			$output = '';
			if(!empty($mode) && $mode != 'both') {
				$where = "post_type = 'post'";
			} else {
				$where = '1=1';
			}

			$most_viewed = $wpdb->get_results("SELECT DISTINCT $wpdb->posts.*, (meta_value+0) AS views FROM $wpdb->posts LEFT JOIN $wpdb->postmeta ON $wpdb->postmeta.post_id = $wpdb->posts.ID WHERE post_date < '".current_time('mysql')."' AND $where AND post_status = 'publish' AND meta_key = 'views' AND post_password = '' ORDER BY views DESC LIMIT 5");

 		// 	$display_category = $instance['display_category'];

  //       $args = array(
		// 	'cat' => $display_category,
		// 	'post_type' => 'post',
		// 	'ignore_sticky_posts' => 1,
		// 	'posts_per_page' => $entries_display,
		// 	'orderby' => 'views'			
		// );
		$i = 0;$j=1;
		$popular_posts = new WP_Query( $args );
	//	while($popular_posts->have_posts()): $popular_posts->the_post();
		if($most_viewed) {
			foreach ($most_viewed as $inner_post) {
		    $i++;
		   
         
      $categories = get_the_category($inner_post->ID);
      $tendencies_post = false;
      foreach($categories as $cat){
         if($cat->slug == "editoriais" || $cat->slug == "especiais"){
            $tendencies_post = true;
            break;
         }
      }
  ?>
		
		<div class="item-post <?php echo $class; ?>">		
			<div class="post-number"><?php echo $i; ?></div>
			<div class="post-right">
				<h4>
					<a href="<?php echo get_permalink($inner_post); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'wellthemes'), get_the_title($inner_post,'', '', FALSE)); ?>" onclick="_gaq.push(['_trackEvent, 'Home-Blog', 'Mais-Vistos-<?php echo $j; ?>']);">
						<strong>
              <?php 
  							//display only first 50 characters in the title.	
  							$short_title = mb_substr(get_the_title($inner_post,'', '', FALSE),0, 50);
  							echo $short_title;
  							if (strlen($short_title) > 49){ 
  								echo '...'; 
  							} 
  						?> 
            </strong><br />
            <span>
						  <?php 
                if($tendencies_post){
                   $resumo = mb_substr(get_the_excerpt_post($inner_post),0, 42);
                   echo $resumo;
       						  if (strlen($resumo) > 41){ 
       								echo '...'; 
       						  }
                }else{
     							//display only first 42 characters in the title.	
     							$subtitle = mb_substr(strip_tags(get_the_subtitle($inner_post,'', '', FALSE)),0, 42);
     							echo $subtitle; 
     							if (strlen($subtitle) > 41){ 
     								echo '...'; 
     							}
                }    
						  ?>
            </span>						
					</a>
				</h4>
			</div>				
      
		</div><!-- /item-post -->
       <?php $j++;
       } 
     }
     //endwhile; ?>
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
		$defaults = array('title' => 'Popular Posts', 'entries_display' => 5, 'display_category' => '');
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
