<?php
/**
 *
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: April 11, 2012
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );


  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'bootstrapwp' ), max( $paged, $page ) );

  ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=medium-dpi">

    <link rel="profile" href="http://gmpg.org/xfn/11" />


    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


  <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>  data-spy="scroll" data-target=".subnav" data-offset="50">

  <header class="navbar-fixed-top site-header">
	<div id="tiptop">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul id="phone-numbers">
						<li>Ft. Lauderdale:&nbsp;&nbsp;<a href="tel:9548355531">954.835.5531</a></li>
						<li class="nav-divider">|</li>
						<li>New York:&nbsp;&nbsp;<a href="tel:6462052279">646.205.2279</a></li>
						<li class="nav-divider">|</li>
						<li>San Francisco:&nbsp;&nbsp;<a href="tel:0000000000">000.000.0000</a></li>
						<li id="clientlogin">&nbsp;<a href="#">Client Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container"><div class="row">
    <div class="navbar">
      <div class="navbar-inner">
        <div class="">
           <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img src="/wp-content/themes/bootstrapwp-87/img/logo.png" id="logo">
          </a>
          <?php
           /** Loading WordPress Custom Menu with Fallback to wp_list_pages **/
      wp_nav_menu( array( 'walker' => new bootstrapwp_walker_nav_menu(), 'menu' => 'Primary Menu', 'container_class' => 'nav-collapse', 'menu_class' => 'nav', 'menu_id' => 'main-menu')); ?>
        </div>
      </div>
    </div>
	</div> </div>
  </header>
    <!-- End Header -->
      <div id="content-wrapper">
        <div>
              <!-- Begin Template Content -->