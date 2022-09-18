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

$(document).ready(function(){
  $("input[name='ra']").blur(function(){
    var $nome = $("input[name='nome']");
    var $curso = $("input[name='curso']");
    var $semestre = $("input[name='semestre']");
    var ra = $(this).val();

    $.getJSON('/pages/emp_dev.php', (ra), function(retorno){
      $nome.val(retorno.nome);
      $curso.val(retorno.curso);
      $semestre.val(retorno.semestre);
    });
  });
});

