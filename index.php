<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if(!@include('./configutions/G_var.php')){
  include('./configutions/G_var.php');
} 

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixner.net/sorteo/Sorteo/home-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 14:11:56 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ouijaforecast - Home</title>
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
  <!-- <div id="preloader"></div> -->
  <!-- preloader end -->

  <div class="main-light-version">
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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="alltips.php">All tips</a></li>                
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
                  <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="true">Registration</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                  <form method="POST" class="registration-form cmn-frm" id="register">
                    <div class="frm-group">
                      <label>Name</label>
                      <input type="text" name="registration_name" id="registration_name" placeholder="Name">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="frm-group">
                      <label>Email Address</label>
                      <input type="email" name="registration_email" id="registration_email" placeholder="Email Address">
                      <i class="fa fa-at"></i>
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
                </form>

                <div class="tab-pane fade " id="login" role="tabpanel" aria-labelledby="login-tab">
                  <form class="login-form cmn-frm" id ="login_form">
                    <div class="frm-group">
                      <label>Email Address</label>
                      <input type="email" name="login_email" id="login_email" placeholder="Email Address">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="frm-group">
                      <label>Password</label>
                      <input type="password" name="login_pass" id="login_pass" placeholder="Enter Password">
                      <i class="fa fa-lock"></i>
                    </div>
                    <div class="frm-group">
                      <input type="submit" name="login" id="login_btn" value="login">
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
    
    <!-- banner-section start -->
    <section class="banner-section banner-new">
     
      <div class="banner-content-area" style = " margin:0 !important; padding:0 !important">
          <div class="container">
              <div class="row">
                  <div class="col-md-6" style="">
                      <div  class="banner-content">
                          <h3 class="title green-leaf">Lean On Expert And Increase <span id="text-in-green"><h3>Your Winning</h3></span> Chances</h3>
                          
              
                         
                        </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- banner-section end -->

      <!--
    <! lottery-timer-section start >
    
    <! lottery-timer-section end >
            
    <!- jackpot-section start -->
    
    <!-- jackpot-section start -->

    <!-- lottery-result-section start -->
    <section class="lottery-result-section section-padding has_bg_image" data-background="assets/images/bg-one.jpg">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="section-header text-center">
                  <h2 class="section-title">Get 90% Winning Tips For All Your Matches</h2>
                  
                </div>
                <div id="feedB"></div>
              </div>
           </div>
           <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="online-ticket-table-part">
                  <div class="online-ticket-table">
                    <h3 class="block-title">Check Out This Table For Your Match And Get The Wining Tip</h3>
                    
                    <?php
                            $sql = "SELECT * FROM kha_fixtures";
                            if($result = $mysqli->query($sql)){
                                if($result->num_rows > 0){
                                  while($row = $result->fetch_array()){
                                  echo ' 
                <div style="" class="online-ticket-table-wrapper" id="accordion2">                    
                                                              
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#addTotable'.$row['date'].'">';				
                                  echo "<table>";
                                   
                                      echo '<tr>';
                                        
                                        echo '<td width="25%" class="tipstable alignE" >
                                        <div><span  class=" country">
                                             '. $row['country'].': '.$row['league'].'</span></div>
                                            <div class="bold">'. $row['date'].' '.$row['time'].'</div>
                                        </td>';
                                        echo '<td width="15%" class="tipstable alignE" >
                                            <div class="bold flag"><img width="20px" height="20px" src="db_image/team_flag/team1.jpg" alt="TeamA">'. $row['teamA'].'</div>
                                            <div class="bold flag"><img width="20px" height="20px" src="'. $row['tbflag'].'" alt="TeamB">'. $row['teamB'].'</div>
                                        </td>';
                                        echo '<td width="15%" class=" tipstable alignE">
                                            <div class=" bold ">Odds'. $row['odds'].'</div>
                                        </td>';
                                        echo '<td width="15%" class="tipstable alignE">
                                            <div class=" bold">'. $row['advice'].'</div>
                                        </td>';     
                                        echo '<td width="30%" class="tipstable score bold alignE">
                                        <div style="font-size: 40px !important;">Score '. $row['score'].'</div>
                                    </td>';                        
                                        
                                    echo  "</tr>";
                                    echo "</table>";

                                    echo '<div id="addTotable'.$row['date'].'" class="accordion-body collapse">
                                            <div class="container">
                                            <table>
                                                <tr>
                                                    <th scope="row"> Team Rank </th>
                                                    <td> 4 </td>
                                                    <td> 2 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"> Expected goals </th>
                                                    <td> 1.7 </td>
                                                    <td> 1.5 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"> Standings </th>
                                                    <td> 1.3 </td>
                                                    <td> 1.7 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"> Key Player Missing </th>
                                                    <td> Player1 </td>
                                                    <td> Player2 </td>
                                                </tr>
                                                
                                            </table>';
                                    echo    '</div>
                                                         
                                  
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
                                
                </div>
                                
              </div>
            </div>
      </div>
    </section>
    <!-- lottery-result-section end -->


<!-- Disabled session 
    <-- choose-us-section start --
    <section class="choose-us-section section-padding">
      <div class="choose-us-image"><img src="assets/images/elements/mouse.png" alt="image"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-header text-center">
              <h2 class="section-title">Why Choose Us?</h2>
              <p>Sorteo makes playing the world's largest lotteries easy and fun.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="row mt-mb-15">
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="assets/images/svg-icons/choose-us-icons/1.svg" alt="icon">
                    </div>
                    <h4 class="title">Biggest lottery jackpots</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><-- choose-item end ->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="assets/images/svg-icons/choose-us-icons/2.svg" alt="icon">
                    </div>
                    <h4 class="title">No commission on Winnings</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><-- choose-item end ->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="assets/images/svg-icons/choose-us-icons/3.svg" alt="icon">
                    </div>
                    <h4 class="title"> Safe and Secure Playing</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>-
              </div><-- choose-item end ->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="assets/images/svg-icons/choose-us-icons/4.svg" alt="icon">
                    </div>
                    <h4 class="title">Instant payout system</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><-- choose-item end ->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="assets/images/svg-icons/choose-us-icons/5.svg" alt="icon">
                    </div>
                    <h4 class="title">Performance Bonuses</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><-- choose-item end ->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="assets/images/svg-icons/choose-us-icons/6.svg" alt="icon">
                    </div>
                    <h4 class="title">Dedicated Support</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><-- choose-item end ->
            </div>
          </div>
        </div>
      </div>
    </section>
    <-- choose-us-section end -->
      

    <!--
    <!- work-steps-section strat ->
    <section class="work-steps-section section-padding border-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="section-header text-center">
              <h2 class="section-title">how it works</h2>
              <p>Sorteo is the best way to play these exciting lotteries from anywhere in the world.</p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="work-steps-items-part d-flex">
              <div class="line"><img src="assets/images/elements/line.png" alt="line-image"></div>
              <div class="work-steps-item">
                <div class="work-steps-item-inner">
                  <div class="icon"><img src="assets/images/svg-icons/how-work-icons/1.svg" alt="icon">
                    <span class="count-num">01</span></div>
                  <h4 class="title">choose</h4>
                  <p>Choose your lottery & pick your numbers</p>
                </div>
              </div><!- work-steps-item end ->
              <div class="work-steps-item">
                <div class="work-steps-item-inner">
                  <div class="icon"><img src="assets/images/svg-icons/how-work-icons/2.svg" alt="icon">
                    <span class="count-num">02</span></div>
                  <h4 class="title">buy</h4>
                  <p>Complete your purchase</p>
                </div>
              </div><!- work-steps-item end ->
              <div class="work-steps-item">
                <div class="work-steps-item-inner">
                  <div class="icon"><img src="assets/images/svg-icons/how-work-icons/3.svg" alt="icon">
                    <span class="count-num">01</span></div>
                  <h4 class="title">win</h4>
                  <p>Start dreaming, you're almost there</p>
                </div>
              </div><!- work-steps-item end ->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="work-steps-thumb-part">
              <img src="assets/images/elements/step.png" alt="work-step-image">
              <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection" class="play-btn"><i class="fa fa-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!- work-steps-section strat ->
                -->
    <!-- online-ticket-section start -->
    <section class="online-ticket-section section-padding has_bg_image" data-background="assets/images/bg-two.jpg">
      <div class="container">
      <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="section-title text-center">
                <h2 class="section-title">Previous forecast</h2>
              <p>Check our previous forecast and find all the wining matches! </p>           
                </div>
              </div>
           </div>
          <!--
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">Previous forecast</h2>
              <p>Check our previous forecast and find all the wining matches from our previous forecast! </p>
            </div>
          </div>
          -->
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
             <div class="online-ticket-table-part">
                  <div class="online-ticket-table">
                <h3 class="block-title">Our records</h3>
                <div style="" class="online-ticket-table-wrapper" >
                <?php
                            $sql = "SELECT * FROM kha_fixtures";
                            if($result = $mysqli->query($sql)){
                                if($result->num_rows > 0){
                              
                              
                              echo '                       
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#addTotable">';				
                                  echo "<table>";
                                    while($row = $result->fetch_array()){
                                      echo '<tr>';
                                        
                                        echo '<td class="tipstable alignE" >
                                        <div><span  class=" country">
                                             '. $row['country'].":".$row['league'].'</span></div>
                                            <div class="bold">'. $row['date']. " " .$row['time'].'</div>
                                        </td>';
                                        echo '<td class="tipstable alignE" >
                                            <div class="bold flag"><img width="20px" height="20px" src="'. $row['taflag'].'" alt="TeamA">'. $row['teamA'].'</div>
                                            <div class="bold flag"><img width="20px" height="20px" src="'. $row['tbflag'].'" alt="TeamB">'. $row['teamB'].'</div>
                                        </td>';
                                        echo '<td class=" tipstable alignE">
                                            <div class=" bold ">Odds'. $row['odds'].'</div>
                                        </td>';
                                        echo '<td class="tipstable alignE">
                                            <div class=" bold">'. $row['advice'].'</div>
                                        </td>';     
                                        echo '<td class="tipstable score bold alignE">
                                        <div style="font-size: 40px !important;">Score '. $row['score'].'</div>
                                    </td>';                        
                                        
                                    echo  "</tr>";
                                    echo "</table>";

                                    echo '<div id="addTotable" class="accordion-body collapse">
                                            <div class="container">';
                                            
                                            
                                    echo    '</div>';
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
                </div>
              </div>
            </div> 
          </div>
          
          <div class="col-lg-12 text-center">
            <a href="#" class="text-btn">see all result</a>
          </div>
        </div>
      </div>
    </section>
    <!-- online-ticket-section end -->

    <!-- session disabled

    <-- payment-method-section start ->
    <section class="payment-method-section section-padding border-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-header text-center">
              <h2 class="section-title">Payment Method</h2>
              <p>Buy international lottery tickets online using any of the payment methods available on Sorteo Play now and win big!</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="payment-method-area d-flex">
              <div class="payment-item">
                <a href="#0"><img src="assets/images/payment-methods/1.jpg" alt="payment-method-image"></a>
              </div><-- payment-item end ->
              <div class="payment-item">
                <a href="#0"><img src="assets/images/payment-methods/2.jpg" alt="payment-method-image"></a>
              </div><-- payment-item end ->
              <div class="payment-item">
                <a href="#0"><img src="assets/images/payment-methods/3.jpg" alt="payment-method-image"></a>
              </div><-- payment-item end ->
              <div class="payment-item">
                <a href="#0"><img src="assets/images/payment-methods/4.jpg" alt="payment-method-image"></a>
              </div><-- payment-item end ->
              <div class="payment-item">
                <a href="#0"><img src="assets/images/payment-methods/5.jpg" alt="payment-method-image"></a>
              </div><-- payment-item end ->
              <div class="payment-item">
                <a href="#0"><img src="assets/images/payment-methods/6.jpg" alt="payment-method-image"></a>
              </div><-- payment-item end ->
            </div>
          </div>
          <div class="col-lg-12">
            <div class="commission-area d-flex align-items-center">
              <div class="title-area">
                <h3 class="title">Referral commission</h3>
              </div>
              <div class="commission-items-wrapper d-flex align-items-center">
                <div class="commission-items d-flex align-items-center">
                  <div class="icon">
                    <img src="assets/images/payment-methods/cm1.png" alt="image">
                  </div>
                  <div class="content">
                    <span class="percentage">10%</span>
                    <p>1st Level</p>
                  </div>
                </div><-- commission-items end ->
                <div class="commission-items d-flex align-items-center">
                  <div class="icon">
                    <img src="assets/images/payment-methods/cm2.png" alt="image">
                  </div>
                  <div class="content">
                    <span class="percentage">05%</span>
                    <p>2nd Level</p>
                  </div>
                </div><-- commission-items end ->
                <div class="commission-items d-flex align-items-center">
                  <div class="icon">
                    <img src="assets/images/payment-methods/cm3.png" alt="image">
                  </div>
                  <div class="content">
                    <span class="percentage">03%</span>
                    <p>3rd Level</p>
                  </div>
                </div><-- commission-items end ->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <-- payment-method-section end ->

        -->

    <!-- testimonial-section start -->
    <section class="testimonial-section section-padding border-top">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-lg-6">
                <div class="testimonial-content">
                  <h5 class="sub-title">What they think about us</h5>
                  <h2 class="title">Testimonials</h2>
                  <div class="total-ratings">
                              <?php
                  $tot_stars = $_SESSION['total_stars'];
                     while($tot_stars >= 1){
                        echo '<i class="fa fa-star"></i>';
                        $tot_stars -= 1;
                     }
                     ?>
                    <span class="ratings-count-num"><?php echo $_SESSION['total_reviews'].' Reviews'; ?></span>
                  </div>
                  <p><?php echo $_SESSION['review_statement']; ?> 
                    <div class="">
                      <button type="button" class="cmn-btn" data-toggle="modal" data-target="#shareviews_form">Share your experience</button>
                    </div>
                  </p>
                  <div class="testimonial-slider-arrows d-flex">
                    <div class="button-next"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <div class="button-prev"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                  </div>
                </div>
              </div> 
              
              <div class="col-lg-5">
                 <div class="testimonial-slider swiper-container">
                  <div class="swiper-wrapper">

                  <?php
                                $sql1 = "SELECT * FROM kha_reviews";
                                if($result = $mysqli->query($sql1)){
                                    if($result->num_rows > 0){             
                                        while($row = $result->fetch_array()){
                          

               echo      ' <div class="swiper-slide">
                        <div class="testimonial-slide">
                         <div class="testimonial-slide-header d-flex">
                                                            
                            <div class="client-thumb">
                               <img src="'. $row['picture'].'" alt="image">
                               </div>
                               <div class="client-details">
                                 <h5 class="name">'. $row['name'].'</h5>                        
                                 
                                  <div class="ratings">';
                                  $count_stars = $row['stars'];
                                  while($count_stars >= 1){
                                    echo '<i class="fa fa-star"></i>';
                                    $count_stars -= 1;
                                 }
                                echo'    <span>'. $row['stars'].'</span>
                                  </div>
                                    <p> <span class="date">'. $row['date'].'</span> </p>
                                </div>
                            </div>
                            <div class="testimonial-slide-body">
                              <p>'. $row['comment'].'</p>
                            </div>
                        </div>
                      </div>';      
                                        
                                      } //for the while loop
                                    } // for the if statement
                              } //for the if statement
                  ?>
                    </div>
                  </div> 
                </div>
             
          </div>
      </div>
    </section>
    <!-- testimonial-section end -->
<!-- seesion disabled
  
    End team disabled session -->

   
    <!-- brand-section start -->
    <!-- <div class="brand-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="brand-slider">
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/1.png" alt="image">
                </div>
              </div><!- single-slide end ->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/2.png" alt="image">
                </div>
              </div><!- single-slide end ->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/3.png" alt="image">
                </div>
              </div><!- single-slide end ->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/4.png" alt="image">
                </div>
              </div><!- single-slide end ->
              
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- brand-section end -->

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
                <p>© <?php echo date('Y').' '; ?><a href="#"> Ocode</a> - All Rights Reserved.</p>
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
    
  </div>

  <!-- Modal form for testimonials-->
        
        
  <div class="modal fade login-registration-modal" id="shareviews_form" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-registration-area">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="share-tab" data-toggle="tab" href="#login" role="tab" aria-controls="experience" aria-selected="true">Share Experience</a>
                </li>
               
              </ul>
              <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                  <form class="registration-form cmn-frm" id="shareviews">
                    
                    <div class="frm-group">
                      <label>Experience</label>
                      <textarea rows="5" name="client_view" id="client_view" placeholder="Type you experience here.">
                      </textarea>
                      <i class="fa fa-comments-o"></i>
                    </div>  
                    <div class="frm-group">
                      <input type="submit" name="client_expe" id="client_expe" value="Share">
                    </div>      
                    </form>
                  
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
    



  <!-- End Modal form for testimonials-->

  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->  
  
  <!-- jquery library js file -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
  <!-- <script src="assets/js/jquery.vmap.min.js"></script>
  <script src="assets/js/jquery.vmap.world.js"></script> -->
  <!-- main script js file -->
  <script src="assets/js/main.js"></script>


 

				

	
  <script>
    var clock = $('.clock').FlipClock(99000 * 24 * 3, {
      clockFace: 'DailyCounter',
      countdown: true
    });
      
      $("#package").prop('selectedIndex',0);


//global variables
var currentDate = $('#currentdate').val();
var leagueid;
var position = parseInt($("#pos").text());
var country, league, homeTeam, awayTeam, freetips, viptips;
var goalsHomeTeam, goalsAwayTeam;
//settings for  retrieving fixtures


			
			 					
		//Submit the data for the search parameters: country, legue, matches
    $(document).ready(function(){
			
			$("#registration_submit").click(function(){
       
        //alert("here");
				$.ajax({
					url:"register_user.php",
					type: "POST",
					data: $("#register").serialize(),
					success: function(d)
					{
           
              $("#feedB").html(d);
              $("#register")[0].reset();
					}
				});
				
			});

      
		
			
				// $.ajax(league_settings).done((result) => {
				// 	console.log("League Id" +leagueid);
				// 		var response = JSON.stringify(result);
				// 		console.log(response);
        //       $.each(result.api.fixtures, function (i, data) {
        //         country.append($('<option></option>').val(data.league_id).html(data.country));
        //           league.append($('<option></option>').val(data.league_id).html(data.name));
                
        //       })   
        // })
				// .fail((error) => console.error(error))
				// .always(() => console.log('Done fetching league'));

            
			
  });



    </script>  
</body>

<!-- Mirrored from pixner.net/sorteo/Sorteo/home-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 14:13:02 GMT -->
</html>
