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
      <link type="text/css" rel="stylesheet" href="css/hotel.css">
      <link type="text/css" rel="stylesheet" href="css/common-responsive.css">
      

   </head>
   <body>
   <div class="page-wrapper">
     <div class="pagewrapper">
      <div>

      <?php include('includes/top-bar.php'); ?>
      <?php include('includes/nav.php');?>

      <main data-scroll-section>
          <section class="first-section">
         <div class="container">
            <div class="row">
               <div class="col s12">
                  <h2 class="main-heading"><i class="material-icons">hotel</i>Popular Hotels</h2>
                  <div class="update-search">
                     <span>Update your search</span>
                     <div class="form-top-detail">
                        <form>
                           <div class="input-field fielDv fielDv1">
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
                           <div class="input-field fielDv fielDv2">
                              <label>Check-in Check-out</label>
                              <input type="text" id="daterange" name="dates">
                           </div>
                           <div class="input-field fielDv fielDv3">
                              <label>Room Type</label>
                              <select class="">
                                 <option value="" disabled selected>Choose your option</option>
                                 <option value="1">Double</option>
                                 <option value="2">Triple</option>
                                 <option value="3">Quadruple</option>
                                 <option value="4">Quintuple</option>
                                 <option value="5">Sextuple</option>
                              </select>
                           </div>
                           <div class="input-field fielDv fielDv4">
                              <label>SUB PCC</label>
                              <input type="text" class="validate">
                           </div>
                           <div class="input-field fielDv fielDv5">
                              <label>Special Code</label>
                              <input type="text" class="validate">
                           </div>
                           <div class="srchbtn fielDv6">
                              <button class="btn waves-effect waves-light h-btn-done searchBtn">Search<i class="fas fa-search"></i></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- row end -->
            <div class="row">
               <div class="col s12">
                  <div class="top-List-deal">
                     <div class="topText-deal">
                        <strong>Sort by:</strong>
                        <div class="filtertime">
                           <select>
                              <option value="0">latest</option>
                              <option value="1">Old</option>
                           </select>
                        </div>
                        <div class="filterBy">
                           <img class="filterImg" src="img/filter-icon.png">
                           <select>
                              <option value="" disabled selected>Filter</option>
                              <option value="1">Aa-Zz</option>
                              <option value="2">High-Low</option>
                              <option value="3">Low-High</option>
                           </select>
                        </div>
                     </div>
                     <div class="grid-btn">
                        <div class="vertical-grid">
                        </div>
                        <div class="horizontal-grid">
                        </div>
                     </div>
                     <div class="blogForm">
                        <button class="btn waves-effect waves-light h-btn-done newBtn"><i class="fas fa-search"></i></button>
                        <input type="text" name="" placeholder="Search Blog"> 
                     </div>
                     <!-- search form end -->
                  </div>
               </div>
            </div>
            <!-- row end -->
         </div>
      </section>
      <section class="second-sec">
         <div class="container">
               <div class="row">
                  <div class="col s12"> <span class="blue-span">9 Hotels found</span> </div>
               </div>
               <!-- row end -->
               <div id="test1" class="col s12">
                  <div class="row">
                     <div class="col s12 m6 l4">
                        <div class="step2-c">
                           <div class="step2-img">
                              <a class="detail-hotel-div" href="book-hotel-detail.php"> <img src="img/hotel-img.jpg" alt=""> </a>
                           </div>
                           <div class="main-box-padd">
                              <div class="step2-t">
                                 <ul>
                                    <li>
                                       <a class="" href="book-hotel-detail.php">
                                          <h3 class="fixed-h3 detail-hotel-div">[Hotel name]</h3>
                                       </a>
                                       <span class="fastart">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       </span> 
                                    </li>
                                    <li> 
                                       <em>Makkah, Saudi Arabia</em> <strong>(Reg no : 4100388)</strong> 
                                    </li>
                                 </ul>
                              </div>
                              <div class="step2-2">
                                 <div class="s2-d">
                                    <ul>
                                       <li><img src="img/new-makkah.png" alt=""> 4,779,853.59 m</li>
                                       <li><i class="material-icons">hotel</i> 5 Nights - 2 Room</li>
                                    </ul>
                                 </div>
                                 <div class="p-l"> <strong><span>CAD</span>1,000<em>(Including VAT & Taxes)</em></strong> </div>
                              </div>
                              <div class="check">
                                 <div class="check-in">
                                    <img class="abst-arrow-1" src="img/double-arrow-r.png"> <strong>check - in</strong>
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
                                 <div class="check-in check-out">
                                    <img class="abst-arrow-2" src="img/double-arrow-r.png"> <strong>check - out</strong>
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
                              <div class="cont">
                                 <hr>
                                <a class="mapA" href="#"><i class="fas fa-map-marked-alt"></i>Show on map</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col l4 end  -->
                     <div class="col s12 m6 l4">
                        <div class="step2-c">
                           <div class="step2-img">
                              <a class="detail-hotel-div" href="book-hotel-detail.php"> <img src="img/hotel-img.jpg" alt=""> </a>
                           </div>
                           <div class="main-box-padd">
                              <div class="step2-t">
                                 <ul>
                                    <li>
                                       <a class="" href="book-hotel-detail.php">
                                          <h3 class="fixed-h3 detail-hotel-div">[Hotel name]</h3>
                                       </a>
                                       <span class="fastart">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       </span> 
                                    </li>
                                    <li> 
                                       <em>Makkah, Saudi Arabia</em> <strong>(Reg no : 4100388)</strong> 
                                    </li>
                                 </ul>
                              </div>
                              <div class="step2-2">
                                 <div class="s2-d">
                                    <ul>
                                       <li><img src="img/new-makkah.png" alt=""> 4,779,853.59 m</li>
                                       <li><i class="material-icons">hotel</i> 5 Nights - 2 Room</li>
                                    </ul>
                                 </div>
                                 <div class="p-l"> <strong><span>CAD</span>1,000<em>(Including VAT & Taxes)</em></strong> </div>
                              </div>
                              <div class="check">
                                 <div class="check-in">
                                    <img class="abst-arrow-1" src="img/double-arrow-r.png"> <strong>check - in</strong>
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
                                 <div class="check-in check-out">
                                    <img class="abst-arrow-2" src="img/double-arrow-r.png"> <strong>check - out</strong>
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
                              <div class="cont">
                                 <hr>
                                <a class="mapA" href="#"><i class="fas fa-map-marked-alt"></i>Show on map</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col l4 end  -->
                     <div class="col s12 m6 l4">
                        <div class="step2-c">
                           <div class="step2-img">
                              <a class="detail-hotel-div" href="book-hotel-detail.php"> <img src="img/hotel-img.jpg" alt=""> </a>
                           </div>
                           <div class="main-box-padd">
                              <div class="step2-t">
                                 <ul>
                                    <li>
                                       <a class="" href="book-hotel-detail.php">
                                          <h3 class="fixed-h3 detail-hotel-div">[Hotel name]</h3>
                                       </a>
                                       <span class="fastart">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       </span> 
                                    </li>
                                    <li> 
                                       <em>Makkah, Saudi Arabia</em> <strong>(Reg no : 4100388)</strong> 
                                    </li>
                                 </ul>
                              </div>
                              <div class="step2-2">
                                 <div class="s2-d">
                                    <ul>
                                       <li><img src="img/new-makkah.png" alt=""> 4,779,853.59 m</li>
                                       <li><i class="material-icons">hotel</i> 5 Nights - 2 Room</li>
                                    </ul>
                                 </div>
                                 <div class="p-l"> <strong><span>CAD</span>1,000<em>(Including VAT & Taxes)</em></strong> </div>
                              </div>
                              <div class="check">
                                 <div class="check-in">
                                    <img class="abst-arrow-1" src="img/double-arrow-r.png"> <strong>check - in</strong>
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
                                 <div class="check-in check-out">
                                    <img class="abst-arrow-2" src="img/double-arrow-r.png"> <strong>check - out</strong>
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
                              <div class="cont">
                                 <hr>
                                <a class="mapA" href="#"><i class="fas fa-map-marked-alt"></i>Show on map</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col l4 end  -->
                     <div class="col s12 m6 l4">
                        <div class="step2-c">
                           <div class="step2-img">
                              <a class="detail-hotel-div" href="book-hotel-detail.php"> <img src="img/hotel-img.jpg" alt=""> </a>
                           </div>
                           <div class="main-box-padd">
                              <div class="step2-t">
                                 <ul>
                                    <li>
                                       <a class="" href="book-hotel-detail.php">
                                          <h3 class="fixed-h3 detail-hotel-div">[Hotel name]</h3>
                                       </a>
                                       <span class="fastart">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       </span> 
                                    </li>
                                    <li> 
                                       <em>Makkah, Saudi Arabia</em> <strong>(Reg no : 4100388)</strong> 
                                    </li>
                                 </ul>
                              </div>
                              <div class="step2-2">
                                 <div class="s2-d">
                                    <ul>
                                       <li><img src="img/new-makkah.png" alt=""> 4,779,853.59 m</li>
                                       <li><i class="material-icons">hotel</i> 5 Nights - 2 Room</li>
                                    </ul>
                                 </div>
                                 <div class="p-l"> <strong><span>CAD</span>1,000<em>(Including VAT & Taxes)</em></strong> </div>
                              </div>
                              <div class="check">
                                 <div class="check-in">
                                    <img class="abst-arrow-1" src="img/double-arrow-r.png"> <strong>check - in</strong>
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
                                 <div class="check-in check-out">
                                    <img class="abst-arrow-2" src="img/double-arrow-r.png"> <strong>check - out</strong>
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
                              <div class="cont">
                                 <hr>
                                <a class="mapA" href="#"><i class="fas fa-map-marked-alt"></i>Show on map</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col l4 end  -->
                     <div class="col s12 m6 l4">
                        <div class="step2-c">
                           <div class="step2-img">
                              <a class="detail-hotel-div" href="book-hotel-detail.php"> <img src="img/hotel-img.jpg" alt=""> </a>
                           </div>
                           <div class="main-box-padd">
                              <div class="step2-t">
                                 <ul>
                                    <li>
                                       <a class="" href="book-hotel-detail.php">
                                          <h3 class="fixed-h3 detail-hotel-div">[Hotel name]</h3>
                                       </a>
                                       <span class="fastart">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       </span> 
                                    </li>
                                    <li> 
                                       <em>Makkah, Saudi Arabia</em> <strong>(Reg no : 4100388)</strong> 
                                    </li>
                                 </ul>
                              </div>
                              <div class="step2-2">
                                 <div class="s2-d">
                                    <ul>
                                       <li><img src="img/new-makkah.png" alt=""> 4,779,853.59 m</li>
                                       <li><i class="material-icons">hotel</i> 5 Nights - 2 Room</li>
                                    </ul>
                                 </div>
                                 <div class="p-l"> <strong><span>CAD</span>1,000<em>(Including VAT & Taxes)</em></strong> </div>
                              </div>
                              <div class="check">
                                 <div class="check-in">
                                    <img class="abst-arrow-1" src="img/double-arrow-r.png"> <strong>check - in</strong>
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
                                 <div class="check-in check-out">
                                    <img class="abst-arrow-2" src="img/double-arrow-r.png"> <strong>check - out</strong>
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
                              <div class="cont">
                                 <hr>
                                <a class="mapA" href="#"><i class="fas fa-map-marked-alt"></i>Show on map</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col l4 end  -->
                     <div class="col s12 m6 l4">
                        <div class="step2-c">
                           <div class="step2-img">
                              <a class="detail-hotel-div" href="book-hotel-detail.php"> <img src="img/hotel-img.jpg" alt=""> </a>
                           </div>
                           <div class="main-box-padd">
                              <div class="step2-t">
                                 <ul>
                                    <li>
                                       <a class="" href="book-hotel-detail.php">
                                          <h3 class="fixed-h3 detail-hotel-div">[Hotel name]</h3>
                                       </a>
                                       <span class="fastart">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       </span> 
                                    </li>
                                    <li> 
                                       <em>Makkah, Saudi Arabia</em> <strong>(Reg no : 4100388)</strong> 
                                    </li>
                                 </ul>
                              </div>
                              <div class="step2-2">
                                 <div class="s2-d">
                                    <ul>
                                       <li><img src="img/new-makkah.png" alt=""> 4,779,853.59 m</li>
                                       <li><i class="material-icons">hotel</i> 5 Nights - 2 Room</li>
                                    </ul>
                                 </div>
                                 <div class="p-l"> <strong><span>CAD</span>1,000<em>(Including VAT & Taxes)</em></strong> </div>
                              </div>
                              <div class="check">
                                 <div class="check-in">
                                    <img class="abst-arrow-1" src="img/double-arrow-r.png"> <strong>check - in</strong>
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
                                 <div class="check-in check-out">
                                    <img class="abst-arrow-2" src="img/double-arrow-r.png"> <strong>check - out</strong>
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
                              <div class="cont">
                                 <hr>
                                <a class="mapA" href="#"><i class="fas fa-map-marked-alt"></i>Show on map</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col l4 end  -->
                  </div>
                  <!-- row end -->
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
