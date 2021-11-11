<?php
?>
<html>
<head>
<title>Analise de Credito Capivara Inc.</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div style="width:700px; margin:0 auto;">

<h3>API - Consumo de API - PHP - MySQL - 1.3</h3>   
<form action="" method="POST">
<label>Entre com CPF:</label><br />
<input type="text" name="order_id" placeholder="Entre com CPF" required/>
<br /><br />
<button type="submit" name="submit">Consultar</button>
</form>    

<?php
if (isset($_POST['order_id']) && $_POST['order_id']!="") {
	$order_id = $_POST['order_id'];
	$url = "https://res-php-api.azurewebsites.net/rest/api/".$order_id;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	echo $result
	echo $response
	echo "<table>";
	echo "<tr><td>CPF:</td><td>$result->cpf</td></tr>";
	echo "<tr><td>Valor:</td><td>$result->valor</td></tr>";
	echo "<tr><td>Score:</td><td>$result->score</td></tr>";
	echo "<tr><td>Status:</td><td>$result->status</td></tr>";
	echo "</table>";
}
    ?>

<br />
<strong>Regras</strong><br />
NADA CONSTA -> CONCEDE CREDITO<br />
CONSTA ------> NEGAR CREDITO<br />
15478952<br />
15478962
<br /><br />
</div>
</body>
</html>