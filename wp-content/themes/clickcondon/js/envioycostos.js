$(document).ready(function(){

	console.log('>> enviosycostos.js');

	valorDurex 							= '500'
	valorLifeStyle 						= '500'
	valorLifeStylePremium 				= '800'
	valorOne 							= '500'
	valorLubricanteId 					= '900'
	valorContraEntrega 					= '0'
	valorChilexpressRegiones 			= '1200'
	cantidadDurex 						= $('.enviosycostos .entry-content > div > div table tbody .condonDurex td input');
	cantidadLifeStyle 					= $('.enviosycostos .entry-content > div > div table tbody .condonLifestyle td input');
	cantidadLifeStylePremium 			= $('.enviosycostos .entry-content > div > div table tbody .condonLifestylePremium td input');
	cantidadOne 						= $('.enviosycostos .entry-content > div > div table tbody .condonOne td input');
	cantidadLubricante 					= $('.enviosycostos .entry-content > div > div table tbody .lubricanteId td input');
	totalCondonDurex 					= $('.enviosycostos .entry-content > div > div table tbody .condonDurex td span');
	totalCondonLifeStyle 				= $('.enviosycostos .entry-content > div > div table tbody .condonLifestyle td span');
	totalCondonLifeStylePremium 		= $('.enviosycostos .entry-content > div > div table tbody .condonLifestylePremium td span');
	totalCondonOne 						= $('.enviosycostos .entry-content > div > div table tbody .condonOne td span');
	totalLubricanteId 					= $('.enviosycostos .entry-content > div > div table tbody .lubricanteId td span');
	totalCostoEnvio 					= $('.enviosycostos .entry-content > div > div table tbody .costoEnvio td span');

	cantidadDurex.keyup(function(){
		totalCondonDurex.text(cantidadDurex.val()*valorDurex);
		sumaTodo();
	});
	cantidadLifeStyle.keyup(function(){
		totalCondonLifeStyle.text(cantidadLifeStyle.val()*valorLifeStyle);
		sumaTodo();
	});
	cantidadLifeStylePremium.keyup(function(){
		totalCondonLifeStylePremium.text(cantidadLifeStylePremium.val()*valorLifeStylePremium);
		sumaTodo();
	});
	cantidadOne.keyup(function(){
		totalCondonOne.text(cantidadOne.val()*valorOne);
		sumaTodo();
	});
	cantidadLubricante.keyup(function(){
		totalLubricanteId.text(cantidadLubricante.val()*valorLubricanteId);
		sumaTodo();
	});
	$('.enviosycostos .entry-content select').on('change',function(){
		if ( this.value == "ChilexpressRegiones" ) {
			totalCostoEnvio.text(valorChilexpressRegiones);
			sumaTodo();
		}else{
			totalCostoEnvio.text('0');
			sumaTodo();
		}
	});

	function sumaTodo() {
		totalTodo = Number(totalCondonDurex.text()) + Number(totalCondonLifeStyle.text()) + Number(totalCondonOne.text()) + Number(totalLubricanteId.text()) + Number(totalCostoEnvio.text())
		$('.enviosycostos .entry-content > div > div > div .totalDeseado span').text(totalTodo);
	}


});
