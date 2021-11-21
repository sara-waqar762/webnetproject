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

      <link type="text/css" rel="stylesheet" href="css/common-style.css">
      <link type="text/css" rel="stylesheet" href="css/style-wizard.css">
      <link type="text/css" rel="stylesheet" href="css/book-hotel-detail.css">
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
                           <a href="hotel.php" class="back-to-search"><i class="fas fa-chevron-left"></i>Go Back</a>
                           <ul class="list-unstyled form-wizard-steps clearfix">
                              <li class="active"><span><i class="fas fa-check"></i></span><strong>Hotel Room<em> Selection</em></strong></li>
                              <!-- <li><span><i class="fas fa-check"></i></span><strong>Traveller <em> Information</em></strong></li> -->
                              <li><span><i class="fas fa-check"></i></span><strong>Checkout</strong></li>
                              <li><span><i class="fas fa-check"></i></span><strong>Confirmation</strong></li>
                           </ul>
                        </div>
                        <fieldset class="wizard-fieldset show">
                           <div class="hotel-detail">
                              <div class="row">
                                <div class="col s12">
                                 <div class="hotel-detail-wrap">
                                    <div class="wrap-h1">
                                       <h3 class="fixed-h3">[Hotel name]<em>Makkah, Saudi Arabia</em></h3>
                                       <span class="fastart">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </span> 
                                    </div>
                                 </div>
                              </div>
                              <!-- col s12 end -->
                           </div>
                           <!-- row end -->
                           <div class="row">
                              <div class="col s12 l7">
                                 <div class="hotel-gallery">
                                    <div class="row">
                                       <div class="col s12 l5">
                                          <a href="img/hotel-detailImg1.png" data-fancybox="images"> <img class="ma-img" src="img/hotel-detailImg1.png"> </a>
                                       </div>
                                       <div class="col s12 l7">
                                          <ul class="ne-ul">
                                             <li>
                                                <a href="img/deal-5.png" data-fancybox="images"> <img src="img/deal-5.png"> </a> <strong>[Hotel Name]</strong> 
                                             </li>
                                             <li>
                                                <a href="img/deal-2.png" data-fancybox="images"> <img src="img/deal-2.png"> </a> <strong>[Hotel Name]</strong> 
                                             </li>
                                             <li>
                                                <a href="img/deal-3.png" data-fancybox="images"> <img src="img/deal-3.png"> </a> <strong>[Hotel Name]</strong> 
                                             </li>
                                             <li>
                                                <a href="img/deal-1.png" data-fancybox="images"> <img src="img/deal-1.png"> </a> <strong>[Hotel Name]</strong> 
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <!-- row end -->
                                 </div>
                                 <!-- hotel-gallery end -->
                                 <div class="row">
                                  
                                    <div class="wrap-li2">
                                       <div class="col s12 m5 l4">
                                          <ul>
                                             <li> <a href="#" class="valign-wrapper"><i class="material-icons">call</i>+1 (234) 567-8901</a> </li>
                                             <li> <a href="#" class="valign-wrapper"><i class="material-icons">local_post_office</i>hotel@email.com</a> </li>
                                             <li>
                                                <a href="#" class="valign-wrapper"><img src="img/new-makkah.png">4,779,853.59 m</a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="col s12 m7 l8">
                                          <div class="check">
                                             <div class="check-in check-inb">
                                                <img class="abst-arrow-1b" src="img/double-arrow-r.png"> <strong>check - in</strong>
                                                <div class="date-time">
                                                   <ul>
                                                      <li>
                                                         <i class="material-icons">date_range</i>
                                                         <p>31-08-2021</p>
                                                      </li>
                                                      <li>
                                                         <i class="material-icons">access_time</i>
                                                         <p>12:00pm</p>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="check-in check-out check-inb">
                                                <img class="abst-arrow-2b" src="img/double-arrow-r.png"> <strong>check - out</strong>
                                                <div class="date-time">
                                                   <ul>
                                                      <li>
                                                         <i class="material-icons">date_range</i>
                                                         <p>08-09-2021</p>
                                                      </li>
                                                      <li>
                                                         <i class="material-icons">access_time</i>
                                                         <p>12:00pm</p>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- wrap-li2 end -->
                                    <div class="col s12">
                                       <div class="select-room">
                                          <h3 class="fixed-h3">Select Room</h3>
                                          <!-- row end -->
                                          <div class="row for-padd-top">
                                             <div class="col s12">
                                                <strong><i class="material-icons">hotel</i>1 Room for 2 Adults</strong>
                                                <ul class="room-checkbox">
                                                   <li class="">
                                                      <div class="l-s-t">
                                                         <strong>[Room Type]</strong> 
                                                         <span>[Room Type] - Room Only | Room - Room Only</span> 
                                                      </div>
                                                      <p>
                                                         <div class="r-s-t">
                                                            <h4><span>CAD</span>1,000</h4>
                                                            <em>(Including VAT &amp; Taxes)</em> 
                                                         </div>
                                                         <label>
                                                            <input name="group1" type="radio" />
                                                            <span></span>
                                                         </label>
                                                      </p>
                                                   </li>
                                                   <li class="">
                                                      <div class="l-s-t"> 
                                                         <strong>[Room Type]</strong> 
                                                         <span>[Room Type] - Room Only | Room - Room Only</span>
                                                      </div>
                                                      <p>
                                                         <div class="r-s-t">
                                                            <h4><span>CAD</span>1,000</h4>
                                                            <em>(Including VAT &amp; Taxes)</em> 
                                                         </div>
                                                         <label>
                                                            <input name="group1" type="radio" />
                                                            <span></span>
                                                         </label>
                                                      </p>
                                                   </li>
                                                   <li class="">
                                                      <div class="l-s-t"> 
                                                         <strong>[Room Type]</strong> 
                                                         <span>[Room Type] - Room Only | Room - Room Only</span>
                                                      </div>
                                                      <p>
                                                         <div class="r-s-t">
                                                            <h4><span>CAD</span>1,000</h4>
                                                            <em>(Including VAT &amp; Taxes)</em> 
                                                         </div>
                                                         <label>
                                                            <input name="group1" type="radio" />
                                                            <span></span>
                                                         </label>
                                                      </p>
                                                   </li>
                                                </ul>
                                                <hr>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                          <div class="row">
                                             <div class="col s12">
                                                <strong><i class="material-icons">hotel</i>2 Rooms for 2 Adults</strong>
                                                <ul class="room-checkbox">
                                                   <li class="">
                                                      <div class="l-s-t">
                                                         <strong>[Room Type]</strong> 
                                                         <span>[Room Type] - Room Only | Room - Room Only</span> 
                                                      </div>
                                                      <p>
                                                         <div class="r-s-t">
                                                            <h4><span>CAD</span>1,000</h4>
                                                            <em>(Including VAT &amp; Taxes)</em> 
                                                         </div>
                                                         <label>
                                                            <input name="group1" type="radio" />
                                                            <span></span>
                                                         </label>
                                                      </p>
                                                   </li>
                                                   <li class="">
                                                      <div class="l-s-t"> 
                                                         <strong>[Room Type]</strong> 
                                                         <span>[Room Type] - Room Only | Room - Room Only</span>
                                                      </div>
                                                      <p>
                                                         <div class="r-s-t">
                                                            <h4><span>CAD</span>1,000</h4>
                                                            <em>(Including VAT &amp; Taxes)</em> 
                                                         </div>
                                                         <label>
                                                            <input name="group1" type="radio" />
                                                            <span></span>
                                                         </label>
                                                      </p>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                       </div>
                                    </div>
                                    <!-- col s12 end -->
                                    <div class="col s12">
                                       <div class="ameni-div">
                                          <h3 class="fixed-h3">Hotel Amenities</h3>
                                          <div class="row">
                                             <div class="col s12 m6 l4">
                                                <ul>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                </ul>
                                             </div>
                                             <div class="col s12 m6 l4">
                                                <ul>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                </ul>
                                             </div>
                                             <div class="col s12 m6 l4">
                                                <ul>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                   <li>[Amenity]</li>
                                                </ul>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                       </div>
                                    </div>
                                    <!-- col s12 end -->
                                    <div class="col s12">
                                       <div class="ameni-div-p">
                                          <h3 class="fixed-h3">Hotel Amenities</h3>
                                          <div class="row">
                                             <div class="col s12">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                       </div>
                                    </div>
                                    <!-- col s12 end -->
                                    <div class="col s12">
                                       <div class="ameni-div-p">
                                          <h3 class="fixed-h3">[Policy]</h3>
                                          <div class="row">
                                             <div class="col s12">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                       </div>
                                    </div>
                                    <!-- col s12 end -->
                                    <div class="col s12">
                                       <div class="ameni-div-p">
                                          <h3 class="fixed-h3">[Policy]</h3>
                                          <div class="row">
                                             <div class="col s12">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                       </div>
                                    </div>
                                    <!-- col s12 end -->
                                    <div class="col s12">
                                       <div class="ameni-div-p">
                                          <h3 class="fixed-h3">[Location]</h3>
                                          <div class="row">
                                             <div class="col s12">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.803953835079!2d67.08692051537706!3d24.904667949617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f2a3216f7c3%3A0x1a22a276385a4014!2sWebnet%20Pakistan%20Pvt%20Ltd!5e0!3m2!1sen!2s!4v1633004393133!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                             </div>
                                          </div>
                                          <!-- row end -->
                                       </div>
                                    </div>
                                    <!-- col s12 end -->
                                 </div>
                                 <!-- row end -->
                              </div>
                              <!-- col l7 end -->
                              <div class="col s12 m12 l5">
                                 <div class="mk-hotel">
                                    <div class="mk-top"> <strong class="valign-wrapper"><img src="img/new-makkah.png" alt=""> Makkah Hotel</strong> </div>
                                    <div class="mk-top2">
                                       <ul>
                                          <li><strong>Check-in:</strong><span>31-08-2021</span></li>
                                          <li><strong>Check-out:</strong><span>08-09-2021</span></li>
                                       </ul>
                                    </div>
                                    <div class="mk-c">
                                       <strong>1 Room for 2 Adults</strong>
                                       <div class="mk-c-1">
                                          <strong>[Hotel name] <br> <span>[Room type]</span></strong>
                                          <p>$542.34</p>
                                       </div>
                                    </div>
                                    <div class="mk-c">
                                       <strong>1 Room for 2 Adults</strong>
                                       <div class="mk-c-1">
                                          <strong>[Hotel name] <br> <span>[Room type]</span></strong>
                                          <p>$542.34</p>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="mk-footer">
                                       <strong>Summary</strong>
                                       <div class="mk-f-2"> <span>TOTAL <em>(Including VAT &amp; Taxes)</em></span> <strong><span>CAD</span>1,484.71</strong> </div>
                                       <div class="row">
                                          <div class="col s6 offset-s3"> <a href="#" class="form-wizard-next-btn">continue</a> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- row end main-->
                        </div>
                     </fieldset>
                     <!-- First step end -->
                     <fieldset class="wizard-fieldset">
                        <a href="javascript:;" class="form-wizard-previous-btn last-previous">Previous</a>
                        <div class="row">
                           <div class="col s12">
                              <h2 class="main-heading">Traveller Information</h2>
                           </div>
                        </div>
                        <!-- row end -->
                        <div class="traveller-info-div">
                           <div class="row">
                              <div class="col s12 l7">
                                 <strong>Booking Contact Person Details</strong>
                                 <div class="row">
                                    <div class="input-field col s12 m6">
                                    <label for="full_name">First Name<span>*</span></label>
                                    <input id="first_name" type="text" class="validate" placeholder="John">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for="full_name">Last Name<span>*</span></label>
                                    <input id="last_name" type="text" class="validate" placeholder="Doe">
                                 </div>
                                 <div class="input-field col s12 m12">
                                    <label for="email">Email Address<span>*</span></label>
                                    <input id="email" type="email" class="validate" placeholder="jhon123@gmail.com">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label class="left-space">Phone Number<span>*</span></label>
                                    <input type="tel" placeholder="Phone Number" id="phone5">                          
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label>Nationality<span>*</span></label>
                                    <select>
                                       <option value="" disabled selected>Choose your option</option>
                                       <option value="1">Option 1</option>
                                       <option value="2">Option 2</option>
                                       <option value="3">Option 3</option>
                                    </select>
                                 </div>
                                 </div>
                                 <!-- form row end -->
                                 <hr>
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
                                    <!-- row end -->
                                 </div>
                                 <!-- additional-detail-end -->
                                 <!-- payment div -->
                                 <div class="payment-method">
                                    <div class="row">
                                       <div class="col s12">
                                          <h3 class="fixed-h3">Payment Method</h3>
                                          <p>Please fill in the information below to complete your transaction:</p>
                                       </div>
                                    </div>
                                    <div class="row">
                                          <div class="col s12 m10">
                                             <div class="cardDetail-form">
                                                <div class="input-field s12 m12">
                                                   <label class="active">IBAN</label>
                                                   <input placeholder="" type="text" class="validate">
                                                </div>
                                                <div class="input-field s12 m12">
                                                   <label class="active">Google Auth Code (Expires each 30 seconds)</label>
                                                   <input placeholder="" type="text" class="validate">
                                                </div>
                                                <div class="row">
                                                   <div class="col s6 m4">
                                                      <a href="javascript:;" class="form-wizard-next-btn">complete</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- foem carddetail form end  -->
                                          </div>
                                       </div>
                                       <!-- row end -->
                                 </div>
                                 <!-- payment div end -->
                              </div>
                              <!-- col l7 end -->
                              <div class="col s12 m12 l5">
                                 <div class="mk-hotel">
                                    <div class="mk-top"> <strong class="valign-wrapper"><img src="img/new-makkah.png" alt=""> Makkah Hotel</strong> </div>
                                    <div class="mk-top2">
                                       <ul>
                                          <li><strong>Check-in:</strong><span>31-08-2021</span></li>
                                          <li><strong>Check-out:</strong><span>08-09-2021</span></li>
                                       </ul>
                                    </div>
                                    <div class="mk-c">
                                       <strong>1 Room for 2 Adults</strong>
                                       <div class="mk-c-1">
                                          <strong>[Hotel name] <br> <span>[Room type]</span></strong>
                                          <p>$542.34</p>
                                       </div>
                                    </div>
                                    <div class="mk-c">
                                       <strong>1 Room for 2 Adults</strong>
                                       <div class="mk-c-1">
                                          <strong>[Hotel name] <br> <span>[Room type]</span></strong>
                                          <p>$542.34</p>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="mk-footer">
                                       <strong>Summary</strong>
                                       <div class="mk-f-2"> <span>TOTAL <em>(Including VAT &amp; Taxes)</em></span> <strong><span>CAD</span>1,484.71</strong> </div>
                                      
                                    </div>
                                 </div>
                              </div>
                             <!-- col l5 end -->
                           </div>
                           <!-- row end -->
                        </div>
                        <!-- traveller info form end -->
                     </fieldset>
                     <!-- Second step end -->
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
                              </div>
                           </div>
                           <!-- row end -->
                        </div>
                     </fieldset>
                     <!-- Forth step end -->
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
<script type="text/javascript" src="js/package-detail.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
   <!-- Phone Number Script -->
   <script>
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