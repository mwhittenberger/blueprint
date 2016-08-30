<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

 <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
        <div class="container"><div class="row">
			<h1 style="color:<?php the_field('title_color'); ?>"><?php the_title();?></h1>
        </div></div>
      </header>

		<div class="container"><div class="row">

			<div class="col-md-offset-1 col-md-10 primary-copy">
				<?php the_content();?>
				<img src="/wp-content/themes/bootstrapwp-87/img/inner-page-copy-footer.jpg" id="after-copy" class="img-responsive">

				<?php the_field('additional_content'); ?>
			</div>

		</div></div>


<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>