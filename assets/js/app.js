//Tabs
$(document).ready(function(){
    $('.tabs').tabs();
});

const button = document.querySelector('#btn');

button.addEventListener('click', (event) => 
  event.target.closest('.sideBar-lateral').classList.toggle('small'));