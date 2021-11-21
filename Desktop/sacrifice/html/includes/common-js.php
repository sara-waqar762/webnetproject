<script type="text/javascript">



     $(window).scroll(function(){
          var sticky = $('.sticky'),
          scrolla = $(window).scrollTop();

          if (scrolla >= 100) sticky.addClass('fixed');
          else sticky.removeClass('fixed');
      });


 $(document).ready(function(){
    $('select').formSelect();
  });

            //internal page header sticky
            // $(window).scroll(function(){
            //   var sticky = $('.pagewrapper .navWrapper'),
            //       scroll = $(window).scrollTop();

            //   if (scroll >= 100) sticky.addClass('fixed');
            //   else sticky.removeClass('fixed');
            // });
             

         // Timer code
        
         
         
         
         // sticky Latest Deal Button 
         $(document).on('click','.view-btn',function(){
           $('.view-sticky-button').toggleClass('activeS');
         // var box=$(this).parent().find('.sticky-form');
         $ ('.overlay-search-2').addClass('active-overlay-2');
         // $ ('.sticky-form').css('transform','translate3d(0px, 0px, 0px)');
         // if(!box.is(':visible')){box.fadeIn(300)}
     });
         
         
         $(document).on('click','.active-overlay-2',function(){
           $('.view-sticky-button').removeClass('activeS');
           $(this).removeClass('active-overlay-2');
       });
         
         $(document).on('click','.closeIcon',function(){
           $('.view-sticky-button').removeClass('activeS');
           $(this).removeClass('active-overlay-2');
       });
         
         
         $(document).on('click', '.view-sticky-button.activeS', function() {
           $('.active-overlay-2').removeClass('active-overlay-2');
       });   





 // $(document).on('click','.view-btn',function(){
 //         $(this).removeClass('.has-scroll-smooth');
 //     });

            
            //popup modals
             document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.modal');
               // var instances = M.Modal.init(elems, options);
              });

              // Or with jQuery

              //login register modal
              $(document).ready(function(){
                    $('#prfInput').on('click',function() {
                        $('.proflmg').slideToggle();
                    });
                    $('.modal').modal();
                    $('.modal select').formSelect();
                    var input = document.querySelector("#phone");
                    window.intlTelInput(input, {
                         
                    });
                     

                    //hide and show login and register modals on click
                    $('#rg-btn').on('click',function(e) {
                        event.preventDefault();
                        $('#modalLogin').modal('close');
                        $('#modalRegister').modal('open');
                    });
                    $('.loginMbtn').on('click',function(e) {
                        event.preventDefault();
                        $('#modalLogin').modal('open');
                        $('#modalRegister').modal('close');   
                        $('.profileInput').slideDown();
                        $('.proflmg').slideUp();
                        $('#fundaiqRegDv').slideUp();
                        $('#travelAgentText').slideUp();
                        $('#umrahRegDv').slideUp();
                        $('#umrahIndiText').slideUp(); 
                    });
                    $('#forgotModalbtn').on('click',function() {
                        $('#modalpassword').modal('open');
                        $('#modalLogin').modal('close');
                        $('.resetDv').show();
                        $('.formSuccess').hidep();
                    })

                    //user register profile selection image map
                   $('.proflmg map area').on('click',function(e) {
                        event.preventDefault();
                        areaDv = $(this).attr('data-map');
                        $('.profileInput').slideUp();
                        if(areaDv == 'umrah') {
                           $('#fundaiqRegDv').slideUp();
                           $('#travelAgentText').slideUp();
                           $('#umrahRegDv').slideDown();
                           $('#umrahIndiText').slideDown();   
                        }
                        else {
                           $('#fundaiqRegDv').slideDown();
                           $('#travelAgentText').slideDown();
                           $('#umrahRegDv').slideUp();
                           $('#umrahIndiText').slideUp();
                        }                        
                   });

                //forgot password send btn on modal
                $('.sendmbtn').on('click',function(e) {
                        event.preventDefault();
                        $('.resetDv').slideUp();
                        $('.formSuccess').slideDown();
                });





              });
          



             
        if( $(window).width() < 768) {
            $('#togglBtn').on('click',function(){
                    $('nav').toggleClass('slideOn');
            });
            $('.closebtns').on('click',function(){
                $('nav').removeClass('slideOn');
            });

         }



         //register modal
           

           
 var endDate = "2021/12/30 17:13:40";
         $('.countdown.simple').countdown(endDate)
         .on('update.countdown', function(event) {
           var format = '%Hh:%Mm:%Ss';
           if(event.offset.totalDays > 0) {
               format = '%-dday%!d ' + format;
           }
           if(event.offset.weeks > 0) {
               format = '%-wweek%!w ' + format;
           }
           $(this).html(event.strftime(format));
       })
         .on('finish.countdown', function(event) {
           location.reload();
       });
</script>