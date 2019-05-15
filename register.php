<?php include "include/header.php" ?>
<?php include "db_connection/database_connection.php" ?>
<section id="inner-banne">
    <div class="inner-banner-con">
        <div class="inner-banner-head-con"><br><br><br><br><br><br><br><br>
            <div class="inner-banner-blackBG">Create your free Bidding House Account Today</div>
        </div>
    </div>
    <img title="" alt="" src="images_lat/banner/property-list-banner.jpg" />
</section>
<!-- Wrapper Starts Here -->
<section id="wrapper" class="inner-pages">	
    <div class="container">
        
        <div class="registration-main-page">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="register-form">

                        <form  method="POST"> 
                            <ul>
                                 <li>
                                    <span>Create account as <small>*</small></span>
                                   <div id="bulkOptionContainer" class="col-xs-4">

                              <select class="form-control" name="bulk_options" id="">
                                    <option value=""> Select Option </option> 
                                    <option value="owner_login"> House Owner </option> 
                                    <option value="bider_login"> Bidder </option> 
                            </select>
                        </div>
                                <li>


                                <li>
                                    <span>First Name<small>*</small></span>
                                    <input type="text" name="firstName" class="required"  placeholder="First Name" required/></li>
                                <li>
                                    <span>Last Name<small>*</small></span>
                                    <input type="text" name="lastName" class="required"  placeholder="Last Name" required/></li>

                                    <li>
                                    <span>address<small>*</small></span>
                                    <input type="text" name="address" class="required"  placeholder="address" required/></li>

                                <li>
                                    <span>Mobile Number<small>*</small></span>
                                    <input type="text" name="cellNumber" class="required"  placeholder="Mobile Number" required/></li>
                                <li>
                                    <span>Your Email Address<small>*</small></span>
                                    <input type="text" name="email" class="required email"  placeholder="Your Email Address*" required/></li>
                                <li>
                                    <span>Your Password<small>*</small></span>
                                    <input type="password" name="password" class="required password"   placeholder="Your Password*" required/></li>     
                                
                                <li>
                                    <label>
                                        By creating an account, you agree to our <a href = "../terms-of-use.html" target = "_blank">Terms of Use</a> and <a href = "../privacy-policy.html" target = "_blank">Privacy Statement</a>. Already have an account? <a href ="login.php">Log in</a>
                                    </label>
                                </li>
                                
                                <li></li>
                                <li>
                                    <span class="sp-non">&nbsp;</span><button type="submit" name="send">Create New Account</button></li>
                                    

                                    <?php
  

    if (array_key_exists("send", $_POST)) {
        
  
        $register_as=$_POST['bulk_options'];

        if ($_POST['email'] == "" && $_POST['password'] == "" ) {
            
            echo "<p>There were error(s) in your form:</p>";
            
        } else {
            
            
                $query= "SELECT id FROM `$register_as` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

               $result = mysqli_query($link,$query);

                if(mysqli_num_rows($result) > 0){

                  ?>
                    <script type="text/javascript">
                          swal(
                              'The email is taken!'
                             );
                        
                      </script>
<?php

                } else{

                    $query="INSERT INTO `$register_as`(`first_name`, `last_name`, `address`, `contact_no`, `email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['firstName'])."','".mysqli_real_escape_string($link, $_POST['lastName'])."','".mysqli_real_escape_string($link, $_POST['address'])."','".mysqli_real_escape_string($link, $_POST['cellNumber'])."','".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['password'])."')";

                    if (!mysqli_query($link,$query)) {

                        echo "<p>Could not sign you up - please try again later.</p>";

                    } else {

                        $query = "UPDATE `$register_as` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

                        mysqli_query($link,$query);

     
                  ?>
                    <script type="text/javascript">
                          swal(
                              'Sign up successful!',
                              'You can login nowl!'
                             );
                        
                      </script>                  
     

<?php

                    }

                } 
                
           
                        
                    }
                    
                }
?>


                            </ul>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>






                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="registerRight-panel">
                        <div class="regHead">When you choose biddinghouse you are in good company.</div>
                        <p>biddinghouse.com offers a truly unique experience for both sellers and buyers via one of the most proactive and user friendly websites anywhere in the world</p>
                        <div class="regHead">Setting up a biddinghouse account is quick and easy</div>
                        <p>Simply complete the form in 7 easy steps and once your account is activated enjoy this truly unique experience.</p>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Long Product Detail Ends Here -->
    </div>
    <div class="clear"></div>
</section>
<!-- Wrapper Ends Here -->
<!-- Forgot password starts -->

	

        <?php include "include/footer.php" ?>
	<!--/// </div> .sideBarMenu_wrapper //-->
	
    <!-- Footer Ends Here -->
	<script src="js_lat/slick.min.js"></script>
	<script src="js_lat/jquery.sliderPro.min.js"></script>
	
</body>

</html>
