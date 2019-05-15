

 <?php include "include/header.php"?>


    <div id="wrapper">

   


<?php include "include/side_navbar.php"?>

    <?php
     $name=$_SESSION['name'];
     $query="SELECT * FROM owner_login WHERE email='{$name}'";
    if($result=mysqli_query($link,$query)){
        $row=mysqli_fetch_assoc($result);
        $name=$row['first_name'];
    }

                     ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Welcome  
                            <small>
                                
                                <?php

                            echo  $name;
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

 $query = "SELECT post_id,post_moniter,post_title, post_tags,post_date,bid_end_date,post_location,post_approve_unapp,post_content,threshold_bid, post_status FROM  post_garna_user JOIN auctions_post ON post_garna_user.post_moniter=auctions_post.post_id WHERE post_user_email='{$_SESSION['name']}'";
 $result = mysqli_query($link, $query); 
 $post_count=mysqli_num_rows($result);
                     echo "<div class='huge'>{$post_count}</div>"
                    
?>
                  
                        <div>Your all Posts</div>
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
$query = "SELECT post_id,post_moniter,post_title, post_tags,post_date,email,bid_amount,bid_end_date,bid_date,post_location, post_content,threshold_bid, post_status FROM  post_garna_user JOIN auctions_post ON post_garna_user.post_moniter=auctions_post.post_id JOIN bid_info ON bid_info.bid_moniter=auctions_post.post_id WHERE post_user_email='{$_SESSION['name']}'";
 $result = mysqli_query($link, $query); 
  $bid_count=mysqli_num_rows($result);
                     echo "<div class='huge'>{$bid_count}</div>"
                    
?>
                  
                        <div>Bid on your Posts</div>
                    </div>
                </div>
            </div>
            <a href="view_bid_history.php">
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


