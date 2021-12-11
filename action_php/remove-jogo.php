<?php 
require_once 'bdconnect.php';

        if($_GET) {
            $id_jogo = $_GET["id_jogo"];
            $sql = "delete from jogos WHERE id_jogo = '$id_jogo'";
            

            if($connect->query($sql) === TRUE){
                echo "Deletado com sucesso!<br>";

            }else{
                echo "Erro ao deletar!<br>";
            }

            $connect->close();
        }
            echo "<a href='../index.html'><button type='button'>Voltar</button></a>";

        ?>