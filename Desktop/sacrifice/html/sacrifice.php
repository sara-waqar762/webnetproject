
<!DOCTYPE html>
<html  lang="en">
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
      <link rel="stylesheet" type="text/css" href="css/intlTelInput.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
      <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >



      <link type="text/css" rel="stylesheet" href="css/common-style.css">
      <link type="text/css" rel="stylesheet" href="css/style-wizard.css">
      <link type="text/css" rel="stylesheet" href="css/transport.css">
       <link type="text/css" rel="stylesheet" href="css/style-sw.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/locomotive-scroll.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link type="text/css" rel="stylesheet" href="css/common-responsive.css">
      

   </head>
   <body>
   <div class="page-wrapper">
     <div class="pagewrapper">
      <div>

      <?php include('includes/top-bar.php'); ?>
      <?php include('includes/nav.php');?>

      <main data-scroll-section>
      <section class="wizard-section">
         <div class="row no-gutters">
            <div class="container">
               <div class="col l12">
                  <div class="form-wizard">
                     <form action="" method="post" role="form">
                        <div class="form-wizard-header">
                           <a href="index.php" class="back-to-search"><i class="fas fa-chevron-left"></i>Back to Home</a>
                           <ul class="list-unstyled form-wizard-steps clearfix">
                              <li class="active"><span><i class="fas fa-check"></i></span><strong>Search</strong></li>
                              <li><span><i class="fas fa-check"></i></span><strong>Reservation</strong></li>
                              <li><span><i class="fas fa-check"></i></span><strong>Checkout</strong></li>
                              <li><span><i class="fas fa-check"></i></span><strong>Confirmation</strong></li>
                           </ul>
                        </div>
                        <fieldset class="wizard-fieldset show">
                           <!-- Your step content goes here (like inputs or so) -->
                           <div class="row">
                              <div class="col s12">
                                 <h2 class="main-heading blue-h2-txt"><i class="fas fa-car"></i>Buy Sacrifice </h2>
                                  <p class="">Every year during the Islamic month of Dhul Hijjah, Muslims around the world sacrifice an animal – a goat, sheep, cow or camel – to reflect the Prophet Ibrahim’s willingness to sacrifice his son Ismail, for the sake of God.</p>

                                       <p>Funadiq has been carrying out Qurbani practices since its establishment to help feed those who cannot afford to have meat in their regular diet such as widowed women, orphaned children, refugees and elderly or disabled people. </p>

                                       <p>When families receive Qurbani meat, it fosters a real sense of hope for them and allows them to celebrate this important occasion along with millions of other Muslims across the world.</p>
                              </div>
                           </div>
                           <!-- row end -->
                    
                           <!-- row end -->
                           <div class="step1sec1">
                              <div class="row">
                                 <div class="col s12 l8">
                                    <div class="row">
                                       <div class="col s12 m12 l12">
                                          <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 
                                              <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 

                                              <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 

                                              <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 


                                              <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 

                                                  <!-- first row end --> 


                                              <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 

                                                  <!-- first row end --> 


                                              <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 


                                                  <!-- first row end --> 


                                              <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 


                                                  <!-- first row end --> 


                                              <div class="carmodelWrap">
                                             <div class="first-row pb-0">
                                                <div class="l-side sacri-name">
                                                   <a href="#">
                                                      <img src="img/circle.png">
                                                      <strong>[Name]</strong>
                                                   </a>
                                                </div>
                                                <div class="r-side sacri-cad">
                                                   <h2 class="main-heading"><span>CAD</span><span>400</span></h2>


                                                   <div class="inputBox sacri-add-min">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                 
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                        <div class="center"><a href="#" class="blue-btn" tabindex="0">add to cart</a></div>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>

                                          </div>

                                            <!-- first row end --> 



                                       </div>
                                       <!-- col l6 end -->
                                     
                       
                             
                   
                                    </div>
                                    <!-- row end -->
                                 </div>
                                 <!-- col l8 end -->
                                 <div class="col s12 l4">
                                    <div class="green-div sacri-right-div">
                                       <strong>Order Details</strong>
                                       <ul>
                                          <div class="sacrif-order">
                                          <i class="crossIcon material-icons">close</i>
                                          <li><strong>[Name]</strong><em>x 2</em></li>
                                          <li>
                                             <h6>$400</h6>
                                          </li>
                                          </div>
                                          <div class="sacrif-order">
                                          <i class="crossIcon material-icons">close</i>
                                          <li><strong>[Name]</strong><em>x 2</em></li>
                                          <li>
                                             <h6>$400</h6>
                                          </li>
                                          </div>
                                          <div class="sacrif-order">
                                          <i class="crossIcon material-icons">close</i>
                                          <li><strong>[Name]</strong><em>x 2</em></li>
                                          <li>
                                             <h6>$400</h6>
                                          </li>
                                          </div>

                                       </ul>
                                       <hr>
                                       <div class="total-car-main">
                                          <div class="sacr-summary">
                                          <strong>Summary</strong>
                                          <h6>Total:<em>(Including VAT & Taxes)</em></h6>
                                          </div>
                                          <h2><span>CAD</span>1,000</h2>
                                       </div>
                                       <div class="step-actions PriceWrap">
                                          <!-- Here goes your actions buttons -->
                                          <a href="javascript:;" class="blue-btn">Continue</a>
                                       </div>
                                    </div>

                                       <!-- 1 2 3 4 5 -->
                                       <div class="steps-container">
                                        <h2 class="main-heading blue-h2-txt">Steps</h2>
                                        <ul>

                                           <!-- <li class="steps-main-sw">
                                              <h1>1</h1>
                                              <h2 class="main-heading blue-h3-txt">Select Sacrifice type</h2>
                                              <img src="img/small-circle.png">
                                           </li>
 -->


                                           <li class="steps-main s1">
                                              <h1>1</h1>
                                              <h2 class="main-heading blue-h3-txt">Select Sacrifice type</h2>
                                           </li>


                                            <li class="steps-main s2">
                                              <h1>2</h1>
                                              <h2 class="main-heading blue-h3-txt">Make Payment</h2>
                                           </li>


                                            <li class="steps-main s3">
                                              <h1>3</h1>
                                              <h2 class="main-heading blue-h3-txt">Track Order Number</h2>
                                           </li>


                                            <li class="steps-main s4">
                                              <h1>4</h1>
                                              <h2 class="main-heading blue-h3-txt">Slaughtering</h2>
                                           </li> 


                                           <li class="steps-main s5">
                                              <h1>5</h1>
                                              <h2 class="main-heading blue-h3-txt">Meat Distribution</h2>
                                           </li>
                                        </ul>
                              </div>
                                          <!-- 1 2 3 4 5 -->

                                 </div>
                                 <!-- col l4 end -->
                              </div>
                              <!-- row main end -->
                             <!--  <div class="pages-num">
                                 <div class="row">
                                    <div class="col s12 ">
                                       <ul class="pagination">
                                          <li class="disabled haze"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                          <li class="active"><a href="#!">1</a></li>
                                          <li class="waves-effect"><a href="#!">2</a></li>
                                          <li class="waves-effect"><a href="#!">3</a></li>
                                          <li class="waves-effect haze"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div> -->
                           </div>
                        </fieldset>
                        <!-- First step end -->
                        <fieldset class="wizard-fieldset">
                           <a href="javascript:;" class="form-wizard-previous-btn last-previous">Previous</a>
                           <div class="row">
                              <div class="col s12 l8">
                                 <h2 class="main-heading">Reservation Information</h2>
                                 <div class="transport-form apply-for-visa">
                                    <h3 class="fixed-h3">Hotel Details</h3>
                                    <div class="input-field">
                                       <label for="">1st Hotel in Makkah<span>*</span></label>
                                       <input placeholder="[Hotel Name]" id="" type="text" class="validate">
                                    </div>
                                    <div class="input-field">
                                       <label for="">Hotel in Madinah<span>*</span></label>
                                       <input placeholder="[Hotel Name]" id="" type="text" class="validate">
                                    </div>
                                    <div class="input-field">
                                       <label for="">2nd Hotel in Makkah<span>*</span></label>
                                       <input placeholder="[Hotel Name]" id="" type="text" class="validate">
                                    </div>
                                    <a class="add-hotel">+ Add Hotel</a>
                                 </div>
                                 <h3 class="fixed-h3">Trip Detail</h3>
                                 <div class="trip-detail">
                                    <div class="leftBox">
                                       <div>
                                          <i class="fas fa-plane"></i>
                                          <em>Pick Up</em>
                                       </div>
                                       <strong>[Airport name]</strong>
                                       <input id="datetimepicker" type="text" placeholder="Select Pick Up Date & Time">
                                    </div>
                                    <div class="centr-img">
                                       <img src="img/trip-img.png">
                                    </div>
                                    <div class="leftBox rightBox">
                                       <div>
                                          <i class="fas fa-hotel"></i>
                                          <em>Drop off</em>
                                       </div>
                                       <strong>[Hotel name]</strong>
                                    </div>
                                 </div>
                                 <div class="additional-detail">
                                    <div class="row">
                                       <div class="col s12">
                                          <strong class="add-strong">Additional Detail +</strong>
                                          <div class="additional-form">
                                             <div class="input-field">
                                                <textarea class="materialize-textarea" placeholder="Start typing.." style="height: 51px;"></textarea>
                                                <button class="submit-btn btn waves-effect waves-light h-btn-done viewBtn">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- row end -->
                                 </div>
                                 <div class="transport-form2 apply-for-visa">
                                    <h3 class="fixed-h3">Guest Details</h3>
                                    <div class="input-field">
                                       <label for="">Full name<span>*</span></label>
                                       <input placeholder="[Hotel Name]" id="" type="text" class="validate">
                                    </div>
                                    <div class="input-field">
                                       <label for="">Whatsapp Number<span>*</span></label>
                                       <input placeholder="[Hotel Name]" id="" type="text" class="validate">
                                    </div>
                                    <div class="input-field">
                                       <label for="">Flight number<span>*</span></label>
                                       <input placeholder="[Hotel Name]" id="" type="text" class="validate">
                                    </div>
                                    <div class="input-field date-time">
                                       <label>Flight Date & Time<span>*</span></label>
                                       <input id="datetimepicker2" type="text" placeholder="Select Pick Up Date & Time">
                                    </div>
                                    <hr>
                                    <h3 class="fixed-h3">Travel Agency Details</h3>
                                    <div class="input-field">
                                       <label for="">Agency / Business name<span>*</span></label>
                                       <input placeholder="John Doe Agency" id="" type="text" class="validate">
                                    </div>
                                    <div class="input-field">
                                       <label for="">Whatsapp Number<span>*</span></label>
                                       <input placeholder="John Doe" id="" type="text" class="validate">
                                    </div>
                                    <div class="input-field">
                                       <label for="">Email<span>*</span></label>
                                       <input placeholder="johndoe@email.com" id="" type="email" class="validate">
                                    </div>
                                    <div class="input-field">
                                       <label for="">Business Address<span>*</span></label>
                                       <input placeholder="[Business address]" id="" type="text" class="validate">
                                    </div>
                                    <div class="row">
                                       <div class="col s12 m6">
                                          <div class="input-field">
                                             <label>Country <span>*</span></label>
                                             <select>
                                                <option value="" disabled selected>Country</option>
                                                <option value="1">Pakistan</option>
                                                <option value="2">Dubai</option>
                                                <option value="3">Sirilanka</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col s12 m6">
                                          <div class="input-field">
                                             <label for="">Phone Number<span>*</span></label>
                                             <input type="tel" placeholder="Phone Number" id="phone5">                          
                                          </div>
                                       </div>
                                    </div>
                                    <!-- row end -->
                                    <div class="row">
                                       <div class="col s6 m4">
                                          <a href="javascript:;" class="form-wizard-next-btn">continue</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- main col l8 end -->
                              <div class="col s12 l4">
                                 <div class="new-green-box">
                                    <div class="up-ul-Wrap">
                                     <div class="strong-icon">
                                       <strong>Add-on’s</strong>
                                       <a href="#"><i class="fas fa-edit"></i></a>
                                    </div>
                                    <ul>
                                       <li>
                                        <img src="img/Image-8.png">
                                        <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                        <h6><span>CAD</span>400</h6>
                                        <hr>
                                     </li>
                                     <li>
                                        <img src="img/Image-8.png">
                                        <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                        <h6><span>CAD</span>400</h6>
                                        <hr>
                                     </li>
                                     <li>
                                        <img src="img/Image-8.png">
                                        <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                        <h6><span>CAD</span>400</h6>
                                        <hr>
                                     </li>
                                  </ul>
                               </div>
                               <div class="up-ul-Wrap">
                                  <div class="strong-icon">
                                    <strong>Add-on’s</strong>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                 </div>
                                 <ul>
                                    <li>
                                     <img src="img/Image-8.png">
                                     <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                     <h6><span>CAD</span>400</h6>
                                     <hr>
                                  </li>
                                  <li>
                                     <img src="img/Image-8.png">
                                     <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                     <h6><span>CAD</span>400</h6>
                                     <hr>
                                  </li>
                                  <li>
                                     <img src="img/Image-8.png">
                                     <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                     <h6><span>CAD</span>400</h6>
                                     <hr>
                                  </li>
                               </ul>
                            </div>
                            <div class="col s12">
                              <hr>
                           </div>
                           <div class="row">
                              <div class="col s12">
                                <div class="total-car-main">
                                 <h6>Total:</h6>
                                 <h2><span>CAD</span>400</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- main row end -->
            </fieldset>
            <!-- Second step end -->
            <fieldset class="wizard-fieldset">
               <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
               <div class="row">
                  <div class="col m12 l7">
                     <div class="main-checkout">
                        <h2 class="main-heading">Checkout</h2>
                        <div class="checkout-div">
                           <div class="row">
                              <div class="col s12">
                                 <h3 class="fixed-h3 h3-rev">Review</h3>
                                 <p>Please review the final package details on the right. Click below if you would like to leave us a note with additional details.</p>
                              </div>
                           </div>
                           <!-- row end -->
                        </div>
                        <!-- checkout-div end -->
                                    <div class="additional-detail">
                                       <div class="row">
                                          <div class="col s12">
                                             <strong class="add-strong">Additional Detail +</strong>
                                             <div class="additional-form">
                                                <div class="input-field">
                                                   <textarea class="materialize-textarea" placeholder="Start typing.."></textarea>
                                                   <button class="submit-btn btn waves-effect waves-light h-btn-done viewBtn">Submit</button>
                                                </div>
                                             </div>
                                             <hr>
                                          </div>
                                       </div>
                                       
                                    </div>
                                    <!-- additional-detail-end -->
                                    <div class="how-to-pay">
                                       <div class="row">
                                          <div class="col s12">
                                             <h3 class="fixed-h3">How to Pay</h3>
                                             <ul class="checkbox-div">
                                                <li class="" id="SmlInput">
                                                   <div class="strong-text">
                                                      <strong>Full Payment</strong>
                                                   </div>
                                                   <p>
                                                      <span>$1,200.00</span>
                                                      <label>
                                                         <input name="group1" type="radio" />
                                                         <span></span>
                                                      </label>
                                                   </p>
                                                </li>
                                                <li class="" id="Sm2Input">
                                                   <div class="strong-text">
                                                      <strong>Full Payment</strong>
                                                      
                                                   </div>
                                                   <p>
                                                      <span>$500.00</span>
                                                      <label>
                                                         <input name="group1" type="radio" />
                                                         <span></span>
                                                      </label>
                                                   </p>
                                                   <span class="text-p">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita</span>
                                                </li>
                                             </ul>
                                             <hr>
                                          </div>
                                       </div>
                                       <!-- row end -->
                                    </div>
                                    <!-- how-to-pay end -->
                                    <div class="payment-method">
                                       <div class="row">
                                          <div class="col s12">
                                             <h3 class="fixed-h3">Payment Method</h3>
                                             <p>Please select your method of payment from the options seen below:</p>
                                          </div>
                                       </div>
                                       <!-- row end -->
                                       <div class="row">
                                          <div class="col s12 l6">
                                             <div class="input-field">
                                                <select id="myDropDown">
                                                   <option value="" disabled selected>Please select</option>
                                                   <option value="debitPak">Debit / Credit (Pakistan)</option>
                                                   <option value="debitInter">Debit / Credit (International)</option>
                                                   <option value="bankTrans">Bank Transfer</option>
                                                   <option value="cashpay">Cash</option>
                                                </select>
                                                <i class="fas fa-lock"></i>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- row end -->
                                       <div id="debitPak" class="select-detail debitPak" data-name="debitPak">
                                          <div class="row">
                                             <div class="col s12 l6">
                                                <div class="payfastBox valign-wrapper">
                                                   <img src="img/payfast.png">
                                                   <a href="#" class="btn waves-effect waves-light h-btn-done viewBtn payfastbtn">Pay with payfast</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col s12 m12 l12">
                                                <hr>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <h3 class="fixed-h3 h3-rev">Cancellation Policy Refund Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                             </div>
                                             <!-- col s12 end -->
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <h3 class="fixed-h3">Refund Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                             </div>
                                             <!-- col s12 end -->
                                          </div>
                                          <!-- row end -->
                                       </div>
                                       <!-- debitPak end -->
                                       <div id="debitInter" class="select-detail debitInter" data-name="debitInter">
                                          <div class="row">
                                             <div class="col s12">
                                                <div class="cardDetail-form">
                                                   <ul class="cardImg">
                                                      <li><img src="img/visa.webp"></li>
                                                      <li><img src="img/master.webp"></li>
                                                      <li><img src="img/american.webp"></li>
                                                      <li><img src="img/stripe.webp"></li>
                                                   </ul>
                                                   <div class="input-field s12 m12">
                                                      <label>Name on Card</label>
                                                      <input placeholder="Placeholder"  type="text" class="validate">
                                                   </div>
                                                   <div class="input-field s12 m12">
                                                      <label>Card number</label>
                                                      <input placeholder="0000-0000-0000-0000"  type="text" class="validate">
                                                   </div>
                                                   <div class="row">
                                                      <div class="input-field col s12 l6">
                                                         <label>Expiration</label>
                                                         <input placeholder="MM/YY"  type="text" class="validate">
                                                      </div>
                                                      <div class="input-field col s12 l6">
                                                         <label>CVV</label>
                                                         <input placeholder="123"  type="text" class="validate">
                                                      </div>
                                                   </div>
                                                   <div class="input-field s12 m12">
                                                      <label>Postal Code</label>
                                                      <input placeholder=""  type="text" class="validate">
                                                   </div>
                                                   <div class="input-field s12 m12">
                                                      <label>Country</label>
                                                      <input placeholder=""  type="text" class="validate">
                                                   </div>
                                                   <div class="row">
                                                      <div class="col m4">
                                                         <a href="javascript:;" class="form-wizard-next-btn">complete</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- foem carddetail form end  -->
                                             </div>
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12 m12 l12">
                                                <hr>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <h3 class="fixed-h3 h3-rev">Cancellation Policy Refund Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                             </div>
                                             <!-- col s12 end -->
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <h3 class="fixed-h3">Refund Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                             </div>
                                             <!-- col s12 end -->
                                          </div>
                                          <!-- row end -->
                                       </div>
                                       <!-- debitInter end -->
                                       <div id="bankTrans" class="select-detail bankTrans" data-name="bankTrans">
                                          <div class="row">
                                             <div class="col s12">
                                                <div class="bankTrans-form">
                                                   <strong>Please make your payment to the following Bank Account:</strong>
                                                   <div class="table-bank">
                                                      <table>
                                                         <tbody>
                                                            <tr>
                                                               <td><span>Bank</span></td>
                                                               <td> <strong>Royal Bank of Canada</strong></td>
                                                            </tr>
                                                            <tr>
                                                               <td><span>Account Name</span></td>
                                                               <td> <strong>1900456 Ontario Inc.</strong></td>
                                                            </tr>
                                                            <tr>
                                                               <td><span>Account Number</span></td>
                                                               <td> <strong>00144-1011626</strong></td>
                                                            </tr>
                                                            <tr>
                                                               <td><span>Bank Address</span></td>
                                                               <td> <strong>Mississauga, Ontario</strong></td>
                                                            </tr>
                                                            <tr>
                                                               <td><span>Bank Country</span></td>
                                                               <td> <strong>Canada</strong></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col m4">
                                                         <a href="javascript:;" class="form-wizard-next-btn">complete</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- bankTrans form end  -->
                                             </div>
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12 m12 l12">
                                                <hr>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <h3 class="fixed-h3 h3-rev">Cancellation Policy Refund Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                             </div>
                                             <!-- col s12 end -->
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <h3 class="fixed-h3">Refund Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                             </div>
                                             <!-- col s12 end -->
                                          </div>
                                          <!-- row end -->
                                       </div>
                                       <!-- bankTrans end -->
                                       <div id="cashpay" class="select-detail cashpay" data-name="cashpay">
                                          <div class="row">
                                             <div class="col s12">
                                                <div class="cashpay-form">
                                                   <strong>Please contact us at the following details to make the Cash payment to our Official representatives.</strong>
                                                   <div class="table-bank">
                                                      <table>
                                                         <tbody>
                                                            <tr>
                                                               <td><span>Phone</span></td>
                                                               <td> <strong>+966 58018 9345</strong></td>
                                                            </tr>
                                                            <tr>
                                                               <td><span>Email</span></td>
                                                               <td> <strong>support@umrahcompanions.com</strong></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col m4">
                                                         <a href="javascript:;" class="form-wizard-next-btn">complete</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- bankTrans form end  -->
                                             </div>
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12 m12 l12">
                                                <hr>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <h3 class="fixed-h3 h3-rev">Cancellation Policy Refund Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                             </div>
                                             <!-- col s12 end -->
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <h3 class="fixed-h3">Refund Policy</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                             </div>
                                             <!-- col s12 end -->
                                          </div>
                                          <!-- row end -->
                                       </div>
                                       <!-- bankTrans end -->
                                    </div>
                                    <!-- payment-method-end -->
                                 </div>
                                 <!-- main-checkout end -->
                              </div>
                              <!-- col l7 main end -->
                              <div class="col s12 l5">
                                 <div class="new-green-box new-green-box-2">
                                    <div class="up-ul-Wrap">
                                     <div class="strong-icon">
                                       <strong>Add-on’s</strong>
                                       <a href="#"><i class="fas fa-edit"></i></a>
                                    </div>
                                    <ul>
                                       <li>
                                        <img src="img/Image-8.png">
                                        <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                        <h6><span>CAD</span>400</h6>
                                        <hr>
                                     </li>
                                     <li>
                                        <img src="img/Image-8.png">
                                        <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                        <h6><span>CAD</span>400</h6>
                                        <hr>
                                     </li>
                                     <li>
                                        <img src="img/Image-8.png">
                                        <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                        <h6><span>CAD</span>400</h6>
                                        <hr>
                                     </li>
                                  </ul>
                               </div>
                               <div class="up-ul-Wrap">
                                  <div class="strong-icon">
                                    <strong>Add-on’s</strong>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                 </div>
                                 <ul>
                                    <li>
                                     <img src="img/Image-8.png">
                                     <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                     <h6><span>CAD</span>400</h6>
                                     <hr>
                                  </li>
                                  <li>
                                     <img src="img/Image-8.png">
                                     <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                     <h6><span>CAD</span>400</h6>
                                     <hr>
                                  </li>
                                  <li>
                                     <img src="img/Image-8.png">
                                     <strong><span>[Car Model]</span><em>[Passengers | Luggage]</em></strong>
                                     <h6><span>CAD</span>400</h6>
                                     <hr>
                                  </li>
                               </ul>
                            </div>
                            <div class="col s12">
                              <hr>
                           </div>
                           <div class="row">
                              <div class="col s12">
                                <div class="total-fianl-info">
                                   <div class="strong-icon">
                                    <strong>Total Price (CAD)</strong>
                                 </div>
                                 <div class="breakdown-div valign-wrapper">
                                    <p>[Package Breakdown]</p>
                                    <h2 class="main-heading">$1,200.00</h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- right side end -->
                  </div>
                  <!-- col l5 main end -->
               </div>
               <!-- main row end -->
            </fieldset>
            <fieldset class="wizard-fieldset">
               <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
               <div class="booking-confirm">
                  <div class="row">
                     <div class="col s12">
                        <div class="text-book">
                           <h2 class="main-heading blackh2">Booking Confirmed!</h2>
                           <div class="success-animation-1">
                              <svg class="checkmark-d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                 <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle>
                                 <path class="checkmark__check-d" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
                              </svg>
                           </div>
                           <p>Thanks for booking with us! A receipt / invoice of <strong> [PACKAGE NAME] </strong>  has been sent to <a href="#">johndoe@email.com </a>. Please check your email to complete / view the transaction. Do not hesitate to give us a call at [NUMBER] or send us an email at [EMAIL] if you have any questions or concerns.</p>
                           <div class="two-button">
                              <a href="#" class="btn waves-effect waves-light h-btn-done dashbord-btn">View Dashboard</a>
                              <a href="#" class="btn waves-effect waves-light h-btn-done dashbord-btn">Go back to Home</a>
                           </div>
                        </div>
                        <hr>
                     </div>
                  </div>
                  <!-- row end -->
                  <div class="already-booked">
                     <div class="row">
                        <div class="col s12 l6">
                           <h3>Already got a flight booked?</h3>
                           <p>Please attach your flight itinerary below to get the best of our experience:</p>
                           <div class="file-field input-field">
                              <div class="btn fileBtn fileBtn2">
                                 <img src="img/upload-file-icon.png">
                                 <span>Drag and drop a file here of Click to upload</span>
                                 <input type="file">
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                  </div>
                  <div class="Add-on-div">
                     <div class="row">
                        <div class="col s12 l6">
                           <a href="#" class="td-text-1">
                              <h3 class="fixed-h3">Have you booked your flight?</h3>
                              <p>Book your flight with us in a few easy steps</p>
                              <i class="material-icons">airplanemode_active</i> 
                           </a>
                        </div>
                        <div class="col s12 l6">
                           <a href="#" class="td-text-1 td-text-2">
                              <h3 class="fixed-h3">Need to do some sightseeing?</h3>
                              <p>Discover Experiences with your trip so you don’t miss a thing!</p>
                              <i class="fa fa-binoculars"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- row end -->
               </div>
            </fieldset>
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
<script type="text/javascript" src="js/transport.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="js/intlTelInput.js"></script> -->
<script src="js/jquery.datetimepicker.full.min.js"></script>
<!-- Phone Number Script -->
<script>
   jQuery('#datetimepicker').datetimepicker({
   });
   jQuery('#datetimepicker2').datetimepicker({
   });
   var input = document.querySelector("#phone5");
   window.intlTelInput(input, {
                              // any initialisation options go here
                           });
                        </script>
                        <!-- modal visa information -->
                        <!-- Modal Structure -->
                        <div id="modalVisa" class="modal visa-modal">
                           <div class="modal-content">
                              <h2 class="main-heading">VISA Information</h2>
                              <p>Saudi Arabia’s visa policy is one of the most complicated and restricted travel policies in the world. Hence, it would do good to apply for a Saudi visa well in advance for all tourists who desire to enter the country. All foreigners require valid passports that are valid for at least 6 months, along withadvance visas.Though Saudi Arabia mostly prefers not to grant visas to unaccompanied women, it offerswork permits in a few selected field, especially teachers, maids and nurses. Citizens of other Gulf Cooperation Council (GCC) nations, i.e. Kuwait, the United Arab Emirates, Qatar, Bahrain, and Oman,do not need a visa to enter Saudi Arabia. Also exempted from visa requirements are foreigners transiting through airports for less than eighteen hours, but many other entry requirements, such as the dress code and restrictions on unaccompanied females, still apply. Please note that Saudi Arabia does not recognise dual citizenship, so you must avoid carrying two passports at any time. Visa applications should be addressed to the nearest embassy of Saudi Arabia, or you can apply in your own country.</p>
                              <p>There are several kinds of visas available for those wishing to visit Saudi Arabia. Visas are granted to tourists and their family membersas Business Visa, Diplomatic and Official Visa, Family Visit Visa, Government Visit Visa, Residence Visa, Student Visa, Work Visit Visa, and also Hajj Visa and Umrah Visa for Muslim pilgrims. Check the Saudi Arabia government website for detailed information about the same.</p>
                           </div>
                           <a href="#!" class="modal-close waves-effect waves-green"><i class="fas fa-times"></i></a>
                        </div>
                        <!-- visa information modal end -->
                     </body>
                     </html>