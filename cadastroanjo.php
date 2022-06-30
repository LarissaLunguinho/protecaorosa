<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="pt-br">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/cad_anjo.css">
        <link rel="icon" type="image/png" href="imagem/rosa-favicon.png">
        <title>Cadastrar como Anjo</title>
       
    </head>
    <style>
body{ 
  background-image: url(imagem/fundo.jpg);    
}
body::-webkit-scrollbar {
    width: 18px;               /* width of the entire scrollbar */
}

body::-webkit-scrollbar-track {
    background: #f1788c;        /* color of the tracking area */
}

body::-webkit-scrollbar-thumb {
  background-color: black;    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
  border: 3px solid #d63384;  /* creates padding around scroll thumb */
}
.box {
color: white;
transform: translate(-50%, -50%);
background: -webkit-linear-gradient(top, #fd6084, #f7a29e, #f5b04b); 
padding: 20px;
border-radius: 20px; /*NAO FEZ DIFERENÇA*/
position: absolute;
width: 500px;
top: 110%;
left: 50%;
justify-content: center;
}

    </style>
    <script>
   var cpf = document.querySelector("#cpf");

    cpf.addEventListener("blur", function(){
   if(cpf.value) cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/,"-");
        });
    </script>
    
    <body>
        <header id="header">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="paginicial.php">HOME</a></li>
                    <li><a class="nav-link scrollto" href="atendimento.php">ATENDIMENTOS</a></li>
                    <li><a class="nav-link scrollto" href="login/login.php">CHAT</a></li>
                    <li class="dropdown"><a href="paginicial.php"><span>CADASTRAR</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="cadastroanjo.php" target="_blank">ANJO</a></li>
                            <li><a href="cadastrovitima.php" target="_blank">VÍTIMA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="login/login.php"><span>LOGIN</span> <i class="bi bi-chevron-down"></i></a>
                      <!--  <ul>
                            <li><a href="chat/esqueci_senha.php" target="_blank">Recuperar Senha</a></li>
                        </ul> -->
                    </li>
                </ul>
                <img src="imagem/logo2.jpg" alt="logo" class="logo-menu">
            </nav>
        </header>
            <br> <br>
        
            
            <fieldset class="box" style="justify-content: center;"> 
                <form action='CONTROLE/CadastrarUsuarioControle.php' method='post'>
                <legend> <b>C A D A S T R O</b> </legend>
                
                <div class="inputbox">
                    <div>
                        <label for="nome"> Nome completo </label></div>
                    <input type="text" name="nome" id="nome" class="inputUser" placeholder= "Digite nome completo" required>
                  </div>
               <br> 
                <div class="inputbox">
                    <div>
                        <label for="data_nascimento"> Data de nascimento </label></div>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                </div>
               <br>
                <div class="inputbox">
                <label for="cpf"> CPF </label> <br>
                       <input type="text" name="cpf" id="cpf" 
			    pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" 
                            title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser"  placeholder= "Digite seu CPF" required >
		</div>
               <br>
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                     <div>
                         <label for="endereco"> Endereço </label></div>
                    <input type="text" name="endereço" id="endereço" class="inputUser" placeholder= "Digite endereço completo" required>
                 </div>
               <br>
                <div class="inputbox">
                    <div> 
                        <label for="telefone"> DDD + Telefone </label></div>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" placeholder= "Digite número de telefone com DDD" required>
                </div>
                <br>
                <br>
                
                    <label for="especialidade"> Qual sua formação?</label> <br>
                    <select id="especialidade">
                        <option value="">  </option>
                        <option value="advogada">Advogada</option>
                        <option value="psicologa">Psicóloga</option>
                        <option value="terapeuta">Terapeuta</option>
                        <option value="assistentesocial">Agente Social</option>
                    </select>
                    
                    
                <br>
                <br>
                 <div class="inputbox">
                     <label for="myfile">Diploma ou declaração estudantil <p> Foto frente e verso</p></label>
                         <input type="file" id="myfile" name="myfile" multiple><br><br>
                </div>
                
                <br>
                <div class="inputbox">
                    <div> 
                        <label for="email"> E-mail   </label> </div>
                    <input type="email" name="email" id="email" class="inputUser" placeholder="Digite seu e-mail" required>
                </div>
               <br>

                <div class="inputbox">
                    <div>
                        <label for="usuario">Nome de usuário</label></div>
                    <input type="text" name="usuario" id="usuario" class="inputUser" 
                           placeholder= "Ficará visível a vítima" required>
                </div>
               
                <br>
                <div class="inputbox">
                     <div> <label for="senha">Senha </label> </div>
                    <input type="password" name="senha" id="senha" class="inputUser" placeholder="Criar senha"  required>
                </div>
               
                <br>
  
                <br>
                <button class="button">ENVIAR</button>
                <br>
            <script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
               
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                </form>
             </fieldset>  
    </body>
</html>