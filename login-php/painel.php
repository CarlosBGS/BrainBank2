<?php
session_start();
include('verifica_login.php');
?>

<DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/stylemenu.css"> 
    
</head>

<body>
    <div class="container">
        
            <div id="logo">    
                <img src="assets/img/sketch1621969905125.png" width="100px">
                <h1 id="titulologo">Brain Bank</h1>
            </div>
            <div class="sair">
                <h2>Olá,<b> <?php echo $_SESSION['nome'];?><a href="logout.php" >Sair</a></h2>
               
            </div>
       
        
        <main>
            <div class="menu">
            	<h1>O que você quer fazer?</h1>
            	
	            	<a href="cadastrarquest.php" >Cadastrar Questão</a>
	            	<a href="gerarprova.php" id="gp">Gerar Prova</a>
	            
            </div>
                
            
        </main>
    </div>
        
   
    

</body>

</html>