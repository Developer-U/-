<?php
/**
 * Display Services Blocks 
 * Блоки услуг
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

if ($query_services->have_posts()) {
    $x = 0;
    while ($query_services->have_posts()):
        $query_services->the_post();
        $index_service = $x++;
        ?>

        <section id="index-<?php echo $index_service; ?>" class="service-section <?php if ($index_service == 0 || $index_service % 2 == 0) { ?>dark<?php } ?>">
            <div class="container">
                <div class="service-section__wrap service-wrap d-flex">
                    <div class="service-wrap__texts service-texts">
                        <h2> <?php the_title(); ?></h2>

                        <div class="service-texts__content post"><?php the_content(); ?></div>

                        <div class="d-none d-lg-block">
                            <?php echo do_shortcode('[contact-form-7 id="8f6e71a" title="Заказать услугу"]'); ?>
                        </div>
                    </div>

                    <div
                        class="service-wrap__slider <?php if ($index_service == 0 || $index_service % 2 == 0) { ?>grid-first<?php } ?>">
                        <div class="swiper service-wrap__slider service-slider">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('new_service_slide')): ?>
                                    <?php while (have_rows('new_service_slide')):
                                        the_row();
                                        $service_slide_image = get_sub_field('service_slide_image');
                                        ?>

                                        <figure class="swiper-slide service-slider__slide">
                                            <img src="<?php echo $service_slide_image['url']; ?>"
                                                alt="<?php echo $service_slide_image['alt']; ?>">
                                        </figure>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>

                            <div class="swiper-button-next slider-arrow-next"></div>
                            <div class="swiper-button-prev slider-arrow-prev"></div>
                        </div>
                    </div>

                    <div class="d-block d-lg-none">
                        <?php echo do_shortcode('[contact-form-7 id="7ad7697" title="Форма заказать услугу"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
    wp_reset_postdata() ?>
<?php } ?>