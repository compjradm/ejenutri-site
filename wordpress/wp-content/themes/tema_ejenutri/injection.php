<?php
	/*
		Template Name: inject-event 
	*/

	$base_path = get_site_url()."/wp-content/themes/twentysixteen/";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$server = "mysql14.000webhost.com";
		$user = "a9525272_luck";
		$pswd = "#ac18be67ed#";
		$db = "a9525272_wp";

		//cria a conexão
		try
		{
			$conn = new PDO("mysql:host=$server;dbname=$db",$user,$pswd);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e)
		{
			echo "<br>".$e->getMessage();
		}

		//toma os campos enviados e prepara para grava-los no banco
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$end = $_POST['end'];
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$ano = $_POST['ano'];

		$query = "INSERT INTO agenda (cidade,estado,endereco,data) VALUES('$cidade','$estado','$end','".$ano."-".$mes."-".$dia."');";

		$conn->exec($query);

		$conn = null;
	}
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link rel="stylesheet" type="text/css" href="<?php echo $base_path;?>css/inject.css"/>
	
</head>

<body>
		<h1>
			Criar novo Evento
		</h1>
		<hr>
	<form id="evento" action="" method="post">	
		<div><input type="text" maxlenght="50" name="cidade" id="cidade" placeholder="CIDADE"></div>
		<div>ESTADO:<br>
			<select name="estado" id="estado">
				<option value="AC">Acre - AC</option>
				<option value="AL">Alagoas - AL</option>
				<option value="AP">Amapá - AP</option>
				<option value="AM">Amazonas - AM</option>
				<option value="BA">Bahia - BA</option>
				<option value="CE">Ceará - CE</option>
				<option value="DF">Distrito Federal -DF</option>
				<option value="ES">Espírito Santo - ES</option>
				<option value="GO">Goiás - GO</option>
				<option value="MA">Maranhão - MA</option>
				<option value="MT">Mato Grosso - MT</option>
				<option value="MS"> Mato Grosso do Sul - MS</option>
				<option value="MG">Minas Gerais - MG</option>
				<option value="PA">Pará - PA</option>
				<option value="PB">Paraíba - PB</option>
				<option value="PR">Paraná - PR</option>
				<option value="PE">Pernambuco - PE</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro - RJ</option>
				<option value="RN">Rio Grande do Norte - RN</option>
				<option value="RS">Rio Grande do Sul - RS</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina - SC</option>
				<option value="SP">São Paulo - SP</option>
				<option value="SE">Sergipe - SE</option>
				<option value="TO">Tocantins - TO</option>
			</select></div>
		<div><input type="text" maxlength="80" name="end" id="end" placeholder="ENDEREÇO"></div>
		<div>MÊS: <br>
			<select name="mes" id="mes">
				<option data-id="1" value="1">Janeiro</option>
				<option data-id="2" value="2">Fevereiro</option>
				<option data-id="3" value="3">Março</option>
				<option data-id="4" value="4">Abril</option>
				<option data-id="5" value="5">Maio</option>
				<option data-id="6" value="6">Junho</option>
				<option data-id="7" value="7">Julho</option>
				<option data-id="8" value="8">Agosto</option>
				<option data-id="9" value="9">Setembro</option>
				<option data-id="10" value="10">Outubro</option>
				<option data-id="11" value="11">Novembro</option>
				<option data-id="12" value="12">Dezembro</option>
			</select>
		</div>
		<div>DIA: <br>
			<select name="dia" id="dia">
			</select>
		</div>
		<div>ANO:<br>
			<select name="ano" id="ano">
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				<option value="2025">2025</option>
				<option value="2026">2026</option>
			</select>
		</div>
		<div><button class='btn' id="send">Criar Evento</button></div>
	</form>
	<br>
	<script src="<?php echo $base_path;?>js/jquery-1.12.3.js"></script>
	<script src="<?php echo $base_path;?>js/inject.js"></script>
</body>

</html>