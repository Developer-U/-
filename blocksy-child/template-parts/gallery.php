<?php
/**
 * Display Block Gallery
 * Блок Галерея
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$gallery_title = get_field('gallery_title');

if (have_rows('new_gallery')) {
    ?>

    <section id="galleries" class="reviews-section gallery">
        <div class="container-fluid">
            <?php
            if ($gallery_title) {
                echo '<h2 class="gallery__title">';
                echo $gallery_title;
                echo '</h2>';
            } else {
                echo '<h2 class="gallery__title">Наша галерея</h2>';
            }
            ?>

            <ul class="gallery__list gallery-list d-grid">
                <?php if (have_rows('new_gallery')): ?>
                    <?php while (have_rows('new_gallery')):
                        the_row();
                        $gallery_image = get_sub_field('gallery_image');           
                        ?>

                        <li class="gallery-list__item gallery-item">
                            <a href="<?php echo $gallery_image['url']; ?>" class="gallery-item__link" data-fancybox="gallery">
                                <img src="<?php echo $gallery_image['url']; ?>" alt="<?php echo $gallery_image['alt']; ?>">
                            </a>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

        </div>
    </section>

<?php }