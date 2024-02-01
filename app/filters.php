<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

// Use term_id instead of name to assign the taxonomy
// add_filter('gform_advancedpostcreation_taxonomy_mapping_field', function ($field, $taxonomy) {
//     return 'slug';
// }, 10, 2);
