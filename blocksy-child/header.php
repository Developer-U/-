<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

 

?><!doctype html>
<html <?php language_attributes(); ?><?php echo blocksy_html_attr() ?>>
<head>
	<?php do_action('blocksy:head:start') ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php do_action('blocksy:head:end') ?>
</head>

<?php
	ob_start();
	blocksy_output_header();
	$global_header = ob_get_clean();
?>

<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>

<a class="skip-link show-on-focus" href="<?php echo apply_filters('blocksy:head:skip-to-content:href', '#main') ?>">
	<?php echo __('Skip to content', 'blocksy'); ?>
</a>

<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
?>

<?php
$logo_color = get_field('logo_color', 'options');
$tel = get_field('tel-link', 'options');
$phone_num = get_field('tel', 'options');

?>

	<header class="header <?php if( !is_front_page()) {?>dark<?php } ?>">
		<div class="container-fluid">
			<div class="header__wrapper d-flex justify-content-between align-items-center">
				<a href="/" class="header__logo col-auto">
					<img src="<?php echo $logo_color['url']; ?>" alt="<?php echo $logo_color['alt']; ?>">
				</a>

				<div class="header__center header-center">
					<!-- Здесь вставляем template-part -->
					<?php 
					if(is_front_page()) {
						get_template_part('template-parts/nav', 'menu'); 
					} else {
						echo '<ul id="primary-menu" class="menu other-pages-menu">';
						echo '<li><a href="/">на главную</a></li>';
						echo '</ul>';
					}
					?>
				</div>

				<?php
					if( $tel && $phone_num ): ?>			
					<a class="header__tel col-auto" href="tel:+7<?php echo $tel; ?>" >
						<?php echo $phone_num; ?>
					</a>		
				<?php endif; 
				?>				
			</div>
		</div>
	</header>
