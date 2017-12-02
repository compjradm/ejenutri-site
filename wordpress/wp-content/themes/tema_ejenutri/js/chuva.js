$(document).ready(function()
	{
		$(window).stellar();

		//carousel
		var next = $("#prox").data('thumb');
		var prev = $("#anter").data('thumb');

		$(".carousel").owlCarousel({
			navigation:true,
		    navigationText: ["<img src='"+prev+"''>","<img src='"+next+"'>"],
			items:4,
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:false
		});

		$(".next").click(function(){
		  $(".owl-carousel").trigger('owl.next');
		});
		$(".prev").click(function(){
		  $(".owl-carousel").trigger('owl.prev');
		});

		//smooth scroll
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) 
			{
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) 
			  {
				$('html, body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}
		});

		//form validate
		$("#data").mask("99/99/9999",{placeholder:" "});
		$("#tel").mask("(99) 9999-9999?9",{placeholder:" "});
		$("#hora").mask("99:99",{placeholder:" "});

		$('#send').prop('disabled',true);
		var nome_flag=false;
		var mail_flag=false;
		var tel_flag=false;
		var data_flag=false;
		var hora_flag=false;
		var local_flag=false;
		$("#nome").blur(function(){
			nome_flag=true;
			if(!$(this).val()) nome_flag = false;

			liberate(nome_flag,mail_flag,tel_flag,data_flag,hora_flag,local_flag);
		});
		$("#email").blur(function(){
			var email = $(this).val();
			mail_flag = isEmail(email);
			if(!mail_flag)
			{
				alert('Endereço de e-mail inválido');
			}

			liberate(nome_flag,mail_flag,tel_flag,data_flag,hora_flag,local_flag);
		});
		$("#tel").blur(function(){
			tel_flag=true;
			if(!$(this).val()) tel_flag = false;

			liberate(nome_flag,mail_flag,tel_flag,data_flag,hora_flag,local_flag);
		});
		$("#data").blur(function(){
			data_flag=true;
			if(!$(this).val()) data_flag = false;

			liberate(nome_flag,mail_flag,tel_flag,data_flag,hora_flag,local_flag);
		});
		$("#hora").blur(function(){
			hora_flag=true;
			if(!$(this).val()) hora_flag = false;

			liberate(nome_flag,mail_flag,tel_flag,data_flag,hora_flag,local_flag);
		});
		$("#place").blur(function(){
			local_flag=true;
			if(!$(this).val()) local_flag = false;

			liberate(nome_flag,mail_flag,tel_flag,data_flag,hora_flag,local_flag);
		});
	}
);

function liberate(nome,email,telefone,data,hora,lugar)
{
	if((nome) && (email) && (telefone) && (data) && (hora) && (lugar))
	{
		$('#send').prop('disabled',false);
	}
}

function isEmail(email) 
{
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}