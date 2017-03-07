<!-- <h1>this is header.php</h1> -->
<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://use.fontawesome.com/5b03f1e1fd.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

			<?php if (is_page('about')){
				$class = "about-banner";
			}

			elseif (is_home()){
				$class = "home-banner";
			}

			?>

				<div class="<?php echo $class ?>">
  					<div class= "navbar">

  					<?php if (is_home() || is_page("about")): ?>
  						<div class="nav-logo">
    					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="home-logo" alt="Home Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/images/logos/inhabitent-logo-tent-white.svg"></a>
    					</div>

    				<?php else: ?>
    					<div class="nav-logo">
    					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="home-logo" alt="Home Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/images/logos/inhabitent-logo-tent.svg"></a>
    					</div>

    				<?php endif ?>

    				<?php if (is_home() || is_page("about")): ?>
    					<nav id="site-navigation" class="main-navigation nav-items white-text uppercase navbar" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<!-- <i class="fa fa-search" aria-hidden="true"></i> -->
						</nav><!-- #site-navigation --> 
  					</div>

  					<?php else: ?>
    					<nav id="site-navigation" class="main-navigation  green-text uppercase navbar" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<!-- <i class="fa fa-search" aria-hidden="true"></i> -->
						</nav><!-- #site-navigation --> 
  					</div> 
  					<?php endif ?>

  					<?php  if(is_page('about')){ ?>
  						<h2 class="about-title uppercase white-text">About</h2>
  					<?php }   ?>
  				</div>

  				



				<!-- <div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
