<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Designify
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
<div class="site">
<header id="masthead" class="site-header" role="banner">
	<div class="site-branding">
		<?php
		if ( get_theme_mod( 'custom_logo' ) ) {
			the_custom_logo();
		}
		?>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'blank-theme' ); ?>">
		<?php
		wp_nav_menu(
			[
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'primary-menu menu',
				'depth'          => 3,
			]
		);
		?>
		<div>
		<input type="text" />
		<i class="fa fa-search" aria-hidden="true"></i>
		</div>
	</nav><!-- #site-navigation -->
	<a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
		<i class="fa fa-bars fa-2x"></i>
	</a>
</header><!-- #masthead -->

<div id="content" class="site-content">
<!-- Site hero shwon only on front page-->
<?php
	if(is_front_page()):
?>
		<div class="site__hero">
			<div class="site__heroSlider">
				<div class="site__heroSlider__text">
					<h1>
						Gearing up the ideas
					</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Cras odio velit, sodales et vulputate non, blandit nec risus.
					</p>
				</div>
			</div>
		</div>
<?php endif ?>


<!-- Services -->
<div class="services__container">
	<div class="services">
		<div class="service">
			<div class="service__imageContainer"></div>
			<div class="service__text">
				<h2 class="service__heading"><span class="highlight-text">Advertising</span></h2>
				<p class="service__desc">Lorem ipsum dolor sit amet, consectetur...</p>
			</div>
		</div>

		<div class="service">
			<div class="service__imageContainer2"></div>
			<div class="service__text">
				<h2 class="service__heading"><span class="highlight-text">Multemedia</span></h2>
				<p class="service__desc">Lorem ipsum dolor sit amet, consectetur...</p>
			</div>
		</div>

		<div class="service">
			<div class="service__imageContainer3"></div>
			<div class="service__text">
				<h2 class="service__heading"><span class="highlight-text">Photography</span></h2>
				<p class="service__desc">Lorem ipsum dolor sit amet, consectetur...</p>
			</div>
		</div>
	</div>
</div>
