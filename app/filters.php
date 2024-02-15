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

/**
 * Add U.S. Territories to Gravity Forms
 *
 * @return string
 */
function initialize_us_states_filter()
{
    function us_states($states)
    {
        $territories = array(
            2 => 'American Samoa',
            12 => 'Guam',
            37 => 'Northern Mariana Islands',
            42 => 'Puerto Rico',
            48 => 'United States Minor Outlying Islands',
            49 => 'U.S. Virgin Islands'
        );

        foreach ($territories as $key => $t) {
            array_splice($states, $key, 0, $t);
        }
        return $states;
    }

    add_filter('gform_us_states', 'us_states');
}

/**
 * Custom post date display to show "time ago" format and ISO 8601 time.
 *
 * @return string
 */
add_filter('get_the_date', function ($date, $post) {
    $post_time = get_post_time('U', true, $post);

    // Fetch the post's time in ISO 8601 format
    $iso8601_time = get_post_time('c', true, $post);

    $human_time = human_time_diff($post_time);

    if (time() > $post_time + 30 * DAY_IN_SECONDS) {
        // If post is older than 30 days, show the regular date
        $formatted_date = date_i18n(get_option('date_format'), $post_time);
        return '<span class="entry-date published" datetime="' . esc_attr($iso8601_time) . '">' . esc_html($formatted_date) . '</span>';
    } else {
        // If post is less than 30 days old, show the human-readable time difference
        return '<span class="entry-date published" datetime="' . esc_attr($iso8601_time) . '">' . esc_html($human_time) . ' ago.</span>';
    }
}, 10, 2);
