<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

	</head>
	<body <?php body_class(); ?>>
			<nav class="navbar tape-nav hidden-sm-down">
				<button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
					&#9776;
				</button>
				<div class="collapse navbar-toggleable-sm" id="exCollapsingNavbar2">
					<a class="navbar-brand hidden-xs-down" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo Tape" /></a>
					<div class="shortcut hidden-md-down">
						<a href="<?php echo site_url(); ?>/faq">?</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="nav-item active" >
							<a class="nav-link" href="<?php if ( !is_front_page() ) { echo site_url(); } ?>">INICIO <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php if ( !is_front_page() ) { echo site_url(); } ?>#QuienesSomos">¿DE QUE SE TRATA?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php if ( !is_front_page() ) { echo site_url(); } ?>#QueOfrecemos">COMPRAR</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php if ( !is_front_page() ) { echo site_url(); } ?>#Capacitate">CURSOS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php if ( !is_front_page() ) { echo site_url(); } ?>#Contactanos">CONTACTO</a>
						</li>
					</ul>
					<div class="repr">
						<h5>Producto de origen Alemán <img class="hidden-sm-down germ"src="<?php echo get_template_directory_uri(); ?>/img/german-flag.svg" alt="Bandera alemana" width="15px" height="15px" / ></h5>
						<h5 class="pl-1">Representantes oficiales en Argentina <img class="hidden-sm-down germ" src="<?php echo get_template_directory_uri(); ?>/img/arg-flag.svg" alt="Bandera Argentina" width="15px" height="15px" / ></h5>
						<h5>Certificado por ANMAT <img class="hidden-sm-down germ" src="<?php echo get_template_directory_uri(); ?>/img/asm.png" alt="Bandera Argentina" width="15px" height="15px" / ></h5>
					</div>
				</div>

			</nav>
		<a class="navbar-brand2 hidden-md-up pb-2" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-res.svg" alt="Logo Tape" /></a>
