<?php
/*
	Template Name: tema 
*/
	$base_path = get_site_url()."/wp-content/themes/tema_ejenutri/";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$data = $_POST['data'];
		$hora = $_POST['hora'];
		$lugar = $_POST['place'];
		$outro = $_POST['other'];

		$msg="<html><body><div>Nome: $nome</div><div>E-mail: $email</div><div>Telefone: $tel</div><div>Data: $data</div><div>Horário: $hora</div><div>Lugar: $lugar</div><div>Demais informações: $outro</div></body></html>";
		$dest = "luckpontecorreia@gmail.com";
		$subj = "Convite";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		mail($dest,$subj,$msg,$headers);
	}
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Chuva aos Sedentos</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $base_path;?>css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_path;?>css/owl.theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_path;?>css/chuva-style.css"/>

</head>

<body>
	<div id="main">
		<div id="menu">

			<table id="tbmenu">
				<tr>
					<td id="logo">
						<img src="<?php echo $base_path;?>img/chuva_logo.png">
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
						<a href="http://citroends5.webuda.com/wordpress/blog/" target="_blank">BLOG</a>
					</td>
					<td id="opdonate" class="menubtn">
						<a href="#donate">DOAÇÕES</a>
					</td>
					<td id="opcontact" class="menubtn">
						<a href="#contato">CONTATO</a>
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
							O MINISTÉRIO
							<hr>
						</h1>
						<p>
							 <?php if( function_exists( 'iinclude_page' ) ) iinclude_page( 14 );?> 
						</p>
					</td>
				</tr>
			</table>
		</div>

		<div id="agenda" class="parallax-window content" data-stellar-background-ratio="0.5">

			<div>
				<h1>
					AGENDA
				</h1>
			</div>

			<div data-thumb="<?php echo $base_path;?>img/next.png" id="prox" hidden></div>
			<div data-thumb="<?php echo $base_path;?>img/prev.png" id="anter" hidden></div>

			<div id="evento-wrapper" class="carousel">
				<?php
				
					// $server = "localhost";
					// $user = "root";
					// $pswd = "";
					// $db = "wp";

					// //cria a conexão
					// try
					// {
					// 	$conn = new PDO("mysql:host=$server;dbname=$db",$user,$pswd);
					// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					// }catch(PDOException $e)
					// {
					// 	throw new PDOException($e);
					// }											


					// $sql = "SELECT cidade,estado,endereco,data FROM agenda ORDER BY data;";

					// $query = $conn->prepare($sql);
					// $query->execute();
					// $result = $query;

					// foreach ($result as $row)
					// {
					// 	$cid = $row['cidade'];
					// 	$estd = $row['estado'];
					// 	$end = $row['endereco'];
					// 	$data = $row['data'];

					// 	$aux = 	explode('-',$data);

					// 	$ano = $aux[0];
					// 	$mes = $aux[1];
					// 	$dia = $aux[2];

					// 	//converte os meses, para uso posterior
					// 	switch ($mes)
					// 	{
					// 		case 1:
					// 			$mes_aux = "JAN";
					// 			break;
					// 		case 2:
					// 			$mes_aux = "FEV";
					// 			break;
					// 		case 3:
					// 			$mes_aux = "MAR";
					// 			break;
					// 		case 4 :
					// 			$mes_aux = "ABR";
					// 			break;
					// 		case 5:
					// 			$mes_aux = "MAI";
					// 			break;
					// 		case 6:
					// 			$mes_aux = "JUN";
					// 			break;
					// 		case 7:
					// 			$mes_aux = "JUL";
					// 			break;
					// 		case 8:
					// 			$mes_aux = "AGO";
					// 			break;
					// 		case 9:
					// 			$mes_aux = "SET";
					// 			break;
					// 		case 10:
					// 			$mes_aux = "OUT";
					// 			break;
					// 		case 11:
					// 			$mes_aux = "NOV";
					// 			break;
					// 		case 12:
					// 			$mes_aux = "DEZ";
					// 			break;
					// 	} 

					// 	//se o evento já passou, não o inclui na fila
					// 	$date_ev = strtotime("$ano-$mes-$dia");
					// 	$hj = strtotime("today");
					// 	if($date_ev>=$hj)
					// 	{
					// 		$event_obj ="<div class='item'><span class='data-city'><span class='data-ev'><time>$dia/$mes_aux</time></span><br><span class='cidade-ev'>$cid - $estd</span></span><br><span class='ender-ev'>$end</span></div>";
					// 		echo $event_obj;
					// 	}
					// }
					
					// /*
					// $conn->close();*/

					// $conn = null;
				?>
			</div>
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
						<img src="<?php echo $base_path;?>img/cd_capa.png">
					</td>
				</tr>
			</table>
		</div>

		<div id="donate" class="parallax-window" data-stellar-background-ratio="0.5">
			<table>
				<tr>
					<td>
					</td>
					
					<td class="content">
						<h1>
							DOAÇÕES
							<hr>
						</h1>
						<p>
							 <?php if( function_exists( 'iinclude_page' ) ) iinclude_page( 27 );?> 
						</p>
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
						<form id="mail" action="" method="post">
							<table>
								<tr>
									<td colspan="2">
										<input type="text" name="nome" id="nome" placeholder="NOME">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="text" name="email" id="email" placeholder="EMAIL">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="text" name="tel" id="tel" placeholder="(xx)TELEFONE">
									</td>
								</tr>
								<tr id="schedule">
									<td>
										<input type="text" name="data" id="data" placeholder="DATA">
									</td>
									<td>
										<input type="text" name="hora" id="hora" placeholder="HORA">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="text" name="place" id="place" placeholder="LOCAL">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<textarea name="other" rows="4" cols="50" id="other" placeholder="MAIS INFORMAÇÕES"></textarea>
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
									<a href="https://www.instagram.com/ccscaio/" target="_blank"><img src="<?php echo $base_path;?>img/insta.png" Title="Sigua-nos no Instagram"></a>
									
								</td>
								<td class="media">
									<a href="https://www.facebook.com/ChuvaaosSedentos/" target="_blank"><img src="<?php echo $base_path;?>img/face.png" Title="Curta-nos no Facebook"></a>
								</td>
								<td class="media">
									<a href="https://www.youtube.com/channel/UChkPGct3ZhwtIwzOwOI0swg" target="_blank"><img src="<?php echo $base_path;?>img/youtube.png" Title="Inscreva-se me nosso canal"></a>
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

	<script src="<?php echo $base_path;?>js/jquery-1.12.3.js"></script>
	<script src="<?php echo $base_path;?>js/jquery.stellar.js"></script>
	<script src="<?php echo $base_path;?>js/chuva.js"></script>
	<script src="<?php echo $base_path;?>js/owl.carousel.min.js"></script>
	<script src="<?php echo $base_path;?>js/jquery.maskedinput.js"></script>
	<!--<script src="<?php echo $base_path;?>js/jquery.watermarkinput.js"></script>-->
	
</body>

</html>