<?php /*Template Name: Novidades*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">


	<ul>
    <?php
     $args = array(
       'cat' => '3',
       'post_type' => 'post',
       'posts_per_page' => 30,
       'order' => 'ASC',
       'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
    );

    query_posts($args);

    while (have_posts()) : the_post(); ?>

        <li class="box-post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <a href="<?php the_permalink(); ?>">Leia mais. Clique aqui!</a>
            <?php $image = wp_get_attachment_image_src(get_field('img_novidades'), 'thumbnail'); ?>
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('img_novidades')) ?>" /></a>
            <p>TAGS: <?php the_field('tags') ?></p>
        </li>

    <?php endwhile; ?>

    <?php

    wp_reset_query();  // Restore global post data

    ?>
</ul>
	
</div><!-- #main-content -->

<?php
get_footer();
