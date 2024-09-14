<?php
/**
 * Display Block reviews
 * Блок Отзывы клиентов
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$reviews_title = get_field('reviews_title', 'options');
$reviews_text = get_field('reviews_text', 'options');

$arg_reviews = array(
    'orderby' => 'name',
    'order' => 'DESC',
    'posts_per_page' => 99,
    'post_type' => 'reviews',
    'post_status' => 'publish',
);

$query_reviews = new WP_Query($arg_reviews);

if ($query_reviews->have_posts() || have_rows('new_reviews', 'options')) {
    ?>

    <section id="reviews" class="reviews-section dark">
        <div class="container">
            <?php
            if ($reviews_title) {
                echo '<h2 class="reviews__title">';
                echo $reviews_title;
                echo '</h2>';
            } else {
                echo '<h2 class="reviews__title">Отзывы наших клиентов</h2>';
            }
            ?>

            <?php
            if ($query_reviews->have_posts()) { ?>
                <div class="reviews-section__first">
                    <span class="reviews__texts">Отзывы</span>

                    <ul class="reviews__list adv-list reviews-list d-grid">
                        <?php
                        if ($query_reviews->have_posts()) {
                            $x = 0;
                            while ($query_reviews->have_posts()):
                                $query_reviews->the_post();
                                $index_review = $x++;
                                ?>

                                <li class="reviews-list__item adv-item rev-item js-reviews">
                                    <figure class="rev-item__image" style="background: #ddd;">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE));
                                        } else {
                                            echo '<img src="' . get_stylesheet_directory_uri() . '/assets/img/no-image.jpg" />'; // изображение по умолчанию, если миниатюра не установлена
                                        } ?>
                                    </figure>

                                    <h5 class="adv-item__title rev-item__title"><?php the_title(); ?></h5>

                                    <div class="reviews-item__text rev-item__text">
                                        <div>
                                            <?php the_content(); ?>
                                        </div>
                                    </div>

                                    <button type="button" class="main-reviews__item-more"><span>читать полностью</span></button>

                                    <button type="button" class="main-reviews__item-less"><span>скрыть</span></button>
                                </li>

                            <?php endwhile;
                            wp_reset_postdata();
                        } ?>
                    </ul>
                </div>
            <?php }

            if (have_rows('new_reviews', 'options')) { ?>
                <div class="reviews-section__second">
                    <span class="reviews__texts">Видео</span>

                    <ul class="reviews__video reviews-video d-grid">
                        <?php if (have_rows('new_reviews', 'options')): ?>
                            <?php while (have_rows('new_reviews', 'options')):
                                the_row();
                                $reviews_video_type = get_sub_field('reviews_video_type', 'options');
                                $reviews_video = get_sub_field('reviews_video', 'options');
                                $reviews_video_id = get_sub_field('reviews_video_id', 'options');
                                ?>

                                <li class="reviews-video__item">
                                    <?php
                                    if ($reviews_video_type == 'файл' && $reviews_video) { ?>
                                        <video controls class="reviews-video-wrap__file">
                                            <source src="<?php echo esc_url($reviews_video['url']); ?>" type="video/webm" />

                                            <source src="<?php echo esc_url($reviews_video['url']); ?>" type="video/mp4" />
                                        </video>

                                    <?php } else if ($reviews_video_type == 'ссылка' && $reviews_video_id) { ?>
                                            <iframe width="720" height="344" src="https://rutube.ru/play/embed/<?php echo $reviews_video_id; ?>"
                                                frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen
                                                allowFullScreen>
                                            </iframe>
                                    <?php } ?>
                                </li>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>

                    <?php
                    if($reviews_text) {
                        echo '<div class="reviews-section__bottom reviews-bottom d-grid">';
                        echo '<div class="post">' . $reviews_text . '</div>';
                        echo '<a class="button" href="https://forum.u0618804.plsk.regruhosting.ru/quizle/66e3f8e590846/">заказать</a>';
                        echo '</div>';
                    } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

<?php }