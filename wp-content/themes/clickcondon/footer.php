<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
		
		<script type="text/javascript" src='<?php bloginfo( 'template_url' ); ?>/js/jquery-1.11.0.min.js'></script>
		<script type="text/javascript" src='<?php bloginfo( 'template_url' ); ?>/js/main.min.js'></script>
		<script type="text/javascript" src='<?php bloginfo( 'template_url' ); ?>/js/envioycostos.min.js'></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.quovolver.min.js"></script>

		<section class='nosotros'>
			<div class='nuestrasMarcas'>
				<h3>nuestras marcas</h3>
				<img src='<?php bloginfo( 'template_url' ); ?>/images/marca-durex.png' alt='Condones Durex'>
				<img style="display:none;" src='<?php bloginfo( 'template_url' ); ?>/images/marca-id.png' alt='Lubricantes ID'>
				<img style="display:none;" src='<?php bloginfo( 'template_url' ); ?>/images/marca-lifestyles.png' alt='Condones LifeStyles'>
			</div>

			<?php include_once ('page-templates/confiaron.php'); ?>

		</section>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class='vieneAlguien-btn'>
				<p>viene alguien!!!</p>
			</div>

			<div style='display:none;' class='vieneAlguien-falso'>
				<span><< volver</span>
				<img src="<?php bloginfo( 'template_url' ); ?>/images/vieneAlguien/valorUF.png">
			</div>

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<p>Derechos reservados <strong>clickcondon.com</strong></p>
				<p>Sitio 100% diseñado con <span class='sprite'></span> del bueno.</p>
				<nav>
					<h6>Servicio al cliente</h6>
					<ul>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/politica-de-privacidad/ " title='Politíca de Privacidad'>Politíca de Privacidad</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/porque-nosotros/" title='¿Porque Nosotros?'>¿Porque Nosotros?</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/condiciones-de-uso/" title='Condiciones de Uso'>Condiciones de Uso</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/envios-y-devoluciones/" title='Envíos y Devoluciones'>Envíos y Devoluciones</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/contactanos/" title='Contactanos'>Contactanos</a>
						</li>
					</ul>
				</nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

	<?php include_once ('page-templates/analytics.php'); ?>

</body>
</html>
