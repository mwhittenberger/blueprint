<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>

   <div class="container">

      
 <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1><?php _e( 'This is Embarrassing', 'bootstrapwp' ); ?></h1>
        <p class="lead"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'bootstrapwp' ); ?></p>
      </header>
	  
        <div class="row content">
<div class="span8">
					

<div class="well">
					<?php get_search_form(); ?>

</div><!--/.well -->


<?php get_footer(); ?>