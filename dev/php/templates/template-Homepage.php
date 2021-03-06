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
			<p>Ik ben geboren en getogen in Rotterdam en na het Gymnasium Erasmianum in deze stad heb ik Nederlands recht gestudeerd aan de Erasmus Universiteit Rotterdam</p>
			<a href="/hugo-heerebout/" class="lees-meer">Lees meer</a>
		</div>
	</div>

	<div class="intro-box-mob">
		<div class="intro-img-mob"></div>
		<div class="intro-name-mob"><p>Hugo Heerebout</p></div>
		<div class="intro-text-mob">
			<p>Ik ben geboren en getogen in Rotterdam en na het Gymnasium Erasmianum in deze stad heb ik Nederlands recht gestudeerd aan de Erasmus Universiteit Rotterdam</p>
			<a href="/hugo-heerebout/" class="lees-meer">Lees meer</a>
		</div>
	</div>
</div>


<div class="u-gridContainer mar-top">

	<div class="particulier-top">
		<div class="index-box">
			<div class="index-title"><p>Particulier</p></div>
			<div class="index-content">
				<a href="/arbeidsrecht/">Arbeidsrecht</a>
				<a href="/personen-en-familierecht/">Personen- en familierecht</a>
				<a href="/strafrecht/">Strafrecht</a>
				<a href="/erfrecht/">Erfrecht</a>
				<a href="/rechtsbijstandverzekering/">Rechtsbijstandverzekering</a>
			</div>
		</div>
	</div>
	
	<div class="index-img particulier">
	</div>





	<div class="zakelijk-top">
		<div class="index-box">
			<div class="index-title"><p>Zakelijk</p></div>
			<div class="index-content">
				<a href="/ondernemingsrecht/">Ondernemingsrecht</a>
				<a href="/geldvorderingen/">Geldvorderingen</a>
				<a href="/bestuursrecht/">Bestuursrecht</a>
				<a href="/onroerend-goed/">Onroerend goed</a>
				<a href="/spaanstalige-dienstverlening/">Servicios Legales en Español</a>
			</div>
		</div>
	</div>

	<div class="index-img zakelijk">
	</div>

	
</div><!-- u-gridcontainer -->


<div class="homeQ-outerWrapper">
	<div class="u-gridContainer">
		<div class="homeQ-wrapper">
		
			<div class="homeQ-box">
				<div class="homeQ-title two"><p>Werkgebied</p></div>
				<div class="homeQ-content">
					<p>Heerebout Advocatuur met advocaat Hugo Heerebout, is gevestigd in Nieuw-Vennep. De dichtstbijzijnde advocaat voor Nieuw-Vennep, Hoofddorp, Schiphol. Centraal in de Haarlemmermeer, naast rijksweg A4.</p>
				</div>
			</div>
		
		
			<div class="homeQ-box">
				<div class="homeQ-title three"><p>Nieuws</p></div>
				<div class="homeQ-content three">
					<a target="_blank" href="http://www.rechtspraak.nl/Organisatie/Rechtbanken/Gelderland/Nieuws/Pages/PIJ-maatregelmetdriemaandenverlengd.aspx">PIJ-maatregel met drie maanden verlengd.</a>
					<hr>
					<a target="_blank" href="http://juridischdagblad.nl/content/view/13029/53/">Vrijspraak militair voor wurgingspoging.</a>
				</div>
				
				<div class="homeQ-title four"><p>Opzoek naar hulp bij ontslag?</p></div>
				<div class="homeQ-content four">
					<a target="_blank" href="http://www.advocaatbijontslag.nl/">Klik hier voor de ontslagwebsite</a>
				</div>
			</div>
<!-- ============================= -->
     <!-- tweede video optie -->			
			<div class="homeQ-box">
				<div class="homeQ-title"><p>Video impressie</p></div>
				<div class="homeQ-content">
			<!-- --------------------- -->
					<div class="vid-box">
						<div class="vid-video">
							<a target="_blank" href="/video/">
								<div class="youtube-vid bg">	
									<!-- <div class="youtube-vid"></div> -->
								</div>
							</a>
						</div>
					</div>
			<!-- --------------------- -->
				</div>
			</div>
<!-- ============================= -->
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
