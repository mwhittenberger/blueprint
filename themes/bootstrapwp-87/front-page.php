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


	<section id="front-video">
		Video Will Go Here
	</section>

	<section id="front-company">
		<div class="container"><div class="row">
		<div class="triangle"></div>
		<h2>Company</h2>

		<p>Blueprint Regulatory Consulting (BRC) is a full service regulatory compliance consulting firm for the financial services industry. BRC “architects” custom compliance solutions for broker-dealers, investment advisors, private funds and commodities/futures firms. In a constantly changing regulatory environment, BRC is distinctively qualified to provide solutions that mitigate risk and are unique to the specific needs of each client. The direct regulatory compliance experience of our consultants is unparalleled in the industry.</p>

		<a href="/our-philosophy/"><button>Learn More</button></a>
		</div> </div>
	</section>

	<section id="front-services">
		<div class="container"><div class="row">
				<div class="triangle"></div>
				<h2>Services</h2>

				<div class="col-md-3 col-sm-6 no-pad">
					<div style="background-position-x: 100% !important; background: url('wp-content/themes/bootstrapwp-87/img/front-brokers-bg.jpg') no-repeat">
						Brokers/Dealers<br>
						<a href="/broker-dealer/"><button>Learn More</button></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 no-pad">
					<div style="background: url('wp-content/themes/bootstrapwp-87/img/front-futures-bg.jpg') no-repeat">
						Futures & Commodities<br>
						<a href="/futures-and-commodities/"><button>Learn More</button></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 no-pad">
					<div style="background-position-x: 100% !important; background: url('wp-content/themes/bootstrapwp-87/img/front-private-bg.jpg') no-repeat">
						Private Funds<br>
						<a href="/hedge-funds/"><button>Learn More</button></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 no-pad">
					<div style="background: url('wp-content/themes/bootstrapwp-87/img/front-investment-bg.jpg') no-repeat">
						Investment Advisors<br>
						<a href="/investment-advisors/"><button>Learn More</button></a>
					</div>
				</div>

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
					<div id="rb-text"></div>
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




    <?php the_content();?>


<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>