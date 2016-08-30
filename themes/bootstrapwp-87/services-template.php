<?php
/**
 * Template Name: Services Template
 *
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

				<?php if( have_rows('services_link') ):
					while ( have_rows('services_link') ) : the_row(); ?>

					<a href="#<?php the_sub_field('modal_id'); ?>" data-toggle="modal"><?php the_sub_field('link_copy'); ?></a>

						<br>

					<?php endwhile; endif; ?>

			</div>

		</div></div>


	<?php if( have_rows('services_link') ):
		while ( have_rows('services_link') ) : the_row(); ?>

			<div id="<?php the_sub_field('modal_id'); ?>" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

						</div>
						<div class="modal-body">
							<?php the_sub_field('modal_copy'); ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>


		<?php endwhile; endif; ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>