<?php 

require_once 'action_php/bdconnect.php';

if($_GET['id_cliente']) {
	$id_cliente = $_GET['id_cliente'];

	$sql = "SELECT * FROM cliente WHERE id_cliente = {$id_cliente}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

    ?>

    <!DOCTYPE html>
    <html>
    <head>
       <title>Editar</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

       <meta charset='utf-8'>
       
   </head>
   <body>




    <center>
       <h1>Editar</h1>

       <form action="action_php/update-cliente.php" method="post">
          <table >
             <tr>
                <th>Nome</th>
                <td><input type="text" name="nome_cliente" class="form-control" value="<?php echo $data['nome_cliente'] ?>" /></td>
            </tr>		
            <tr>
                <th>CPF</th>
                <td><input type="text" name="cpf" class="form-control" value="<?php echo $data['cpf'] ?>" /></td>
            </tr>
            <tr>
                <th>Data de Nascimento</th>
                <td><input type="date" name="dtanasc" class="form-control" value="<?php echo $data['dtanasc'] ?>" /></td>
            </tr>
            <tr>
                <th>CPF</th>
                <td><input type="text" name="cpf" class="form-control" value="<?php echo $data['cpf'] ?>" /></td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td><input type="email" name="email" class="form-control" value="<?php echo $data['email'] ?>" /></td>
            </tr>
            <tr>
                <th>Endereço</th>
                <td><input type="text" name="text" class="form-control" value="<?php echo $data['endereco'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden"  name="id_cliente" value="<?php echo $data['id_cliente']?>" />
                <td><button type="submit" class="btn btn-success">Salvar</button></td>
                <td><a href="index.html"><button type="button" class="btn btn-danger">Voltar</button></a></td>
            </tr>
        </table>
    </form>
</center>


</body>
</html>

<?php
}
?>