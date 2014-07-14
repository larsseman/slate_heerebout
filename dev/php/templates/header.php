<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/favicon.ico">

	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png" />  
	<link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png" /> 

    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>

	<script type="text/javascript" src="//use.typekit.net/zac6ujv.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >

    <!-- Main navigation -->
    
	<div class="Nav-wrapper">
		<div class="u-gridContainer">
			<a href="/home/" class="Logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heerebout_logo2.png"></a>
			<div class="right-nav-content">
				<div class="Nav-tel">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tel.png" class="tel-png">
					<h5>0252 - 620 557</h5>
					<p>info@heerebout-advocatuur.nl</p>
				</div>
			    <?php include 'includes/navigation.php'; ?>
			</div>
		</div>
	</div> <!-- Main nav -->
	
<?php if(is_front_page() || is_page_template('template-landingspagina.php')) { ?>
	<div class="Header">
		<div class="Header-img">
			<div class="extended-content two">
				<p>Heerebout Advocatuur is een gerenommeerd kantoor in de regio Haarlemmermeer</p>
			</div>

			<div class="extended-content landingspagina-two">
				<p>Heeft u vragen? Neem dan gerust <a href="/contact/">contact</a> met ons op.</p>
			</div>

			<div class="u-gridContainer">
				<div class="extended-content one">
					<p>Heerebout Advocatuur is een gerenommeerd kantoor in de regio Haarlemmermeer</p>
				</div>

				<div class="extended-content landingspagina">
					<p>Heeft u vragen? Neem dan gerust <a href="/contact/">contact</a> met ons op.</p>
				</div>
			</div>		
		</div>
	</div> <!-- Header -->
	
<?php } ?>