$(document).ready(function(){

	console.log('>> teaser.js');

	// Agrega clase a los input
	$($('.entry-content form input:visible')[0]).addClass('correo');
	$($('.entry-content form input:visible')[1]).addClass('enviar');

	// Ordena el html del form
	$($('.correo').parent()).before($('.enviar'));

});
