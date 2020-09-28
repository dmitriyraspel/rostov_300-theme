<?php
/**
 * aside site-flyout
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rostov
 */

?>

<aside id="site-flyout" class="site-flyout">
	<div class="site-flyout-inner">
	
		<div class="header">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</div><!-- /.header -->

		<nav id="mobile-navigation" class="mobile-menu-wrap" aria-label="Mobile Menu"> 
			<!-- перевод? -->
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'mobile',
						'menu_id'        => 'mobile-menu',
						'menu_class'     => 'mobile-menu',
						'depth'          => '2',
						'container'		  => false, 
					)
				);
			?>
		</nav><!-- /.mobile-menu-wrap -->

		<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'raspel' ); ?>">
		
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


	</div><!-- /.site-flyout-inner -->
</aside><!-- /.site-flyout -->
