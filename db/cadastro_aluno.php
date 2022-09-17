<?php

include_once('conexao.php');

$nome = $_POST['nome'];
$ra = $_POST['ra'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$semestre = $_POST['semestre'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];

$sql = "INSERT INTO tb_cadastro_aluno(nome, ra, email, curso, semestre, data_nascimento, endereco, numero)
        VALUES ('$nome', '$ra', '$email', '$curso', '$semestre', '$data_nascimento', '$endereco', '$numero');";
$sql = mysqli_query($con, $sql);


?>