<?php
session_start();
?>

<DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>

<body>
    <div class="container">
        
    <div id="logo">    
                <img src="assets/img/sketch1621969905125.png" width="100px">
                <h1 id="titulologo">Brain Bank</h1>
            </div>
         
       
        <br><br><br><br><br><br><br><br><br><br>
        <main>
            <div class="form">
                <form method="POST" action="cadastarquestoes.php"><br><br><br><br><br><br><br><br>
                    <h1>Cadastro De Questões</h1>
                    <h2>Dificuldade da Questão: </h2>
                        <select name="Dificuldade" required>
                            <option value="easy" selected>Fácil</option>
                            <option value="normal">Média</option>
                            <option value="hard">Difícil</option>
                        </select>
                    <h2>Matéria: </h2>
                        <select name="Materia" required>
                            <option value="math" selected>Matemática</option>
                            <option value="portuguese">Português</option>
                        </select>

                    <h2>Enunciado da questão: </h2>
                        <textarea name="Enunciado" required id="stem"></textarea> <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="cal">
                        <h2>Alternativas: </h2>
                            <textarea class="alternative" name="Alt1" required placeholder=" Alternativa 1"></textarea><br>
                            <textarea class="alternative" name="Alt2" required placeholder=" Alternativa 2"></textarea><br>
                            <textarea class="alternative" name="Alt3" required placeholder=" Alternativa 3"></textarea><br>
                            <textarea class="alternative" name="Alt4" required placeholder=" Alternativa 4"></textarea><br>
                            <textarea class="alternative" name="Alt5" required placeholder=" Alternativa 5"></textarea><br>
                    </div>
                    <divn class="submit">
                        <input type="submit" id="submit" value="Enviar">
                    
                    </div>
                </form>
            </div>
        </main>
    </div>
        
   
    

</body>

</html>