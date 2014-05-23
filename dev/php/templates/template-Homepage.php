<?php
/*
Template Name: temp Homepage
*/
?>

<?php get_header(); ?>


		<div class="Content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="page-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="Content-entry">

<!-- ---------------------- Content entry --------------------- -->

<div class="u-gridContainer">
	<div class="intro-box">
		<div class="intro-img"></div>
		<div class="intro-name"><p>Hugo Heerebout</p></div>
		<div class="intro-text">
			<p>Ik ben geboren en getogen in Rotterdam en na het Gymnasium Erasmianum in deze stad heb ik Nederlands recht gestudeerd aan de Erasmus Universiteit Rotterdam.</p>
		</div>
	</div>
	
	
	<div class="vid-padbox">
		<div class="vid-title"><p>Video impressie</p></div>
		<div class="vid-box">
			<div class="vid-video">
				<iframe width="720" height="480" src="//www.youtube.com/embed/we1UbtaMCqM" frameborder="0" allowfullscreen></iframe>

				<!-- voor het geval het toch wel anders moet...
				<div class="youtube-vid">
					<a target="_blank" href="http://www.youtube.com/watch?v=we1UbtaMCqM"><p>Bekijk de video<p></a>					</div>
				-->
			</div>
		</div>
	</div>
</div>


<div class="homeQ-outerWrapper">
	<div class="u-gridContainer">
		<div class="homeQ-wrapper">
			<div class="homeQ-box">
				<div class="homeQ-title"><p>Wat kunnen wij voor u betekenen?</p></div>
				<div class="homeQ-content">
					<ul>
						<li><a href="#">Arbeidsrecht</a></li>
						<li><a href="#">Personen- en familierecht</a></li>
						<li><a href="#">Ondernemingsrecht</a></li>
						<li><a href="#">Geldvorderingen</a></li>
						<li><a href="#">Bestuursrecht</a></li>
						<li><a href="#">Onroerend goed</a></li>
						<li><a href="#">Strafrecht</a></li>
						<li><a href="#">Erfrecht</a></li>				
					</ul>
				</div>
			</div>
			
			<div class="homeQ-box">
				<div class="homeQ-title two"><p>Werkgebied</p></div>
				<div class="homeQ-content">
					<p>Heerebout Advocatuur met advocaat Hugo Heerebout, is gevestigd in Nieuw-Vennep, bij Hoofddorp en Schiphol, tussen Haarlem en Amsterdam in en slechts vijf minuten rijden van rijksweg A4.</p>
				</div>
				
				
				<div class="homeQ-title four"><p>Opzoek naar hulp bij ontslag?</p></div>
				<div class="homeQ-content four">
					<a href="#">Klik hier voor uw ontslagwebsite</a>
				</div>
			</div>
		
		
			<div class="homeQ-box">
				<div class="homeQ-title three"><p>Nieuws</p></div>
				<div class="homeQ-content three">
					<a href="#">Celstraf voor oplichting en diefstal pinpas.</a>
					<hr>
					<a href="#">Bestuursvoorzitter KPMG Nederland Jurgen van Breukelen stapt op als signaal te breken met verleden.</a><hr>
					<a href="#">De eKantonrechter nu ook toegankelijk voor. </a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ---------------------------------------------------------- -->


					<?php the_content(); ?>
					<!-- <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?> -->
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>

<?php get_footer(); ?>