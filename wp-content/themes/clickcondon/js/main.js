$(document).ready(function(){

	console.log('>> main.js');
// HEADER
	// Mueve el section.hips sobre #main para quedar a un 100%
	$('#main.site-main').before($('.hips'));
	// Menu mobile
	$('header nav  .menuMobile').click(function(){
		$('header nav div ul').slideToggle();
	});

// CARRO
	// Al agregar productos al carro los agrega falsamente

	$('.default_product_display .productcol form .wpsc_buy_button_container input').click(function(){
		cantidadActualCarro 	= parseInt($('header nav .carroCompra a span.cantidad').html())
		cantidadAgregada 		= parseInt($(this).parent().parent().find('input:first-of-type').val());
		$('header nav .carroCompra a span.cantidad').html(cantidadActualCarro+cantidadAgregada);
	});

// GRILLAPRODUCTOS
	// Agrega clase en la grilla de productos para mejor manejo
	if ( $('.productosLista').size() > 0 ) {
		$('body').addClass('seccionProductosLista');
	};
	// saca el CLP y los centavos
	$('.archive .default_product_display .productcol form .wpsc_product_price .wpsc-product-price span').each(function(){
		precioFinal = $(this).text().split(',')[0].split(' ')[2]
		$(this).html('$ ' + precioFinal);
	});
	$('.seccionProductosLista #content .productosLista .default_product_display .productcol form .wpsc_product_price .wpsc-product-price span').each(function(){
		precioFinal = $(this).text().split(',')[0].split(' ')[2]
		$(this).html('$ ' + precioFinal);
	});
	$('.archive .default_product_display .wpsc_product_price span.oldprice').each(function(){
		precioAntiguoProducto = $(this).text().split(',')[0].split(' ')[2]
		$(this).html('$ ' + precioAntiguoProducto);
	});
	$('.seccionProductosLista #content .productosLista .default_product_display .productcol form .wpsc_product_price .wpsc-product-old-price span').each(function(){
		precioAntiguoProducto = $(this).text().split(',')[0].split(' ')[2]
		$(this).html('$ ' + precioAntiguoProducto);
	});
	$('.archive .default_product_display .productcol form .wpsc_product_price .wpsc-product-you-save span').each(function(){
		precioAhorrasProducto = $(this).text().split(',')[0].split(' ')[2]
		$(this).html('$ ' + precioAhorrasProducto);
	});
	$('.seccionProductosLista #content .productosLista .default_product_display .productcol form .wpsc_product_price .wpsc-product-you-save span').each(function(){
		precioAhorrasProducto = $(this).text().split(',')[0].split(' ')[2]
		$(this).html('$ ' + precioAhorrasProducto);
	});

// DETALLE PRODUCTO
	// quita las , y CLP de cada precio
	DPprecios = $('.single_product_display form .wpsc_product_price');
	DPprecioAntiguo = DPprecios.find('.wpsc-product-old-price span').text().split(',')[0].split(' ')[2]
	DPprecios.find('.wpsc-product-old-price span').text(DPprecioAntiguo);
	DPprecioAhorras = DPprecios.find('.wpsc-product-you-save span').text().split(',')[0].split(' ')[2]
	DPprecios.find('.wpsc-product-you-save span').text(DPprecioAhorras);
	DPprecioFinal = DPprecios.find('.wpsc-product-price span').text().split(',')[0].split(' ')[2]
	DPprecios.find('.wpsc-product-price span').text(DPprecioFinal)

	// Facebook Share por cada url 
	urlActual = location.href
	fbShare = "<iframe src='http://www.facebook.com/plugins/like.php?href=http%3A%2F%2F" + urlActual + "&amp;layout=standard&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp' style='overflow:hidden;width:100%;height:80px;' scrolling='no' frameborder='0' allowTransparency='true'></iframe>";
	$('.compartir .facebook').html(fbShare);

// MI CUENTA
	// Agrega <span> dentro de  los tabs, para los iconos
	$($('.content-area .site-content .hentry .entry-content .wrap .user-profile-links a')[0]).prepend("<span class='sprite historial'></span>");
	$($('.content-area .site-content .hentry .entry-content .wrap .user-profile-links a')[1]).prepend("<span class='sprite perfil'></span>");

// PASOS DE COMPRA
	// CONFIRMAR COMPRA
	d 			= new Date();
	diaDeHoy 	= d.getDate();
	mesdeHoy = d.getMonth();
	if ( diaDeHoy == 24 ) {
		diaDeHoy = "1"
	} else if ( diaDeHoy == 25 ) {
		diaDeHoy = "2"
	} else if ( diaDeHoy == 26 ) {
		diaDeHoy = "3"
	} else if ( diaDeHoy == 27 ) {
		diaDeHoy = "4"
	} else if ( diaDeHoy == 28 ) {
		diaDeHoy = "5"
	} else if ( diaDeHoy == 29 ) {
		diaDeHoy = "6"
	} else if ( diaDeHoy == 30 ) {
		diaDeHoy = "7"
	} else if ( diaDeHoy == 31 ) {
		diaDeHoy = "8"
	} else {
		$('#checkout_page_container p.fechaEntrega .dia').html(diaDeHoy+7);
	};
	if ( mesdeHoy == 7 ) {
		mesdeHoy = "Agosto"
	} else if ( mesdeHoy == 8 ) {
		mesdeHoy = "Septiembre"
	} else if ( mesdeHoy == 9 ) {
		mesdeHoy = "Octubre"
	} else if ( mesdeHoy == 10 ) {
		mesdeHoy = "Noviembre"
	} else if ( mesdeHoy == 11 ) {
		mesdeHoy = "Diciembre"
	};
	$('#checkout_page_container p.fechaEntrega .mes').html(mesdeHoy);

	// COMPRA FINALIZADA
	// saca el CLP y los centavos
	compraFinalizadaPrecio = $('.wpsc-transaction-results-wrap p:last-of-type').text().split(',')[0].split('CLP')[1]
	$('.wpsc-transaction-results-wrap p:last-of-type').html('Total : $ ' + compraFinalizadaPrecio );

// FOOTER
	// prefooter => confiaron en nosotros => cambio colores botones azules de twitter
	$('.confiaron .quotes').quovolver({
		children    : 'li',
		transitionSpeed : 200,
		autoPlay    : true,
		equalHeight   : false,
		navPosition   : 'above',
		navPrev     : true,
		navNext     : true,
		navNum      : true,
		navText     : true,
		navTextContent  : 'Opinión @a de @b'
	});

	// prefooter => incribibir => placeholder
	$('section.prefooter .inscribir .wpcf7 form > p input[type=text]').attr('placeholder','Ejemplo@correo.com');

// CANDY's
	// viene alguien
	$('footer .vieneAlguien-btn').click(function(){
		$('.vieneAlguien-falso').show();
		titleOriginal = $('title').text();
		$('title').text('Servicio de Impuestos Internos');
	});
	$('.vieneAlguien-falso').click(function(){
		$(this).hide();
		$('title').text(titleOriginal);
	});

});
