<?php
/**
 * Display Block Advantages
 * Блок Преимущества (почему с нами комфортно?)
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$advantages_title = get_field('advantages_title', 'options');
$advantages_background = get_field('advantages_background', 'options');

if (have_rows('new_advantage', 'options')) {
    ?>

    <section id="advantages" class="advantages dark position-relative"
        style="background-image: url('<?php echo $advantages_background['url']; ?>)">
        <div class="dark-bg position-absolute"></div>
        <div class="container position-relative">
            <?php
            if ($advantages_title) {
                echo '<h2 class="advantages__title">';
                echo $advantages_title;
                echo '</h2>';
            } else {
                echo '<h2 class="advantages__title">Наши преимущества</h2>';
            }
            ?>

            <ul class="advantages__list adv-list d-grid">
                <?php if (have_rows('new_advantage', 'options')): ?>
                    <?php while (have_rows('new_advantage', 'options')):
                        the_row();
                        $advantage_image = get_sub_field('advantage_image', 'options');
                        $advantage_title = get_sub_field('advantage_title', 'options');
                        $advantage_text = get_sub_field('advantage_text', 'options');
                        ?>

                        <li class="adv-list__item adv-item">
                            <?php
                            if ($advantage_image) { ?>
                                <img src="<?php echo $advantage_image['url']; ?>" alt="<?php echo $advantage_image['alt']; ?>">
                            <?php } ?>

                            <h3 class="adv-item__title">
                                <?php echo $advantage_title; ?>
                            </h3>

                            <?php
                            if ($advantage_text) { ?>
                                <div class="adv-item__text">
                                    <?php echo $advantage_text; ?>
                                </div>
                            <?php } ?>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

            <a class="button" href="#cta">сделать заказ</a>
        </div>
    </section>

<?php }