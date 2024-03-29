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

<script id="_webengage_script_tag" type="text/javascript">
var _weq = _weq || {};
_weq['webengage.licenseCode'] = '311c49dc';
_weq['webengage.widgetVersion'] = "4.0";

(function(d){
var _we = d.createElement('script');
_we.type = 'text/javascript';
_we.async = true;
_we.src = (d.location.protocol == 'https:' ? "//ssl.widgets.webengage.com" : "//cdn.widgets.webengage.com") +
"/js/widget/webengage-min-v-3.0.js";
var _sNode = d.getElementById('_webengage_script_tag');
_sNode.parentNode.insertBefore(_we, _sNode);
})(document);
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('.default_new li').on(
    {
      mouseover: function() {
        $(this).find('div').show();
        $(this).find('a:first').addClass('selecionado');
        },

      mouseleave: function() {
        $(this).find('div').hide();
        $(this).find('a:first').removeClass('selecionado');
      }
    }
  );
});
</script>

</head>
<body <?php body_class(); ?>>

 <div id="container" class="hfeed">	
	<div id="content-blog">	
      <header id="new_header">
        <div class="new_content">
          <div class="box_right">
            <p class="new_login">
              <a href="http://www.olook.com.br/entrar">Entre</a> ou 
              <a href="http://www.olook.com.br/quiz/new">Descubra seu estilo</a>
            </p> 
            <p class="new_login sac">
              SAC (11) 2626-3489
            </p>
            <ul>
              <li style="background-image: none;" class=""><a class="sacola" href="http://www.olook.com.br/sacola">Sacola</a>
              <li style="background-image: none;" class=""><a class="wishlist" href="http://www.olook.com.br/wishlist">Favoritos</a></li>
            </ul>  
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
                  <a href="http://www.olook.com.br/" class="home#index">Novidades</a>
                  <div id="mm_showroom" class="submenu">
                    <p>Confira o que há de mais novo na Olook.</p>
                    <a href="http://www.olook.com.br/novidades" class="link">CONFIRA!</a>
                  </div>
                </li>
                <li class="stylist">
                  <a href="http://www.olook.com.br/stylist-news" class="stylists selected">Blog</a>
                  <div id="mm_blog" class="submenu">
                    <span class="column">
                      <h5>OLOOK TIPS</h5>
                      <ul>
                        <li><a href="http://www.olook.com.br/stylist-news/category/olook-tips" class="sub_menu">Como usar</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/olook-tips/beleza" class="sub_menu">Beleza</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/decoracao-2" class="sub_menu">Decoração</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/olook-tips/life-style" class="sub_menu">Entretenimento</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/olook-tips/novidades-olook-tips" class="sub_menu">Novidades</a></li>
                      </ul>
                    </span>
                    <span class="column second">
                      <h5>MODA</h5>
                      <ul>
                        <li><a href="http://www.olook.com.br/stylist-news/category/olook-tips/tendencias-fashion-tips" class="sub_menu">Tendências</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/estilo-celebridades" class="sub_menu">Estilo das celebridades</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/radar-fashion" class="sub_menu">Radar fashion</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/fashion-week" class="sub_menu">Defiles</a></li>
                      </ul>
                    </span>
                    <span class="column last">
                      <h5>OLOOK</h5>
                      <ul>
                        <li><a href="http://www.olook.com.br/stylist-news/category/editoriais" class="sub_menu">Editoriais</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/looks" class="sub_menu">Looks</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/entrevistas" class="sub_menu">Entrevistas</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/category/amo" class="sub_menu">Amamos</a></li>
                        <li><a href="http://www.olook.com.br/stylist-news/olook-tv" class="sub_menu">Olook TV</a></li>
                      </ul>
                    </span>
                  </div>
                </li>            
                <li class="moments">
                  <a href="http://www.olook.com.br/colecoes" class="moments#index">Coleções</a>
                  <div id="mm_colecoes" class="submenu">
                    <span class="column first">
                      <h5>TENDÊNCIAS</h5>
                        <ul>
                          <li>
                            <a href="/colecoes/animal-print" class="sub_menu">Animal print</a>
                          </li>
                          <li>
                            <a href="/colecoes/azul-cobalto" class="sub_menu">Azul Cobalto </a>
                          </li>
                          <li>
                            <a href="/colecoes/bizantino" class="sub_menu">Bizantino </a>
                          </li>
                          <li>
                            <a href="/colecoes/grunge" class="sub_menu">Grunge</a>
                          </li>
                          <li>
                            <a href="/colecoes/tartans" class="sub_menu">Tartans</a>
                          </li>
                          <li>
                            <a href="/colecoes/total-couro" class="sub_menu">Couro</a>
                          </li>
                        </ul>
                    </span>
                    <span class="column second">
                      <h5>OCASIÕES</h5>
                      <ul>
                        <li><a href="http://www.olook.com.br/colecoes/casual" class="sub_menu">Casual</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/executivo" class="sub_menu">Trabalho</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/festa" class="sub_menu">Noite</a></li>
                      </ul>

                    </span>
                    <span class="column second">
                      <h5>Parcerias</h5>
                      <ul>
                        <li><a href="http://www.olook.com.br/colecoes/isabella-fiorentino" class="sub_menu">Isabella Fiorentino</a></li>
                      </ul>

                    </span>
                  </div>

                </li>
                <li class="categories">
                  <a href="http://www.olook.com.br/roupas" class="moments#clothes">Roupas</a>
                  <div class='submenu' id='mm_roupas'>
                    <span class='column first'>
                      <h5>ROUPAS</h5>
                      <ul>
                      <li>
                      <a href="http://www.olook.com.br/roupa/blazer" class="sub_menu">Blazer</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/blusa" class="sub_menu">Blusa</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/calca" class="sub_menu">Calça</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/camisa" class="sub_menu">Camisa</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/camiseta" class="sub_menu">Camiseta</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/casaco%20e%20jaqueta" class="sub_menu">Casaco e Jaqueta</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/colete" class="sub_menu">Colete</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/echarpe" class="sub_menu">Echarpe</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/calcinha-sutia" class="sub_menu">Lingerie</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/macacao" class="sub_menu">Macacão</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/regata" class="sub_menu">Regata</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/saia" class="sub_menu">Saia</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/shorts" class="sub_menu">Shorts</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/top%20cropped" class="sub_menu">Top Cropped</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/tricot" class="sub_menu">Tricot</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/vestido" class="sub_menu">Vestido</a>
                      </li>
                      </ul>
                    </span>
                    <span class='column second'>
                      <h5>MODA PRAIA</h5>
                      <ul>
                      <li>
                      <a href="http://www.olook.com.br/roupa/biquini%20moda%20praia" class="sub_menu">Biquíni</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/blusa%20moda%20praia" class="sub_menu">Blusa</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/calca%20moda%20praia" class="sub_menu">Calça</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/maio%20moda%20praia" class="sub_menu">Maiô</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/saia%20moda%20praia" class="sub_menu">Saia</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/roupa/vestido%20moda%20praia" class="sub_menu">Vestido</a>
                      </li>
                      </ul>
                    </span>
                    <span class='column second'>
                      <h5>
                        <a href="/curves">PLUS SIZE</a>
                      </h5>
                      <ul>
                        <li>
                          <a href="/curves/blazer" class="sub_menu">Blazer</a>
                        </li>
                        <li>
                          <a href="/curves/blusa" class="sub_menu">Blusa</a>
                        </li>
                        <li>
                          <a href="/curves/calca" class="sub_menu">Calça</a>
                        </li>
                        <li>
                          <a href="/curves/camisa" class="sub_menu">Camisa</a>
                        </li>
                        <li>
                          <a href="/curves/macacao" class="sub_menu">Macacão</a>
                        </li>
                        <li>
                          <a href="/curves/saia" class="sub_menu">Saia</a>
                        </li>
                        <li>
                          <a href="/curves/shorts" class="sub_menu">Shorts</a>
                        </li>
                        <li>
                          <a href="/curves/vestido" class="sub_menu">Vestido</a>
                        </li>
                      </ul>
                    </span>
                  </div>

                </li>
                <li class="categories">
                  <a href="http://www.olook.com.br/sapatos" class="moments#show#1">Sapatos</a>
                  <div class='submenu' id='mm_sapatos'>
                    <span class='column first'>
                      <h5>FLATS</h5>
                      <ul>
                        <li>
                        <a href="http://www.olook.com.br/sapato/alpargata" class="sub_menu">Alpargata</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/creeper" class="sub_menu">Creeper</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/mocassim" class="sub_menu">Mocassim</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/oxford" class="sub_menu">Oxford</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/rasteira" class="sub_menu">Rasteira</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/sapatilha" class="sub_menu">Sapatilha</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/slipper" class="sub_menu">Slipper</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/tenis" class="sub_menu">Tênis</a>
                        </li>
                      </ul>
                    </span>
                    <span class='column second'>
                      <h5>SALTOS</h5>
                      <ul>
                        <li>
                        <a href="http://www.olook.com.br/sapato/anabela" class="sub_menu">Anabela</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/ankle%20boot" class="sub_menu">Ankle Boot</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/boneca" class="sub_menu">Boneca</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/bota" class="sub_menu">Bota</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/peep%20toe" class="sub_menu">Peep Toe</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/sandalia" class="sub_menu">Sandália</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/scarpin" class="sub_menu">Scarpin</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/sneaker" class="sub_menu">Sneaker</a>
                        </li>
                      </ul>
                    </span>
                  </div>
                </li>
                <li class="categories">
                  <a href="http://www.olook.com.br/bolsas" class="moments#show#2">Bolsas</a>
                  <div class='submenu' id='mm_bolsas'>
                    <span class='column first'>
                      <ul>
                        <li>
                        <a href="http://www.olook.com.br/bolsa/bolsa" class="sub_menu">Bolsa</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/bolsa/bolsa%20grande" class="sub_menu">Bolsa Grande</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/bolsa/bolsa%20media" class="sub_menu">Bolsa Média</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/bolsa/bolsa%20pequena" class="sub_menu">Bolsa Pequena</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/bolsa/clutch" class="sub_menu">Clutch</a>
                        </li>
                      </ul>
                    </span>
                  </div>
                </li>
                <li class="categories">
                  <a href="http://www.olook.com.br/acessorios" class="moments#show#3">Acessórios</a>
                  <div class='submenu' id='mm_acessorios'>
                    <span class='column first'>
                      <ul>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/anel" class="sub_menu">Anel</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/bracelete" class="sub_menu">Bracelete</a>
                        </li>
                        <li>
                         <a href="http://www.olook.com.br/acessorio/brinco" class="sub_menu">Brinco</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/acessorio/carteira" class="sub_menu">Carteira</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/cinto" class="sub_menu">Cinto</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/colar" class="sub_menu">Colar</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/gargantilha" class="sub_menu">Gargantilha</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/joia" class="sub_menu">Jóia</a>
                        </li>
                        <li>
                         <a href="http://www.olook.com.br/acessorio/maxi%20brinco" class="sub_menu">Maxi Brinco</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/maxi%20colar" class="sub_menu">Maxi Colar</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/pulseira" class="sub_menu">Pulseira</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/tiara" class="sub_menu">Tiara</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/oculos%20de%20sol" class="sub_menu">Óculos de Sol</a>
                        </li>
                      </ul>
                    </span>
                  </div>
                </li>
                <li class="gift">
                  <a href="http://www.olook.com.br/presentes" class="gift">Presentes</a>
                  <div class='submenu' id='mm_presentes'>
                    <span class='column first'>
                      <ul>
                        <li>
                          <a href="/selections?preco=130-200&amp;lbl=ate-200" class="sub_menu">Até 200</a>
                        </li>
                      </ul>
                    </span>
                  </div>
                </li>
                <li class="brands"><a href="http://www.olook.com.br/marcas">Marcas</a><div class='submenu' id='mm_marcas'>
                  <span class='column first'>
                  <ul>
                    <li>
                      <a href="http://www.olook.com.br/marcas" class="sub_menu">Confira todas as marcas!'</a>
                    </li>
                  </ul>
                </span>
                </div>
                </li>
                <li class="olooklet" style="background-position: initial initial; background-repeat: initial initial;"><a href="https://www.olook.com.br/olooklet">Olooklet</a>
                  <div class='submenu' id='mm_olooklet'>
                    <ul style="margin-bottom: 0px !important">
                      <li>
                        <a href="https://www.olook.com.br/olooklet" class="sub_menu">Preços incríveis. Até 90% OFF!</a>
                      </li>
                    </ul>
                  </div>
                </li>
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
