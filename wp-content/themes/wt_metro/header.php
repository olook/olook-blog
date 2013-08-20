<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package  WellThemes
 * @file     header.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<script type="text/javascript">
//<![CDATA[[
$SA = {s:18120, asynch: 1};
(function() {
   var sa = document.createElement("script");
   sa.type = "text/javascript";
   sa.async = true;
   sa.src = ("https:" == document.location.protocol ? "https://" + $SA.s + ".sa" : "http://" + $SA.s + ".a") + ".siteapps.com/" + $SA.s + ".js";
   var t = document.getElementsByTagName("script")[0];
   t.parentNode.insertBefore(sa, t);
})();
//]]>
</script>

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'wellthemes' ), max( $paged, $page ) );

	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">
	var themeDir = "<?php echo get_template_directory_uri(); ?>";
</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body <?php body_class(); ?>>

 <div id="container" class="hfeed">	
	<div id="content-blog">	
      <header id="new_header">
        <div class="new_content">
          <div class="box_left">
            <p>SAC (11) 2626-3489 | <a class="contact" href="mailto:falecom@olook.com.br">falecom@olook.com.br</a></p>
            <ul class="social_icons">
              <li><a href="http://facebook.com/olook" class="social_facebook" target="_blank" title="Acompanhe pelo Facebook">Acompanhe pelo Facebook</a></li>
              <li><a href="http://twitter.com/olook" class="social_twitter" target="_blank" title="Acompanhe pelo Twitter">Acompanhe pelo Twitter</a></li>
              <li><a href="http://blog.olook.com.br/feed/" class="social_rss" target="_blank" title="Acompanhe por RSS">Acompanhe por RSS</a></li>
              <li><a href="http://instagram.com/olook" class="social_instagram" target="_blank" title="Acompanhe pelo Instagram">Acompanhe pelo Instagram</a></li>
            </ul>
            <p><a href="http://www.olook.com.br/membro/ganhe-creditos" class="invite">Ganhe créditos!</a></p>
          </div>
          <div class="box_right">
            <p class="new_login">
              <a href="http://www.olook.com.br/entrar">Entre</a> ou 
              <a href="http://www.olook.com.br/quiz/new">Descubra seu estilo</a>
            </p>   
            <p class="new_sacola"><a href="http://www.olook.com.br/sacola" class="cart">MINHA SACOLA</a></p>
          </div>
          <div class="olook_logo">
              <h1><a href="http://www.olook.com.br">Olook</a></h1>
          </div>
        </div>
      </header>

      <div id="wrapper_new_menu">
        <nav class="menu_new">
          <div class="content_new">
            <ul class="default_new">
                <li class="showroom">
                  <a href="http://www.olook.com.br/" class="home#index">Minha Vitrine</a>
                </li>
                <li class="stylist">
                  <a href="http://www.olook.com.br/stylist-news" class="stylists selected">Stylist News</a>
                </li>            
                <li class="moments">
                  <a href="http://www.olook.com.br/colecoes" class="moments#index">Coleções</a>
                </li>
                <li class="categories">
                  <a href="http://www.olook.com.br/roupas" class="moments#clothes">Roupas</a>
                </li>
                <li class="categories">
                  <a href="http://www.olook.com.br/sapatos" class="moments#show#1">Sapatos</a>
                </li>
                <li class="categories">
                  <a href="http://www.olook.com.br/bolsas" class="moments#show#2">Bolsas</a>
                </li>
                <li class="categories">
                  <a href="http://www.olook.com.br/acessorios" class="moments#show#3">Acessórios</a>
                </li>
                <li class="gift">
                  <a href="http://www.olook.com.br/presentes" class="gift">Presentes</a>
                </li>
                <li class="gift">
                  <a href="http://www.olook.com.br/marcas" class="gift">Marcas</a>
                </li>
                <li style="background-image: none; background-position: initial initial; background-repeat: initial initial;"><a href="http://www.olook.com.br/olooklet/36">Olooklet</a>
                <li id="bar"></li>
            </ul>
          </div>
        </nav>
      </div>
			
		

		
		<div id="main-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '0', 'fallback_cb' => 'wellthemes_main_menu_fallback',) ); ?>	
		</div>
		
		<!--div class="social">
			<ul>
				<?php if (wt_get_option( 'wt_twitter_url' )) { ?>
					<li><a class="twitter" href="<?php echo wt_get_option( 'wt_twitter_url' ); ?>">Twitter</a></li>
				<?php } ?>
					
				<?php if (wt_get_option( 'wt_fb_url' )) { ?>
					<li><a class="fb" href="<?php echo wt_get_option( 'wt_fb_url' ); ?>">Facebook</a></li>
				<?php } ?>
					
				<?php if (wt_get_option( 'wt_gplus_url' )) { ?>
					<li><a class="gplus" href="<?php echo wt_get_option( 'wt_gplus_url' ); ?>">Google+</a></li>
				<?php } ?>
					
				<?php if (wt_get_option( 'wt_rss_url' )) { ?>
					<li><a class="rss" href="<?php echo wt_get_option( 'wt_rss_url' ); ?>">RSS</a></li>
				<?php } else { ?>
					<li><a class="rss" href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
				<?php } ?>					
			</ul>
		</div>
		
		
	   </div--> 		
      


	<div id="main">
