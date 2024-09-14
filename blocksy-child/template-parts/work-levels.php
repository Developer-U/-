<?php
/**
 * Display Block Work Levels
 * Блок Этапы сотрудничества
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$levels_title = get_field('levels_title');
$levels_background = get_field('levels_background');

if (have_rows('new_level')) {
    ?>

    <section class="advantages levels dark position-relative"
        style="background-image: url('<?php echo $levels_background['url']; ?>)">
        <div class="dark-bg position-absolute"></div>

        <div class="container position-relative">
            <?php
            if ($levels_title) {
                echo '<h2 class="levels__title">';
                echo $levels_title;
                echo '</h2>';
            } else {
                echo '<h2 class="levels__title">Как мы будем сотрудничать</h2>';
            }
            ?>

            <ul class="levels__list gallery-list levels-list d-grid">
                <?php if (have_rows('new_level')): 
                    $i = 1;
                    ?>
                    <?php while (have_rows('new_level')):
                        the_row();
                        $level_index = $i++;              
                        $level_text = get_sub_field('level_text');
                        ?>

                        <li class="levels-list__item level-item"> 
                            <div class="level-item__block" data-index="<?php echo $level_index; ?>">
                                <h3 class="level-item__num">
                                    <?php echo $level_index; ?>
                                </h3>
                            
                                <div class="level-item__text">
                                    <?php echo $level_text; ?>
                                </div>                               
                            </div>                            
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

            <a class="button" href="https://forum.u0618804.plsk.regruhosting.ru/quizle/66e3f8e590846/">сделать заказ</a>
        </div>
    </section>

<?php }