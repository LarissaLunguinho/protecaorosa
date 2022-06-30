
<?php
include_once './webcomplomentes.php';

require_once '../DAO/UsuarioDAO.php';

$UsuarioDAO = new UsuarioDAO;
$pesquisa = $UsuarioDAO->Pesquisar();
//var_dump($pesquisa);

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            

            function Confirmar(codigo) {
                if (confirm('Confirma a exclusão do registro?')) {
                    location.href = '../Controle/ApagarUsuarioControle.php?id=' + codigo;
                }
            }
        </script>
    </head>
    <body>

        <div class="container-fluid">
            <table class="table table-striped">
                <tr>
                    <td colspan="7"> <h1 align="center"> Listagem de Usuário </h1> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr> 
                <tr>
                    <td> Código </td>
                    <td> E-mail </td>
                    <td> Usuário </td>
                    <td> Alterar </td>
                    <td> Apagar </td>
                </tr>
                <?php
                foreach ($pesquisa as $p) {

                    echo "<tr>";
                    echo "<td>{$p["cod_usuario"]} </td>";
                    
                    echo "<td>{$p["email"]} </td>";
                    echo "<td>{$p["usuario"]} </td>";
                  
                    echo "<td><a href='../view/AlterarUsuario.php?id={$p["cod_usuario"]}' title='Alterar Usuário.' data-toggle='tooltip'><i class='fas fa-edit' style='font-size:18px'></i> </a></td>";
                    echo "<td><a href='javascript:Confirmar({$p["cod_usuario"]})' title='Excluir Usuário.' data-toggle='tooltip' > <i class='fas fa-eraser' style='font-size:18px'></i> </a></td>";
                    echo "<td> </td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>


