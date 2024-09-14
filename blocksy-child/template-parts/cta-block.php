<?php
/**
 * Display Block CTA
 * Блок Осовная контактная форма сайта
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$cta_title = get_field('cta_title');
?>

<section id="cta" class="cta">
    <div class="container">
        <div class="cta__wrap d-grid grid-two">
            <?php
            if ($cta_title) {
                echo '<h2 class="cta__title">';
                echo $cta_title;
                echo '</h2>';
            }
            echo do_shortcode('[contact-form-7 id="871287d" title="Основная форма сайта"]');
            ?>
        </div>
    </div>
</section>