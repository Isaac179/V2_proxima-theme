	<?php wp_footer(); ?>

<section class="presentacion">

        <div class="flex-item2">
		<div class="row footer-proxima">
	<div class="row">
	</div>
		<a href="/sass-wp"><img class="logo-proxima-footer" src="<?php bloginfo('template_url'); ?>/images/proxima-logo2.svg"></a>

		<div class="cuadricula">
			<div class="cuadro grande-10 chico-12 direccion-texto">
				<p>San Antonio 3004 Toluca, Edo de México Horario Lunes - Domingo 9:00 - 16:00 hrs</p>
			</div>
			<div class="cuadro grande-2 chico-12 direccion-texto">
				<a href="">Ir a mapas</a>
			</div>
		</div>
	</div>

	<div class="row footer-proxima mapa-footer">
		<!--<iframe src="https://www.google.com/maps/d/embed?mid=1ZHZU4F297jgNs-odOQP7vWkdrs3jK8xe"></iframe>-->
		<iframe src="https://snazzymaps.com/embed/329881" width="100%" height="100%" style="border:none;"></iframe>
	</div>
	<div class="row fondo-footer">
		<div class="cuadricula">
			<div class="cuadro grande-2 chico-12 cuadro-fondo1">
				<p>Próxima</p>
			</div>
			<div class="cuadro grande-10 chico-12 cuadro-fondo2">
				<p>Terminos y Condiciones | Todos los derechos reservados</p>
			</div>
		</div>
	</div>
	<!--Funcionalidad auto play para Nosotros - Isaac 210721-->
	<script>
		const swiper = new Swiper('.swiper-container', {
		// Parámetros del control deslizante
		speed:1000,
		direction: 'horizontal',
		loop: true,
		autoplay:
		{
		delay: 5000,
		},
		loop: true,

		});
	</script>

	<!--TITULAR SWIPER PARA PORTADA ISAAC 220721-->
	<script>
		const swiper = new Swiper('.swiper-container', {
		// Optional parameters
		direction: 'vertical',
		loop: true,

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
			el: '.swiper-scrollbar',
		},
		});
	</script>

        </div>
    </section>

	</body>
</html>