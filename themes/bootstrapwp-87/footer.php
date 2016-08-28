<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: February 4, 2012
 */
?>
    <!-- End Template Content -->

</div><!--/.container -->
</div><!--/#content-wrapper -->

<footer style="background:<?php echo (is_front_page() ? "#4f91cd" : "#88888a"); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-2 hidden-sm hidden-xs">
				<img src="/wp-content/themes/bootstrapwp-87/img/footer-logo.png" class="img-responsive" id="footer-logo">
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6 footer-divs">
				<p>
					Ft Lauderdale<br>
					<span class="thinner">1551 Sawgrass Corporate Parkway,<br>Suite 410, Ft. Lauderdale, FL 33323</span><br>
					T <a href="tel:9548355531">954.835.5531</a><br>
					F <a href="tel:9548355570">954.835.5570</a><br>
					<a href="http://blueprintregulatory.com" class="thinner">blueprintregulatory.com</a>
				</p>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-6 footer-divs">
				<p>
					New York<br>
					<span class="thinner">347 5th Avenue,<br>Suite 1402-123<br>New York, NY 10016</span><br>
					T <a href="tel:6462052279">646.205.2279</a><br>
					F <a href="tel:6468614621">646.861.4621</a>
				</p>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-6 footer-divs">
				<p>
					San Francisco<br>
				</p>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6 footer-divs">
				<?php wp_nav_menu( array('menu' => 'footer') ); ?>
			</div>
			<div class="col-md-1 col-sm-12">
				<ul id="footer-socials">
					<li><a href="http://www.facebook.com/pages/Boca-Raton-FL/Blueprint-Regulatory-Consulting/105177316185809" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true" style="color: <?php echo (is_front_page() ? "#4f91cd" : "#88888a"); ?>"></i></a></li>
					<li><a href="http://www.linkedin.com/companies/906664/Blueprint%20Regulatory%20Consulting" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true" style="color: <?php echo (is_front_page() ? "#4f91cd" : "#88888a"); ?>"></i></a></li>
				</ul>
			</div>
		</div>
	</div> <!-- /container -->
</footer>

<?php wp_footer(); ?>

  </body>
</html>