



       

        
$(document).ready(function() {
  $('.routeSelect').select2();
}); 

         //date range picker 
         $('input[name="dates"]').daterangepicker();

         //single date range 
         $('#singleDate').daterangepicker({
            singleDatePicker: true,
         });

         
         

          // for material select dropdown
          $(document).ready(function(){
            $('.lrow select, .vehicleSelect, .packageSelect, .supplierSelect').formSelect();
         });

          

          
          
            //countdown timer
            $('[data-countdown]').each(function() {
             var $this = $(this), finalDate = $(this).data('countdown');
             $this.countdown(finalDate, function(event) {
              $this.html(event.strftime('%D days %H:%M:%S'));
           });
          });


            
       //banner form traveller and room number
       $("#travellersPlusBtn").on('click', function() {
         $("#travellersNumber").html(parseInt($('#travellersNumber').html(), 10)+1);
         $(".adNos").html(parseInt($('.adNos').html(), 10)+1);
      });
       $("#travellersMinusBtn").on('click', function() {
         $("#travellersNumber").html(parseInt($('#travellersNumber').html(), 10)-1);
         $(".adNos").html(parseInt($('.adNos').html(), 10)-1)
      });
       
       
       $("#roomPlusBtn").on('click', function() {
         $("#roomNumber").html(parseInt($('#roomNumber').html(), 10)+1);
         $(".chdNos").html(parseInt($('.chdNos').html(), 10)+1);
      });
       $("#roomMinusBtn").on('click', function() {
         $("#roomNumber").html(parseInt($('#roomNumber').html(), 10)-1);
         $(".chdNos").html(parseInt($('.chdNos').html(), 10)-1)
      });
       
       $('.quanBtn').on('click',function() {
        $('.person-boxdate').show();
        
     });
       $('.done-traveller').on('click',function(){
          $('.person-boxdate').hide();
       });

      //   slick slider testimonial



         $('.wo-slider').slick({
            infinite:false, 
            nextArrow: '<i class="arrow right wo-btn"></i>',
            prevArrow: '<i class="arrow left wo-btn wo-btn-2"></i>',
         });

         $(".slick-1").slick({
            slidesToShow: 3,
            rows: 2,
            infinite:false,   
            slidesToScroll: 1,
            autoplay: false,   
            autoplaySpeed: 2000,
            nextArrow: '<button class="btn-1" type="button"><i class="arrow right"></i></button>',
            prevArrow: '<button class="btn-1 btn-2" type="button"><i class="arrow left"></i></button>',
            responsive: [
               {
                  breakpoint: 991,
                  settings: {
                     slidesToShow: 2,
                     slidesToScroll: 2,
                     rows: 1,
                     slidesPerRow: 1,
                     infinite: true,
                     dots: false
                  }
               },
               {
                  breakpoint: 600,
                  settings: {
                     slidesToShow: 1,
                     rows: 1,
                     slidesPerRow: 1,
                     slidesToScroll: 1
                  }
               },
            ]
         });

         $(".slick-12").slick({
            slidesToShow: 3,
            infinite:false,   
            slidesToScroll: 1,
            autoplay: false,   
            autoplaySpeed: 2000,
            nextArrow: '<button class="btn-1" type="button"><i class="arrow right"></i></button>',
            prevArrow: '<button class="btn-1 btn-2" type="button"><i class="arrow left"></i></button>',
            // dots: false, Boolean
            // arrows: false, Boolean
            responsive: [
               {
                  breakpoint: 991,
                  settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  infinite: true,
                  dots: false
                  }
               },
               {
                  breakpoint: 600,
                  settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                  }
               },
            ]
         });

         $(".slick-123").slick({
            slidesToShow: 2,
            rows: 2,
            infinite:false,   
            slidesToScroll: 1,
            autoplay: false,   
            autoplaySpeed: 2000,
            nextArrow: '<button class="btn-1" type="button"><i class="arrow right"></i></button>',
            prevArrow: '<button class="btn-1 btn-2" type="button"><i class="arrow left"></i></button>',
            // dots: false, Boolean
            // arrows: false, Boolean
            responsive: [
               {
                  breakpoint: 991,
                  settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: false
                  }
                  },
                  {
                  breakpoint: 500,
                  settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  rows: 1,
                  slidesPerRow: 1,
                  }
               },
            ]
         });

         $(".slick-1234").slick({
            slidesToShow: 3,
            infinite:false,   
            slidesToScroll: 1,
            autoplay: false,   
            autoplaySpeed: 2000,
            nextArrow: '<button class="btn-1" type="button"><i class="arrow right"></i></button>',
            prevArrow: '<button class="btn-1 btn-2" type="button"><i class="arrow left"></i></button>',
            // dots: false, Boolean
            // arrows: false, Boolean
            responsive: [
               {
                  breakpoint: 991,
                  settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  infinite: true,
                  dots: false
                  }
               },
               {
                  breakpoint: 600,
                  settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                  }
               },
            ]
         });

   