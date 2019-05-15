    <footer>
		<script type="text/javascript" src="js_lat/jquery.cookie.js"></script>  
		<div id="google_translate_element" style="display: none;"></div>
		
        <div class="container">
            <div class="footer-nav">
                
                <ul class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
                    <li class="head footer_li"><a href="javascript:void(0);">General <span class="expand-new"><i class="fa parent-plus fa-plus"></i></span></a>
                        <ul id="fot-dropdown" class="ul_main ul_1" data="error/404.html">
                            <li><a href="aboutus.php">About Us</a></li>

                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
                    <li class="head footer_li"><a href="javascript:void(0);">Category <span class="expand-new"><i class="fa parent-plus fa-plus"></i></span></a>
                        <ul id="fot-dropdown" class="ul_main ul_1" data="error/404.html">
                            <li><a href="buyers.php">Buyers</a></li>

                            <li><a href="sellers.php">Sellers</a></li>                            

                           
                        </ul>
                    </li>
                </ul>
               
                <ul class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
                    <li class="head footer_li"><a href="javascript:void(0);">Help Centre<span class="expand-new"><i class="fa parent-plus fa-plus"></i></span></a>
                        <ul id="fot-dropdown" class="ul_main ul_4" data="error/404.html">
                            <li><a href="getting-started.php">Getting Started</a></li>
                            <li><a href="faqs.php">FAQ's</a></li>
                       
                        </ul>
                    </li>
					
				</ul>

                <ul class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
                    <li class="head footer_li"><a href="javascript:void(0);">Legal <span class="expand-new"><i class="fa parent-plus fa-plus"></i></span></a>
                        <ul id="fot-dropdown" class="ul_main ul_6" data="error/404.html">
                           <li><a href="terms-of-use.php">Terms of use</a></li>
                            <li><a href="#">Fees and Charges</a></li>
                        </ul>
                    </li>
                </ul>
				<ul class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
                    <li >
                        <ul id="fot-dropdown"  data="error/404.html">
                            <li>
                               Subscribe to our newsletter.
                            </li>                            
                            <li>

                                <form method="post" >
                                    <input type="text" placeholder="Enter e-mail" name="newsletter_email" required/>
                                    <button type="submit" class="btn btn-primary" name="Subscribe" > Subscribe</button>

                                </form>

                            </li>
                           <?php
                             if(isset($_POST["Subscribe"])){
                              $query = "SELECT id FROM `subscribers` WHERE email = '".mysqli_real_escape_string($link, $_POST['newsletter_email'])."' LIMIT 1";

                $result = mysqli_query($link, $query);

                if (mysqli_num_rows($result) > 0) {
                   ?>
                    <script>
                    
  swal('Email aready exists');
                    </script>
        <?php
                          }
                          else
                        {
                            $query="INSERT INTO subscribers (email) VALUES ('".mysqli_real_escape_string($link,$_POST['newsletter_email'])."')";

                             mysqli_query($link, $query);
?>

                             <script>
                              swal(
  'Good job!',
  'Your subscription is!',
  'success'

);
                             </script>
                             <?php
                        }
                    }
                             ?>


  
                            
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>

        </div>
        <div class="footer-social-copyRight">
            <div class="container">
                <div class="copyRight wow fadeInLeft"><span>&copy; Copyright</span> BiddingHouse 2016. BiddingHouse.com and the associated logo are registered trademarks. All rights reserved.</div>
                <div class="social-section">
                    <!--<div class="footer-logo">
                        <a href="">
                            <img src="http://www.biddinghouse.com/images_lat/bidding_house_logo_white.png" alt="" title="" />
                        </a>
                    </div>-->
                    <div class="footer-social-icon">
                        <ul>
                            <li class="facebookIcon-new"><a href="../external.html?link=https://www.facebook.com/Biddinghouse-821216468023837/" target="_blank">&nbsp;</a></li>
                            <li class="twitterIcon-new"><a href="../external.html?link=https://twitter.com/bidding_house" target="_blank">&nbsp;</a></li>
                            <li class="google-plusIcon-new"><a href="../external.html?link=https://plus.google.com/117946829160514908167/about" target="_blank">&nbsp;</a></li>
<
                        </ul>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer-bot"><a href="javascript:void(0)">
            <img src="images_lat/icons/fot-up-arrow.png" /></a></div>
        <div class="clear"></div>
    </footer>
	