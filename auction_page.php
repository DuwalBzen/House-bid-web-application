<?php include "include/header.php" ?>
<link rel="stylesheet" href="style.css">
<section id="inner-banne">
  <div class="inner-banner-con">
    <div class="inner-banner-head-con">
      <div class="inner-banner-head">Property Details  </div>
    </div>
  </div>
  <img src="images_lat/banner/property_search_header_3.jpg"  height="140" alt="" title="" />
</section>
  <div class="mid-part">
    <section>
      <div class="about-sec inner-pages">
        <div class="container">
          <div class="row select-sec">
            <div class="summary-and-sort clear">
              <div class="col-md-8">
                
              </div>
              <div class="col-md-4">
                <ul class="nav nav-tabs text-right" role="tablist">
                  <li role="presentation" class="active"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i> List</a></li>
                  <li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> Map</a></li>
                  <li role="presentation"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab"><i class="fa fa-th"></i> Grid</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>
    <section>
   
      <div class="about-sec how-work">
        <div class="container">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="list">
             <?php
  $query="SELECT * FROM auctions_post WHERE post_approve_unapp='approve'ORDER BY post_id desc";
  $select_all_post_query=mysqli_query($link,$query);
  while($row=mysqli_fetch_assoc($select_all_post_query)){
    $post_title=$row['post_title'];
    $post_date=$row['post_date'];
    $bid_end_date=$row['bid_end_date'];
    $post_image=$row['post_image'];
    $post_content=$row['post_content'];
    $post_location=$row['post_location'];
    $threshold_bid=$row['threshold_bid'];
  $post_id=$row['post_id'];
?>
              <ul class="properties_list">
                <li>
                  <div class="row">
                    <div class="col-md-4"><a class="image" href=""><img src="images/<?php echo $post_image;?>" width="320" height="190"></a></div>
                    <div class="col-md-8">
                      <h3><a href="bidding_house.php?id=<?php echo $post_id ?>" role=""><?php echo $post_title ?></a></h3>
                      <div class="row">
                        <div class="col-xs-6">
                          <h4 class="price"><span><i class="fa fa-gavel"></i> Current Bid </span>   NRs.<?php echo $threshold_bid ?> </h4>
                        </div>
                        <div class="col-xs-6 text-right">
                          <h4 class="status"><span><i class="fa fa-clock-o"></i> Time Remaining :</span> &nbsp&nbsp                      
             <?php
              $now = strtotime("$post_date"); // or your date as well
              $your_date = strtotime("$bid_end_date");
              $datediff =$your_date-$now;
              echo round($datediff / (60 * 60 * 24))." days remaning";
               ?></h4>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12">
                          <div class="features new_d"> <p> <?php echo $post_content ?></p> </div>
                          <a class="btn btn-primary"  href='<?php echo "bidding_house.php?id=".$post_id; ?>'>View Project</a> </div>
                        <div class="reserv_btn"><span>RESERVE MET</span> <i class="fa fa-eye"></i></div>
                      </div>
                    </div>
                    <div> </div>
                  </div>
                </li>
                <?php
  }
  ?>
              </ul>
              
 
              <nav>
                <ul class="pagination">
                  <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
              </nav>
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="map">
              <div class="row">
                <div id="map_sec" class="col-sm-8">
                  <div id="googleMap" class="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!4v1543889019758!6m8!1m7!1sCAoSLEFGMVFpcE83UnBqOXZRTHdKdHAwdk5UNDJXR0xMN0VxZGxSSC1xVVhxand5!2m2!1d27.6818847!2d85.45657890000001!3f316.5!4f0!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   </div>
</div>
                
              

                <div class="col-sm-4 grid-view">
                  <ul class="properties_list">
                  <?php
  $query="SELECT * FROM auctions_post WHERE post_approve_unapp='approve'ORDER BY post_id desc";
  $select_all_post_query=mysqli_query($link,$query);
  while($row=mysqli_fetch_assoc($select_all_post_query)){
    $post_title=$row['post_title'];
    $post_date=$row['post_date'];
    $bid_end_date=$row['bid_end_date'];
    $post_image=$row['post_image'];
    $post_content=$row['post_content'];
    $post_location=$row['post_location'];
    $threshold_bid=$row['threshold_bid'];
  $post_id=$row['post_id'];
?>
                    <li>
                      <div class="grid_inn text-center"> <a class="image" href=""><img src="images/<?php echo $post_image;?>" width="320" height="190"></a>
                        <h3 class="address"><a href="bidding_house.php?id=<?php echo $post_id ?>" role=""><?php echo $post_title ?></a></h3>
                        <div class="clearfix timer">
                          <div class="col-xs-6">
                            <h4 class="price"><span><i class="fa fa-gavel"></i> Current Bid </span> NRs.<?php echo $threshold_bid ?> </h4>
                          </div>
                          <div class="col-xs-6">
                            <h4 class="status"><span><i class="fa fa-clock-o"></i> Time Remaining</span> &nbsp&nbsp                      
             <?php
              $now = strtotime("$post_date"); // or your date as well
              $your_date = strtotime("$bid_end_date");
              $datediff =$your_date-$now;
              echo round($datediff / (60 * 60 * 24))." days remaning";
               ?> </h4>
                          </div>
                        </div>
                        <div class="features clearfix"> <p> <?php echo $post_content ?></p> </div>
                      </div>
                    </li>
                    <?php
  }
  ?>
                  </ul>
                 
              </div>
              </div>
              </div>
            <div role="tabpanel" class="tab-pane fade in" id="grid">
              <div class="grid-view">
                      <?php
  $query="SELECT * FROM auctions_post WHERE post_approve_unapp='approve'ORDER BY post_id desc";
  $select_all_post_query=mysqli_query($link,$query);
  while($row=mysqli_fetch_assoc($select_all_post_query)){
    $post_title=$row['post_title'];
    $post_date=$row['post_date'];
    $bid_end_date=$row['bid_end_date'];
    $post_image=$row['post_image'];
    $post_content=$row['post_content'];
    $post_location=$row['post_location'];
    $threshold_bid=$row['threshold_bid'];
  $post_id=$row['post_id'];
?>
                <ul class="properties_list row">
        
                  <li class="col-sm-4 img-center">
                    <div class="grid_inn text-center">
                      <a class="image" href=""><img class="pad05" src="images/<?php echo $post_image;?>" width="320" height="190" ></a>
                      <h3 class="address"><a href="bidding_house.php?id=<?php echo $post_id ?>" role=""><?php echo $post_title ?> </a></h3>
                      <div class="clearfix timer">
                        <div class="col-xs-6">
                          <h4 class="price"><span><i class="fa fa-gavel"></i> Current Bid </span> NRs.<?php echo $threshold_bid ?> </h4>
                        </div>
                        <div class="col-xs-6">
                          <h4 class="status"><span><i class="fa fa-clock-o"></i> Time Remaining</span>  &nbsp&nbsp                      
             <?php
              $now = strtotime("$post_date"); // or your date as well
              $your_date = strtotime("$bid_end_date");
              $datediff =$your_date-$now;
              echo round($datediff / (60 * 60 * 24))." days remaning";
               ?> </h4>
                        </div>
                      </div>
                      <div class="features clearfix"> <p> <?php echo $post_content ?></p>  </div>
                    </div>
                  </li>
                     <?php
  }
  ?>
                </ul>
  
                <nav>
                  <ul class="pagination">
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>
    <div class="clearfix"></div>
    </div>
<?php include "include/footer.php" ?>
