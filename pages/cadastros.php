<!--Conexão Banco de Dados-->
<?php
include_once('../db/conexao.php');
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

    <!--Icons Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
                    <form class="col s12" method="POST" action="../db/cadastro_aluno.php">
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
                          <button class="waves-effect waves-light btn" type="submit"><i class="fa fa-send"></i> Cadastrar</button>
                      </div>
                    </form>
                  </div>

            </div>
            <div id="cadastro_livro" class="col s12">

                <!--Formulário de Cadastro/Livros-->
                <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s4">
                          <input id="cod_livro" type="text" class="validate">
                          <label for="cod_livro">Código do Livro</label>
                        </div>
                        <div class="input-field col s4">
                          <input id="ra" type="text" class="validate">
                          <label for="ra">Título do Livro</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="num_ibsn" type="text" class="validate">
                            <label for="num_ibsn">NUM.ISBN</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                            <input id="ano_livro" type="text" class="validate">
                            <label for="ano_livro">Ano</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="autor" type="text" class="validate">
                            <label for="autor">Autor</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                          <input id="editora" type="text" class="validate">
                          <label for="editora">Editora</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                          <input id="edicao" type="text" class="validate">
                          <label for="edicao">Edição</label>
                        </div>
                        <div class="input-field col s2">
                            <input id="classificacao" type="text" class="validate">
                            <label for="classificacao">Classificação</label>
                        </div>
                        <div class="input-field col s2">
                            <input id="qtde" type="text" class="validate">
                            <label for="qtde">Quantidade</label>
                        </div>
                        <a class="waves-effect waves-light btn"><i class="fa fa-send"></i> Cadastrar</a>
                      </div>
                    </form>
                  </div>

            </div>
            <div id="cadastro_usuarios" class="col s12">

                <!--Formulário de Cadastro/Usuários-->
                <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="nome" type="text" class="validate">
                          <label for="nome">Nome</label>
                        </div>
                        <div class="input-field col s4">
                          <input id="ra" type="text" class="validate">
                          <label for="ra">Tipo de acesso</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="text" class="validate">
                            <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                            <input id="curso" type="text" class="validate">
                            <label for="curso">Senha</label>
                        </div>
                      </div>
                      
                      <a class="waves-effect waves-light btn"><i class="fa fa-send"></i> Cadastrar</a>
                    </form>
                  </div>

            </div>
        </div>
    </div>
    
</body>
</html>