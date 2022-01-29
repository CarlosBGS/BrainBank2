<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Acesso</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
           a{
            text-decoration: none;
            text-align: center;
            display: block;
            color: palevioletred;
        }

        a:hover{
            text-decoration: underline;
        }

        .errol{
            
            background-color: red;
            padding: 15px;
            width: 50%;
            border-radius: 30px;
            color: white;
            border: 0px;
            outline: 0px;
            text-align: center;
            margin: auto;
}
        


    </style>
 <?php
    if(isset($_SESSION['nao_autenticado'])):
 ?>
    <div class="errol">
    <strong>ERRO: Usuário ou senha inválidos!</strong>
    </div>
    <?php
    endif;
          unset($_SESSION['nao_autenticado']);
    ?>
    <form class="form" action="login.php" method="POST">
        <div class = "card"> 
            
            <div class="card-top">
               <img class="img-login" src="img/sketch1621969905125.png" alt="">
               <h2 class="title">Brain Bank</h2>
               <p>Faça seu Login</p> 
            </div>
            <div class="card-group">
                <label>Usuario</label>
                <input name="usuario" type="text" placeholder="Digite seu usuario" required>

            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name = "senha" placeholder="Digite sua senha" required>

            </div>

           

            <div class="card-group btn">
                <button type="submit">Acessar</button>
            </div>

            <div class="card-group" >
                <a href="cadastro.php">Não tem uma conta? Registre-se</a>
            </div>

        </div>


    </form>
</head>
<body>
    
</body>
</html>