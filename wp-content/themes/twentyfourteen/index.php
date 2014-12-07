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
<script src="<?php echo get_template_directory_uri(); ?>/carrossel/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
		jQuery( document ).ready(function( $ ) {
			jQuery( '#slideHome' ).sliderPro({
				width: 808 ,
				height: 385,
				fade: true,
				arrows: true,
				buttons: false,
				fullScreen: false,
				shuffle: false,
				smallSize: 500,
				mediumSize: 1000,
				largeSize: 3000,
				thumbnailArrows: true,
				autoplay: true
			});
		});
	</script>

<div id="main-content" class="main-content">
		<!-- Place somewhere in the <body> of your page -->

<!-- Slide Home -->

<div id="slideHome" class="slider-pro">
		<div class="sp-slides">
			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/banner1.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/banner1.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/banner1.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/banner1.png"/>

				<h3 class="sp-layer sp-black sp-padding" 
					data-horizontal="40" data-vertical="40" 
					data-show-transition="right">
					Lorem ipsum dolor sit amet
				</h3>

				<p class="sp-layer sp-white sp-padding" 
					data-horizontal="40" data-vertical="100" 
					data-show-transition="right" data-show-delay="200">
					consectetur adipisicing elit
				</p>

				<p class="sp-layer sp-black sp-padding" 
					data-horizontal="40" data-vertical="160" data-width="350" 
					data-show-transition="right" data-show-delay="400">
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

	        <div class="sp-slide">
	        	<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-2.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-2.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-2.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-2.png"/>

				<h3 class="sp-layer sp-black sp-padding" 
					data-horizontal="40" data-vertical="40" 
					data-show-transition="left">
					Lorem ipsum dolor sit amet
				</h3>

				<p class="sp-layer sp-white sp-padding" 
					data-horizontal="40" data-vertical="100" 
					data-show-transition="left" data-show-delay="200">
					consectetur adipisicing elit
				</p>

				<p class="sp-layer sp-black sp-padding" 
					data-horizontal="40" data-vertical="160" data-width="350" 
					data-show-transition="left" data-show-delay="400">
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-3.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-3.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-3.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-3.png"/>

				<p class="sp-layer sp-white sp-padding" 
					data-position="centerCenter" data-vertical="-50" 
					data-show-transition="right" data-show-delay="500" >
					Lorem ipsum dolor sit amet
				</p>

				<p class="sp-layer sp-black sp-padding" 
					data-position="centerCenter" data-vertical="50" 
					data-show-transition="left" data-show-delay="700">
					consectetur adipisicing elit
				</p>
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-4.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-4.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-4.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-4.png"/>

				<p class="sp-layer sp-black sp-padding"
					data-position="bottomLeft" data-vertical="0" data-width="100%"
					data-show-transition="up">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-5.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-5.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-5.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-5.png"/>

				<p class="sp-layer sp-white sp-padding" 
					data-vertical="5%" data-horizontal="5%" data-width="90%" 
					data-show-transition="down" data-show-delay="400">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-6.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-6.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-6.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-6.png"/>

				<p class="sp-layer sp-white sp-padding" 
					data-horizontal="10" data-vertical="10" data-width="300">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-1.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-1.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-1.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-1.png"/>

				<p class="sp-layer sp-black sp-padding" 
					data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" 
					data-show-transition="up" data-show-delay="400">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-2.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-2.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-2.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-2.png"/>
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-3.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-3.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-3.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-3.png"/>

				<p class="sp-layer sp-black sp-padding" 
					data-horizontal="50" data-vertical="50"
					data-show-transition="down" data-show-delay="500">
					Lorem ipsum dolor sit amet
				</p>

				<p class="sp-layer sp-white sp-padding" 
					data-horizontal="50" data-vertical="100"
					data-show-transition="up" data-show-delay="500">
					consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" 
					data-src=""
					data-small="<?php echo get_template_directory_uri(); ?>/images/img-4.png"
					data-medium="<?php echo get_template_directory_uri(); ?>/images/img-4.png"
					data-large="<?php echo get_template_directory_uri(); ?>/images/img-4.png"
					data-retina="<?php echo get_template_directory_uri(); ?>/images/img-4.png"/>
			</div>
		</div>
<div class="bg-list-carrossel">
		<div class="sp-thumbnails">
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-1.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-2.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-3.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-4.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-5.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-6.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-1.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-2.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-3.png"/>
			<img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/img-4.png"/>
		</div>
		</div>
    </div>

<!-- end Slide Home -->



	
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