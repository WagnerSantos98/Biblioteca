<?php
include_once('../db/conexao.php');

$ra = filter_input(INPUT_GET, 'ra', FILTER_SANITIZE_NUMBER_INT);

if(!empty($ra)){
    //Query  recuperação de dados
   $query_aluno = "SELECT nome, curso, semestre FROM tb_cadastro_aluno WHERE ra =:ra LIMIT 1";
   $result_aluno = $con->prepare($query_aluno);

   $result_aluno->bind_param(':ra', $ra);

   $result_aluno->execute();

   if($result_aluno->num_rows() != 0){
    
    $return = ['erro' => false, 'dados'];
   }

}
//echo json_encode($return);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
            
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
                <a href="../pages/emp_dev.php">Empréstimo e Devoluções</a>
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

      <!--Tabs Empréstimos e Devolução-->
    <div class="container">
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#emprestimo">Empréstimo de Livros</a></li>
            <li class="tab col s3"><a href="#devolucao">Devolução de Livros</a></li>
          </ul>
        </div>
        <div id="emprestimo" class="col s12">

            <!--Formulário de Cadastro/Alunos-->
            <div class="row">
                <form class="col s12" method="POST" action="">
                  <div class="row">
                    <div class="input-field col s4">
                    <span id="msgAlerta1"></span>
                      <input name="ra" id="ra" type="text" class="validate" onkeyup="pesquisarAluno(1)">
                      <label for="ra">RA</label>
                    </div>
                    <button onclick="myTeste()" class="waves-effect waves-light btn" style="margin-top: 20px; position: fixed;" type="submit"><i class="fa fa-search"></i> Pesquisar</button>
                  </div>
            <!--Form. Oculta-->      
            <div class="row">
                <div class="input-field col s6">
                    <input id="nome1" type="text" class="validate" >
                    <label for="nome1">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input id="curso1" type="text" class="validate" disabled> 
                    <label for="curso1">Curso</label>
                    </div>
                <div class="input-field col s6">
                    <input id="semestre1" type="text" class="validate" disabled> 
                    <label for="semestre1">Semestre</label>
                </div>
                <div class="input-field col s6">
                    <input id="data_retirada" type="date" class="validate">
                    <label for="data_retirada">Data de Retirada</label>
                </div>
                <div class="input-field col s6">
                    <input id="data_entrega" type="text" class="validate">
                    <label for="data_entrega">Data de Entrega</label>
                </div>
            </div>                 
                </form>
              </div>

        </div>
        <div id="devolucao" class="col s12">

            <!--Formulário de Cadastro/Alunos-->
            <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s4">
                      <input id="ra" type="text" class="validate">
                      <label for="ra">RA</label>
                    </div>
                    <a class="waves-effect waves-light btn" style="margin-top: 20px; position: fixed;"><i class="fa fa-search"></i> Pesquisar</a>
                  </div>
                  <div class="row">
                    <div class="input-field col s4">
                        <label for="nome">Nome</label>
                        <br><br>
                        <p>Teste</p>
                    </div>
                    <div class="input-field col s4">
                        <label for="curso">Curso</label>
                        <br><br>
                        <p>Teste</p>
                    </div>
                    <div class="input-field col s4">
                        <label for="semestre">Semestre</label>
                        <br><br>
                        <p>Teste</p>
                    </div>
                    
                </div>       
            <!--Form. Oculta-->                  
            <div class="row">
                <div class="input-field col s4">
                    <label for="nome"><i class="fas fa-book-open"></i> Título</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="isbn"><i class="fas fa-info-circle"></i> ISBN</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="ano_livro"><i class="fas fa-calendar"></i> Ano do Livro</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="autor"><i class="fas fa-tags"></i> Autor</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="editora"><i class="fas fa-address-book"></i> Editora</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="edicao"><i class="fas fa-address-book"></i> Edição</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="classificacao"><i class="fas fa-cogs"></i> Classificação</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="data_emprestimo">Data do empréstimo</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="data_devolucao">Data de Devolução</label>
                    <br><br>
                    <p>Teste</p>
                </div>
                <div class="input-field col s4">
                    <label for="status_livro">Status do Livro</label>
                    <br><br>
                    <p>Teste</p>
                </div>
            </div> 
                </form>
              </div>

        </div>
      </div>
    </div>

    <script src="../assests/js/app.js"></script>
</body>
</html>