<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../DAO/UsuarioDAO.php';
        require_once '../DTO/UsuarioDTO.php';

        $id = $_GET["id"];

        $UsuarioDTO = New UsuarioDTO;
        $UsuarioDTO->setCod_usuario($id);

        $UsuarioDAO = New UsuarioDAO;
        $Pesquisa = $UsuarioDAO->Apagar($UsuarioDTO);



        echo "<script>";
        echo "window.location.href= '../VIEW/Listausuario.php'";
        echo "</script>";
        ?>
    </body>
</html>