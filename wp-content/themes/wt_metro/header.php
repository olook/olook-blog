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
          <div class="box_left">
            <p>SAC (11) 2626-3489 | <a class="contact" href="http://www.olook.com.br/centraldeatendimento">Central de Atendimento</a></p>
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
                  <div id="mm_showroom" class="submenu">
                    <p>Receba recomendações de nossas Stylists.</p>
                    <a href="http://www.olook.com.br/criar/vitrine" class="link">CONFIRA!</a>
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
                      <h5>ESPECIAIS</h5>
                      <ul>
                        <li><a href="https://www.olook.com.br/colecoes/alto_verao" class="sub_menu">Alto verão 2014</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/pecas_chave" class="sub_menu">Peças-chave</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/preview_primavera" class="sub_menu">Primavera/Verão 2013</a></li>
                        <li><a href="http://www.olook.com.br/olooklet" class="sub_menu">Olooklet</a></li>
                      </ul>

                      <br>

                      <h5>TENDÊNCIAS</h5>
                      <ul>
                        <li><a href="http://www.olook.com.br/colecoes/animal-print" class="sub_menu">Animal print</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/azulejo_portugues" class="sub_menu">Azulejo Português</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/branco_total" class="sub_menu">Branco Total</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/floral" class="sub_menu">Floral</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/navajo" class="sub_menu">Navajo</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/neon_pastel" class="sub_menu">Neon Pastel</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/p&b" class="sub_menu">Preto & Branco</a></li>
                      </ul>
                    </span>
                    <span class="column second">
                      <h5>PARCERIAS</h5>
                      <ul>
                        <li><a href="http://www.olook.com.br/colecoes/estilista-juliana-jabour" class="sub_menu">Juliana Jabour</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/carol-ribeiro" class="sub_menu">Carol Ribeiro</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/mariana_weickert" class="sub_menu">Mariana Weickert</a></li>
                      </ul>

                      <br>

                      <h5>OCASIÕES</h5>
                      <ul>
                        <li><a href="http://www.olook.com.br/colecoes/casual" class="sub_menu">Casual</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/executivo" class="sub_menu">Trabalho</a></li>
                        <li><a href="http://www.olook.com.br/colecoes/festa" class="sub_menu">Festa</a></li>
                      </ul>

                    </span>

                    <span class="column image">
                        <a href="http://www.olook.com.br/colecoes/animal-print" class="img"><img src="http://d22zjnmu4464ds.cloudfront.net/assets/common/nav/colecoes-6e341fa81645498da7e5100c40835d2b.jpg" class=""></a>
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
                      <h5>LINGERIE</h5>
                      <ul>
                      <li>
                      <a href="http://www.olook.com.br/roupa/sutia" class="sub_menu">Sutiã</a>
                      </li>
                      </ul>
                      <br>
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
                    <span class='column image'>
                      <a href="http://www.olook.com.br/roupa?cmp=email_1310_tie_dye" class="img"><img src="http://d22zjnmu4464ds.cloudfront.net/assets/common/nav/roupas-03bd5e14a688ca4be5ac76c50861054f.jpg" class=""></a>
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
                        <a href="http://www.olook.com.br/sapato/sneaker" class="sub_menu">Sneaker</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/sapato/tenis" class="sub_menu">Tênis</a>
                        </li>
                      </ul>
                    </span>
                    <span class='column second'>
                      <h5>SALTINHOS</h5>
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
                    <span class='column image'>
                      <a href="http://www.olook.com.br/sapato/alpargata" class="img"><img src="http://d22zjnmu4464ds.cloudfront.net/assets/common/nav/sapatos-1fd43a2a46f9a1531b0257c6f6b4a5bc.jpg"></a>
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
                        <a href="http://www.olook.com.br/bolsa/carteira" class="sub_menu">Carteira</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/bolsa/clutch" class="sub_menu">Clutch</a>
                        </li>
                        <li>
                        <a href="http://www.olook.com.br/bolsa/mochila" class="sub_menu">Mochila</a>
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
                          <a href="http://www.olook.com.br/acessorio/cinto" class="sub_menu">Cinto</a>
                        </li>
                        <li>
                          <a href="http://www.olook.com.br/acessorio/colar" class="sub_menu">Colar</a>
                        </li>
                        <li>
                         <a href="http://www.olook.com.br/acessorio/echarpe" class="sub_menu">Echarpe</a>
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
                    <p>Encontre o presente ideal para as mulheres da sua vida.</p>
                    <a href="http://www.olook.com.br/presentes" class="link">CONHEÇA</a>
                  </div>
                </li>
                <li class="gift">
                  <a href="http://www.olook.com.br/marcas" class="gift">Marcas</a>

                  <div class='submenu' id='mm_marcas'>
                    <span class='column first'>
                      <ul>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Olook" class="sub_menu">Olook</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Olook%20Concept" class="sub_menu">Olook Concept</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Olook%20Essential" class="sub_menu">Olook Essential </a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/284" class="sub_menu">284</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Afghan" class="sub_menu">Afghan</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Agua%20Doce" class="sub_menu">Agua Doce</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Blue%20Man" class="sub_menu">Blue Man</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Botswana" class="sub_menu">Botswana</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Canal" class="sub_menu">Canal</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Cantao" class="sub_menu">Cantao</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Carina%20Duek" class="sub_menu">Carina Duek</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Coca%20Cola%20Clothing" class="sub_menu">Coca Cola Clothing</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Colcci" class="sub_menu">Colcci</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Eclectic" class="sub_menu">Eclectic</a>
                      </li>
                      </ul>
                      </span>
                      <span class='column second'>
                      <ul>
                      
                      <li>
                      <a href="http://www.olook.com.br/marcas/Ellus" class="sub_menu">Ellus</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Ellus%202%20Nd%20Floor" class="sub_menu">Ellus 2nd Floor</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Espaco%20Fashion" class="sub_menu">Espaco Fashion</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Folic" class="sub_menu">Folic</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Forum" class="sub_menu">Forum</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Iodice%20Denim" class="sub_menu">Iodice Denim</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Juliana%20Jabour" class="sub_menu">Juliana Jabour</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Juliana%20Manzini" class="sub_menu">Juliana Manzini</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Lanca%20Perfume" class="sub_menu">Lanca Perfume</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Leeloo" class="sub_menu">Leeloo</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Lez%20A%20Lez" class="sub_menu">Lez a Lez</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/M%20Officer" class="sub_menu">M Officer</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Mandi" class="sub_menu">Mandi</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Mercatto" class="sub_menu">Mercatto</a>
                      </li>
                      </ul>
                      </span>
                      <span class='column last'>
                      <ul>
                      
                      <li>
                      <a href="http://www.olook.com.br/marcas/Olli" class="sub_menu">Olli</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Redley" class="sub_menu">Redley</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Shop%20126" class="sub_menu">Shop 126</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Shoulder" class="sub_menu">Shoulder</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Sommer" class="sub_menu">Sommer</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Tan%20Tan" class="sub_menu">Tan Tan</a>   
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Thelure" class="sub_menu">Thelure</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Totem" class="sub_menu">Totem</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Triton" class="sub_menu">Triton</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Tvz" class="sub_menu">Tvz</a>
                      </li>
                      <li>
                      <a href="http://www.olook.com.br/marcas/Wollner" class="sub_menu">Wollner</a>
                      </li>
                      <li><a href="http://www.olook.com.br/marcas/Collins" class="sub_menu">Collins</a></li>
                      </ul>
                    </span>
                  </div>

                </li>
                <li style="background-position: initial initial; background-repeat: initial initial;"><a href="https://www.olook.com.br/olooklet">Olooklet</a>
                  <div class='submenu' id='mm_olooklet'>
                    <p>Preços incríveis. Até 80% OFF!</p>
                    <ul style="margin-bottom: 0px !important">
                      <li>
                        <a href="http://www.olook.com.br/olooklet/roupa" class="sub_menu">Roupas</a>
                      </li>
                      <li>
                        <a href="http://www.olook.com.br/olooklet/sapato" class="sub_menu">Sapatos</a>
                      </li>
                      <li>
                        <a href="http://www.olook.com.br/olooklet/bolsa" class="sub_menu">Bolsas</a>
                      </li>
                      <li>
                        <a href="http://www.olook.com.br/olooklet/acessorio" class="sub_menu">Acessórios</a>
                      </li>
                      <li>
                        <a href="http://www.olook.com.br/olooklet/moda praia" class="sub_menu">Moda Praia</a>
                      </li>
                      <li>
                    </ul>
                  </div>
                </li>
                <li id="bar"></li>
                <li style="background-image: none;"><a class="sacola" href="http://www.olook.com.br/sacola">Sacola</a>
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
