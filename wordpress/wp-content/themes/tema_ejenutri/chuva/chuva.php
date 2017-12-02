<?php
/*
	Template Name: chuva 
*/
?>

<html>

<head>
	<title>Chuva aos Sedentos</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/divclass.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>
	<div id="main">
		<div id="menu">

			<table id="tbmenu">
				<tr>
					<td id="logo">
						<img src="img/chuva_logo.png">
					</td>
					<td class="placeholder"></td>
					<td id="ophome" class="menubtn">
						<a href="#capa">HOME</a>
					</td>
					<td id="opabout" class="menubtn">
						<a href="#ministerio">QUEM SOMOS</a>
					</td>
					<td id="opdisco" class="menubtn">
						<a href="#agenda">AGENDA</a>
					</td>
					<td id="opagenda" class="menubtn">
						<a href="#disco">DISCOGRAFIA</a>
					</td>
					<td id="opblog" class="menubtn">
						<a href="#blog">BLOG</a>
					</td>
					<td id="opcontact" class="menubtn">
						<a href="contato">CONTATO</a>
					</td>
					<td class="placeholder"></td>					
				</tr>
			</table>

		</div>

		<div id="capa" class="parallax-window" data-stellar-background-ratio="0.5"></div>

		<div id="ministerio" class="parallax-window" data-stellar-background-ratio="0.5">
			<table>
				<tr>
					<td>
					</td>
					
					<td class="content">
						<h1>
							O MINIST&EacuteRIO
							<hr>
						</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget enim magna. Nam suscipit enim vitae diam rhoncus, et convallis lorem scelerisque. Etiam convallis, lacus eget aliquet ultrices, leo enim tempus ante, eget dignissim nisi lectus sit amet nunc. Suspendisse potenti. Aenean in orci fermentum, rutrum urna sit amet, vulputate tortor. Sed et neque nec nunc dignissim vehicula vitae quis ipsum. Mauris et tellus nibh. Vestibulum malesuada ut lorem eu. 
						</p>
					</td>
				</tr>
			</table>
		</div>

		<div id="agenda" class="parallax-window" data-stellar-background-ratio="0.5">
			<table>
				<tr>
					<td class="content">
						<h1>
							AGENDA
						</h1>
					</td>

					<td colspan="2">
					</td>
				</tr>
			</table>
		</div>

		<div id="disco" class="parallax-window" data-stellar-background-ratio="0.5">
			<table>
				<tr>
					<td colspan="2">
						<h1>
							DISCOGRAFIA
						</h1>
						<hr>
					</td>
				</tr>
				<tr>
					<td class="content">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget enim magna. Nam suscipit enim vitae diam rhoncus, et convallis lorem scelerisque. Etiam convallis, lacus eget aliquet ultrices, leo enim tempus ante, eget dignissim nisi lectus sit amet nunc. Suspendisse potenti. Aenean in orci fermentum, rutrum urna sit amet, vulputate tortor. Sed et neque nec nunc dignissim vehicula vitae quis ipsum. Mauris et tellus nibh. Vestibulum malesuada ut lorem eu. 
						</p>
					</td>
					<td>
						<img src="img/cd_capa.png">
					</td>
				</tr>
			</table>
		</div>

		<div id="blog" class="parallax-window" data-stellar-background-ratio="0.5">
			<table>
				<tr>
					<td>
					</td>
					
					<td class="content">
					</td>
				</tr>
			</table>
		</div>

		<div id="contato" class="parallax-window" data-stellar-background-ratio="0.5">
			<table>
				<tr>
					<td colspan="2">
						<h1>
							CONTATO & CONVITES
						</h1>
						<hr>
					</td>
				</tr>
				<tr>
					<td class="cont-form">
						<form>
							<table>
								<tr>
									<td colspan="2">
										<input type="text" name="nome" value="NOME">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="text" name="email" value="E-MAIL">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="text" name="tel" value="(xx)TELEFONE">
									</td>
								</tr>
								<tr id="schedule">
									<td>
										<input type="text" name="data" value="DATA">
									</td>
									<td>
										<input type="text" name="hora" value="HORA">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="text" name="place" value="LOCAL">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<textarea name="other" rows="4" cols="50">
MAIS INFORMA&Ccedil&OtildeES
										</textarea>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="send" value="ENVIAR" id="send">	
									</td>
								</tr>
							</table>
						</form>
					</td>
					
					<td class="social-media">
						<table>
							<tr>
								<td class="media">
									<img src="img/insta.png">
								</td>
								<td class="media">
									<img src="img/face.png">
								</td>
								<td class="media">
									<img src="img/youtube.png">
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>

		<div id="inter" class="parallax-window" data-stellar-background-ratio="0.5"></div>

		<div id="foot" class="parallax-window"></div>
	</div>

	<script src="js/jquery-1.12.3.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/jquery.nicescroll.js"></script> 
    <script type="text/javascript">
    	$(document).ready(function()
    		{
    			$(window).stellar();
    		}
    	);
    	$(document).ready(
		  function() { 
		    $("#main").niceScroll();
		  }
		);
    </script>
	
</body>

</html>