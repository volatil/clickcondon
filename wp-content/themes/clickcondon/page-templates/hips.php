
<section class='hips'>
	<p><strong>Placer</strong> & <strong>Seguridad</strong></p>
	<!-- BUSCADOR -->
	<div class='buscador'>
		<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
			<fieldset>
				<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder='¿ Que Buscas ?' />
				<button><span class='sprite'></span>Buscar</button>
			</fieldset>
		</form>
	</div>
	<!-- /BUSCADOR -->
</section>
