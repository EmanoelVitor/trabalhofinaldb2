<?php 

require_once 'bdconnect.php';

if($_POST) {
	$nome_jogo = $_POST['nome_jogo'];
	$preco_jogo = $_POST['preco_jogo'];
	$categoria = $_POST['categoria'];
	$fk_cliente_id_cliente = $_POST['fk_cliente_id_cliente'];
	
	$id_jogo = $_POST['id_jogo'];

	$sql  = "UPDATE jogos SET nome_jogo = '$nome_jogo', preco_jogo = '$preco_jogo', categoria = '$categoria', fk_cliente_id_cliente = '$fk_cliente_cliente' WHERE id_jogo = {$id_jogo}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successo</p>";
		echo "<a href='../edit-jogo.php?id_cliente=".$id_jogo."'><button type='button'>Voltar</button></a>";
		echo "<a href='../index.html'><button type='button'>Home</button></a>";
	} else {
		echo "Erro : ". $connect->error;
	}

	$connect->close();

}

?>