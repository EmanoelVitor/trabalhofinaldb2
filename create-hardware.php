<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 

    </head>
    <body>
        
        <form method="post" action="action_php/create-hardware.php">

            <h1>Área Hardware</h1>
            <table>
                <tr>
                    <th>Nome Hardware</th>
                    <td> <input type="text" name="nome_hardware" class="form-control">   </td>
                </tr>
                <tr>
                    <th>Preço</th>
                    <td> <input type="text" name="preco-hardware" class="form-control">   </td>
                </tr>
                <tr>
                    <th>Cliente</th>
                    <td><input type="text" name="fk_cliente_id_cliente"></td>
                </tr>
                <tr>
                    <td> <button type="submit" class="btn btn-success">Salvar dados</button></td>
                   <td><a href="index.html"><button type="button" class="btn btn-primary">Voltar</button></a></td>
                </tr>
           </table>
        </form>
    


    </body>
</html>