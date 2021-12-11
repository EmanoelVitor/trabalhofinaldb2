<?php 

require_once 'action_php/bdconnect.php';

if($_GET['id_hardware']) {
	$id_hardware = $_GET['id_hardware'];

	$sql = "SELECT * FROM hardware WHERE id_hardware = {$id_hardware}";
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

       <form action="action_php/update-hardware.php" method="post">
          <table >
             <tr>
                <th>Nome</th>
                <td><input type="text" name="nome_hardware" class="form-control" value="<?php echo $data['nome_hardware'] ?>" /></td>
            </tr>		
            <tr>
                <th>Preço</th>
                <td><input type="text" name="preco_hardware" class="form-control" value="<?php echo $data['preco_hardware'] ?>" /></td>
            </tr>
            <tr>
                <th>Cliente</th>
                <td><input type="text" name="fk_cliente_id_cliente" class="form-control" value="<?php echo $data['fk_cliente_id_cliente'] ?>" /></td>
            </tr>
           
            <tr>
                <input type="hidden"  name="id_hardware" value="<?php echo $data['id_hardware']?>" />
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