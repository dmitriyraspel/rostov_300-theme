<?php
/**
 * The main template file
 *
 * This is the template for blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rostov
 */

get_header();
?>

	<main id="primary" class="site-main site-main__home">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="post-wrapper container">

					<div class="entry-media__home">
						<?php raspel_post_thumbnail(); ?>
					</div><!-- /.entry-media -->

					<div class="post-wrapper-content">
						<div class="entry-header__home">
							
						<h2><a href="<?php the_permalink() ?>" title=""><?php the_title() ?></a></h2>	
							
						<div class="entry-meta entry-meta-top">
							
							<?php rostov_entry_meta_top(); ?>

						</div><!-- .entry-meta -->
						
					</div><!-- /.entry-header -->

						<div class="post-text">
							<p><?php the_excerpt() ?></p>
						</div><!-- /.post-text -->

						<footer class="entry-footer__home">
							<?php rostov_entry_footer(); ?>
						</footer><!-- .entry-footer -->

					</div><!-- /.post-wrapper-content -->

					</div><!-- /.post-wrapper -->

				</article><!-- #post-<?php the_ID(); ?> -->

         <?php
			endwhile;

         the_posts_navigation();
         // the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

   </main><!-- #main -->

<?php
get_footer();
