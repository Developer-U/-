<?php
/**
 * Display Services Menu
 * Блок услуги для меню
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$arg_services = array(
    'orderby' => 'name',
    'order' => 'DESC',
    'posts_per_page' => 50,
    'post_type' => 'services',
    'post_status' => 'publish',
);

$query_services = new WP_Query($arg_services);
?>

<ul>

    <?php
    if ($query_services->have_posts()) {
        $x = 0;
        while ($query_services->have_posts()):
            $query_services->the_post();
            $index_service = $x++;
            ?>

            <li>
                <?php if (is_front_page()) { ?>
                    <a class="contact-list__item" href="#index-<?php echo $index_service; ?>">
                    <?php } else { ?>
                        <a class="contact-list__item" href="/#index-<?php echo $index_service; ?>">
                        <?php }

                the_title(); ?>
                    </a>
            </li>

        <?php endwhile;
        wp_reset_postdata() ?>
    <?php } ?>

</ul>