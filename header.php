<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rostov
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'raspel' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header__inner">
				
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
				
				<p class="site-description"><?php bloginfo('description'); ?></p>
			</div><!-- .site-branding -->

			<div id="site-navigation" class="header-navigation-wrapper">

				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'rostov' ); ?>">
				
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . rostov_get_icon_svg( 'link' ),
								'depth'          => 1,
								'container'		  => false,
							)
						);
						?>

					</nav><!-- .social-navigation -->
				<?php endif; ?>

					<button id="menu-toggle" class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
						<div class="burger-inner">
							<span><?php esc_html_e( 'Mobile Menu', 'raspel' ); ?></span>
						</div>
					</button>


			</div><!-- .header-navigation-wrapper -->
					
			<nav class="main-navigation" >
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'primary-menu',
						'depth'          => '2',
						'container'		  => false, 
					)
				);
				?>
			</nav><!-- .main-navigation -->
			
		</div><!-- /.header__inner -->
	</header><!-- #masthead -->
