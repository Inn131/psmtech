<?php
/**
 * Redirect service CPT to corresponding page under /services/ parent
 */

// Get the current post
$current_post_id = get_the_ID();
$service_slug = get_post_field('post_name', $current_post_id);

// Redirect to the page under /services/ parent
wp_redirect(home_url('/services/' . $service_slug . '/'));
exit;