var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.swiper-container', {
  pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
  },
  autoplay: {
      delay: 3000,
  },
});

window.addEventListener('DOMContentLoaded', function(){
  $('#toggle').on('click',function(){
      $(this).toggleClass('on');
      $('.js-drower').toggleClass('on');

      let isActive = $(this).hasClass('on');
      toggleDrower(isActive);
  });
});

  function toggleDrower(isActive) {
    if (isActive) {
      $('#drower-bg').fadeIn(600);
    } else {
      $('#drower-bg').fadeOut(600);
    }
  } 


  var maxpage = 6;

  $('#loadin').css('displa', 'non');
  $.autopager({
  content: '.new-pos',
  link: '#next a',
  autoLoad: false,
  
  start: function(current, next){
  $('#loading').css('display', 'block');
  $('#next a').css('display', 'none');
  },
  
  load: function(current, next){
    $('#loading').css('display', 'none');
    $('#next a').css('display', 'block');
    if( current.page >= maxpage ){
      $('#next a').hide();
      }
      }
      });
  
  $('#next a').click(function(){ 
  $.autopager('load'); 
  return false;
  });
