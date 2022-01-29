<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/stylegerar.css">
	<title>Gerar Prova</title>
</head>
<body>
	<div class="container">
        
            <div id="logo">    
                <img src="assets/img/sketch1621969905125.png" width="100px">
                <h1 id="titulologo">Brain Bank</h1>
            </div>
        
            
        <main>
            <div class="form">
                <form method="POST" action="cadastarquestoes.php"><br>
                    <h1>Gerar Prova</h1>
                    <h2>Dificuldade das Questões: </h2>
                        <select name="dificulty" required>
                            <option value="easy" selected>Fácil</option>
                            <option value="normal">Média</option>
                            <option value="hard">Difícil</option>
                        </select>
                    <h2>Matéria da Prova: </h2>
                        <select name="subject" required>
                            <option value="math" selected>Matemática</option>
                            <option value="portuguese">Português</option>
                        </select>
                    <h2>Quantidade de questões: </h2>
                        <select name="quantidadequestoes" required>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>

                   
                    <divn class="submit">
                        <input type="submit" id="submit" value="Gerar">
                    
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>