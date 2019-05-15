
<?php include "include/header.php" ?>
<?php include "db_connection/database_connection.php" ?>


<?php
 $query = "SELECT  bid_id, post_title, post_date,bid_date,bid_end_date,email,bid_amount, post_location, post_content,threshold_bid, post_status FROM  bid_info JOIN auctions_post ON bid_info.bid_moniter=auctions_post.post_id ";
      $select_for_email=mysqli_query($link,$query);
      
    
    while($row = mysqli_fetch_array($select_for_email)) {
    
    $post_date=$row["post_date"];
    $bid_end_date=$row["bid_end_date"];
    $post_title=$row["post_title"];
    $post_location=$row["post_location"];

   $mailTo=$row['email'];
   
    $now = strtotime("$post_date"); // or your date as well
            					     $your_date = strtotime("$bid_end_date");
                                     $datediff = $your_date - $now;
                                     $remaning_time=($datediff / (60 * 60 * 24));
                             
                             if( $remaning_time <= 0){
                             	
		$subject="You have won the bit of $post_title , $post_location";
		$comment="You have won the bit of $post_title , $post_location contact us at homebiding@gmail.com as ASP";
		$header="From : homebid@gmail.com";
		mail($mailTo,$subject,$comment,$header);

     
    
 }       
}
?>











<?php

	$id = $_GET['id'];
  $query="SELECT * FROM auctions_post where post_id=".$id;
  $select_all_post_query=mysqli_query($link,$query);
 	$row=mysqli_fetch_assoc($select_all_post_query);
    $post_title=$row['post_title'];
    $post_date=$row['post_date'];
    $bid_end_date=$row['bid_end_date'];
    $post_image=$row['post_image'];
    $post_content=$row['post_content'];
    $post_location=$row['post_location'];
    $thresholdd_bid=$row['threshold_bid'];
   $post_status=$row['post_status'];
  $post_id=$row['post_id'];
?>

<section id="inner-banne">
	<div class="inner-banner-con">
		<div class="inner-banner-head-con">
			<div class="inner-banner-head">Property Details  </div>
		</div>
	</div>
	<img src="http://www.biddinghouse.com/images_lat/banner/developer_bg.jpg" alt="" title="" />
