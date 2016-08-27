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

				<div class="col-md-3 no-pad">
					<div style="background: url('wp-content/themes/bootstrapwp-87/img/front-brokers-bg.jpg') no-repeat">
						Brokers/Dealers<br>
						<a href="#"><button>Learn More</button></a>
					</div>
				</div>
				<div class="col-md-3 no-pad">
					<div style="background: url('wp-content/themes/bootstrapwp-87/img/front-futures-bg.jpg') no-repeat">
						Futures & Commodities<br>
						<a href="#"><button>Learn More</button></a>
					</div>
				</div>
				<div class="col-md-3 no-pad">
					<div style="background: url('wp-content/themes/bootstrapwp-87/img/front-private-bg.jpg') no-repeat">
						Private Funds<br>
						<a href="#"><button>Learn More</button></a>
					</div>
				</div>
				<div class="col-md-3 no-pad">
					<div style="background: url('wp-content/themes/bootstrapwp-87/img/front-investment-bg.jpg') no-repeat">
						Investment Advisors<br>
						<a href="#"><button>Learn More</button></a>
					</div>
				</div>

			</div> </div>
	</section>






    <?php the_content();?>


<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>