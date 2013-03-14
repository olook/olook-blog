<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package  WellThemes
 * @file     footer.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
	</div><!-- /main -->

<?php	get_template_part( 'includes/featured-products' ); ?>

    <footer>
  <section>
    <dl>
      <dt>Sobre a olook</dt>
      <dd><a href="/como-funciona">Como funciona</a></dd>
      <dd><a href="/nossa-essencia">Nossa essência</a></dd>
      <dd><a href="/responsabilidade-social">Responsabilidade social</a></dd>
      <dd><a href="/olookmovel">Olookmóvel</a></dd>
		  <dd><a href="/1anomuito">1 ano muito</a></dd>
      <dd><a href="/olook-na-imprensa">Olook na imprensa</a></dd>
      <dd><a href="http://blog.olook.com.br" target="_blank">Blog</a></dd>
    </dl>
    <dl>
      <dt>Como trabalhamos</dt>
      <dd><a href="/prazo-de-entrega">Prazo de entrega</a></dd>
		  <dd><a href="/termos">Termos e condições</a></dd>
      <dd><a href="/privacidade">Política de privacidade</a></dd>
		  <dd><a href="/devolucoes">Política de devolução</a></dd>
		  <dd><a href="/fidelidade">Fidelidade olook</a></dd>
    </dl>
    <dl>
      <dt>Atendimento</dt>
      <dd><a href="/centraldeatendimento">Central de atendimento</a></dd>
      <dd><a href="/centraldeatendimento">Perguntas frequentes (FAQ)</a></dd>
    </dl>
    <dl>
      <dt>Siga-nos</dt>
      <dd><a href="http://twitter.com/olook" target="_blank" title="Acompanhe pelo Facebook">Acompanhe pelo Facebook</a></dd>
      <dd><a href="http://facebook.com/olook" target="_blank" title="Acompanhe pelo Twitter">Acompanhe pelo Twitter</a></dd>
      <dd><a href="http://blog.olook.com.br/feed/" target="_blank" title="Acompanhe por RSS">Acompanhe por RSS</a></dd>
      <dd><a href="http://instagram.com/olook" target="_blank" title="Acompanhe pelo Instagram">Acompanhe pelo Instagram</a></dd>
      <dd>
        <ul class="social">
          <li class="facebook"><a href="http://facebook.com/olook" target="_blank" title="Facebook">Acompanhe pelo Facebook</a></li>
          <li class="twitter"><a href="http://twitter.com/olook" target="_blank" title="Twitter">Acompanhe pelo Twitter</a></li>
          <li class="rss"><a href="http://blog.olook.com.br/feed/" target="_blank" title="RSS">Acompanhe por RSS</a></li>
          <li class="instagram"><a href="http://instagram.com/olook" target="_blank" title="Instagram">Acompanhe pelo Instagram</a></li>
        </ul>
      </dd>
    </dl>

    <dl class="double payment">
      <dt>Formas de pagamento</dt>
      <dd><img alt="Trabalhamos com Visa, Mastercard, American Express e Dinners" src="//d22zjnmu4464ds.cloudfront.net/assets/common/ico_bandeiras-2bae667d8226c171e803e8a02e4b8010.png" /></dd>
      <dd>Em até 6 vezes (parcela mínima de R$ 30,00)</dd>
    </dl>
    <dl class="double security">
      <dt>Segurança</dt>
      <dd><a href="http://www.trustlogo.com/ttb_searcher/trustlogo?v_querytype=W&amp;v_shortname=SC4&amp;v_search=http://www.olook.com.br/&amp;x=6&amp;y=5" target="_blank"><img alt="Ico_security" src="//d22zjnmu4464ds.cloudfront.net/assets/common/ico_security-da39ed9f5fba4e15f91cd98458d3f808.png" /></a></dd>
      <dd><a id="seloEbit" href="http://www.ebit.com.br/#olook" target="_blank" onclick="redir(this.href);">Avaliação de Lojas e-bit</a>
 <script type="text/javascript" id="getSelo" src="https://a248.e.akamai.net/f/248/52872/0s/img.ebit.com.br/ebitBR/selo-ebit/js/getSelo.js?21709" ></script>
</dd>
    </dl>
    <p>© <?php echo Date("Y"); ?> - olook<br />Todos os direitos reservados</p>





  </section>
</footer>
<div id="overlay-campaign">&nbsp;</div>
<div id="modal-campaign">&nbsp;</div>

<div class="credits_description">
  <div class="box_months">
    <h1>Agora você ficará na moda todos os meses gastando muito menos</h1>
    <ul class="steps">
      <li>Toda vez que você<br />comprar na OLOOK</li>
      <li>Você ganhará 15% do<br />valor do seu pedido<br />em créditos</li>
      <li class="last">E poderá utilizar este<br />valor em compras nos<br />próximos 2 meses</li>
    </ul>
  </div>
</div>

</div><!-- /container -->

<?php wp_footer(); ?>

</body>
</html>