</section>
<!-- Wrapper Starts Here -->
<section id="wrapper">

	<div class="detail-TopBar">

		<div class="pdTopBar">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="assetType">
							<span>Asset Type:</span>
                            
  						</div>
					</div>

					<div class="col-md-9">
						<div id="optionList" class="optionList">
							<ul>
								<li><a href="index.php" class="search"><i class="fa fa-search"></i> Search</a></li>
								</ul>
						</div>
					</div>
				</div> 
			</div> 
		</div> 
	</div> 

    <div class="container">
		<div class="row">

                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

					<div class="headingCon clearfix">
						<h2>Live Bid</h2>
						<div class="forSale">
							 <span>For Sale </span>						</div>
						<div class="optionList">
							<ul>
								<li class="finance"><i class="fa fa-info-circle"></i> Finance available</li>
								<li><a title="Inquire" data-remodal-target="popupContact" onclick="choose_action(1);" href="javascript:void(0)"><i class="fa fa-info"></i>Inquire</a></li>
								
							</ul>
						</div>
					</div> 

					<div class="property-info-main">
						<span class = "aution-detailsHead">
                                    <?php echo $post_title?>
							
													</span>
						<span class ="full-address"><?php echo $post_location;?></span>
					</div> 

					<div class="propertyDetails">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<section class="pro-detail-slider-tab">
									<div class="tab-content">
                                                                                <div class="tab-pane fade in active" id="photos">
											<div class="tab-con-pro-silder">
												<div id="gallery" class="ad-gallery">

															<div class="soldBar-red"><?php echo $post_status;?></div>
																											
										<div class="ad-image-wrapper">
													</div>
													<div class="ad-controls">
													</div>
													<div class="ad-nav">
														<div class="ad-thumbs">
															<ul class="ad-thumb-list">
																																	<li>
																			<a href="http://www.biddinghouse.com/propertyImage/51502428_1533126348_1.jpg" class="fancybox" data-fancybox-group="gallery" rel="gallery">
																				<img height="380" width="570" src="images/<?php echo $post_image;?>" class="image0">
																			</a>
																		</li>

															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade in"  id="map">
											<div class="tab-con-map" style="width:100%;height:300px" id = "show_map_view">
											</div>
										</div>
                                                                                                                                                                    <div class="tab-btn-view">
                                                                                            <div href="javascript:void(0)" onclick = "show_map_view()" class="map-view"><img src="http://www.biddinghouse.com/images_lat/map-view.png"></div>
                                                                                            <div href="javascript:void(0)" class="gallery-view"><img src="http://www.biddinghouse.com/images_lat/gallery-view.png"></div>
                                                                                    </div>
                                                                               
										<div class="clr"></div>
									</div>

								</section>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-left-0">
								<div class="property-detail-inner-right">
                                                                                                                                                <div class = "start-price-span">
                                                                                <span class = "price-tag">Starting Bid : &#x20B9; </span>
                                                                                <span class = "price-info"> <?php echo $thresholdd_bid; ?></span>
                                                                        </div>

									<div class="property-overview">Property overview</div>
									<div class="property-overview-list">
										<ul class="clearfix">

   
                                                                                                <span id="propertyArea">1,350</span>
                                                                                                <input type="hidden" value="1350" id="propertyOriginalArea" />
                                                                                                <select name="property-unit" id="propertyUnit" onchange="convertUnit()">
                                                                                                    <option value="Sq feet">Sq feet</option>
                                                                                                    <option value="Acre">Acre</option>
                                                                                                    <option value="Sqm">Sq m</option>
                                                                                                    <option value="Kottah">Kottah</option>
                                                                                                    <option value="Marla">Marla</option>
                                                                                                    <option value="Hectare">Hectare</option>
                                                                                                    <option value="Sqyrd">Sq yrd</option>
                                                                                                    <option value="Kanal">Kanal</option>
                                                                                                    <option value="Are">Are</option>
                                                                                                    <option value="Sq guz">Sq guz</option>
                                                                                                    <option value="Cent">Cent</option>
                                                                                                    <option value="Bigha">Bigha</option>
                                                                                                </select>
                                                                                            </span>
											</li>

											</ul>
									</div>
									<div class="property-overview">Buyers Commission</div>
									<div class="property-overview-list pro-listbtm">
										<ul class="clearfix">




                                                                                                                                                                                <li>
                                                                                            <span class="left-con">Zero Commission</span>
											</li>
                                                                                       
										</ul>
									</div>
								
								</div>
							</div>
					   </div>
				   </div>
                                                                                    
                                                            <section class="about-pro-detail-tab">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<ul class="nav nav-tabs" id="maincontent" role="tablist">
									<li class="active">
										<a href="#property-details" role="tab" data-toggle="tab">Property Description
											<i class="fa fa-caret-down"></i>
										</a>
									</li>
                                      
                                                                        								</ul>
							</div>

							<div class="col-sm-12 col-xs-12">
								<div class="tab-content clearfix">
									<div class="tab-pane fade in active" id="property-details">
										<div class="tab-con-para">
											<p><span font-size:="" helvetica="" segoe="" style="color: rgb(102, 102, 102); font-family: proxima_nova_rgregular, Roboto, -apple-system, BlinkMacSystemFont, "> <?php echo $post_content; ?> </span></p>

<p>6% GST will be charge extra.</p>
										</div>
									</div>
									<div class="tab-pane fade in" id="amenities">
										<div class="amenities-pro">
											<div class="amenitites-list">
												<ul>
																									<li>
														<div class="list-description ">
                                                                                                                    															<i class="communal-garden">&nbsp;</i>
															<span> Communal garden </span>
														</div>
													</li>
																										<li>
														<div class="list-description ">
                                                                                                                    									pa/i>
															<span> Parking </span>
														</div>
													</li>
																										<li>
														<div class="list-description ">
                                                                                                                    															<i class="swimming-pool">&nbsp;</i>
															<span> Swimming pool </span>
														</div>
													</li>
																										<li>
														<div class="list-description ">
                                                                                                                    															<i class="wood-floors">&nbsp;</i>
															<span> Wood floors </span>
														</div>
													</li>
																										<li>
														<div class="list-description ">
                                                                                                                    															<i class="security">&nbsp;</i>
															<span> Security </span>
														</div>
													</li>
																										<li>
														<div class="list-description ">
                                                                                                                    															<i class="hr-backup">&nbsp;</i>
															<span> 24HR Backup </span>
														</div>
													</li>




												</ul>
											</div>
										</div>
										
									</div>
									<div class="tab-pane fade in" id="floor-plan">
										<div class="tab-con-para">
											<ul>
												<!--<a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">Click to open Modal</a>-->
												<div class="modal flore-pop" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
															<div class="modal-body">
																<img src="" alt="">
															</div>
														</div>
													</div>
												</div>
																									<li>No Document Found.</li>

											</ul>
										</div>
									</div>
									<div class="tab-pane fade in" id="paymentPlan">
										<div class="tab-con-para">
											<ul>
												<div class="modal flore-pop" id="paymentPlanModal" tabindex="-1" role="dialog" aria-labelledby="paymentPlanModal" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
															<div class="modal-body">
																<img src="" alt="">
															</div>
														</div>
													</div>
												</div>
																									<li>No Document Found.</li>

											</ul>
										</div>
									</div>
									<div class="tab-pane fade in" id="brochure">
										<div class="tab-con-para">
											<ul>
												<div class="modal flore-pop" id="brochureModal" tabindex="-1" role="dialog" aria-labelledby="brochureModal" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
															<div class="modal-body">
																<img src="" alt="">
															</div>
														</div>
													</div>
												</div>
																									<li>No Brochure Found.</li>

											</ul>
										</div>
									</div>

									<div class="tab-pane fade in" id="auction-disclaimers">
										<div class="tab-con-para">
											<ul>
												<p><span style="font-size:12px;"><span style="font-family: arial,helvetica,sans-serif;"><strong>Disclaimer</strong>: The information being provided herein is for informational purposes only. No representation or warranty is made as to the accuracy or completeness of any information contained herein, including, without limitation, any information regarding the condition of the Property, the condition of title or Property descriptions. </span></span></p>

