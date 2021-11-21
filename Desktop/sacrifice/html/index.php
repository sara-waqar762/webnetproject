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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />

      <link type="text/css" rel="stylesheet" href="css/common-style.css">
      <link type="text/css" rel="stylesheet" href="css/home.css">
      <link type="text/css" rel="stylesheet" href="css/search-button.css">
      <link type="text/css" rel="stylesheet" href="css/common-responsive.css">
      
   </head>
   <body>
     <div data-scroll-container>
      <?php include('includes/top-bar.php'); ?>
       
      <?php include('includes/nav.php');?>

      <section class="innerBanner" data-sroll-delay="3" data-sroll-speed="3" data-scroll-section data-scroll-repeat>
         <div class="container bellContainer">
          <img src="img/first-bell.svg" class="first-bell">
          <img src="img/second-bell.svg" class="sec-bell">
          <img src="img/third-bell.svg" class="third-bell">          
         </div>       
        <div class="secDiv">
         <div class="container">
            <div class="homF">
                  <ul class="tabs swipeUl" id="tabs-swipe-demo">
                   <li class="tab col s3"><a class="active" href="#hotels-swipe"><i class="fa fa-bed"></i> Hotels </a></li>
                   <li class="tab col s3"><a href="#transport-swipe"><i class="fa fa-car"></i> Transport</a></li>
                 </ul>
                 <div class="formDv">
                       <div class="row">
                         <div class="col s12">
                             
                             <div id="hotels-swipe" class="contentHotel">
                               <form>
                                  <div class="input-field fielDv1">
                              <label>Location</label>
                              <ul class="radioUl">
                                 <li>
                                    <label>
                                    <input name="group1" type="radio" checked="">
                                    <span><em>Makkah</em></span>
                                    </label>
                                 </li>
                                 <li>
                                    <label>
                                    <input name="group1" type="radio">
                                    <span><em>Madina</em></span>
                                    </label>
                                 </li>
                              </ul>
                           </div>
                           <div class="input-field fielDv2">
                              <label class="active">Check-in Check-out</label>
                              <input type="text" id="daterange" name="dates">
                           </div>
                           <div class="input-field fielDv3">
                              <label class="">SUB PCC</label>
                              <input type="text" class="validate">
                           </div>
                           <div class="input-field fielDv3">
                              <label class="">Special Code</label>
                              <input type="text" class="validate">
                           </div>
                                   <div class="input-field fielDv4">
                                          <label>Travellers  |  Rooms</label>                                       
                                          <div class="inputForm prsnF">
                                             <div class="numberPersons">
                                                <h4 class="quanBtn">
                                                   <strong class="numberQ">
                                                   <em><b class="adNos">2 </b>Travellers</em>
                                                   <small>-</small>
                                                   <em><b class="chdNos">0 </b>Room</em>
                                                   </strong>
                                                </h4>
                                                <div class="person-boxdate" style="display:none;">
                                                   <div class="inputBox">
                                                      <div class="inputStp inputStp1">
                                                         <div class="i-left">
                                                            Travellers
                                                         </div>
                                                         <div class="i-right">
                                                            <button type="button" id="travellersMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="travellersNumber">2</span>
                                                            <button type="button" id="travellersPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                      <div class="inputStp">
                                                         <div class="i-left">
                                                           Room
                                                         </div>
                                                         <div class="i-right">
                                                            <button type="button" id="roomMinusBtn"><i class="fa fa-minus"></i></button>
                                                            <span id="roomNumber">0</span>
                                                            <button type="button" id="roomPlusBtn"><i class="fa fa-plus"></i></button>
                                                         </div>
                                                      </div>
                                                      <div class="frow">
                                                         <div class="roomWrapers"></div>
                                                         <a class="done-traveller">Done</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="input-field fielDvbtn">
                                          <button class="danny" type="submit"> <i class="fa fa-search"></i></button>
                                       </div>
                               </form>
                               </div><!-- hotels -->

                             <div id="transport-swipe" class="transport-form" style="display:none;">
                                    <form>
                                       <div class="row transportR">
                                          <div class="col s12 m4">
                                             <label>Route</label>
                                             <select class="routeSelect">
                                                <option value="0">Jeddah Airport To Makkah</option>
                                                <option value="2">Makkah To Jeddah Airport</option>
                                                <option value="3">Makkah to Jeddah Airport - Hajj Terminal </option>
                                                <option value="4">Madinah to Jeddah/Makkah</option>
                                                <option value="5">Jeddah Airport - Hajj Terminal to Madinah</option>
                                             </select>
                                          </div><!-- col -->
                                          <div class="col s6 m2">
                                             <label>Passengers</label>
                                             <input type="number" placeholder="4">
                                          </div>
                                          <div class="col s6 m2">
                                             <label>Vehicle</label>
                                             <select class="vehicleSelect browse-default">
                                                <option value="0">Car</option>
                                                <option value="2">Luxury Car</option>
                                                <option value="3">GMC/SUV</option>
                                                <option value="4">Hiace</option>
                                                <option value="5">Coaster</option>
                                                <option value="5">Bus</option>

                                             </select>
                                          </div>
                                     <!--      <div class="col s2">
                                             <label>Package</label>
                                              <select class="vehicleSelect">
                                                <option value="0">Budget</option>
                                                <option value="2">Economy</option>
                                                <option value="3">Premium</option>
                                             </select>
                                          </div>
                                       </div>
                                       <hr class="s-hr">
                                       <div class="row transportR floatnone">
                                          <div class="col s3">
                                              <label>Supplier</label>
                                                <select name="transporter_id" class="supplierSelect">
                                                   <option value="0">SAPTCO</option>
                                                   <option value="2">FUNADIQ</option>
                                                   <option value="3">HANCO</option>
                                                   <option value="4">FreeLancer</option>
                                                   <option value="5">Basma</option>
                                                </select>
                                          </div> -->
                                          <div class="col s9 m3">
                                               <label>Date</label>
                                               <input type="text" id="singleDate" placeholder="date">
                                          </div>
                                          <div class="col s3 m1">
                                             <label style="visibility:hidden;">submit</label>
                                             <button class="danny" type="submit"> <i class="fa fa-search"></i></button>
                                          </div>
                                       </div>
                                  </form>
                             </div><!-- transport -->
                         </div>    
                       </div><!-- row -->
           
                 </div><!-- formDv -->
                 <div class="banner-text">
                    <strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</strong>
                    <h1>Together we can change the Pilgrims Experience of Hajj & Umrah</h1>
                 </div>
            </div>
             
             <!--  <img src="img/mosque.svg" class="mosque">     -->    
              <img src="img/mnq.png" data-scroll data-scroll-direction="horizontal" data-scroll-speed="1" data-sroll-delay="3" class="moonc">
                 
         </div><!-- container -->
       </div><!-- secDiv -->
       

      </section>
      <!-- innerBanner ends -->


      <section class="coreS" data-scroll-section data-scroll-repeat  data-sroll-speed="3">
         <div class="container">
            <div class="row">
               <div class="col s12 ">
                  <h2 class="main-heading left">Our Core Values</h2>
               </div>
            </div>
            <ul class="coreUl">
               <li data-scroll data-scroll-speed="1">
                   <div class="coreWrap">                    
                     <img src="img/happiness.svg">
                     <strong>Happiness</strong>
                  </div>
               </li>
               <li data-scroll data-scroll-speed="1">
                  <div class="coreWrap">                    
                     <img src="img/transparency.svg">
                     <strong>Transparency</strong>
                  </div>
               </li>
               <li data-scroll data-scroll-speed="1">
                   <div class="coreWrap">                    
                     <img src="img/responsibility.svg">
                     <strong>Responsibility</strong>
                  </div>
               </li>
               <li data-scroll data-scroll-speed="1">
                   <div class="coreWrap">                    
                     <img src="img/honesty.svg">
                     <strong>Honesty</strong>
                  </div>
               </li>
            </ul>
            
         </div>
      </section>
      <!-- core sec end -->

       <section class="hotels" data-scroll-section data-scroll-repeat  data-sroll-speed="3">
         <div class="container">
            <img src="img/flower-pattern.svg" class="flowerIconMiddle" data-scroll data-scroll-repeat data-scroll-direction="horizontal" data-scroll-speed="1" >
            <div class="row fbd">
               <div class="col s12">
                  <div class="pinkDiv"><h2 class="pink-heading">Funadiq Best Deals</h2> <a href="#" class="viewbtn">View All</a></div>
               </div>
            </div>
            <div class="row">
               <div class="col s12">
                  <ul class="royalHotels  slick-slider slick-1">
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2022/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2021/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>
                     <li>
                        <div class="hotelli"> 
                           <a href="#" class="thumbB">
                              <div class="c-down" data-countdown="2022/11/01"></div>
                              <img class="thumbB" src="img/hotelimage.jpg">
                           </a>
                           <div class="contentCol">
                              <div class="textTitle">
                                <h3><a href="#">Al Nokhba Royal Inn</a></h3>
                                <div class="starD">
                                   <small><b>Northern Central Area</b></small>
                                   <div class="area-stars">
                                      <div class="ratings">
                                          <div class="empty-stars"></div>
                                          <div class="full-stars" style="width:70%"></div>
                                      </div>
                                   </div>
                                </div>
                              </div>
                              <div class="inf-wrapp">
                                 <div class="inf-row">
                                    <strong><small><img src="img/distance.svg"/></small> Distance:</strong>
                                    <em>170 Meters</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/cup.svg"/></small> Meal:</strong>
                                    <em>Breakfast</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/bed.svg"/></small> Available Stock:</strong>
                                    <em>0 Rooms</em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/percentage.svg"/></small> Terms:</strong>
                                    <em><em>7.5% Tax Applicable</em></em>
                                 </div>
                                 <div class="inf-row">
                                    <strong><small><img src="img/dealicon.svg"/></small> Deal End Date:</strong>
                                    <em>31 Aug 2021</em>
                                 </div>
                              </div>                 
                           </div>
                           <div class="center"><a href="#" class="interested-btn">Interested</a></div>
                        </div>
                     </li>


                  </ul>
               </div>
            </div>
         </div>
         <!-- <img class="ribbonC" src="img/wavy.png"> -->
         <img class="bestFlower" src="img/big-flower.png" data-scroll data-scroll-repeat data-scroll-direction="horizontal" data-scroll-speed="1">
      </section>
      <!-- hotelS end -->

      <section class="ExperienceS pp-hotel" data-scroll-section data-scroll-repeat>
         <div class="container">
            <div class="row">
               <div class="col s12">
                  <div class="headingbtn mb-30">
                     <div class="pinkDiv"><h2 class="pink-heading">Popular Hotels</h2> <a href="#" class="viewbtn">View All</a></div>
                  </div>                  
               </div>
            </div>
            <div class="row prow lazy slick-slider slick-12">
               <!-- col-s3 -->
               <div class="col s3">
                  <div class="ExperiWrap">
                     <div class="ex-innter">
                        <a href="#" class="innera">
                           <img src="img/hotel1.jpg">
                        </a>
                        <a href="#" class="textExper">
                           <strong>Masjid Al Jinn</strong>
                           <span>Dumat Al-Jandal</span>
                        </a>
                        <a href="#" class="heart">
                           <i class="fas fa-heart"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- experience col s3 end -->
               <!-- col-s3 -->
               <div class="col s3">
                 <div class="ExperiWrap">
                     <div class="ex-innter">
                        <a href="#" class="innera">
                           <img src="img/hotel2.jpg">
                        </a>
                        <a href="#" class="textExper">
                           <strong>Masjid Al Jinn</strong>
                           <span>Dumat Al-Jandal</span>
                        </a>
                        <a href="#" class="heart">
                           <i class="fas fa-heart"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- experience col s3 end -->
               <!-- col-s3 -->
               <div class="col s3">
                  <div class="ExperiWrap">
                     <div class="ex-innter">
                        <a href="#" class="innera">
                           <img src="img/hotel3.jpg">
                        </a>
                        <a href="#" class="textExper">
                           <strong>Masjid Al Jinn</strong>
                           <span>Dumat Al-Jandal</span>
                        </a>
                        <a href="#" class="heart">
                           <i class="fas fa-heart"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- experience col s3 end -->
               <!-- col-s3 -->
               <div class="col s3">
                  <div class="ExperiWrap">
                     <div class="ex-innter">
                        <a href="#" class="innera">
                           <img src="img/hotel1.jpg">
                        </a>
                        <a href="#" class="textExper">
                           <strong>Masjid Al Jinn</strong>
                           <span>Dumat Al-Jandal</span>
                        </a>
                        <a href="#" class="heart">
                           <i class="fas fa-heart"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- experience col s3 end -->
               <!-- col-s3 -->
               <div class="col s3">
                  <div class="ExperiWrap">
                     <div class="ex-innter">
                        <a href="#" class="innera">
                           <img src="img/hotel1.jpg">
                        </a>
                        <a href="#" class="textExper">
                           <strong>Masjid Al Jinn</strong>
                           <span>Dumat Al-Jandal</span>
                        </a>
                        <a href="#" class="heart">
                           <i class="fas fa-heart"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- experience col s3 end -->
              
            </div>
            
         </div>
         <img src="img/grey-mosque.png" class="greMosq" data-scroll data-scroll-direction="horizontal" data-scroll-speed="1.1">
      </section>
      <!-- Experience section end -->

      <section class="bidSection" data-scroll-section data-scroll-repeat>
            <div class="container">
               <div class="row">
                     <div class="col s12">
                           <div class="pinkDiv"><h2 class="pink-heading">Place your Bid</h2> <a href="#" class="viewbtn">View All</a></div>
                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
                     </div>
               </div><!-- row -->
              
                  <div class="row">
                        <div class="col s12">
                           <ul class="hotelUl slick-slider slick-123">
                              <li class="hotelDetail">
                                 <a href="#" class="hotelImg"><img src="img/hotel1.jpg"></a>
                                 <div class="hotelText">
                                    <div class="headingT">
                                       <a href="#" class="titlehotel"><h4>Pullman Zamzam Madina</h4></a>
                                       <span class="fastart">
                                          <div class="area-stars">
                                            <div class="ratings">
                                                <div class="empty-stars"></div>
                                                <div class="full-stars" style="width:70%"></div>
                                            </div>
                                         </div>
                                       </span>
                                    </div>
                                    <div class="loc">
                                       <span>Amr Bin Al Gmoh Street Madina PO Box 40233, Medina 41499 Saudi Arabia</span>
                                    </div>
                                    <div class="biDv">
                                       <img src="img/bidicon.png">
                                       <strong>Bid End Date</strong>
                                       <span>August 31st,2021</span>
                                    </div>
                                    <div class="bidLnk">
                                          <a href="#" class="placebid">Place your bid</a>
                                    </div>                                    
                                 </div>
                              </li>
                             <li class="hotelDetail">
                                 <a href="#" class="hotelImg"><img src="img/hotel1.jpg"></a>
                                 <div class="hotelText">
                                    <div class="headingT">
                                       <a href="#" class="titlehotel"><h4>Pullman Zamzam Madina</h4></a>
                                       <span class="fastart">
                                          <div class="area-stars">
                                            <div class="ratings">
                                                <div class="empty-stars"></div>
                                                <div class="full-stars" style="width:70%"></div>
                                            </div>
                                         </div>
                                       </span>
                                    </div>
                                    <div class="loc">
                                       <span>Amr Bin Al Gmoh Street Madina PO Box 40233, Medina 41499 Saudi Arabia</span>
                                    </div>
                                    <div class="biDv">
                                       <img src="img/bidicon.png">
                                       <strong>Bid End Date</strong>
                                       <span>August 31st,2021</span>
                                    </div>
                                    <div class="bidLnk">
                                          <a href="#" class="placebid">Place your bid</a>
                                    </div>                                    
                                 </div>
                              </li>
                              <li class="hotelDetail">
                                 <a href="#" class="hotelImg"><img src="img/hotel1.jpg"></a>
                                 <div class="hotelText">
                                    <div class="headingT">
                                       <a href="#" class="titlehotel"><h4>Pullman Zamzam Madina</h4></a>
                                       <span class="fastart">
                                          <div class="area-stars">
                                            <div class="ratings">
                                                <div class="empty-stars"></div>
                                                <div class="full-stars" style="width:70%"></div>
                                            </div>
                                         </div>
                                       </span>
                                    </div>
                                    <div class="loc">
                                       <span>Amr Bin Al Gmoh Street Madina PO Box 40233, Medina 41499 Saudi Arabia</span>
                                    </div>
                                    <div class="biDv">
                                       <img src="img/bidicon.png">
                                       <strong>Bid End Date</strong>
                                       <span>August 31st,2021</span>
                                    </div>
                                    <div class="bidLnk">
                                          <a href="#" class="placebid">Place your bid</a>
                                    </div>                                    
                                 </div>
                              </li>
                              <li class="hotelDetail">
                                 <a href="#" class="hotelImg"><img src="img/hotel1.jpg"></a>
                                 <div class="hotelText">
                                    <div class="headingT">
                                       <a href="#" class="titlehotel"><h4>Pullman Zamzam Madina</h4></a>
                                       <span class="fastart">
                                          <div class="area-stars">
                                            <div class="ratings">
                                                <div class="empty-stars"></div>
                                                <div class="full-stars" style="width:70%"></div>
                                            </div>
                                         </div>
                                       </span>
                                    </div>
                                    <div class="loc">
                                       <span>Amr Bin Al Gmoh Street Madina PO Box 40233, Medina 41499 Saudi Arabia</span>
                                    </div>
                                    <div class="biDv">
                                       <img src="img/bidicon.png">
                                       <strong>Bid End Date</strong>
                                       <span>August 31st,2021</span>
                                    </div>
                                    <div class="bidLnk">
                                          <a href="#" class="placebid">Place your bid</a>
                                    </div>                                    
                                 </div>
                              </li>
                              <li class="hotelDetail">
                                 <a href="#" class="hotelImg"><img src="img/hotel1.jpg"></a>
                                 <div class="hotelText">
                                    <div class="headingT">
                                       <a href="#" class="titlehotel"><h4>Pullman Zamzam Madina</h4></a>
                                       <span class="fastart">
                                          <div class="area-stars">
                                            <div class="ratings">
                                                <div class="empty-stars"></div>
                                                <div class="full-stars" style="width:70%"></div>
                                            </div>
                                         </div>
                                       </span>
                                    </div>
                                    <div class="loc">
                                       <span>Amr Bin Al Gmoh Street Madina PO Box 40233, Medina 41499 Saudi Arabia</span>
                                    </div>
                                    <div class="biDv">
                                       <img src="img/bidicon.png">
                                       <strong>Bid End Date</strong>
                                       <span>August 31st,2021</span>
                                    </div>
                                    <div class="bidLnk">
                                          <a href="#" class="placebid">Place your bid</a>
                                    </div>                                    
                                 </div>
                              </li>
                              <li class="hotelDetail">
                                 <a href="#" class="hotelImg"><img src="img/hotel1.jpg"></a>
                                 <div class="hotelText">
                                    <div class="headingT">
                                       <a href="#" class="titlehotel"><h4>Pullman Zamzam Madina</h4></a>
                                       <span class="fastart">
                                          <div class="area-stars">
                                            <div class="ratings">
                                                <div class="empty-stars"></div>
                                                <div class="full-stars" style="width:70%"></div>
                                            </div>
                                         </div>
                                       </span>
                                    </div>
                                    <div class="loc">
                                       <span>Amr Bin Al Gmoh Street Madina PO Box 40233, Medina 41499 Saudi Arabia</span>
                                    </div>
                                    <div class="biDv">
                                       <img src="img/bidicon.png">
                                       <strong>Bid End Date</strong>
                                       <span>August 31st,2021</span>
                                    </div>
                                    <div class="bidLnk">
                                          <a href="#" class="placebid">Place your bid</a>
                                    </div>                                    
                                 </div>
                              </li>
                              <!-- hotel detail end -->
                           </ul>
                        </div>
                  </div>
            </div>
      </section>
     <!-- bid Section end -->

     <section class="stopSection" data-scroll-section data-scroll-repeat>
         <div class="container">
               <div class="row">
                     <div class="col s12">
                           <div class="pinkDiv"><h2 class="pink-heading">Funadiq Stop</h2></div>
                     </div>
               </div>
               <div class="row">
                     <div class="col s12">
                           <ul class="stopUl">
                                 <li>
                                    <a href="#">
                                         <div class="st-dv">
                                          <img src="img/stop1.png"/>
                                         </div>
                                         <h4>Adahi / Sacrifice</h4> 
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                         <div class="st-dv">
                                          <img src="img/transport.png"/>
                                         </div>
                                         <h4>Transport</h4> 
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                         <div class="st-dv">
                                          <img src="img/catering.png"/>
                                         </div>
                                         <h4>Catering</h4> 
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                         <div class="st-dv">
                                          <img src="img/umrah.png"/>
                                         </div>
                                         <h4>UMRAH VISA</h4> 
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                         <div class="st-dv">
                                          <img src="img/telecom.png"/>
                                         </div>
                                         <h4>TELECOM SIM Card</h4> 
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                         <div class="st-dv">
                                          <img src="img/help.png"/>
                                         </div>
                                         <h4>Help Center</h4> 
                                    </a>
                                 </li>
                           </ul>            
                     </div>
               </div>
         </div>

         <img src="img/blu-pattern-revised1.jpg" class="stopMG">
     </section>
     <!-- stop section end -->

     <section class="featureSection" data-scroll-section data-scroll-repeat> 
           
            <div class="container">
                <img src="img/patrern2.png" class="patternF" data-scroll data-scroll-direction="horizontal" data-scroll-speed="1"/>
                  <div class="row">
                     <div class="col s12">
                           <div class="pinkDiv"><h2 class="pink-heading">Umrah Packages</h2></div>
                     </div>
                  </div>
                  <div class="featurePink">
                     <div class="row">
                        <div class="col m12 l8">
                             <h3>Looking for a <strong>Companion and Friend</strong>  to assist you visit the House of Allah?</h3>
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                              <a href="#" class="bookbtn">Book your package</a>
                        </div>
                     </div>
                     <img src="img/featuremg.png">
                  </div>
            </div>
     </section>
     <!-- featureSection end -->

      <section class="testimonialSection" data-scroll-section data-scroll-repeat>
           <img src="img/big-flower.png" class="testimonial-top" data-scroll data-scroll-direction="horizontal" data-scroll-speed="1">
            <div class="container">
               <div class="row">
                     <div class="col s12">
                        <div class="pinkDiv"><h2 class="pink-heading">Testimonials</h2></div>
                     </div>
               </div>
               <div class="row">
                     <div class="col s12">
                           <ul class="testimonial-ul slick-1234">
                              <li>
                                 <div class="testli"><p>“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd”</p>
                                 <strong>Lorem ipsum</strong></div>
                              </li>
                              <li>
                                 <div class="testli"><p>“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd”</p>
                                 <strong>Lorem ipsum</strong></div>
                              </li>
                               <li>
                                 <div class="testli"><p>“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd”</p>
                                 <strong>Lorem ipsum</strong></div>
                              </li>
                              
                           </ul>
                     </div>
               </div>
            </div>
            <img src="img/big-flower.png" class="testimonial-bottom" data-scroll data-scroll-direction="horizontal" data-scroll-speed="1">
      </section>
      <!-- testimonialSection end -->

     
      <?php include('includes/footer.php'); ?>


        <!-- LOGIN OR CREATE FORM  -->
         <div class="overlay-search-form"></div>
         <div id="view-sticky-form" class="view-sticky-form">
            <div class="formTextBtns">
               <div class="closeIcon2">
                  <i class="fas fa-times"></i>
               </div>
               <h2 class="main-heading">Get Exclusive Deals when you sign up with UmrahCompanions</h2>
               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
               <a href="#" class="btn form-button form-button1">register</a>
               <a href="#" class="btn form-button form-button2">Login</a>
               <a href="#" class="btn form-button form-button3">Continue as guest</a>
            </div>
            <!-- main box end -->
            <div class="form-button1Slide" style="display: none;">
               <div class=" backB">
                  <i class="fas fa-chevron-left"></i>
               </div>
               <div class="closeIcon2">
                  <i class="fas fa-times"></i>
               </div>
               <h2 class="main-heading">Create Account</h2>
               <div class="createForm">
                  <input class="paddingInput profilemapDisplay" type="text" name="" placeholder="Please select user profile:">
                  <i class="fas fa-chevron-down"></i> 
               </div>
               <div class="proflmg" style="display: none;">
                  <img src="img/profilemap.png" usemap="#image-map">
                  <map name="image-map">
                     <area class="regUmrah" target="" alt="umrah" title="umrah" data-map="umrah" href="https://www.w3schools.com/html/html_images_imagemap.asp" coords="26,31,218,28,219,75,175,142,180,185,25,181" shape="poly">
                     <area class="regFunadiq" target="" alt="funadiq" title="funadiq" data-map="funadiq" href="https://www.googlemapsgenerator.com/en/" coords="218,29,385,29,387,179,177,183,178,133,218,77" shape="poly">
                  </map>
               </div>
               <!-- Register box end -->
               <div class="funadiqForm" id="ResgisterUmrah" style="display:none;">
                  <form>
                     <div class="input-field col s12">
                        <input id="name" type="text" class="validate">
                        <label for="name">Full Name</label>
                     </div>
                     <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email Address</label>
                     </div>
                     <div class="input-field col s12">
                        <input type="tel" id="phone" placeholder="012345678">
                     </div>
                     <p>
                        <label>
                        <input type="checkbox" />
                        <span>Sing up for newsletters to stay up to date with our latest deals and offers.</span>
                        </label>
                     </p>
                     <p>
                        <label>
                        <input type="checkbox" />
                        <span>I accept the <a href="#">Privacy Policy</a> and <a href="#">Terms of conditions</a></span>
                        </label>
                     </p>
                     <a href="#" class="btn form-button form-button-light">Create Account</a> 
                     <a href="#" class="btn form-button form-button2 form-button2b open-login">Login</a>
                  </form>
                  <div class="textUmrahlast">
                     <h6>Individual</h6>
                     <em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                     printer</em>
                  </div>
               </div>
               <!-- Umrah Create Account form end -->
               <div class="funadiqForm" id="ResgisterFunadiq" style="display:none;">
                  <form>
                     <div class="input-field col s12">
                        <input id="name-1" type="text" class="validate">
                        <label for="name-1">Full Name</label>
                     </div>
                     <div class="input-field col s12">
                        <input id="email-1" type="email" class="validate">
                        <label for="email-1">Email Address</label>
                     </div>
                     <div class="input-field col s12">
                        <input type="tel" id="phone-1" placeholder="012345678">
                     </div>
                     <p>
                        <label>
                        <input type="checkbox" />
                        <span>Sing up for newsletters to stay up to date with our latest deals and offers.</span>
                        </label>
                     </p>
                     <p>
                        <label>
                        <input type="checkbox" />
                        <span>I accept the <a href="#">Privacy Policy</a> and <a href="#">Terms of conditions</a></span>
                        </label>
                     </p>
                     <a href="#" class="btn form-button form-button-light">Create Account</a> 
                     <a href="#" class="btn form-button form-button2 form-button2b open-login">Login</a>
                  </form>
                  <div class="textAgentlast">
                     <h6>Travel Agent</h6>
                     <em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                     printer</em>
                  </div>
               </div>
               <!-- funadiq Create Account form end -->
            </div>
            <div class="account-done" style="display:none;">
               <div class="closeIcon2">
                  <i class="fas fa-times"></i>
               </div>
               <h2 class="main-heading">Hi John! <span class="lightHeading"> Check your email to activate your account</span></h2>
               <div class="textSuccess">
                  <p>We just sent a link to <a href="#" class="emailadd">johndoe@email.com.</a> Didn’t receive the email?</p>
                  <a href="#" class="btn waves-effect waves-light h-btn-done viewBtn">Resend</a>
               </div>
               <div class="success-animation-1">
                  <svg class="checkmark-d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                     <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                     <path class="checkmark__check-d" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                  </svg>
                  <a href="email-template1.php" class="e-templateBtn">Click here to view email template</a>
               </div>
            </div>
            <div class="form-button2Slide" style="display:none;">
               <div class="closeIcon2">
                  <i class="fas fa-times"></i>
               </div>
               <h2 class="main-heading">Login</h2>
               <div class="funadiqForm logInForm">
                  <form>
                     <div class="input-field col s12">
                        <input id="email-2" type="email" class="validate">
                        <label for="email-2">Email Address</label>
                     </div>
                     <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                     </div>
                     <a href="#" class="btn form-button form-button-login">Login</a> 
                     <a href="#" class="btn form-button form-button-mint form-button2b open-create">Regsiter</a>
                     <a href="reset-password.php" class="light-btn">Forget Password?</a>
                  </form>
               </div>
            </div>
         </div>
         <!-- LOGIN OR CREATE FORM END -->
      <?php include('includes/registermodal.php');?>

  </div>
      <!-- for counter -->
      <!-- <script type="text/javascript" src="js/jquery.countdown.min.js"></script> -->
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
      <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
      <script src="js/home.js"></script>
      <script src="js/search-button.js"></script>
      <script>
         
const scroller = new LocomotiveScroll({
               el: document.querySelector("[data-scroll-container]"),
               smooth: true,
               smartphone: {
                    smooth:false
                }
            });

            scroller.on("scroll", (position,value) => {
                 //console.log(value);
                 if ((position.scroll.y) > 10) {
                  document.querySelector("body").classList.add("navscrolled");
                 } else {
                  document.querySelector("body").classList.remove("navscrolled");
                 }
            });

      </script>
       
      <?php include('includes/common-js.php'); ?>
      
      
   </body>
</html>
