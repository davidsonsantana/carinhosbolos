<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<h2 class="title-prod-int"><?php
		$category = get_the_category(); 
		echo $category[0]->cat_name;
		?>
		<a class="history-back" href="#"  onclick="window.history.back();return false;">« Voltar</a>
	</h2>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>    

			
			

			<div class="img-produto-interna">
				<?php $image = wp_get_attachment_image_src(get_field('img_produtos'), 'thumbnail'); ?>
				<img class="img-int-post" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('img_produtos')) ?>" />
			</div>
			<div class="info">
				<h3><?php the_title(); ?></h3>
				<span><strong>CÓDIGO DO PRODUTO: </strong><?php the_field('codigo_de_produto') ?></span>
				<p><?php the_field('descricao') ?></p>
				<p><strong>INGREDIENTES: </strong><?php the_field('ingredientes') ?></p>
			</div>


		<?php endwhile; ?>
	<?php endif; ?>

</div>


<?php
get_footer();
