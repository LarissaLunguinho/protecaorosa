<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../DAO/UsuarioDAO.php';
        require_once '../DTO/UsuarioDTO.php';
        
        $usuario= $_POST["usuario"];
        $cod_usuario = $_POST["cod_usuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        if (($usuario == "") or ($cod_usuario=="") or ($email=="") or ($senha=="") ) {
            echo "<script>";
          echo "alert('Todos os campos são obrigatórios!');";
          echo "window.location.href= '../VIEW/Listausuario.php'";
          echo "</script>";  
        }else{
        
     
         $UsuarioDTO = new UsuarioDTO;
         $UsuarioDTO ->setCod_usuario($cod_usuario);
         $UsuarioDTO ->setEmail($email);
         $UsuarioDTO ->setUsuario($usuario);
         $UsuarioDTO->setSenha($senha); 
         
         
         $UsuarioDAO = new UsuarioDAO;
         $resultado =  $UsuarioDAO ->Alterar($UsuarioDTO);
         
         if(!empty($resultado)){
             
          echo "<script>";
          echo "alert('Alteração efetuada com sucesso!');";
          echo "window.location.href= '../VIEW/Listausuario.php'";
          echo "</script>";   
         
          
         } else {
             
          echo "<script>";
          echo "alert('Alteração não efetuada !');";
          echo "window.location.href= '../VIEW/ListaUsuario.php'";
          echo "</script>";     
             
        }
                     
        }    
 
        ?>
    </body>
</html>