<?php
/**
 * Plugin Name: Well Themes: Subscribers Counter
 * Plugin URI: http://wellthemes.com
 * Description: Displays Facebook and Twitter subscribers number.
 * Version: 1.0
 * Author: Well Themes Team
 * Author URI: http://wellthemes.com
 *
 */
 
 /**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init','wellthemes_social_subscribers_widgets');

function wellthemes_social_subscribers_widgets() {
	register_widget('wellthemes_social_subscribers_widget');
	}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class wellthemes_social_subscribers_widget extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function wellthemes_social_subscribers_widget() {
		
		/* Widget settings. */
		$widget_ops = array('classname' => 'widget_social_counter','description' => __('Displays Facebook and Twitter subscribers number.', 'wellthemes'));
		
		/* Create the widget. */
		$this->WP_Widget('wellthemes_social_subscribers_widget',__('Well Themes: Subscribers Counter', 'wellthemes'),$widget_ops);

	}
	
	/**
	 * display the widget on the screen.
	 */	
	function widget( $args, $instance ) {
		extract( $args );
		//user settings.
		$wt_twitter_id = $instance['wt_twitter_id'];
		$wt_facebook_id = $instance['wt_facebook_id'];	

		echo $before_widget;

		//facebook
		if (isset($wt_facebook_id)){
			$interval = 3600;
						
			if($_SERVER['REQUEST_TIME'] > get_option('wellthemes_facebook_cache_time')) {
				
				$api = wp_remote_get('http://graph.facebook.com/' . $wt_facebook_id);
				$json = json_decode($api['body']);
				
				update_option('wellthemes_facebook_cache_time', $_SERVER['REQUEST_TIME'] + $interval);
				update_option('wellthemes_facebook_followers', $json->likes);
				update_option('wellthemes_facebook_link', $json->link);
			}
		}
	
		//twitter
		if (isset($wt_twitter_id)){
			$interval = 3600;
			
			if($_SERVER['REQUEST_TIME'] > get_option('wellthemes_twitter_cache_time')) {
				$api = wp_remote_get('http://api.twitter.com/1/statuses/user_timeline.json?screen_name='.$wt_twitter_id);
				$json = json_decode($api['body']);
				
				if($api['headers']['x-ratelimit-remaining'] >= 1) {
					update_option('wellthemes_twitter_cache_time', $_SERVER['REQUEST_TIME'] + $interval);
					update_option('wellthemes_twitter_followers', $json[0]->user->followers_count);
				}			
			}	 
		}
	
		?>
		<div class="wrap">
		
			<div class="facebook">
				<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/fb32_1.png"></div>
				<div class="bottom">				
					<div class="count"><a target="_blank" href="<?php echo get_option('wellthemes_facebook_link'); ?>"><?php echo get_option('wellthemes_facebook_followers'); ?></a></div>
					<div class="text"><?php _e('Likes', 'wellthemes');?></div>				
				</div>
			</div><!-- /facebook -->
		
			<div class="twitter">
				<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter32_1.png"></div>
				<div class="bottom">
					<div class="count"><a target="_blank" href="http://twitter.com/<?php echo $wt_twitter_id; ?>"><?php echo get_option('wellthemes_twitter_followers'); ?></a></div>
					<div class="text"><?php _e('Followers', 'wellthemes');?></div>
				</div>
			</div> <!-- /twitter -->	
				
		</div><!-- /wrap -->			
		<?php 
		echo $after_widget;
	}
	
	/**
	 * update widget settings
	 */
	function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['wt_twitter_id'] = $new_instance['wt_twitter_id'];
			$instance['wt_facebook_id'] = $new_instance['wt_facebook_id'];
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	 
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
			'wt_twitter_id' => '',
			'wt_facebook_id' => ''
 			);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
			
		<p>
		<label for="<?php echo $this->get_field_id( 'wt_twitter_id' ); ?>"><?php _e('Twitter Name', 'wellthemes'); ?></label>
		<input id="<?php echo $this->get_field_id( 'wt_twitter_id' ); ?>" name="<?php echo $this->get_field_name( 'wt_twitter_id' ); ?>" value="<?php echo $instance['wt_twitter_id']; ?>" class="widefat" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'wt_facebook_id' ); ?>"><?php _e('Facebook Page ID:', 'wellthemes'); ?></label>
		<input id="<?php echo $this->get_field_id( 'wt_facebook_id' ); ?>" name="<?php echo $this->get_field_name( 'wt_facebook_id' ); ?>" value="<?php echo $instance['wt_facebook_id']; ?>" class="widefat" />
		</p>


	<?php 
	}
} //end class