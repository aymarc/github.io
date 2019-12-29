<?php
session_start();
if(!@include('./configutions/G_var.php')){
    include('./configutions/G_var.php');
} 
  
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixner.net/sorteo/Sorteo/lottery-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 14:18:27 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ouijaforecast - Alltips</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo $_SESSION['logo']; ?>">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css link -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <!-- slick css link -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- flipclock css link -->
    <link rel="stylesheet" href="assets/css/flipclock.css">
    <!-- jqvmap css link -->
    <link rel="stylesheet" href="assets/css/jqvmap.min.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css/new_style.css">
    <!-- responsive css link -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

  <!--  header-section start  -->
  <header class="header-section">
      <!--
      <div class="header-top">
          <div class="container">
              <div class="row justify-content-between">
                  <div class="col-lg-6 col-md-6">
                      <div class="header-top-left d-flex">
                          <div class="language-part">
                              <i class="fa fa-globe"></i>
                              <select>
                                  <option>Eng</option>
                                  <option>Ban</option>
                                  <option>Rus</option>
                                  <option>Arb</option>
                              </select>
                          </div>
                          <div class="support-part">
                              <a href="tel:+88016558888454"><i class="fa fa-headphones"></i>Support</a>
                          </div>
                          <div class="email-part">
                              <a href="mailto:info@sorteo.com"><i class="fa fa-envelope"></i>info@sorteo.com</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                      <div class="header-top-right">
                          <div class="header-cart-count">
                              <i class="fa fa-shopping-cart"></i>
                              <span>My cart (0)</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      -->
      <div class="header-bottom">
        <div class="container">
          <nav class="navbar navbar-expand-xl">
           <a class="site-logo site-title" href="index.php"><img src="<?php echo $_SESSION['logo']; ?>" width="100px" height="60px" alt="site-logo"></a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">   
            </button>
            
            <?php if(isset($_SESSION['user_id'])){  
              //echo '<a><input id="user_session_id"  value="'.$_SESSION['user_id'].'"></a>'; 
              } else {

               // echo '<a><input id="user_session_id" value="check"></a>'; 
              }
            ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav main-menu ml-auto">
                <li ><a href="index.php">Home</a></li>
                <li class="active"><a href="#">All tips</a></li>                
                <!--<li class=""><a href="blog-one.html">blog</a></li>-->
                <li><a href="contact.php">contact us</a></li>
                
              </ul>
              
              <div id="join-login" class="header-join-part">
                <button id="action-btn" type="button" class="cmn-btn"  data-toggle="modal" data-target="#register_form">
                <a style="display: inline-block; border-right: 1px solid #c6ceb6; margin-right: 1px; padding-right: 5px">join us</a>
                <a ><i class="fa fa-sign-in"></i> Login</a>  
              </button>
              </div>
              <ul class="navbar-nav main-menu ml-2 mr-auto remove-elem">
                <li  class="menu_has_children1" >              
                                <a style="display:inline-block; border-radius:50%" href="#">  <img style="border-radius:50%" width="50xp" height="50px" src="./db_image/avatar.png." alt=""   /></a>
                          <ul class="sub-menu">
                                  
                          
                            <li> <a  href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a></li>
                            <li><a href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a></li>
                      
                          </ul>                 
                  </li>
              </ul>
            </div>
          </nav>
        </div>
      </div><!-- header-bottom end -->
    </header>
    <!--  header-section end  -->
    <!--login registration Modal -->
    <div class="modal fade login-registration-modal" id="register_form" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-registration-area">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">Registration</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                  <form class="registration-form cmn-frm" id="register">
                    <div class="frm-group">
                      <label>Email Address</label>
                      <input type="email" name="registration_email" id="registration_email" placeholder="Username or Email Address">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="frm-group">
                    <label>Package</label>
                              <select style="" name="package" id="package" form="register" >
                                  <!-- <option value="pack"  style="#85878f:grey! important;" disabled></option> -->
                                  <option value="vip">VIP</option>
                                  <option value="Free">Free</option>
                              </select>
                              <i class="fa fa-th-list"></i>
                    </div>
                    <div class="frm-group">
                      <label>Password</label>
                      <input type="password" name="registration_pass" id="registration_pass" placeholder="Enter Password">
                      <i class="fa fa-lock"></i>
                    </div>
                    <div class="frm-group">
                      <label>Confirm Password</label>
                      <input type="password" name="registration_re_pass" id="registration_re_pass" placeholder="Enter Password">
                      <i class="fa fa-lock"></i>
                    </div>
                    <div class="frm-group">
                      <input type="submit" name="registration_submit" id="registration_submit" value="Registration">
                    </div>
                    <div class="frm-group">
                      <div class="checkbox-area">
                        <input type="checkbox" id="registration_remember_pass">
                        <label for="registration_remember_pass">I Agree with the Terms of Use</label>
                      </div>
                      <div class="forgot-pass-area">
                        <a href="#0">Forgot Password?</a>
                      </div>
                    </div>
                    </form>
                  <div class="have-not-account">
                    <p>Already have an account?<a href="#0">Login</a></p>
                  </div>
                </div>

                <div class="tab-pane fade " id="login" role="tabpanel" aria-labelledby="login-tab">
                  <form class="login-form cmn-frm">
                    <div class="frm-group">
                      <label>Username or Email Address</label>
                      <input type="email" name="login_email" id="login_email" placeholder="Username or Email Address">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="frm-group">
                      <label>Password</label>
                      <input type="password" name="login_pass" id="login_pass" placeholder="Enter Password">
                      <i class="fa fa-lock"></i>
                    </div>
                    <div class="frm-group">
                      <input type="submit" name="registration_submit2" id="registration_submit2" value="login">
                    </div>
                    <div class="frm-group">
                      <div class="checkbox-area">
                        <input type="checkbox" id="login_remember_pass">
                        <label for="login_remember_pass">Remember Password</label>
                      </div>
                      <div class="forgot-pass-area">
                        <a href="#0">Forgot Password?</a>
                      </div>
                    </div>
                    <!-- <div class="frm-group">
                      <div class="or-text">
                        <span>Or login with</span>
                      </div>
                    </div>
                    <div class="frm-group">
                      <div class="login-with-area">
                        <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                      </div>
                    </div> -->
                  </form>
                  <div class="have-not-account">
                    <p>You don’t have an account?<a href="#0">Register Now</a></p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
 

  <!-- lottery-result-section start -->
  <section class="lottery-result-section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <h2 class="section-title">All Previous Tips</h2>
            <p>Check out all previous tips and their results.</p>
          </div>
        </div>
      </div>
      <div class="row mt-mb-15">
      <?php
                            $sql = "SELECT * FROM kha_fixtures";
                            if($result = $mysqli->query($sql)){
                                if($result->num_rows > 0){
                                  while($row = $result->fetch_array()){

                                  echo ' 
                    <div class="col-lg-6">
                       <div class="latest-result-item">
                                    
                          <div style="" class="online-ticket-table-wrapper" >';                    
                                                              
                                  				
                                  echo "<table>";
                                   
                                      echo '<tr>';
                                        
                                        echo '<td class="tipstable " >
                                        <div><span  style=" padding: 1px !important;
                                        font-size: 12px !important;
                                        color: #333745;
                                        text-align: center;
                                        margin: 0 !important;
                                        padding: 0 !important">
                                             '. $row['country'].": ".$row['league'].'</span></div>
                                            
                                        </td>';
                                        echo '<td style=" padding: 1px !important;
                                        font-size: 12px !important;" class="tipstable alignS" >
                                            <div class="bold flag"><img width="10px" height="10px" src="'. $row['taflag'].'" alt="TeamA">'. $row['teamA'].'</div>
                                            <div class="bold flag"><img width="10px" height="10px" src="'. $row['tbflag'].'" alt="TeamB">'. $row['teamB'].'</div>
                                        </td>';
                                        
                                        echo '<td class="tipstable alignS">
                                            <div class=" bold">'. $row['advice'].'</div>
                                        </td>';     
                                        echo '<td class="tipstable score bold alignS">';
                                              $pred;   
                                            if($row['status'] == 0){
                                              $pred = "Wrong"; 
                                              } else{
                                                $pred = "Corrrect";
                                              }
                                        echo '<div style="font-size: 17px !important;">'. $pred.' Tip</div>
                                        
                                        </td>';                        
                                        
                                    echo  "</tr>";
                                    echo "</table>";

                                    echo '<div class="latest-result-item-footer">
                                              <div class="bold text-center">Date: '. $row['date']. " Time: " .$row['time'].'  <i class="fa fa-calendar"></i></div>
                                              
                                         </div>
                     
                          </div>                
                       </div>             
                   </div>';
                  }
                  // Free result set
                  $result->free();
                  } else{
                      echo "No records matching your query were found.";
                  }
              } else{
                  echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
              }   
        
                   // Close connection
             // $mysqli->close();
            ?> 
        
        </div><!-- latest-result-item end -->
        <div class="col-lg-12 text-center">
          <button type="button" class="cmn-btn">load more</button>
        </div>
      </div>
    </div>
  </section>
  <!-- lottery-result-section end -->

    <!-- footer-section start -->
    <footer class="footer-section">
      <div class="footer-top border-top border-bottom has_bg_image" data-background="">
        <div class="footer-top-first">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-5 col-sm-4 text-center text-sm-left">
                <a href="home-one.html" class="site-logo"><img src="<?php echo $_SESSION['logo']; ?>" width="100px" height="100px" alt="site-logo"></a>
              </div>
              <div class="col-lg-6 col-md-7 col-sm-8">
                <div class="number-count-part d-flex">
                  <div class="number-count-item">
                    <span class="number"><?php $_SESSION['total_member'] ?></span>
                    <p>TOTAL MEMBERS</p>
                  </div>
                  <div class="number-count-item">
                    <span class="number"><?php $_SESSION['total_wintips'] ?></span>
                    <p>TOTAL winning tips</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-top-second">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                <div class="footer-widget widget-about">
                  <!-- <h3 class="widget-title">About Ouijaforecast</h3>
                  <ul class="footer-list-menu">
                    <li><a href="#0">About us</a></li>
                    <li><a href="#0">How it Works</a></li>
                    <li><a href="#0">Our services</a></li>
                    <!-<li><a href="#0">Blog</a></li>->
                    <li><a href="#0">Contact us</a></li>
                  </ul> -->
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                <div class="footer-widget widget-links">
                  <h3 class="widget-title">Quick links</h3>
                  <ul class="footer-list-menu">
                    <li><a href="#0">My info</a></li>
                    <!--<li><a href="#0">Affiliate Program</a></li>-->
                    
                    <li><a href="#0">All tips</a></li>
                    <li><a href="#0">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget widget-subscribe">
                  <h3 class="widget-title">email newsletters</h3>
                  <div class="subscribe-part">
                    <p>Subscribe now and receive weekly newsletter for latest draw and offer news and much more!</p>
                    <form method="POST" class="subscribe-form">
                      <input type="email" name="subs_email" id="subs_email" placeholder="Email address">
                      <input type="submit" value="subscribe">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-sm-7">
              <div class="copy-right-text">
                <p>© <?php echo date('Y'). ' '; ?><a href="#"> Ocode</a> - All Rights Reserved.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-5">
              <ul class="footer-social-links d-flex justify-content-end">
                <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer-section end -->
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->  

  <!-- jquery library js file -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js file -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- flipclock js file -->
  <script src="assets/js/flipclock.min.js"></script>
  <!-- countdown js file -->
  <script src="assets/js/jquery.countdown.min.js"></script>
  <!-- slick js file -->
  <script src="assets/js/slick.min.js"></script>
  <!-- swiper js file -->
  <script src="assets/js/swiper.min.js"></script>
  <!-- lightcase js file -->
  <script src="assets/js/lightcase.js"></script>
  <!-- wow js file -->
  <script src="assets/js/wow.min.js"></script>
  <!-- vamp js files -->
  <script src="assets/js/jquery.vmap.min.js"></script>
  <script src="assets/js/jquery.vmap.world.js"></script>
  <!-- main script js file -->
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from pixner.net/sorteo/Sorteo/lottery-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 14:18:28 GMT -->
</html>