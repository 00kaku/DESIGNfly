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
	<div class="site__navbar">
		<nav>

		</nav>
	</div>

<!-- Site hero shwon only on front page-->
<?php
	if( is_front_page() ) :
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
			<div>
				<h2 class="service__heading"><span class="highlight-text">Advertising</span></h2>
				<p class="service__desc">Lorem ipsum dolor sit amet, consectetur...</p>
			</div>
		</div>

		<div class="service">
			<div class="service__imageContainer2"></div>
			<div>
				<h2 class="service__heading"><span class="highlight-text">Multemedia</span></h2>
				<p class="service__desc">Lorem ipsum dolor sit amet, consectetur...</p>
			</div>
		</div>

		<div class="service">
			<div class="service__imageContainer3"></div>
			<div>
				<h2 class="service__heading"><span class="highlight-text">Photography</span></h2>
				<p class="service__desc">Lorem ipsum dolor sit amet, consectetur...</p>
			</div>
		</div>
	</div>
</div>