<p><span style="font-size:12px;"><span style="font-family: arial,helvetica,sans-serif;">Any documents and/or pictures posted herein or elsewhere on www.biddinghouse.com, (the &quot;Website&quot;) are for informational purposes only, and may not represent the current condition of the Property or the condition of the Property at the time of sale. The posting of pictures herein or elsewhere on the Website does not constitute a guarantee that any items represented in the pictures will be present when the buyer takes possession of the Property.</span></span></p>

<p><span style="font-size:12px;"><span style="font-family: arial,helvetica,sans-serif;">You are encouraged to conduct your own due diligence and investigate all matters relating to the Property. It is recommended that you seek independent advice, including legal advice, to perform your due diligence and that you use good faith efforts in determining that the content of all information provided to or obtained by you is accurate.</span></span></p>
											</ul>
										</div>
									</div>
									<div class="tab-pane fade in" id="additional-charges">
										<div class="tab-con-para">
											<ul>
												No Additional Charges											</ul>
										</div>
									</div>
									<div class="tab-pane fade in" id="openHouse">
										<div class="tab-con-para">
											<ul>
												No slots available as of now											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>





                    <div class="property-content">These particulars, whilst believed to be accurate are set out as a general outline only for guidance and do not constitute any part of an offer or contract. Intending purchasers should not rely on them as statements of representation of fact, but must satisfy themeselves by inspection or otherwise as to their accuracy. No person in this firm employment has the authority to make or give any representation or warranty in respect of the property.</div>
                </div>

<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <aside id="right-panel" class="right-part">

		<div id="auction_highlighter">
            <div class="right-panel-accodian MB0">
                <div class="pro-detailRight clearfix">
				                            <div class="login-text">To place a bid, Please <a href="login.php">Login</a> and <a href="register.php">Register</a> for Bidding this Property</div>
                                                <div class="market-value-con">
                        <ul class="clearfix">
                            
                                                        <li>
                                <span class="current-mkt-val">Top Biders:</span>

<?php
 $query = "SELECT  bid_id, post_title, post_date,bid_date,bid_amount, post_location, post_content,threshold_bid, post_status FROM  bid_info JOIN auctions_post ON bid_info.bid_moniter=auctions_post.post_id WHERE bid_moniter='{$id}' ORDER BY bid_amount DESC LIMIT 5";
      $select_for_top_bidder= mysqli_query($link,$query);
      if (mysqli_num_rows($select_for_top_bidder) > 0) {
    
    while($row = mysqli_fetch_array($select_for_top_bidder)) {
    
    $bid_amount=$row["bid_amount"];
   
   ?>
     
      <span class="current-mkt-price">&nbsp:- &nbsp&nbsp NRS &nbsp<?php echo "{$bid_amount}"; ?></span>
<?php
 }       
}
?>



                              

                            </li>
                            <li>
                                <span class="current-mkt-val">Starting bid:</span>
                                <span class="current-mkt-price">NRS <?php echo $thresholdd_bid ;?> </span>
                            </li>
                            <li class="bot-bor-no">
                                <span class="current-mkt-val">
                   <?php
      $query = "SELECT  bid_id, post_status FROM  bid_info JOIN auctions_post ON bid_info.bid_moniter=auctions_post.post_id WHERE bid_moniter='{$id}'";
      $select_all_post= mysqli_query($link, $query); 
       $post_count=mysqli_num_rows($select_all_post);
                   
