/* Animação dos elementos DATA-ANIMA */
const elementos=document.querySelectorAll('[data_anima]');
const animacaoClass='animacao';
function animaScroll() {
const topoPaginaNaJanela=window.pageYOffset+((window.innerHeight*2)/4); 
/*onde a nimação começar, a 3/4 da janela  ((window.innerHeight*3)/4) */
    elementos.forEach(function(elemento){
        if(topoPaginaNaJanela > elemento.offsetTop){
            elemento.classList.add(animacaoClass);
        }else{
            elemento.classList.remove(animacaoClass);
        }
    });
    }
    if (elementos.length) {
        window.addEventListener('scroll',function() {
            animaScroll();
        })
   }
   
/* função da Janela Modal */
function cliqueModal(img){
       const janelaModal=document.getElementById('janelaModal');
       const img_modal=document.getElementById('img_modal');
       const txt_modal=document.getElementById('txt_modal');
       const btn_fechar=document.getElementById('btn_fechar');

       janelaModal.classList.remove("escondeJanelaModal");
       janelaModal.classList.add("mostraJanelaModal");

       img_modal.src=img.src;
       img_modal.alt=img.alt;
       txt_modal.innerHTML=img.alt;

       btn_fechar.onclick=function() {
           janelaModal.classList.add("escondeJanelaModal");
           janelaModal.classList.remove("mostraJanelaModal");
       }
   }