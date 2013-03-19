<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package  WellThemes
 * @file     sidebar.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */

get_header(); ?>

	<section id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Página não encontrada.', 'wellthemes' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><a href="http://olook.com.br/stylist-news"><?php _e( 'Voltar para home da Revista.', 'wellthemes' ); ?></a></p>
				</div><!-- /entry-content -->
			</article><!-- /post-0 -->

		</div><!-- /content -->
	</section><!-- /primary -->
<?php get_sidebar('left'); ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>