$(document).ready(function(){
	//calcula o nº de dias em um mês e ano
	var mes = $('#mes').find(':selected').data('id');
	var ano = $('#ano').find(':selected').val();
	var dias = daysInMonth(mes,ano);

	filldays(dias);

	//cada vez que o usuário traca o mês ou o ano, recalcula
	$('#mes').change(function(){
		mes = $('#mes').find(':selected').data('id');
		dias = daysInMonth(mes,ano);

		filldays(dias);
	});

	$('#ano').change(function(){
		ano = $('#ano').find(':selected').val();
		dias = daysInMonth(mes,ano);

		filldays(dias);
	});

	//só permite envio se o lugar estiver definido
	$('.btn').prop('disabled',true);

	var ok = false;
	$('#cidade').blur(function(){
		if( !(!$(this).val()) && !(!$('#end').val()) )
		{
			ok=true;
		}
		if(ok)
		{
			$('.btn').prop('disabled',false);
		}
	});
	$('#end').blur(function(){
		if( !(!$(this).val()) && !(!$('#cidade').val()) )
		{
			ok=true;
		}
		if(ok)
		{
			$('.btn').prop('disabled',false);
		}
	});
});

//preenche automaticamente a barra de dias de acordo com o nº calculado de dias em um mês e ano
function filldays(days)
{
	$('#dia').find('option').remove();
	var i;
	for(i=1;i<=days;i++)
	{
		$('#dia').append($('<option>',{
			value:i,
			text:i
		}));
	}
}

function daysInMonth(month,year) 
{
   return new Date(year, month, 0).getDate();
}