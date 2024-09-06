<?php
/**
 * Display Block About
 * Блок о нас
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$services_title = get_field('services_title', 'options');
$about_text = get_field('about_text');

?>

<section class="services">
    <div class="container">
        <?php
        if ($about_text) {
            echo '<h2 class="services__title">';
            echo $about_text;
            echo '</h2>';
        } else {
            echo '<h2 class="services__title">Наши услуги</h2>';
        }
        ?>

        <ul class="services__list services-list d-grid">
            <?php if (have_rows('add_service')):
                $x = 0; ?>
                <?php while (have_rows('add_service')):
                    the_row();
                    $index_service = $x++;
                    $about_slide_image = get_sub_field('about_slide_image');
                    ?>

                    <li class="services-list__item position-relative <?php if ($index_service)
                        ; ?>">

                    </li>

                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>