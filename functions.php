<?php

// Portfoio alphabetical order
add_action( 'pre_get_posts', 'my_orderby_filter2' );
function my_orderby_filter2( $query ) {
    if ( 'portfolio' === $query->get( 'post_type' ) ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}

?>
