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
						
						<div class="maps">
							<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=Sint+Anthoniusstraat+1F++2153+BA+Nieuw-Vennep&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=47.080837,93.164063&amp;ie=UTF8&amp;hq=&amp;hnear=Sint+Anthoniusstraat+1F,+2153+BA+Nieuw-Vennep,+Nederland&amp;t=m&amp;z=14&amp;ll=52.263988,4.633949&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=Sint+Anthoniusstraat+1F++2153+BA+Nieuw-Vennep&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=47.080837,93.164063&amp;ie=UTF8&amp;hq=&amp;hnear=Sint+Anthoniusstraat+1F,+2153+BA+Nieuw-Vennep,+Nederland&amp;t=m&amp;z=14&amp;ll=52.263988,4.633949" style="color:#0000FF;text-align:left">Grotere kaart weergeven</a></small>
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