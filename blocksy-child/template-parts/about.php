<?php
/**
 * Display Block About
 * Блок о нас
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$about_text = get_field('about_text');

if ($about_text) {
    ?>

    <section class="about">
        <div class="container">
            <div class="right-text d-grid">
                <div class="swiper about__slider about-slider">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('new_about_slide')): ?>
                            <?php while (have_rows('new_about_slide')):
                                the_row();
                                $about_slide_image = get_sub_field('about_slide_image');
                                ?>

                                <figure class="swiper-slide about-slider__slide">
                                    <img src="<?php echo $about_slide_image['url']; ?>"
                                        alt="<?php echo $about_slide_image['alt']; ?>">
                                </figure>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-button-next slider-arrow-next"></div>
					<div class="swiper-button-prev slider-arrow-prev"></div>
                </div>

                <div class="d-flex d-lg-none">
                    <?php get_template_part('template-parts/fast', 'zakaz'); ?>
                </div>

                <div class="right-text__box right-text-box">
                    <?php
                    if ($about_text) {
                        echo '<div class="post">';
                        echo $about_text;
                        echo '</div>';
                    } 

                    echo '<div class="d-none d-lg-flex">';
                    get_template_part('template-parts/fast', 'zakaz'); 
                    echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    </section>

<? }