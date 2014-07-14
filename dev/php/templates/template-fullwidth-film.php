<?php
/*
Template Name: Page Full-width filmTemp
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="Content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="page-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="Content-entry">
<div class="video video-one">
<object type="application/x-shockwave-flash" data="<?php echo get_stylesheet_directory_uri(); ?>/img/film.swf" width="400" height="330">
	<param name="movie" value="<?php echo get_stylesheet_directory_uri(); ?>/img/film.swf" />
	<param name="quality" value="high"/>
</object>					
</div>

					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>

