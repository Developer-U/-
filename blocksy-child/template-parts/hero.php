<?php
/**
* Display Block Hero
* Первый экран
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');

if (have_rows('new_hero_slide')) { ?>
    <section class="dark position-relative hero">
        <div class="dark-bg position-absolute"></div>
<?php } else { ?>
    <section class="dark position-relative hero non-slider">        
<?php }
?>

    <div class="hero__box position-absolute">
        <div class="swiper hero__slider hero-slider">
            <div class="swiper-wrapper">

                <?php if (have_rows('new_hero_slide')): ?>
                    <?php while (have_rows('new_hero_slide')):
                        the_row();
                        $hero_slide_image = get_sub_field('hero_slide_image');
                        ?>

                        <article class="swiper-slide hero-slider__slide"
                            style="<?php if ($hero_slide_image): ?>background-image: url(<?php echo $hero_slide_image['url']; ?> ) <?php else: ?>background: #1C2540;<?php endif; ?>">
                        </article>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>   

    <div class="container-fluid position-relative">
        <div class="hero__wrapper hero-wrapper d-grid align-items-end justify-content-between">
            <div class="hero-wrapper__block">
                <h1 class="hero-wrapper__title">
                    <?php 
                    if($hero_title) {
                        echo $hero_title; 
                    } else {
                        echo 'Выездной бар';
                    }
                    ?>
                </h1>

                <?php
                if($hero_subtitle) {
                    echo '<h4 class="hero-wrapper__subtitle">';
                    echo $hero_subtitle;
                    echo '</h4>';  
                } ?>              
            </div>
            
            <button class="button hero-wrapper__btn" data-popup-open="zakaz-popup">заказать</button>
        </div>      
    </div>
</section>

