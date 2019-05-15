<?php session_start();?> 
<?php include "db_connection/database_connection.php" ?>

<?php

    if (array_key_exists("submit", $_POST)) {
        
    
        
    if($_POST['email']==""){
        echo " (*.*) Please fill email field  (*.*) <br> ";
    }
    if($_POST['password']==""){
        echo "(*.*) Please fill password field (*.*) <br> ";
    }
       if($_POST['email']!="" && $_POST['password']!=""){
            
            
                $query = "SELECT id FROM `admin_login` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' AND password='".mysqli_real_escape_string($link, $_POST['password'])."' LIMIT 1";

                $result = mysqli_query($link, $query);

                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['name'] = $_POST['email'];

                header("Location: Admin_login_template/index.php");
        }
}
      if($_POST['email']!="" && $_POST['password']!=""){
        $queryy = "SELECT id FROM `owner_login` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' AND password='".mysqli_real_escape_string($link, $_POST['password'])."' LIMIT 1";

                $result = mysqli_query($link, $queryy);

                if (mysqli_num_rows($result) > 0) {
                $_SESSION['name'] = $_POST['email'];

                header("Location:owner_login_templete/index.php");
        
      }

             } 

             if($_POST['email']!="" && $_POST['password']!=""){
                $queryyy = "SELECT id FROM `bider_login` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' AND password='".mysqli_real_escape_string($link, $_POST['password'])."' LIMIT 1";

                $result = mysqli_query($link, $queryyy);

                if (mysqli_num_rows($result) > 0) {
                $_SESSION['name'] = $_POST['email'];

             
                 header("Location:bider_login_templete/index.php");

             }           
           }
       }
                        
                   

?>
<?php include "include/header.php" ?>
<section id="inner-banne">
    <div class="inner-banner-con">
        <div class="inner-banner-head-con">
            
        </div>
    </div>
    <img src="images_lat/banner/property-list-banner.jpg" alt="" title="" />
</section>
    <section id="wrapper" class="inner-pages">
        <div class="container">
            <!-- Long Product Detail Starts Here -->
            <div class="registration-main-page">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sp-head">
                            <span>Login</span>
                        </div>
                        <div class="reg-info">Your <span>Bidding House</span> Account gives you access not just to Buy / Sell property, but lots more.</div>
                        <div id="agent_login_error"></div>
                        <div class="reg-form">
                            <form method="POST">                                 
                                <ul>
                                    <li><input type="text" name ="email" placeholder="Email id" /></li>
                                    <li><input type="password"  name ="password" placeholder="Your Password" /></li>
                                    <li>
<!--                                        <label><input type="checkbox" name="" /> Remember me</label>-->
										<div class="logbtn">
											
											<button type="submit" name="submit">Login</button>
										</div>
                                    
                                    </li>
                                </ul>
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>



                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sp-head">
                            <span>Create New Account</span>
                        </div>
                        <div class="reg-info right-reg-info">Create your account on <a href="javascript:void(0);">Bidding House</a></div>
                        <div class="signup-head">Signup today and you will get</div>
                        <div class="signup-list">
                            <ul>
                                <li>Unlimited access to properties</li>
                                <li>Set custom alerts</li>
                                <li>Save searches</li>
                                <li>Advanced notification of new auctions</li>
                                <li class="no-icon"><a class="create-new-btn" href="register.php">Create New Account</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Long Product Detail Ends Here -->
        </div>
        <div class="clear"></div>
    </section>


    <?php include "include/footer.php" ?>
	
	<!--/// </div> .sideBarMenu_wrapper //-->
	
    <!-- Footer Ends Here -->
	<script src="js_lat/slick.min.js"></script>
	<script src="js_lat/jquery.sliderPro.min.js"></script>
	
</body>


</html>
