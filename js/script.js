
jQuery(function(){

// start timecounter
  var clock;
  clock = $('#timecounter').FlipClock({
        clockFace: 'DailyCounter',
        autoStart: false,
        callbacks: {
          stop: function() {
            $('.message').html('The clock has stopped!')
          }
        }
    });

    clock.setTime(220880);
    clock.setCountdown(true);
    clock.start();
// end time counter
  $('#phoneNumber').on('change', function () {
    debugger;
      var phone_num_regex = /^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$/i;
      if (phone_num_regex.test($(this).val())) {
        $('#message_phone').html('Valid Pakistan Phone Number').css('color', 'green');
      }
      else {
        $('#message_phone').html('Invalid Pakistan Phone Number').css('color', 'red');
      }
  });

  $('#confirm_password').on('keyup', function () {
      if ($(this).val() == $('#password').val()) {
          $('#message_pass').html('Matching').css('color', 'green');
      } else $('#message_pass').html('Not Matching').css('color', 'red');
  });

    //Singup Validation
  /*  $('#SingupForm')
        .formValidator({
            FeedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                phoneNumber: {
                    required : true,
                    minlength:11,
                    validators: {
                        phone: {
                            message: 'The value is not valid pakistan phone number'
                        }
                    }
                }
            }
        })
        // Revalidate phone number when changing the country
        .on('change' , function(e) {
            $('#SingupForm').formValidation('revalidateField', 'phoneNumber');
        });

*/
    $("#service-slider").owlCarousel({
        items : 3,
        itemsCustom : false,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,2],
        itemsTablet: [768,2],
        autoPlay : true,
        stopOnHover : true,
        pagination : true,
        paginationNumbers: false,
    });

    $("#testimonial-slider").owlCarousel({
        items : 2,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,2],
        itemsTablet: [768,2],
        autoPlay : true,
        stopOnHover : true,
        pagination : true,
        paginationNumbers: false,
    });

    $('.counter').counterUp({
        delay: 10,
        time: 1200
    });

    $('.hamburger').click(function(){
        $('.header-menu').fadeToggle(200);
    });


    $('.datepicker').datepicker({
       format:"dd-mm-yyyy",
       ignoreReadonly: false
        }).on('changeDate', function(e){
        (e.viewMode=='days') ? $(this).datepicker('hide') : '';
   });

    $('.switch').switchable({
        label_position: 'after',

    });

    $('.closebutton').click(function() {
        var parent = $(this).closest('div');
        var head = parent.prev('h3');
        var next = parent.nextAll();
        parent.add(head).add(next).fadeOut('slow',function(){$(this).remove();});
    });

    $('.next-2').click(function(){
        $('.step-one').fadeOut(200);
        $('.step-two').fadeIn(200);
        $('.step-three').fadeOut(200);

        $('#step1').removeClass('active');
        $('#step2').addClass('active');
        $('#step3').removeClass('active');
    });

    $('.next-3').click(function(){
        $('.step-one').fadeOut(200);
        $('.step-three').fadeIn(200);
        $('.step-two').fadeOut(200);

        $('#step1').removeClass('active');
        $('#step3').addClass('active');
        $('#step2').removeClass('active');
    });

    $('.prev-1').click(function(){
        $('.step-two').fadeOut(200);
        $('.step-one').fadeIn(200);
        $('.step-three').fadeOut(200);

        $('#step2').removeClass('active');
        $('#step1').addClass('active');
        $('#step3').removeClass('active');
    });

    $('.prev-2').click(function(){
        $('.step-one').fadeOut(200);
        $('.step-two').fadeIn(200);
        $('.step-three').fadeOut(200);

        $('#step1').removeClass('active');
        $('#step2').addClass('active');
        $('#step3').removeClass('active');
    });

});


var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    // Do something else, like open/close menu
});
$(document).scroll(function() {
  if($('.nav-search').offset() != null || $('.nav-search').offset() != undefined)
  {
  var fixmeTop = $('.nav-search').offset().top;
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop && fixmeTop > 450) {
        $('.nav-search').css({
            position: 'fixed',
            top: '0',
            left: '0'
        });
    } else {
        $('.nav-search').css({
            position: 'static'
        });
    }
  }
});
/*button hover
===========================*/

    var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
    buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
    totalButtons7Click = buttons7Click.length,
    totalButtons9Click = buttons9Click.length;

    buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
    buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
    function activate() {
    var self = this, activatedClass = 'btn-activated';

    if( classie.has( this, 'btn-7h' ) ) {
    // if it is the first of the two btn-7h then activatedClass = 'btn-error';
        // if it is the second then activatedClass = 'btn-success'
    activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success';
                    }
    else if( classie.has( this, 'btn-8g' ) ) {
                    // if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
                    // if it is the second then activatedClass = 'btn-error3d'
        activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success3d' : 'btn-error3d';
    }

    if( !classie.has( this, activatedClass ) ) {
        classie.add( this, activatedClass );
        setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
    }
    }

    document.querySelector( '.btn-7i' ).addEventListener( 'click', function() {
        classie.add( document.querySelector( '#trash-effect' ), 'trash-effect-active' );
    }, false );
