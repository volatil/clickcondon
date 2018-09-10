<?php
/**
 * Template Name: Teaser
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

//get_header(); ?>

<?php include_once('teaserHeader.php') ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div class='enganche'>
		<h1>ClickCondon</h1>
		<h3><strong>Placer</strong> & <strong>Seguridad</strong></h3>
		<p>La cantidad y variedad que tu quieres de la forma más facil.</p>
		<p>Envianos tu correo y te notificaremos cuando estemos online.</p>
	</div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content teaser" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					/*
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					*/
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php include_once('teaserFooter.php') ?>

