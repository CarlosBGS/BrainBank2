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
    <link rel="stylesheet" href="css/style2.css">

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

        .sucess{
            
            background-color: green;
            padding: 15px;
            width: 50%;
            border-radius: 30px;
            color: white;
            border: 0px;
            outline: 0px;
            text-align: center;
            margin: auto;
}


        .exist{
            
            background-color: blue;
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
        if(isset($_SESSION['status_cadastro'])):
        ?>
        <div class="sucess">
        <p>Cadastro efetuado!</p>
        <p>Faça login informando o seu usuário e senha</p>
        </div>
        <?php
        endif;
        unset($_SESSION['status_cadastro'])
        ?>

        <?php
        if(isset($_SESSION['usuario_existe'])):
        ?>

        <div class="exist">
        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['usuario_existe'])
        ?>







    

    <form method="POST" class="form2" action="cadastrar.php">
        <div class = "card"> 
            
            <div class="card-top2">
               <img class="img-login" src="img/sketch1621969905125.png" alt="">
               <h2 class="title">Brain Bank</h2>
               <p>Faça seu Registro</p> 
            </div>

            <div class="card-group2">
                <label>Nome:</label>
                <input type="text" name = "nome" placeholder="Digite seu Nome" required>

            </div>

            <div class="card-group2">
                <label>Usuario:</label>
                <input type="text" name = "usuario" placeholder="Digite seu nome de Usuario" required>

            </div>

            <div class="card-group2">
                <label>Senha:</label>
                <input type="password" name = "senha" placeholder="Digite sua Senha" required>

            </div>

            <div class="card-group2 btn">
                <button type="submit">Criar</button>
            </div>

            <p class="css">
                <a href=index.php> Já tem uma conta? Faça o Login</a>
            </p>


        </div>


    </form>
</head>
<body>
    
</body>
</html>