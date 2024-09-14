<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
/**
 *  Main Page
 */

get_header();

get_template_part('template-parts/hero');

get_template_part('template-parts/about');

get_template_part('template-parts/services');

get_template_part('template-parts/services', 'blocks');

get_template_part('template-parts/advantages');

get_template_part('template-parts/gallery');

get_template_part('template-parts/reviews');

get_template_part('template-parts/work', 'levels');

get_template_part('template-parts/cta', 'block');

get_footer();
?>