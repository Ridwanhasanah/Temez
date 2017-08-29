<?php
/**
 * Template part for displaying posts
 *
 */

/*
-the_ID() untuk menampilkan ID item saat ini di WordPress Loop.
-post_class() menampikan kelas untuk post div (css)
-get_permalink() Mengambil permalink untuk postingan atau post ID saat ini.
-esc_url() untuk ke amanan url 
-ridwanprogrammer_posted_on(); menampilkan postingan waktu pembuatan post or page

-sprintf(
				wp_kses(
					 //translators: %s: Name of current post. Only visible to screen readers 
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ridwanprogrammer' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)

			menampilkan  continue reading +nama page or post


-wp_link_pages() Menampilkan link halaman untuk posting paginasi (termasuk Quicktag satu kali atau lebih). 
Tag ini harus berada dalam Loop.

-ridwanprogrammer_entry_footer() Menampilkan link Edit pada post dan page
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php ridwanprogrammer_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
<?php 
if (is_single()) { 
	the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ridwanprogrammer' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

}else{
?>
	<div class="entry-content">
		<?php echo get_the_excerpt();?><a href="<?php the_permalink();?>"> Lanjut baca...</a><?php //the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ridwanprogrammer' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php } ?>
	<footer class="entry-footer">
		<?php ridwanprogrammer_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
