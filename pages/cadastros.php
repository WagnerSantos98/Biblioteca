<!--Conexão Banco de Dados-->
<?php
include_once('../db/conexao.php');

//Cadastro de aluno
if(isset($_POST['cadastrar_aluno'])){

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
}
//Cadastro de livros
else if(isset($_POST['cadastrar_livro'])){
  $cod_livro = $_POST['cod_livro'];
  $titulo = $_POST['titulo'];
  $num_ibsn = $_POST['num_ibsn'];
  $ano_livro = $_POST['ano_livro'];
  $autor = $_POST['autor'];
  $editora = $_POST['editora'];
  $edicao = $_POST['edicao'];
  $classificacao = $_POST['classificacao'];
  $qtde = $_POST ['qtde'];

  $sql = "INSERT INTO tb_cadastro_livro(cod_livro, titulo, num_ibsn, ano_livro, autor, editora, edicao, classificacao, qtde)
        VALUES ('$cod_livro', '$titulo', '$num_ibsn', '$ano_livro', '$autor', '$editora', '$edicao', '$classificacao', '$qtde');";
  $sql = mysqli_query($con, $sql);
}
//Cadastro de Usuários
session_start();

error_reporting(0);

/*if (isset($_SESSION['username'])) {
    header("Location: /pages/login.php");
}*/

if (isset($_POST['cadastrar_usuario'])) {
	$username = $_POST['username'];
	$tipo_acesso = $_POST['tipo_acesso'];
  $email_user = $_POST['email_user'];
	$senha = md5($_POST['senha']);

		$sql = "SELECT * FROM tb_usuarios WHERE email_user='$email_user'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO tb_usuarios (username, tipo_acesso, email_user, senha)
					VALUES ('$username', '$tipo_acesso', '$email_user', '$senha')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Wow! Registro do usuário concluído.')</script>";
				$username = "";
        $tipo_acesso = "";
				$email_user = "";
				$_POST['senha'] = "";
			} else {
				echo "<script>alert('Woops! Algo errado aconteceu.')</script>";
			}
		} else {
			echo "<script>alert('Woops! E-mail já existe.')</script>";
		}
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../assests/css/style.css">
    <link rel="stylesheet" href="../assests/css/confimation.css">

    <!--Icons Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assests/js/app.js"></script>
            
    <title>Painel de Biblioteca</title>
</head>
<body>
    <!--Navbar-->
    <header class="main-header">
        <label for="btn-nav" class="btn-nav"><i class="fa fa-bars"></i></label>
        <input type="checkbox" id="btn-nav">
        
        <nav>
          <ul class="navigation">
            <li>
                <a href="../index.php">Home</a>   
            </li>
            <li>
                <a href="../pages/emp_dev.php">Empréstimos e Devoluções</a>
            </li>
            <li>
                <a href="../pages/cadastros.php">Cadastros</a>
            </li>
            <li>
                <a href="">Configurações</a>
            </li>
          </ul>
        </nav>
    </header>

          <!--Tabs Cadastros-->
      <div class="container">
        <div class="row">
            <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#cadastro_aluno">Cadastro de Aluno</a></li>
                <li class="tab col s3"><a  href="#cadastro_livro">Cadastro de Livros</a></li>
                <li class="tab col s3"><a href="#cadastro_usuarios">Cadastro de Usuários</a></li>
                
            </ul>
            </div>
            <div id="cadastro_aluno" class="col s12">

                <!--Formulário de Cadastro/Alunos-->
                <div class="row">
                    <form class="col s12" method="POST" action="">
                      <div class="row">
                        <div class="input-field col s4">
                          <input name="nome" id="nome" type="text" class="validate">
                          <label for="nome">Nome</label>
                        </div>
                        <div class="input-field col s3">
                          <input name="ra" id="ra" type="text" class="validate">
                          <label for="ra">RA</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="email" id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                            <input name="curso" id="curso" type="text" class="validate">
                            <label for="curso">Curso</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="semestre" id="semestre" type="text" class="validate">
                            <label for="semestre">Semestre</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="data_nascimento" id="data_nascimento" type="date" class="validate">
                          <label for="data_nascimento">Data de Nascimento</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input name="endereco" id="endereco" type="text" class="validate">
                          <label for="endereco">Endereço</label>
                        </div>
                        <div class="input-field col s2">
                            <input name="numero" id="numero" type="text" class="validate">
                            <label for="numero">Número</label>
                          </div>
                          <button name="cadastrar_aluno" onclick="myFunct();"  class="waves-effect waves-light btn" type="submit"><i class="fa fa-send"></i> Cadastrar</button>
                      </div>
                    </form>
                  </div>

            </div>
            <div id="cadastro_livro" class="col s12">

                <!--Formulário de Cadastro/Livros-->
                <div class="row">
                    <form class="col s12" method="POST" action="">
                      <div class="row">
                        <div class="input-field col s4">
                          <input name="cod_livro" id="cod_livro" type="text" class="validate">
                          <label for="cod_livro">Código do Livro</label>
                        </div>
                        <div class="input-field col s4">
                          <input name="titulo" id="titulo" type="text" class="validate">
                          <label for="titulo">Título do Livro</label>
                        </div>
                        <div class="input-field col s3">
                            <input name="num_ibsn" id="num_ibsn" type="text" class="validate">
                            <label for="num_ibsn">NUM.ISBN</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                            <input name="ano_livro" id="ano_livro" type="text" class="validate">
                            <label for="ano_livro">Ano</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="autor" id="autor" type="text" class="validate">
                            <label for="autor">Autor</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                          <input name="editora" id="editora" type="text" class="validate">
                          <label for="editora">Editora</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                          <input name="edicao" id="edicao" type="text" class="validate">
                          <label for="edicao">Edição</label>
                        </div>
                        <div class="input-field col s2">
                            <input name="classificacao" id="classificacao" type="text" class="validate">
                            <label for="classificacao">Classificação</label>
                        </div>
                        <div class="input-field col s2">
                            <input name="qtde" id="qtde" type="text" class="validate">
                            <label for="qtde">Quantidade</label>
                        </div>
                        <button name="cadastrar_livro" class="waves-effect waves-light btn" type="submit"><i class="fa fa-send"></i> Cadastrar</button>
                      </div>
                    </form>
                  </div>

            </div>
            <div id="cadastro_usuarios" class="col s12">

                <!--Formulário de Cadastro/Usuários-->
                <div class="row">
                    <form class="col s12" method="POST" action="">
                      <div class="row">
                        <div class="input-field col s6">
                          <input name="username" id="nome" type="text" class="validate">
                          <label for="nome">Nome</label>
                        </div>
                        <div class="input-field col s4">
                          <input name="tipo_acesso" id="tipo_acesso" type="text" class="validate">
                          <label for="tipo_acesso">Tipo de acesso</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="email_user" id="email_user" type="email" class="validate">
                            <label for="email_user">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                            <input name="senha" id="senha" type="password" class="validate">
                            <label for="senha">Senha</label>
                        </div>
                      </div>
                      
                      <button name="cadastrar_usuario" class="waves-effect waves-light btn" type="submit"><i class="fa fa-send"></i> Cadastrar</button>
                    </form>
                  </div>

            </div>
        </div>
    </div>

       
</body>
</html>