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

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>    

			<h2 class="novidades">Novidades</h2>
			<h3><?php the_title(); ?></h3>
			<?php $image = wp_get_attachment_image_src(get_field('img_novidades'), 'thumbnail'); ?>
			<img class="img-int-post" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('img_novidades')) ?>" />
			<?php the_content(); ?>


		<?php endwhile; ?>
	<?php endif; ?>

</div>

<?php
get_footer();