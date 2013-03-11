<?php
/*
Plugin Name: YouList - YouTube playlist shortcode 
Plugin URI:  http://wordpress.org/extend/plugins/youlist/
Description: Shortcode for embedding a Youtube playlist or multiple Youtube videos with a single Youtube player
Version:     1.0.6
Author:      Birgir Erlendsson
Author URI:  http://profiles.wordpress.org/birgire
License:     GPLv2
*/

/**
 * Define the [youlist] shortcode 
 *
 * @param Array 
 * @return String
 */
function youlist_func( $atts ) {
	extract( shortcode_atts( array(
		'vid' => '',			// string (Comma seperated Youtube Videos ID list) 
		'pid' => '',			// string (Youtube playlist ID)
		'randompid' => '',		// string (display a random Youtube playlist ID from a comma seperated list)
		'uid' => '',			// string (Youtube user ID)
		'search' => '',			// string (search)
		'width' => '640',		// integer (in pixels)
		'height' => '480',		// integer (in pixels)
		'class' => 'youlist',		// string (css class name)
		'theme' => 'dark',		// [dark|light]
		'listtype' => 'user_uploads',	// [user_uploads|user_favorites|playlist|search]
		'modestbranding' => '1',	// [0|1]
		'showinfo' => '1',		// [0|1]
		'controls' => '1',		// [0|1|2]
		'autoplay' => '0',		// [0|1]
		'autohide' => '2',		// [0|1|2]
		'disablekb' => '0',		// [0|1]
		'color' => 'red',		// [red|white]
		'fs' => '1',			// [0|1] 
		'rel' => '1',			// [0|1] 
		'start' => '0',			// positive integer 
		'loop' => '0',			// [0|1]
		'iv_load_policy' => '1',	// [1|3]
		'version' => '3',		// [2|3]
		'style' => '',			// custom iframe css style
		'vq' => '',			// [small|medium|large|hd720|hd1024] (play videos in a specific quality)
		'wmode' => '',			// [transparent|opaque|window] (Using Window Mode (wmode) values)
		'parameters' => '',		// string &param1=value1&param2=value2 (custom parameters)
		'nocookie' => '0',		// [0|1] (cookieless)
		'https' => '0',			// [0|1] (https enabled)
	), $atts ) );

	$protocol="http://";
	$domain="www.youtube.com";

	// Validate input attributes
	$width=(int)$width;
	$height=(int)$height;
	
	$modestbranding=(int)$modestbranding;
	$showinfo=(int)$showinfo;
	$controls=(int)$controls;
	$fs=(int)$fs;
	$rel=(int)$rel;
	$start=(int)$start;
	$loop=(int)$loop;
	$autohide=(int)$autohide;
	$autoplay=(int)$autoplay;
	$disablekb=(int)$disablekb;
	$iv_load_policy=(int)$iv_load_policy;
	$version=(int)$version;
	$theme=esc_attr($theme);
	
	$vid=esc_attr($vid);
	$pid=esc_attr($pid);
	$randompid=esc_attr($randompid);
	$color=esc_attr($color);
	$uid=esc_attr($uid);
	$search=esc_attr($search);
	$listtype=esc_attr($listtype);
	$vq=esc_attr($vq);
	$wmode=esc_attr($wmode);
	$nocookie=esc_attr($nocookie);
	$https=esc_attr($https);
	$parameters=esc_attr($parameters);
	$class=esc_attr($class);
	$style=esc_attr($style);		

	// format attributes
	$vid = str_replace(" ","",$vid);
	$pid = str_replace(" ","",$pid);
	$randompid = str_replace(" ","",$randompid);
	$uid = str_replace(" ","",$uid);

	//construct the common get-query
	$query="";
	$query.="&#038;modestbranding={$modestbranding}";
	$query.="&#038;showinfo={$showinfo}";
	$query.="&#038;theme={$theme}";
	$query.="&#038;controls={$controls}";
	$query.="&#038;color={$color}";
	$query.="&#038;rel={$rel}";
	$query.="&#038;start={$start}";
	$query.="&#038;loop={$loop}";
	$query.="&#038;iv_load_policy={$iv_load_policy}";
	$query.="&#038;fs={$fs}";
	$query.="&#038;disablekb={$disablekb}";
	$query.="&#038;autohide={$autohide}";
	$query.="&#038;autoplay={$autoplay}";

	// check if user wants to style the iframe
	if(strlen($style)>0){
		$styling="{$style}";
	}else{
		$styling="width:{$width}px;height:{$height}px;";
	}

	// check version
	if(strlen($version)>0){
		$query.="&#038;version={$version}";
	}

	// check if secure
	if($https=="1"){
		$protocol="https://";	
	}

	// check if cookieless
	if($nocookie=="1"){
		$domain="www.youtube-nocookie.com";	
	}

	// check if there are extra parameters
	if(strlen($parameters)>0){
		$query.=$parameters;
	}

	// check if wmode is on
	// 
	if(strlen($wmode)>0){
		$query.="&#038;wmode={$wmode}";
	}

	// check if vq is on
	if(strlen($vq)>0){
		$query.="&#038;vq={$vq}";
	}

	//
	// Are we dealing with:
	//
	
	// - random playlist
	if(strlen($randompid)>0){
		$random_array=explode(",",$randompid);
		$random_index=rand(0,count($random_array)-1);
		if(isset($random_array[$random_index])){
			$pid=$random_array[$random_index];
		}
	}
	
	// - playlist
	if(strlen($pid)>0){
		$src="{$protocol}{$domain}/embed/?listType=playlist&list={$pid}{$query}";
	// - user uploads list:
	}elseif(strlen($uid)>0){
		$src="{$protocol}{$domain}/embed/?listType={$listtype}&list={$uid}{$query}";
	// - search list:
	}elseif(strlen($search)>0){
		$src="{$protocol}{$domain}/embed/?listType=search&list={$search}{$query}";
	// - custom videos
	}else{
		$a=explode(",",$vid);
		$c=count($a);
		if($c==1){		
			$src="{$protocol}{$domain}/embed/{$vid}?{$query}";
		}elseif($c>1){
			$first=$a[0];
			array_shift($a);
			$other=implode(",",$a);
			$src="{$protocol}{$domain}/embed/{$first}?playlist={$other}{$query}";
		}
	}

	// apply filters:
	$class=apply_filters( 'youlist_class', $class );
	$styling=apply_filters( 'youlist_style', $styling );
	$src=apply_filters( 'youlist_src', $src );
	
	// output with filter
	$output="<iframe class=\"{$class}\" style=\"{$styling}\" src=\"{$src}\"></iframe>";
	$output = apply_filters( 'youlist_output', $output ); 
		
	return $output;
}

// Use the shortcode in text-widgets:
if ( !has_filter( 'widget_text', 'do_shortcode' ) ){
        add_filter('widget_text', 'do_shortcode');
}

// 10, 9, ignition sequence start, 6, 5, 4, 3, 2, 1, zero
add_shortcode( 'youlist', 'youlist_func' );
// All engines running. Liftoff! We have a liftoff!
