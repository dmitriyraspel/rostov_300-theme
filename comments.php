<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rostov
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
      
      <h3 class="comments-title">
					<?php
					$comments_number = get_comments_number();
					if ( '1' === $comments_number ) {
						esc_html_e( 'One Comment', 'raspel' );
					} else {
						printf(
							esc_html(
								/* translators: 1: number of comments */
								_nx(
									'Comment %s',
									'Комментарии - %s',
									$comments_number,
									'number of comments',
									'raspel'
								)
							),
							esc_html( number_format_i18n( $comments_number ) )
						);
					}
					?>
				</h3><!-- .comments-title -->


		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 100,
				)
			);
			?>
		</ol><!-- .comment-list -->

      
		<?php
      the_comments_navigation(); 
      
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'raspel' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	
	
	comment_form();
	?>

</div><!-- #comments -->
