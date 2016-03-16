<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>

					<div class="row">

						<div class="medium-3 columns navigation">
							<h4>Navigation</h4>
							<ul class="menu-footer">
								<li><a href="#">Accueil</a></li>
								<li><a href="#">Qui sommes-nous</a></li>
								<li><a href="#">Produits</a></li>
								<li><a href="#">Contactez-nous</a></li>
							</ul>
						</div>

						<div class="medium-6 columns coordonnees">
							<h4>Nos coordonnés</h4>
							<div class="row">
								<div class="medium-2 columns hide-for-small-only">
									<img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/logo-mini.png" />
								</div>
								<div class="medium-10 columns">
									<p>129, rue des marronniers</p>
									<p>BP 50464 - 38304 Bourgoin-Jallieu Cedex</p>
									<p>Tél : <span>04 74 93 42 42</span> - Fax : <span>04 74 93 44 88</span></p>
								</div>
							</div>
						</div>

						<div class="medium-3 columns">
							<h4>Newsletter</h4>
							<input type="email" class="email" placeholder="saisir une adresse mail" />
							<input type="submit" class="bouton" value="Je m'abonne" />
						</div>

					</div>

				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>
		<div class="copyright-mentions-legales text-center">
			<div class="row">
				<div class="small-12 columns">
					© 2016 MATREL™ Designed by Marina Gurrieri  •  <a href="#!">Mentions légales</a>.
				</div>
			</div>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
