<!Doctype html>
<html <?php language_attributes();?>> <!-- Menampilkan encoding yang ada di feed setting>reading -->
<head>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( '', 'ridwanprogrammer' ); ?></a>
	<!-- esc_html_e() Menampilkan teks terjemahan yang telah lolos untuk penggunaan aman dalam keluaran HTML. -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();//menampilkan logo yang terhubung ke home
			if ( is_front_page() && is_home() ) : /*jika frontpage dan home */ ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		
			<?php
				$args = array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				);

				wp_nav_menu($args);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<!-- 
-language_attributes() Menampilkan encoding yang ada di feed setting>reading
-bloginfo('name') menampilkan nama atau judul blog
-body_class()  menampilkan  class pada element body (css)
-the_custom_logo() menampilkan cidtome logo seperti di home
- is_front_page() Apakah situs sedang dipratinjau di Penyesuai.
-is_home()  halaman home
-wp_nav_menu() menampilkan navigasi menu
 -->