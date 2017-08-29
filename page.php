<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ridwanprogrammer
 */

get_header(); ?>
<!-- ini adalah halaman page, semua page yang ada akan mempunyai tampilan seperti ini -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' ); /*asal page berada di template-parts/content*/
				echo 'INi Halaman Page <br>';

				echo wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ridwanprogrammer' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					);  

				//echo esc_html_e( sprintf( esc_html__( 'Try looking in the monthly archives.   %$s ', 'ridwanprogrammer' ), convert_smilies( ':)' ) ), 'ridwanprogrammer' );
				echo '<pre>';
				print_r( ridwanprogrammer_entry_footer() );
				echo '</pre>';

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template(); //untuk menampikan template komentar

				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
/*
-comments_open() Tag Bersyarat ini memeriksa apakah komentar diperbolehkan untuk Pos yang sekarang atau Post ID yang diberikan. Ini adalah fungsi boolean, artinya mengembalikan TRUE atau FALSE.

-get_comments_number() Ambil jumlah komentar yang dimiliki pos.

-comments_template() untuk menampikan template komentar

ini aneh kenapa ada function commenr pada page, kemungkinan page ini juga di gunakan untuk menampung
post , atau seprti page blog
*/