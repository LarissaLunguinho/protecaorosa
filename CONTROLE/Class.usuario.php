<?php
class usuario {
    private $Email;

    function Cadastrar($email, $usuario, $senha) {
        $this->usuario = ($usuario);
        $this->email = ($email);
        $this->senha = ($senha);
        
        $conn = new mysqli("localhost", "root","", "chat");
        
        $sql = "SELECT count(*) as contador FROM usuario where usuario='$usuario'";
        $result = $conn->query($sql);
        
        $contador = $result["contador"];
        echo $contador;

        if ($contador == 0) {
            $sql = "";
            $sql = "INSERT INTO usuario VALUES('','$this->email', '$this->usuario', '$this->senha', '" . date("Y/m/d H:m:s") . "') ";


            if ($conn->query($sql) === TRUE) {

                echo "<script>";
                echo "alert('Usuário cadastrado com sucesso!');";
                echo "window.location.href= '../login/login.php'";
                echo "</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            echo "Já existe um usuario com estes dados cadastrados. ";
        }
    }

    #####FUNCAO PARA ESQUECI MINHA SENHA SEM ENVIO DE EMAIL #####	

    function EsqueciSenha($usuario, $email) {
        $this->email = ($email);
        $this->usuario = ($usuario);

        //echo $email;

        $conn = new mysqli("localhost", "root", "", "chat");
        $sql = "";
        $sql = "SELECT count(*) as contador FROM usuario WHERE email = '$email'";
        //echo $sql;
        // exit();
        $cont = $conn->query($sql);


        $arr = array();
        while ($row = mysqli_fetch_assoc($cont)) {
            $quant = $row["contador"];
        }

        echo $quant;


        if ($quant == "0") {
            echo "Usuario não existe";
        } else if ($quant == "1") {
            $senha1 = rand(1111, 9999);
            $senha2 = ($senha1);
            $sql1 = "UPDATE usuario SET senha = '$senha2' WHERE email='$this->email';";
            $exec = $conn->query($sql1);

            echo "<script>";
            $msg = "Sua senha foi Zerada, agora: " . $senha1;
            echo "alert('$msg');";
             echo "window.location.href= '../login/login.php'";
             echo "</script>";
        } else {
            echo "Erro nao esperado";
        }
    }

    function ListarDados($campo) {
        $usuario = $_COOKIE['usuario'];
        $sql = mysqli_query("SELECT * FROM usuario WHERE usuario='$usuario'");
        $res = mysqli_fetch_assoc($sql);
        $campo = $res[$campo];
        return($campo);
    }

    function EditarDados($email, $usuario, $senha) {
        $this->usuario = ($usuario);
        $this->email = ($email);
        $this->senha = ($senha);
        $dados_atuais = mysqli_query("SELECT * FROM usuario WHERE usuario='$usuario' ");
        $res_dados_atuais = mysqli_fetch_assoc($dados_atuais);
        $email_atual = $res_dados_atuais['email'];
        $usuario_atual = $res_dados_atuais['usuario'];



        $consulta = mysqli_query("SELECT * FROM usuario WHERE email='$this->email' AND email NOT LIKE '$email_atual' ");
        $conConsulta = mysqli_num_rows($consulta);
        if ($conConsulta <> 0) {
            echo "Não foi possivel fazer a atualização, provavelmente o email já está cadastrado. Utilize a opção voltar no seu navegador";
            exit;
        }



        $consulta = mysqli_query("SELECT * FROM usuario WHERE usuario='$this->usuario' AND usuario NOT LIKE '$usuario_atual' ");
        $conConsulta = mysqli_num_rows($consulta);


        if ($conConsulta <> 0) {
            echo "Não foi possivel fazer a atualização, provavelmente o usuario já está cadastrado. Utilize a opção voltar no seu navegador";
            exit;
        }
        $usuario = $_COOKIE['usuario'];
        setcookie("usuario", $this->usuario);
        mysqli_query("UPDATE usuario SET email='$this->email', usuario='$this->usuario', senha='$this->senha' WHERE usuario='$usuario' ");


        Alertar("Os dados foram atualizados corretamente", 0);
        echo "<script>
					location.href='../index.php';
				</script>";
    }

}

?>
