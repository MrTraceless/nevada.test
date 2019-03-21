(function($) {

  $(document).ready(function() {
    var grid = $('.publications');
    grid.masonry();
  
    grid.imagesLoaded( function() {
        grid.masonry('layout');
    });
  });

//Burger Menu

var Menu = {
  
  el: {
    ham: $('.menu'),
    menuTop: $('.menu-top'),
    menuMiddle: $('.menu-middle'),
    menuBottom: $('.menu-bottom')
  },
  
  init: function() {
    Menu.bindUIactions();
  },
  
  bindUIactions: function() {
    Menu.el.ham
        .on(
          'click',
        function(event) {
        Menu.activateMenu(event);
        event.preventDefault();
      }
    );
  },
  
  activateMenu: function() {
    Menu.el.menuTop.toggleClass('menu-top-click');
    Menu.el.menuMiddle.toggleClass('menu-middle-click');
    Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
  }
};

Menu.init();

$('.menu').on('click', function (a) {
  a.preventDefault;
  $(this).toggleClass('burger__close');
  $('.main-nav__list').toggleClass('menu-right');
});


//Error Subscribe

    $(".wpcf7").on('wpcf7:invalid', function() {
      $('.container__outer').css('border-color', '#ff1818');
  });

  $(".wpcf7").on('wpcf7:mailsent', function() {
    $('.container__outer').css('border-color', '#398f14');
});

//Focus Subscribe
$('.form__input').on('focus', function () {
  $(this).parents('.container__outer').css('border-color', '#781241');
});


$('.form__input').on('blur', function () {
  $(this).parents('.container__outer').css('border-color', 'inherit');
});


//Label Input Contact Form
//Focus
$('.form-input').on('focus', function () {
  $(this).parent().parent().find('.label__text').addClass('label-animation');
});

//blur
$('.form-input').on('blur', function () {

  if ($('.form-input').val() === "") {
    $(this).parent().parent().find('.label__text').removeClass('label-animation');
  } else {
    $(this).parent().parent().find('.label__text').addClass('label-animation');
  }
})

//TExtarea
$('.form-textarea').on('focus', function () {
  $(this).parent().parent().find('.label__text').addClass('label-animation');
});

//blur
$('.form-textarea').on('blur', function () {

  if ($('.form-textarea').val() === "") {
    $(this).parent().parent().find('.label__text').removeClass('label-animation');
  } else {
    $(this).parent().parent().find('.label__text').addClass('label-animation');
  }
})

})(jQuery);


