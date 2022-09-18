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

//Calculo de Datas


//Modal
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});



