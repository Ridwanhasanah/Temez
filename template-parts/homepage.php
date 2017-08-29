<?php
/**
 * Template Name: Home Page
 */

get_header();
?>
<div><img class="imghome" src="<?php echo get_template_directory_uri();?>/images/home.jpg"/></div>
<div class="row1">
	<div class="row1text">
		<h1>Recent Post</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<?php 
			$custom_post = new WP_Query('cat=4&posts_per_page=2');
			if ($custom_post->have_posts() ) {
				
				while ($custom_post->have_posts() ) {
					$custom_post->the_post();?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
					<?php
				}
			}else{
				echo 'Nothing Post';
			} ?>
		</div>
		<div class="row1img"><img src="<?php echo get_template_directory_uri();?>/images/rel.jpg"/></div>
	</div>
	<div class="clear"></div>
	<?php
	get_footer();
	?>