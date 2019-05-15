

 <?php include "include/header.php"?>


    <div id="wrapper">

   


<?php include "include/side_navbar.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Welcome  
                            <small>

                                <?php
                            echo  $_SESSION['name'];
                            ?>
                            
                          </small>
                        </h2>
                       
                    </div>
                </div>
                


                              <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
 
                    <div class="col-xs-9 text-right">
<?php 
$query = "SELECT bid_id, post_title, post_date,bid_date,bid_amount, post_location, post_content,threshold_bid, post_status FROM  bid_info JOIN auctions_post ON bid_info.bid_moniter=auctions_post.post_id WHERE email='{$_SESSION['name']}'";
 $result = mysqli_query($link,$query);
  $bid_count=mysqli_num_rows($result);
                     echo "<div class='huge'>{$bid_count}</div>"
                    
?>
                  
                        <div>No of Bid done </div>
                    </div>
                </div>
            </div>
            <a href="view_post.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>  <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        
   <?php include"include/footer.php"?>


