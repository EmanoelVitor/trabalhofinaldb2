<?php 

require_once 'bdconnect.php';

if($_POST) {
	$nome_cliente = $_POST['nome_cliente'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	
	$id_cliente = $_POST['id_cliente'];

	$sql  = "UPDATE cliente SET nome_cliente = '$nome_cliente', cpf = '$cpf', email = '$email', endereco = '$endereco' WHERE id_cliente = {$id_cliente}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successo</p>";
		echo "<a href='../edit-cliente.php?id_cliente=".$id_cliente."'><button type='button'>Voltar</button></a>";
		echo "<a href='../index.html'><button type='button'>Home</button></a>";
	} else {
		echo "Erro : ". $connect->error;
	}

	$connect->close();

}

?>