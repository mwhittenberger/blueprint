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

	<div class="video-hero jquery-background-video-wrapper demo-video-wrapper">
		<video data-bgvideo="true" class="jquery-background-video" autoplay muted loop poster="fallback.jpg">
			<source src="CityClips.mp4" type="video/mp4" />
        </video>
		<div class="container">
			<div class="video-hero--content">
				<h1>RegulatoRy and  compliance solutions  foR the financial  seRvices industRy.</h1>
                <a href="/our-philosophy/"><button>Learn More</button></a>
			</div>
		</div>
	</div>



	<section id="front-company">
		<div class="container"><div class="row">
		<div class="triangle"></div>
		<h2>Company</h2>

		<?php the_content(); ?>

		<a href="/our-philosophy/"><button>Learn More</button></a>
		</div> </div>
	</section>

	<section id="front-services">
		<div class="container"><div class="row">
				<div class="triangle"></div>
				<h2>Services</h2>

				<div class="col-md-3 col-sm-6 no-pad">
					<div class="black-overlay">
						Brokers/Dealers<br>
						<a href="/broker-dealer/"><button>Learn More</button></a>
					</div>
					<div class="details" style="background-position-x: 100% !important; background: url('wp-content/themes/bootstrapwp-87/img/front-brokers-bg.jpg') no-repeat"></div>
				</div>
				<div class="col-md-3 col-sm-6 no-pad">
					<div class="black-overlay">
						Futures & Commodities<br>
						<a href="/futures-and-commodities/"><button>Learn More</button></a>
					</div>
						<div class="details" style="background: url('wp-content/themes/bootstrapwp-87/img/front-futures-bg.jpg') no-repeat"></div>
				</div>
				<div class="col-md-3 col-sm-6 no-pad">
					<div class="black-overlay">
						Private Funds<br>
						<a href="/hedge-funds/"><button>Learn More</button></a>
					</div>
					<div class="details" style="background-position-x: 100% !important; background: url('wp-content/themes/bootstrapwp-87/img/front-private-bg.jpg') no-repeat"></div>
				</div>
				<div class="col-md-3 col-sm-6 no-pad">
					<div class="black-overlay">
						Investment Advisors<br>
						<a href="/investment-advisors/"><button>Learn More</button></a>
					</div>
					<div class="details" style="background: url('wp-content/themes/bootstrapwp-87/img/front-investment-bg.jpg') no-repeat"></div>
				</div>
				<script>
					jQuery('.no-pad').hover(
						function() {
							//alert("!");
							//jQuery( this ).fadeOut( 100 );
							jQuery( this ).find('.black-overlay').fadeIn( 300 );
						},
						function() {
							jQuery( this ).find('.black-overlay').fadeOut( 700 );
						}
					);
				</script>

			</div> </div>
	</section>

	<section id="front-testimonials">
		<div class="container"><div class="row">
			<?php echo do_shortcode('[KentoTestimonial]'); ?>
		</div></div>
	</section>

	<section id="front-regulatory">
		<div class="container"><div class="row">
				<h2>Regulatory Updates</h2>

				<div id="regulatory-box">
					<div id="rb-image"></div>
					<div id="rb-text">

						<h3>Securities Exchange Commission (SEC) - News</h3>
						<?php echo do_shortcode("[wp-rss-aggregator source='123']"); ?>

						<h3>Financial Industry Regulatory Authority (FINRA) - News</h3>
						<?php echo do_shortcode("[wp-rss-aggregator source='155']"); ?>

						<h3>U.S. Commodity Futures Trading Commission - News</h3>
						<?php echo do_shortcode("[wp-rss-aggregator source='162']"); ?>

						<h3>National Futures Association (NFA) - News</h3>
						<?php echo do_shortcode("[wp-rss-aggregator source='169']"); ?>

					</div>
				</div>

			</div> </div>
	</section>

	<section id="front-contact">
		<div class="container"><div class="row">
				<h2>Contact Us</h2>
				<p>
					Please complete this form to find out how BRC’s customized compliance solutions and services can help you.
					<br>Fields marked with <span style="color:red;">*</span> are required.
				</p>

				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>


			</div> </div>
	</section>







<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>