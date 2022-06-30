<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once '../DAO/UsuarioDAO.php';
        require_once '../DTO/UsuarioDTO.php';
        
        
        $usuario= $_POST["usuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data = date("Y/m/d H:m:s");
        
        
        
     
         $UsuarioDTO = new UsuarioDTO;
         $UsuarioDTO ->setEmail($email);
         $UsuarioDTO ->setUsuario($usuario);
         $UsuarioDTO->setSenha($senha); 
          $UsuarioDTO->setDt_ult_acesso($data);
         
         
         $UsuarioDAO = new UsuarioDAO;
         $resultado =  $UsuarioDAO ->Gravar($UsuarioDTO);
         
         if(!empty($resultado)){
             
          echo "<script>";
          echo "alert('Gravação efetuada com sucesso!');";
          echo "window.location.href= '../login/login.php'";
          echo "</script>";   
         
          
         } else {
             
          echo "<script>";
          echo "alert('Gravação não efetuada!');";
          echo "window.location.href= '../login/login.php'";
          echo "</script>";     
             
        }
                     
        
 
        ?>
    </body>
</html>
