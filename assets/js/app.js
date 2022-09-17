//Animação Tabs
document.addEventListener("DOMContentLoaded", function(){
  const tab = document.querySelector('.tabs');
  M.Tabs.init(tab, {
    swipeable: true,
    duration: 300
  });
})

