window.addEventListener('DOMContentLoaded', function(){
  $('.ball').on('click',function(){
    $('.top-hand1').addClass('on'); // #menuに.openを追加
  });
  $('.fish').on('click',function(){
    $('.top-hand2').addClass('on'); // #menuに.openを追加
  });
  $('.food').on('click',function(){
    $('.top-hand3').addClass('on'); // #menuに.openを追加
  });
});


// about
var mySwiper = new Swiper ('.swiper-container', {
  direction: 'vertical',
  effect: 'slide',
  pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true
	},
  slidesPerView: 1,
  mousewheel: {
      invert: false,
  },
});

// 横からスライド
window.addEventListener('DOMContentLoaded', function(){
  $(window).on('load scroll',function (){
    $('.slidein').each(function(){
      var target = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var height = $(window).height();
      if (scroll > target - height){
        $(this).addClass('action');
      }
    });
  });

  // 下からふわっと
  $(window).on('load scroll',function (){
    $('.animation').each(function(){
      var target = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var height = $(window).height();
      if (scroll > target - height){
        $(this).addClass('active');
      }
    });
  });

  // 右からスライド
  $(window).on('load scroll',function (){
    $('.slide-right').each(function(){
      var target = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var height = $(window).height();
      if (scroll > target - height){
        $(this).addClass('action2');
      }
    });
  });
});

window.addEventListener('DOMContentLoaded', function(){
  $('.alert1').click(function(){
      $('#modalArea').fadeIn();
      $('.modaltext').text('いいよ！');
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });  
});

window.addEventListener('DOMContentLoaded', function(){
  $('.alert2').click(function(){
      $('#modalArea').fadeIn();
      $('.modaltext').text('ん～ふつう');
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });  
});

window.addEventListener('DOMContentLoaded', function(){
  $('.alert3').click(function(){
      $('#modalArea').fadeIn();
      $('.modaltext').text('どうでもいい');
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });  
});

window.addEventListener('DOMContentLoaded', function(){
  $('.alert4').click(function(){
      $('#modalArea').fadeIn();
      $('.modaltext').text('ぶっとばすわ');
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });  
});

window.addEventListener('DOMContentLoaded', function(){
  $('.alert5').click(function(){
      $('#modalArea').fadeIn();
      $('.modaltext').text('やだやだ');
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });  
});

window.addEventListener('DOMContentLoaded', function(){
  $('.alert6').click(function(){
      $('#modalArea').fadeIn();
      $('.modaltext').text('そこじゃない');
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });  
});

window.addEventListener('DOMContentLoaded', function(){
  $('.alert7').click(function(){
      $('#modalArea').fadeIn();
      $('.modaltext').text('たまらない！');
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });  
});