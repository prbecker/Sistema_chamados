<?php 
	require_once("config.php");

	if(isset($_POST["local"]))
	{
		$stmt = $conn->prepare("INSERT INTO sistema_chamados(usuario, patrimonio, ip, local, detalhes,descricao) VALUES(?, ?, ?, ?, ?, ?)");
	
		$stmt->bind_param("ssssss", $usuario, $patrimonio, $ip, $local, $detalhes_local, $descricao);
		$usuario = $_POST["usuario"];
		$patrimonio = $_POST["patrimonio"];
		$ip = $_POST["ip"];
		$local = $_POST["local"];
		$detalhes_local = $_POST["detalhes_local"];
		$descricao = $_POST["descricao"];

		$stmt->execute();
	}
?>