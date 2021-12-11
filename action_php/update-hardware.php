<?php 

require_once 'bdconnect.php';

if($_POST) {
	$nome_hardware = $_POST['nome_hardware'];
	$preco_hardware = $_POST['preco_hardware'];
	$fk_cliente_id_cliente = $_POST['fk_cliente_id_cliente'];
	
	$id_hardware = $_POST['id_hardware'];

	$sql  = "UPDATE hardware SET nome_hardware = '$nome_hardware', preco_hardware = '$preco_hardware', fk_cliente_id_cliente = '$fk_cliente_cliente' WHERE id_hardware = {$id_hardware}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successo</p>";
		echo "<a href='../edit-hardware.php?id_hardware=".$id_hardware."'><button type='button'>Voltar</button></a>";
		echo "<a href='../index.html'><button type='button'>Home</button></a>";
	} else {
		echo "Erro : ". $connect->error;
	}

	$connect->close();

}

?>