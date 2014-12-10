<?php
	$post = $wp_query->post;
	if ( in_category('3') ) {
		include(TEMPLATEPATH . '/single-novidades.php');
	} else if ( in_category('4') || in_category('5') || in_category('6') || in_category('7') || in_category('8') || in_category('9') || in_category('10') ) {
		include(TEMPLATEPATH . '/single-produtos.php');
	} else {
		include(TEMPLATEPATH . '/single_default.php');
	}
?>