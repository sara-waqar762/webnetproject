

         // Form Search Button Sidebar
         $(document).on('click','.danny',function(e){
            e.preventDefault();
            $('.view-sticky-form').toggleClass('activeS');
            $ ('.overlay-search-form').addClass('active-overlay-form');
         });

         $(document).on('click','.active-overlay-form',function(){
            $('.view-sticky-form').removeClass('activeS');
            $(this).removeClass('active-overlay-form');
         });
         
         $(document).on('click','.closeIcon2',function(){
            $('.view-sticky-form').removeClass('activeS');
            $(this).removeClass('active-overlay-form');
            $('.overlay-search-form ').removeClass('active-overlay-form');
         });
         
         $(document).on('click', '.overlay-search-form', function() {
            $('.view-sticky-form').removeClass('activeS');
         });  

         //Request Button Function slideDown
         $('.form-button1').on('click',function(e) {
            event.preventDefault();
            $('.formTextBtns').slideUp();
            $('.backB').show();
            $('.closeIcon2').hide();
            $('.form-button1Slide').slideDown();
         });

         //Request Button Function slideUp
         $('.backB').on('click',function(e){
            event.preventDefault();
            $('.form-button1Slide').slideUp();
            $('.closeIcon2').show();
            $('.formTextBtns').slideDown(); 
         });
   
         //Map Script
         $('.proflmg map area').on('click',function(e) {
            event.preventDefault();
            areaDv = $(this).attr('data-map');
            console.log($(this).attr('data-map'));
         });

         //Map Image Toggle
         $(document).ready(function(){
            $(".profilemapDisplay").click(function(){
               $(".proflmg").toggle();
            });
         });

         $('.regUmrah').on('click',function(e){
            event.preventDefault();
            $('.createForm').slideUp();
            $('.proflmg').slideUp();
            $('.backB').hide();
            $('.closeIcon2').show();
            $('#ResgisterUmrah').slideDown(); 
         });
   
         //Funadiq Create Account 
         $('.regFunadiq').on('click',function(e){
            event.preventDefault();
            $('.createForm').slideUp();
            $('.proflmg').slideUp();
            $('.backB').hide();
            $('.closeIcon2').show();
            $('#ResgisterFunadiq').slideDown(); 
         });
   
         // Phone Input
         var input = document.querySelector("#phone");
            window.intlTelInput(input, {
         });

         // Phone-1 Input
         var input = document.querySelector("#phone-1");
            window.intlTelInput(input, {
         });
   
         //open login from create account
         $('.open-login').on('click',function(e) {
            $('.form-button2Slide').show();
            $('.form-button1Slide').hide();
         });
   
         //open create account from login
         $('.open-create').on('click',function(e) {
            $('.form-button1Slide').show();
            $('.createForm').show();
            $('.backB').show();
            $('.closeIcon2').hide();
            $('.form-button2Slide').hide();
            $('#ResgisterUmrah').hide();
            $('#ResgisterFunadiq').hide();
         });

         // create account done Umrah
         $('.form-button-light').on('click',function(e) {
            $('.account-done').show();
            $('#ResgisterUmrah').hide();
            $('.form-button1Slide').hide();
         });
   
         // create account done Funadiq
         $('.form-button-light').on('click',function(e) {
            $('.account-done').show();
            $('#ResgisterFunadiq').hide();
            $('.form-button1Slide').hide();
         });
   
         //Request Button Function slideDown
         $('.form-button2').on('click',function(e) {
            event.preventDefault();
            $('.formTextBtns').slideUp();
            $('.form-button2Slide').slideDown();
         });
         
         // Close function
         $(document).ready(function(){
            $(".closeIcon2").click(function(){
               $('.formTextBtns').slideDown();
               $('.createForm').show();
               $('.backB').show();
               $('.proflmg').hide();
               $('#ResgisterUmrah').hide();
               $('#ResgisterFunadiq').hide();
               $('.form-button1Slide').hide();
               $('.form-button2Slide').hide();
               $('.account-done').hide();
            });
         });

         // Overlay setting function
         $(document).on('click', '.overlay-search-form', function() {
            $('.view-sticky-form').removeClass('activeS');
            $('.formTextBtns').slideDown();
            $('.createForm').show();
            $('.backB').show();
            $('.proflmg').hide();
            $('#ResgisterUmrah').hide();
            $('#ResgisterFunadiq').hide();
            $('.form-button1Slide').hide();
            $('.form-button2Slide').hide();
            $('.account-done').hide();
         }); 