?>
                                No. of Bids </span>


                             <span class="current-mkt-price">     <?php echo "<div class='huge'>{$post_count}</div>"; ?></span>




                            </span>
                                
                        </li>
                          <li>
                                <span class="current-mkt-val">Time left:</span>
                                <span class="current-mkt-price">
                                	<?php
  $query="SELECT post_date,bid_end_date FROM auctions_post WHERE post_id='{$id}'";
  $select_query=mysqli_query($link,$query);
  $row=mysqli_fetch_assoc($select_query);
    
    $post_date=$row['post_date'];
    $bid_end_date=$row['bid_end_date'];
  

             						 $now = strtotime("$post_date"); // or your date as well
              $your_date = strtotime("$bid_end_date");
              $datediff =$your_date-$now;
              echo round($datediff / (60 * 60 * 24))." days remaning";
                                     ?> 

                                 </span>
                            </li>
                        </ul>
                    </div>
					                                
                   <?php 

                   if(isset($_POST['submitt']))
                   {
                   	if(isset($_SESSION['name'])){
                   		   $now = strtotime("$post_date"); // or your date as well
            					     $your_date = strtotime("$bid_end_date");
                                     $datediff = $your_date - $now;
                                     $remaning_time=($datediff / (60 * 60 * 24));
                             
                             if( $remaning_time <= 0){
?>
<script type="text/javascript">
                          swal(
                          'Bidding time is expired ',
                          'Sorry !'
                             );
                    
                      </script>


<?php
}
elseif ($remaning_time > 0 ) {
	
 
?>
                   
					                                	<div>
					        
					                                	<form method="post">
                                                  <p> Enter your bidding amount </p>
                                                  <input type="number" name="bid_amount">
                                                  <input type="submit" name="submit" class="btn btn-danger">
					                                	</form>



                                                   </div>

                                      <?php  }}else{
                                      	?>

                                        	<script>
                                        	window.location.href="login.php";
                                        	</script>
                                        	<?php
                                   }
                               }
                                   ?>

                                                   <form method="post">
                                                   
					                                	<button type="submit" name="submitt" class="btn btn-danger"> BID NOW</button>
                                      	</form>







        <!--  //bit amount insert ra double entry garako cha ki check garna    -->                              
<?php
if(isset($_POST['bid_amount'])){
 $query="SELECT email from bid_info  where bid_moniter='{$id}'";
 $result=mysqli_query($link,$query);
 if(mysqli_num_rows($result)>0){
 	?>
<script type="text/javascript">
                          swal(
                          'You have already Bid ',
                          'But you can edit on your panel !'
                             );
                    
                      </script>
                      <?php

}else{


	$query="INSERT INTO `bid_info` (`email`, `bid_amount`,`bid_moniter`) VALUES ('{$_SESSION['name']}','".mysqli_real_escape_string($link,$_POST['bid_amount'])."','{$id}')";
	if(mysqli_query($link,$query)){
		?>
		<script type="text/javascript">
                          swal(
                           'Good job!',
                              'Bid Is Successful!',
                             'added'
                             );
                        window.location.href="auction_page.php";
                      </script>
	<?php }}

}?>









                </div>
            </div>
        </div>

	
        <div class="watching-properties-service">
			<div class="watching-pro-head clearfix">
				<div class="watching-pro-head-left">
					<span id="viewer-counter"></span>
					watching this property
				</div>
				
			</div>
            <ul>
                <li><a href="javascript:void(0);" class="" data-remodal-target="showReview"><span>
                            <img src="" /></span> Customer Reviews</a></li>
                <li><a href="contact.php"><span>
                            <img src="" /></span> Ask Us A Question?</a></li>
                <li><a href="#"><span>
                            <img src="" /></span> Fees & Charges</a></li>
                <li><a href="#"><span>
                            <img src="" /></span> Terms & Conditions</a></li>
            </ul>
            <div class="clear"></div>
        </div>



        <div class="sellyour-properties">
			<div class="right-panel-bot-head">Need a Local Expert to Auction Your Home?</div>
            <ul>
                <li class="sell-head">Sell Your Home! Get Immediate Help!</li>
                <li>
					
                    <div class="right-con">
                        <div class="review-con">
                            (Chat live with us: 10am - 7pm)
							<span><a href="#"><i class="fa fa-envelope-o"></i> housebidding@gmail.com</a></span>
                        </div>
                        <div class="phone-con"><i class="fa fa-phone"></i>+977-9849909091</div>
                    </div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>

        <div class="clear"></div>
    </aside>
</div>

<div id="requestResponseModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <div id = "request_response"></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</section>





    <?php include "include/footer.php" ?>
	
	<script src="js_lat/slick.min.js"></script>
	<script src="js_lat/jquery.sliderPro.min.js"></script>
	
</body>


</html>
