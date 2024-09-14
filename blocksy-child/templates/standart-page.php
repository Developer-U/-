<?php
/*
Template Name: Стандартная страница
*/
get_header();
?>

<section class="standart-page">
    <div class="container">
        <h1>
            <?php
            the_title();
            ?>
        </h1>

        <div class="post">
            <?php
            the_content();
            ?>
        </div>
    </div>
</section>

<?php get_footer();