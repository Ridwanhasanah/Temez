<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ridwanprogrammer
 */
/*
-esc_html_e() seperti menulis teks html biasa atau echo . Menampilkan teks terjemahan yang telah lolos untuk penggunaan aman dalam keluaran HTML.

-get_header() menampilkan header
-get_search_form() Menampilkan form pencarian
-the_widget( 'WP_Widget_Recent_Posts' ) menampilkan widget post terakhir

-wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 2, //menampilkan jumlah kategori
							) )
untuk menampikan list kategori

-the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" ) menampilkan drodown bulan
-convert_smilies( ':)' ) untuk menampilkan emoticon senyum

-the_widget() adlah fungsi utk menampilkan widget di luar sidebar yang dapat di letakan di manapun pada template
selengkapnya https://codex.wordpress.org/Function_Reference/the_widget

*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ridwanprogrammer' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ridwanprogrammer' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'ridwanprogrammer' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'ridwanprogrammer' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
