<?php
/**
 * Display Block About
 * Блок о нас
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

$services_title = get_field('services_title', 'options');

$query_services = new WP_Query($arg_services);

if ($query_services->have_posts()) { ?>

    <section id="services" class="services">
        <div class="container">
            <?php
            if ($services_title) {
                echo '<h2 class="services__title">';
                echo $services_title;
                echo '</h2>';
            } else {
                echo '<h2 class="services__title">Наши услуги</h2>';
            }
            ?>

            <ul class="services__list services-list d-grid">
                <?php
                if ($query_services->have_posts()) {
                    $x = 0;
                    while ($query_services->have_posts()):
                        $query_services->the_post();
                        $index_service = $x++;
                        ?>

                        <li class="services-list__item d-flex align-items-center position-relative <?php if ($index_service == 0 || $index_service % 2 == 0) { ?>to-bottom<?php } ?>"
                            style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>'); background-size: cover; background-repeat: no-repeat">
                            <a class="services-list__title" href="#index-<?php echo $index_service; ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_postdata() ?>
                <?php } ?>
            </ul>
        </div>
    </section>

<?php }