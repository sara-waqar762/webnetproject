<!DOCTYPE html>
<html  lang="en">
   <head>
      <title>Funadiq</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--Import Google Icon Font-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/locomotive-scroll.css">
      <link rel="stylesheet" type="text/css" href="css/intlTelInput.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

      <link type="text/css" rel="stylesheet" href="css/common-style.css">
      <link type="text/css" rel="stylesheet" href="css/reset-password.css">
      <link type="text/css" rel="stylesheet" href="css/common-responsive.css">
      

   </head>
   <body>
   <div class="page-wrapper">
     <div class="pagewrapper">
<div data-scroll-container>
      <?php include('includes/top-bar.php'); ?>
      <?php include('includes/nav.php');?>

      <main data-scroll-section>
         <section class="reset">
            <div class="container">
               <div class="row">
                  <div class="col col-s12">
                     <h2>Enter your NEW Password</h2>
                     <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed et nibh faucibus nulla viverra tincidunt sed id felis. Donec vestibulum magna quis metus ornare elementum. Curabitur aliquam nisi ligula,</p>
                     <div class="formWp">
                        <form>
                           <div class="input-field">
                              <input type="password" placeholder="Password">
                           </div>
                           <div class="input-field">
                              <input type="password" placeholder="Confirm password">
                           </div>
                            <div class="input-field">
                              <button type="button" class="wave-effect restbbtn" onclick="location.href = 'password-success.php';" >Reset</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <?php include('includes/footer.php'); ?>
      <?php include('includes/registermodal.php');?>
       <?php include('includes/common-js.php'); ?>
    </div>
 </div>
</div>