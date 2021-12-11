<?php 
require_once 'bdconnect.php';

        if($_GET) {
            $id_cliente = $_GET["id_cliente"];
            $sql = "delete from cliente WHERE id_cliente = '$id_cliente'";
            

            if($connect->query($sql) === TRUE){
                echo "Deletado com sucesso!<br>";

            }else{
                echo "Erro ao deletar!<br>";
            }

            $connect->close();
        }
            echo "<a href='../index.html'><button type='button'>Voltar</button></a>";

        ?>