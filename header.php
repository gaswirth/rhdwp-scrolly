<?php
/**
 * RHD Base
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage rhd
 */
?>

<!DOCTYPE html>
	<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>     <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!--
									   _  _
                                      | || |
         ____  ___   _   _  ____    _ | || | _    ___   _   _   ___   ____
        / ___)/ _ \ | | | ||  _ \  / || || || \  / _ \ | | | | /___) / _  )
       | |   | |_| || |_| || | | |( (_| || | | || |_| || |_| ||___ |( (/ /
       |_|    \___/  \____||_| |_| \____||_| |_| \___/  \____|(___/  \____)

                                     _               _
                                    | |             (_)
                                  _ | |  ____   ___  _   ____  ____    ___
                                 / || | / _  ) /___)| | / _  ||  _ \  /___)
                                ( (_| |( (/ / |___ || |( ( | || | | ||___ |
                                 \____| \____)(___/ |_| \_|| ||_| |_|(___/
                                                       (_____|

		-->

		<title><?php wp_title(); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<?php
		$nav_args_sb = array(
			'menu_location' => 'primary',
			'menu_id' => 'site-navigation-sb',
			'menu_class' => 'site-navigation',
			'container' => 'nav',
			'container_id' => 'site-navigation-sb-container'
		);
		?>

		<div id="rotate-device">
			<div class="rotate-content">
				<p>Please rotate your device.</p>
				<img class="rotate" src="<?php echo RHD_IMG_DIR; ?>/rotate.png" alt="Rotate your device to portrait orientation">
			</div>
		</div>

		<div class="sb-slidebar sb-right sb-style-push">
			<?php wp_nav_menu( $nav_args_sb ); ?>
		</div>

		<div id="navbar">
			<div class="navbar-inner">
				<h1 id="site-title"><a href="#top"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
					$nav_args = array(
						'menu_location' => 'primary',
						'menu_id' => 'site-navigation',
						'menu_class' => 'site-navigation',
						'container' => 'nav',
						'container_id' => 'site-navigation-container',
						'walker' => new RHD_Walker_Nav
					);
					wp_nav_menu( $nav_args );
				?>

				<button id="hamburger" class="sb-toggle-right c-hamburger c-hamburger--htx">
					<span>Toggle nav</span>
                </button>
			</div>
		</div>

		<div id="page" class="hfeed site sb-site-container">
			<main id="main" class="clearfix">