<?php
/**
 * Footer
 *
 * @package WordPress
 * @subpackage Visual Composer Starter
 * @since Visual Composer Starter 1.0
 */

if ( visualcomposerstarter_is_the_footer_displayed() ) : ?>
	<?php visualcomposerstarter_hook_before_footer(); ?>
	<div class="footer-newsletter">
		<div class="container">
			<h3 class="footer-newsletter__in-the-loop">In the Loop</h3>
			<p class="footer-newsletter__description">Sign up for our newsletter to stay “In the Loop” on issues facing the agriculture industry, rural Tennessee and specifically, Tennessee Farm Bureau. </p>
			<div><a href="/in-the-loop-newsletter" class="footer-newsletter__button">Newsletter Signup</a></div>
			</div>
	</div>
	<footer id="footer">
		<?php
		if ( get_theme_mod( 'vct_footer_area_widget_area', false ) ) :
			$footer_columns = get_theme_mod( 'vct_footer_area_widgetized_columns', 1 );
			$footer_columns_width = 12 / $footer_columns;
			?>
			<div class="footer-widget-area">
				<div class="<?php echo esc_attr( visualcomposerstarter_get_content_container_class() ); ?>">
					<div class="row">
						<div class="col-md-<?php echo esc_attr( $footer_columns_width ); ?>">
							<?php if ( is_active_sidebar( 'footer' ) ) : ?>
								<?php dynamic_sidebar( 'footer' ); ?>
							<?php endif; ?>
						</div>
						<?php for ( $i = 2; $i <= $footer_columns; $i ++ ) : ?>
							<div class="col-md-<?php echo esc_attr( $footer_columns_width ); ?>">
								<?php if ( is_active_sidebar( 'footer-' . $i ) ) : ?>
									<?php dynamic_sidebar( 'footer-' . $i ); ?>
								<?php endif; ?>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	
		<div class="<?php echo esc_attr( visualcomposerstarter_get_content_container_class() ); ?>" >
			<div class="footer-bottom">
				<?php if ( get_theme_mod( 'vct_footer_area_social_icons', false ) ) : ?>
					<div class="footer-right-block" style="height: auto !important;">
					<div>
						<p style="text-align: center;">Stay Connected!</p>
						<div class="footer-socials">
							<ul>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_facebook', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_facebook', '' ) ); ?>"><span class="vct-icon-facebook-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_twitter', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_twitter', '' ) ); ?>"><span class="vct-icon-twitter-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_linkedin', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_linkedin', '' ) ); ?>"><span class="vct-icon-linkedin-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_instagram', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_instagram', '' ) ); ?>"><span class="vct-icon-instagram-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_pinterest', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_pinterest', '' ) ); ?>"><span class="vct-icon-pinterest-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_youtube', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_youtube', '' ) ); ?>"><span class="vct-icon-youtube-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_vimeo', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_vimeo', '' ) ); ?>"><span class="vct-icon-vimeo-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_flickr', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_flickr', '' ) ); ?>"><span class="vct-icon-flickr-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_github', '' ) ) ) : ?>
									<li>
										<a target="_blank" rel="noreferrer" href="<?php echo esc_url( get_theme_mod( 'vct_footer_area_social_link_github', '' ) ); ?>"><span class="vct-icon-github-with-circle"></span></a>
									</li>
								<?php endif; ?>
								<?php if ( strlen( get_theme_mod( 'vct_footer_area_social_link_email', '' ) ) ) : ?>
									<li>
										<a href="<?php echo esc_url( 'mailto:' . antispambot( get_theme_mod( 'vct_footer_area_social_link_email', '' ) ) ); ?>"><span class="vct-icon-mail-circle"></span></a>
									</li>
								<?php endif; ?>

							</ul>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="footer-center-block">
				<?php if ( has_nav_menu( 'secondary' ) ) : ?>
						<div class="footer-menu">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'secondary',
							) );
							?>
						</div>
					<?php endif; ?>
				</div>
				<div class="footer-left-block">
					<!-- <p class="copyright">
						<span>
							<?php /* translators: 1. date, 2. blog name */
							//printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'visual-composer-starter' ), esc_html( date( 'Y' ) ), esc_html( get_bloginfo( 'name' ) ) ); ?></span>
						<span>
							<?php /* translators: 1. link opening tag, 2. link opening tag, 3. link closing tag */
							//printf( esc_html__( 'Proudly powered by %1$sVisual Composer%3$s and %2$sWordPress%3$s', 'visual-composer-starter' ), '<a href="https://visualcomposer.com/?utm_campaign=vc-theme&utm_source=vc-theme-front&utm_medium=vc-theme-footer" target="_blank" rel="noreferrer">', '<a href="https://wordpress.org" target="_blank" rel="noreferrer">', '</a>' ); ?></span>
					</p> -->
					<div class="footer-logo">
						<img src="<?php echo get_stylesheet_directory_uri(  ); ?>/assets/images/fb-logo.svg" />
						
					</div>
					<?php echo the_field('footer_address', 'options'); ?>
				

				</div>
				
				<?php do_action( 'visualcomposerstarter_after_footer_copyright' ); ?>
			</div>
			<?php echo the_field('footer_copywright', 'options'); ?>
		</div>
	</footer>
	<?php visualcomposerstarter_hook_after_footer(); ?>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
