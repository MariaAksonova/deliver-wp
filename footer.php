<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deliver
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container">
				<div class="main-footer row">
					<div class="site-description col-md-5 col-xs-12">
						<?php the_custom_logo(); ?>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida quam quis nunc rutrum placerat.
							Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.</p>
					</div>
					<div class="contact-info col-md-2 col-xs-12">
						<h2>Contact info</h2>
						<p>222 Ave C South
							Saskatoon, Saskatchewan
							Canada S7K 2N5</p>
						<p>info@deliver.ca</p>
						<h3>1.306.222.3456</h3>
					</div>
					<div class="footer-nav col-md-2 col-xs-12">
						<h2>Quick Links</h2>
						<?php wp_nav_menu(['theme_location' => 'foot-nav', 'menu_class' => 'nav nav-pills']); ?>
					</div>
					<div class="newsletter col-md-3 col-xs-12">
						<h2>Newsletter</h2>
						<?php $recent = new WP_Query("pagename=footer-form"); while($recent->have_posts()) : $recent->the_post();?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
