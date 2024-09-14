<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

$logo_footer = get_field('logo_footer', 'options');
$socials = get_field('social_icons', 'options');
$tel = get_field('tel-link', 'options');
$phone_num = get_field('tel', 'options');
$copyright = get_field('copyright', 'options');
$email = get_field('email', 'options');
$address = get_field('address', 'options');
?>
</main>

<?php
do_action('blocksy:content:after');
do_action('blocksy:footer:before');
?>

<footer class="footer">
    <div class="container">
        <div class="footer__top footer-top d-grid">
            <div class="footer-top__item first">
                <?php
                if ($logo_footer) { ?>
                    <a href="/" class="footer__logo">
                        <img src="<?php echo $logo_footer['url']; ?>" alt="<?php echo $logo_footer['alt']; ?>">
                    </a>
                <?php }

                get_template_part('template-parts/social'); ?>
            </div>

            <div class="footer-top__item footer-item">
                <h3>Наши услуги</h3>

                <?php
                get_template_part('template-parts/services', 'menu'); ?>
            </div>

            <div class="footer-top__item footer-item">
                <h3>Наши реквизиты</h3>

                <ul>
                    <?php if (have_rows('new_requizittes', 'options')): ?>
                        <?php while (have_rows('new_requizittes', 'options')):
                            the_row();
                            $requizite = get_sub_field('requizitte', 'options');
                            ?>

                            <li>
                                <?php echo $requizite; ?>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="footer-top__item footer-item contact-list">
                <h3>Наши контакты</h3>

                <ul>
                    <?php
                    if ($tel && $phone_num): ?>
                        <li>
                            <a class="contact-list__item tel" href="tel:+7<?php echo $tel; ?>">
                                <?php echo $phone_num; ?>
                            </a>
                        </li>
                    <?php endif;
                    ?>

                    <?php
                    if ($email): ?>
                        <li>
                            <a class="contact-list__item email" href="mailto:<?php echo $email; ?>">
                                <?php echo $email; ?>
                            </a>
                        </li>
                    <?php endif;
                    ?>

                    <?php
                    if ($address): ?>
                        <li>
                            <p class="contact-list__item address">
                                <?php echo $address; ?>
                            </p>
                        </li>
                    <?php endif;
                    ?>
                </ul>
            </div>
        </div>

        <div class="footer__bottom footer-bottom d-flex justify-content-between gap-3">
            <p class="footer-bottom__item first">
                <?php if ($copyright) { ?>
                    ©&nbsp;<?php echo date("Y"); ?>&nbsp; <?php echo $copyright; ?>
                <?php } ?>
            </p>

            <a class="footer-bottom__item" href="/privacy">
                Политка конфиденциальности
            </a>

            <p class="footer-bottom__item">
                Разработка сайта:&nbsp;<a href="https://sim-style.ru">Веб-студия «Символ стиля»</a>
            </p>
        </div>
    </div>
</footer>

<?php
do_action('blocksy:footer:after');
?>
</div>

<?php wp_footer(); ?>

</body>

</html>