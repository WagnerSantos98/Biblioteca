//Animação Tabs
document.addEventListener("DOMContentLoaded", function(){
  const tab = document.querySelector('.tabs');
  M.Tabs.init(tab, {
    swipeable: true,
    duration: 300
  });
})

//Confirmação de Cadastro
function myFunct(){
  Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Aluno cadastrado com sucesso!',
    showConfirmButton: true
  })
}



//Pesqisa Aluno
async function pesquisarAluno(registro){
  

  //Receber os dados do formulario
  var lerRa = document.querySelector("#ra" + registro).value;

  //Recuperar o valor do atributo value

  
  //Verificação
  if(lerRa >= 9){
   const dados = await fetch('/pages/emp.dev.php?ra=' + lerRa);
   const resposta = await dados.json();

   if(resposta['erro']){

   }else{
    document.getElementById("nome" + registro).value = resposta['dados'].nome;
    document.getElementById("curso" + registro).value = resposta['dados'].curso;
    document.getElementById("semestre" + registro).value = resposta['dados'].semestre;
   }

  }
}


