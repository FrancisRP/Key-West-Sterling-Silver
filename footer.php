<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hive-starter
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<section class="border border-gray-400 footer-content">
	<div class="container">
		<div class="row">
			<div class="col-6 col-lg-3 border-lg-right border-gray-400">
				<div class="footer-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php $footer_logo = get_field('footer_logo', 'option'); ?>
								<?php if ($footer_logo): ?>
							<?php echo wp_get_attachment_image($footer_logo, 'full', '', array("class" => "site-branding__image")); ?>
							<?php else: ?>
								<img src="<?php echo get_theme_root_uri(); ?>/hive-starter/images/logo.png" alt="Logo" />
							<?php endif; ?>
						</a>
						<?php if( have_rows('left_contact_box', 'option') ): ?>
							<?php while( have_rows('left_contact_box','option') ): the_row(); ?>
								<p class="mb-0 mt-5 questions" style="color:<?php the_sub_field('text_color'); ?>;"><?php the_sub_field('text'); ?></p>
									<?php if( have_rows('phone') ): ?>
										<?php while( have_rows('phone') ): the_row(); ?>
										<a class="text-medium" href="tel:<?php the_sub_field('phone_number_link'); ?>"><?php the_sub_field('phone_number'); ?></a>
										<?php endwhile; ?>
									<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
							<?php if( have_rows('social_links', 'option') ): ?>
								<ul class="nav social mt-3">
								<?php while( have_rows('social_links','option') ): the_row(); ?>
										<li class="nav-item">
											<a class="nav-link" href="<?php the_sub_field('social_media_link'); ?>"><?php the_sub_field('social_media_icon'); ?></a>
										</li>
								<?php endwhile; ?>
								</ul>
						<?php endif; ?>	

				</div><!-- .footer-branding -->
			</div>
			<div class="col-6 col-lg-3  border-lg-right border-gray-400 pl-lg-5">
				<?php
				wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_class'      => 'nav flex-column',
				'container'       => 'nav',
				'container_id'    => 'footer-menu',
				) );
				?>
			</div>
			<div class="col-6 col-lg-3  border-lg-right border-gray-400 pl-lg-5">
				<?php
				wp_nav_menu( array(
				'theme_location' => 'footer-secondary',
				'menu_class'      => 'nav flex-column',
				'container'       => 'nav',
				'container_id'    => 'footer-secondary-menu',
				) );
				?>
			</div>
			<div class="col-6 col-lg-3 pl-lg-5 news-letter">
				<h3>Join Our Newsletter</h3>
				<p style="color:<?php the_field('tagline_color', 'option'); ?>;" class="mt-4"><?php the_field('tagline', 'option'); ?></p>
				<?php echo do_shortcode('[gravityform id="3" title="false" description="false]"'); ?>
			</div>
		</div><!-- .site-info -->
	</div><!-- .container -->
	</section>
	<section class="border-bottom border-gray-400">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<p class="copyright my-3">Copyright&copy; <?php echo date('Y'); ?> Key West Sterling Silver. All Rights Reserved</p>
				</div>
			</div>
		</div>
	</section>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<?php
$het_options = get_option( 'het_settings', '' );
if(is_array($het_options)) {
	echo $het_options['het_textarea_field_3'];
}
?>

<!-- GOOGLE MAPS Update "AIzaSyDL7vurQlrzklvkZ5Olwas-Esg2ku8ZRY0" with your API -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL7vurQlrzklvkZ5Olwas-Esg2ku8ZRY0&callback=initMap"
    async defer></script>
</body>
</html>
