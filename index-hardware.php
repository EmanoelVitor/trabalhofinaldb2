<?php require_once 'action_php/bdconnect.php'; ?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="table-responsive-sm">
    <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th> 
        <th>Cliente</th>     
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "SELECT * FROM hardware";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>".$row['id_hardware']."</td>
          <td>".$row['nome_hardware']."</td>
          <td>".$row['preco_hardware']."</td>
          <td>".$row['fk_cliente_id_cliente']."</td>
          <td>
          <a href='edit-hardware.php?id_hardware=".$row['id_hardware']."'><button type='button' class='btn btn-success'>Editar</button></a>
          
          </td>
          <td>
          <a href='action_php/remove-hardware.php?id_hardware= ".$row['id_hardware']."'> <button type='button' class='btn btn-danger'>Excluir</button></a>
          </td>
          </tr>";
        }
      } else {
        echo "<tr><td colspan='5'><center>Nao existem dados</center></td></tr>";
      }
      ?>
    </tbody>
  </table>
    </div>  
    <a href="index.html"><button type="button" class="btn btn-primary">Home</button></a>
    <body>
</html>