<?php
/*
Template Name: Page Full-width
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
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

					<?php if(is_page('bedankt-voor-uw-bericht')) {?>
						<!-- Google Code for Lead Conversion Page -->
						<script type="text/javascript">
						/* <![CDATA[ */
						var google_conversion_id = 1069441510;
						var google_conversion_language = "en";
						var google_conversion_format = "1";
						var google_conversion_color = "666666";
						var google_conversion_label = "mT_FCKbOZRDmw_n9Aw";
						var google_conversion_value = 1.00;
						var google_remarketing_only = false;
						/* ]]> */
						</script>
						<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
						</script>
						<noscript>
						<div style="display:inline;">
						<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1069441510/?value=1.00&amp;label=mT_FCKbOZRDmw_n9Aw&amp;guid=ON&amp;script=0"/>
						</div>
						</noscript>
					<?php } ?>						
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
