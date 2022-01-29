<?php
session_start();
include("conexao.php");

$Dificuldade = mysqli_real_escape_string($conexao, trim($_POST['Dificuldade']));
$Materia = mysqli_real_escape_string($conexao, trim($_POST['Materia']));
$Enunciado = mysqli_real_escape_string($conexao, trim($_POST['Enunciado']));

$Alt1 = mysqli_real_escape_string($conexao, trim($_POST['Alt1']));
$Alt2 = mysqli_real_escape_string($conexao, trim($_POST['Alt2']));
$Alt3 = mysqli_real_escape_string($conexao, trim($_POST['Alt3']));
$Alt4 = mysqli_real_escape_string($conexao, trim($_POST['Alt4']));
$Alt5 = mysqli_real_escape_string($conexao, trim($_POST['Alt5']));

$result = mysqli_query($conexao, $sql);

$sql = "INSERT INTO questoes (Dificuldade, Materia, Enunciado, Alt1, Alt2, Alt3, Alt4, Alt5) VALUES ($Dificuldade, $Materia, $Enunciado, $Alt1, $Alt2, $Alt3, $Alt4, $Alt5";

$conexao->close();

header('Location: cadastrarquest.php');
exit;
?>