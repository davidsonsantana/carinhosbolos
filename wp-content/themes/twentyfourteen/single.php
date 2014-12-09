<?php
	$post = $wp_query->post;
	if ( in_category('3') ) {
		include(TEMPLATEPATH . '/single-novidades.php');
	} else if ( in_category('4') || in_category('5') ) {
		include(TEMPLATEPATH . '/single-produtos.php');
	} else {
		include(TEMPLATEPATH . '/single_default.php');
	}
?>