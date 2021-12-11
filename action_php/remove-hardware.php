<?php 
require_once 'bdconnect.php';

        if($_GET) {
            $id_hardware = $_GET["id_hardware"];
            $sql = "delete from hardware WHERE id_hardware = '$id_hardware'";
            

            if($connect->query($sql) === TRUE){
                echo "Deletado com sucesso!<br>";

            }else{
                echo "Erro ao deletar!<br>";
            }

            $connect->close();
        }
            echo "<a href='../index.html'><button type='button'>Voltar</button></a>";

        ?>