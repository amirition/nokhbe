<?php
function nokhbe_sanitize_category_dropdown( $cat_id, $setting ) {
    // Ensure $input is an absolute integer.
    $cat_id = absint( $cat_id );

    // If $cat_id is a valid category, return it; otherwise, return the default.
    return ( term_exists( $cat_id, 'category' ) ? $cat_id : $setting->default );
}