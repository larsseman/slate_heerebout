<?php
/*
Template Name: temp Contact page
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
					<hr>
					<div class="Contact-adres">
						<div class="adres-info">
							<p>Heerebout Advocatuur</p>
							<p>Sint Anthoniusstraat 1F</p>
							<p>2153 BA Nieuw-Vennep</p>
						</div>
						
						<div class="maps"></div>
						</div>
					</div>
				
					<div class="HR-block"><hr></div>
												
					<div class="Contact-form">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>