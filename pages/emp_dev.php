<?php
include_once('../db/conexao.php');

error_reporting(0);

if(isset($_POST['pesquisar_aluno'])){
    $ra = $_POST['ra'];

    //Query  recuperação de dados
   $result_aluno = "SELECT * FROM tb_cadastro_aluno WHERE ra ='$ra' ";
   $resultado_aluno = mysqli_query($con, $result_aluno);
   $row_aluno = mysqli_fetch_assoc($resultado_aluno);
}

else if(isset($_POST['pesquisar_livro'])){
    $cod_livro = $_POST['cod_livro'];

    //Query  recuperação de dados
   $result_livro = "SELECT * FROM tb_cadastro_livro WHERE cod_livro ='$cod_livro' ";
   $resultado_livro = mysqli_query($con, $result_livro);
   $row_livro = mysqli_fetch_assoc($resultado_livro);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
            
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
                      <input name="ra" id="ra" type="text" class="validate">
                      <label for="ra">RA</label>
                    </div>
                    <button name="pesquisar_aluno" class="waves-effect waves-light btn" style="margin-top: 20px; position: fixed;" type="submit"><i class="fa fa-search"></i> Pesquisar</button>
                  </div>
            <!--Form. Oculta-->      
            <div class="row">
                <div class="input-field col s6">
                    <input id="nome" type="text" class="validate" value="<?php echo $row_aluno['nome'];?>" disabled>
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input id="curso" type="text" class="validate" value="<?php echo $row_aluno['curso'];?>" disabled> 
                    <label for="curso">Curso</label>
                    </div>
                <div class="input-field col s6">
                    <input id="semestre" type="text" class="validate" value="<?php echo $row_aluno['semestre'];?>" disabled> 
                    <label for="semestre">Semestre</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input name="cod_livro" id="cod_livro" type="text" class="validate"> 
                    <label for="cod_livro">Título ou Código do Livro</label>
                </div>
                <div class="input-field col s2">
                    <input id="data_retirada" type="date" class="validate">
                    <label for="data_retirada">Data de Retirada</label>
                </div>
                <div class="input-field col s2">
                    <input id="data_entrega" type="text" class="validate" onkeypress="$(this).mask('00/00/0000')" >
                    <label for="data_entrega">Data de Entrega</label>
                </div>
                <button name="pesquisar_livro" class="waves-effect waves-light btn modal-trigger" type="submit" href="#modal1">Modal</button>
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
                    <label for="titulo"><i class="fas fa-book-open"></i> Título</label>
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

    <!-- Modal Structure -->
 

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <div class="row">
                <div class="input-field col s4"> 
                <input name="cod_livro" id="cod_livro" type="text" class="validate"> 
                <label for="cod_livro">Título ou Código do Livro</label>
                </div>
                <div class="input-field col s4">
                    <label for="isbn"><i class="fas fa-info-circle"></i> ISBN</label>
                    <br><br>
                    <input id="titulo" type="text" class="validate" value="<?php echo $row_livro['titulo'];?>" disabled>
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
            </div> 
    </div>
    <div class="modal-footer">
    <button name="pesquisar_livro" class="waves-effect waves-light btn modal-trigger" type="submit">Modal</button>
    </div>
  </div>
          

  

    <script src="../assests/js/app.js"></script>
</body>
</html>