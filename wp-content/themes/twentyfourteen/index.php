<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
		
</div>

</div><!-- #main-content -->

<div class="footer-home">
	<div class="wrap">
		<div class="description">
			<h2>CARINHOS BOLOS</h2>
			<p>A Carinhos Bolos é uma empresa familiar que<br>nasceu da intenção dos integrantes de ter um<br>negócio próprio e fosse principalmente<br>prazeroso para todos...</p>
			<a href="#"> > Conheça mais sobre nós</a>
		</div>
		<div class="news">
			<span>NOVIDADES</span>
			<p>Acesse nosso blog e acompanhe Dicas e<br>Novidades sobre o nosso trabalho. Acesse<br>semanalmente, acompanhe e compartilhe os<br>seus preferidos!</p>
			<a href="#" class="bt-acesse">Acesse</a>
		</div>
		<div class="address">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="">
			<p>
				PONTO DE ATENDIMENTO: <br>
				Rua Antônio Canero, 56 - Mooca - São Paulo - SP <br>
				Celular: (11) 95938-6123
			</p>
		</div>
	</div>
</div>