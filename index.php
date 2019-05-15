<?php include "include/header.php"; ?>
<?php include "db_connection/database_connection.php" ?>
<section id="banner-container">
  <div class="container">
    <section class="banner-search-con ban-search-left" id="searchBar">
     
      <div class="banner-sm-title wow bounceInDown" data-animation-delay="100" id="bidTitle">Search your dream home</div>
      <div class="tab-content">
        <div class="tab-pane in active" id="home">
          <div class="banner-search-con-field">
            <form action="auction_search.php" method ="post" >
              <div class="auction-sel-input" >
                <select class="auctiion-type" name="auction_type">
                  <option value="">Auction Type</option>
                  <option value="2">Commercial</option>
                  <option value="1">Residential</option>
                </select>
                <span class="auction-down-arrow"></span> </div>
              <input type="text" name ="search_keyword" placeholder=" &nbsp;Enter City, Locality" required/>
              <button type="submit" value="submit_search" name="submit_search">Search</button>
              <div class="clear"></div>
            </form>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </section>
  </div>
</section>

<!--Start best value section goes here -->
<div class="best-value-section">
  <div class="container">
    <div class="best-value-left">
      <div class="best-val-hd wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">Get the Best Value for your Home</div>
      <p class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">Selling your house is now Convenient, Come to us and relax! We are there to sell your property at a worthy price!</p>
      <div class="blue-btn wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s"><a href="freeValuation.html">Have a Property to SELL ?</a></div>
    </div>
    <div class="best-value-right">
      <ul>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon1.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title">Fill up the Form</div>
            <div class="small-text">Fill a Free Valuation form on Bidding House</div>
          </div>
        </li>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon2.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title">Our executive will come in</div>
            <div class="small-text">Our executive will get in touch with you and tell you an estimated value for your property! </div>
          </div>
        </li>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon3.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title">Property live on Biddinghouse</div>
            <div class="small-text">Your Property is live on Biddinghouse.com</div>
          </div>
        </li>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon4.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title">Selling Guarantee</div>
            <div class="small-text">We guarantee to sell your property by Auction at the maximum possible price</div>
          </div>
        </li>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon5.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title"> Sold!</div>
            <div class="small-text">All done! Your Property is sold via Biddinghouse.com</div>
          </div>
        </li>
      </ul>
    </div>
    <div class="clr"></div>
  </div>
</div>
<!--End best value section goes here -->

<section id="wrapper">
<div class="container">
<div class="container" id="feturedPropertyBlock"> </div>
<div class="makediff-section">
  <div class="container">
    <div class="make-diff-left">
      <h1 class="makedif-hd wow fadeInLeft">What makes Bidding House Different</h1>
      <div class="make-description wow fadeInLeft">
        <p>It’s our uniqueness at what we do! Transparent deals, legally verified properties and getting the genuine price is something we assure to provide. Get what you want and pay what you should. </p>
      </div>
      <div class="make-list">
        <ul>
          <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s"><a href="javascript:void(0)" class="sel" id="a1" onClick="tec_show('tab_1','a1')"><img src="images_lat/icons/make-diff-icon1.png" /><span>Legally verified properties</span></a></li>
          <li class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1.2s"><a href="javascript:void(0)" id="a2" onClick="tec_show('tab_2','a2')"><img src="images_lat/icons/make-diff-icon2.png" /><span>Transparent deals</span></a></li>
          <li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.4s"><a href="javascript:void(0)" id="a3" onClick="tec_show('tab_3','a3')"><img src="images_lat/icons/make-diff-icon3.png" /><span>Find your cost</span></a></li>
        </ul>
        <a class="pro-btn wow fadeInUp" data-wow-duration="1.6s" data-wow-delay="1.6s" href ="index.php">Start Searching Properties</a> 
        <!--					<input type="button" value="Start Searching Properties" class="pro-btn">--> 
      </div>
    </div>
    <div class="make-diff-right wow fadeInRight" >
      <div class="propertyCon">
        <div id="tab_1"> <img src="images_lat/legally-img.jpg" /> </div>
        <div id="tab_2" style="display:none;"> <img src="images_lat/tranparent-img.jpg" /> </div>
        <div id="tab_3" style="display:none;"> <img src="images_lat/find-your-cost-img.jpg" /> </div>
      </div>
    </div>
    <div class="clr"></div>
  </div>
</div>

</div>
<?php include "include/footer.php"?>
</body>
</html>
