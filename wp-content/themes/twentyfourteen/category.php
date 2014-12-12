<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">



	<?php if ( have_posts() ) : ?>
	<h2>
		<?php single_cat_title( '', true ); ?>
	</h2>
 	<?php
        // Show an optional term description.
        $term_description = term_description();
        if ( ! empty( $term_description ) ) :
            printf( '<div class="taxonomy-description">%s</div>', $term_description );
        endif;
	?>
	<ul class="miniaturas-prod">
		<?php while ( have_posts() ) : the_post(); ?>    
			<li>
				<?php $image = wp_get_attachment_image_src(get_field('img_produtos'), 'thumbnail'); ?>
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('img_produtos')) ?>" /></a>
				<h3><?php the_title(); ?></h3>
				<div class="line">
					<a href="<?php the_permalink(); ?>">Ver Detalhes</a>
				</div>
			</li>
		<?php endwhile; ?>
	</ul>	
	<?php endif; ?>

</div>














<?php


get_footer();
