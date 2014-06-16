<?php
/*
Template Name: temp Landings-pagina
*/
?>


<?php get_header(); ?>
	<div class="u-gridContainer Content-wrap">
		<div class="Content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						
				
				<div class="Content-entry">

<!-- ----------------------------------------- -->				
					<div class="intro-box landingspagina">
						<div class="intro-img"></div>
						<div class="intro-name"><p>Hugo Heerebout</p></div>
						<div class="intro-text">
							<p>Ik ben geboren en getogen in Rotterdam en na het Gymnasium Erasmianum in deze stad heb ik Nederlands recht gestudeerd aan de Erasmus Universiteit Rotterdam.</p>
						</div>
					</div>
				
					<div class="intro-box-mob landingspagina">
						<div class="intro-img-mob"></div>
						<div class="intro-name-mob"><p>Hugo Heerebout</p></div>
						<div class="intro-text-mob">
							<p>Ik ben geboren en getogen in Rotterdam en na het Gymnasium Erasmianum in deze stad heb ik Nederlands recht gestudeerd aan de Erasmus Universiteit Rotterdam.</p>
						</div>
					</div>
<!-- ----------------------------------------- -->
					<div class="Content--withSidebar">
						<div class="page-title">
							<h2><?php the_title(); ?></h2>
						</div>	
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
		
		<div class="Sidebar-wrap">
			<div class="Sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
