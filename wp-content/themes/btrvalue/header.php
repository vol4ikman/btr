<?php
	$site_logo   = get_field( 'site_logo','option' );
	$site_title  = get_field( 'site_title','option' );
	$site_slogan = get_field( 'site_slogan','option' );
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head data-type="dev">
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php /* MANIFEST - https://developer.mozilla.org/en-US/docs/Web/Manifest */ ?>
	<link rel="manifest" href="<?php echo THEME; ?>/manifest.json">
	<?php /* Please create favicon files with http://iconogen.com/ */ ?>
	<link rel="shortcut icon" href="<?php echo THEME; ?>/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME; ?>/images/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo THEME; ?>/images/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo THEME; ?>/images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo THEME; ?>/images/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo THEME; ?>/images/favicon/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="<?php echo THEME; ?>/images/favicon/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="<?php echo THEME; ?>/images/favicon/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="<?php echo THEME; ?>/images/favicon/widetile.png" />
	<meta name="msapplication-square310x310logo" content="<?php echo THEME; ?>/images/favicon/largetile.png" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="off-canvas-wrapper">

	<div class="off-canvas position-<?php echo FLOAT;?>" id="offCanvas<?php echo FLOAT;?>" data-off-canvas>
		<div class="mobile_menu_wrapper">
			<?php //mobile_menu(); ?>
		</div>
	</div>

	<div class="off-canvas-content" data-off-canvas-content>

		<div class="site-wrapper">

			<header class="header clear" role="banner">

				<button type="button" class="button mobile-menu-button mobile-menu-js-trigger" data-toggle="offCanvas<?php echo FLOAT;?>">Menu</button>

				<div class="header-inner clear">

					<nav class="nav" role="navigation">
						<?php header_menu(); ?>
					</nav>

					<?php if( $site_logo ) : ?>
						<div class="logo">
							<a href="<?php echo home_url(); ?>" role="logo" title="<?php echo $site_title; ?> - <?php echo $site_slogan; ?>">
								<img src="<?php echo $site_logo['url']; ?>" alt="<?php echo $site_logo['alt']; ?>">
								<div class="site-title">
									<?php if( $site_title ) : ?>
										<span class="main-title os-hebrew"><?php echo $site_title; ?></span>
									<?php endif; ?>
									<?php if( $site_slogan ) : ?>
										<span class="slogan"><?php echo $site_slogan; ?></span>
									<?php endif; ?>
								</div>
							</a>
						</div>
					<?php endif; ?>

				</div>

			</header>
