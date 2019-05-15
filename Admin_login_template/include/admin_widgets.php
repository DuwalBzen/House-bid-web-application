
                
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

$query="SELECT * FROM `auctions_post`";

                    $select_all_post=mysqli_query($link, $query);

                      $post_count=mysqli_num_rows($select_all_post);
                     echo "<div class='huge'>{$post_count}</div>"
                    
?>
                  
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="./view_post.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i  class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                                                <?php 

$query="SELECT * FROM `bider_login`";

                    $select_all_bidder_login=mysqli_query($link, $query);

                      $bidder_count=mysqli_num_rows($select_all_bidder_login);
                     echo "<div class='huge'>{$bidder_count}</div>"
                    
?>
                   
                      <div>
                          Bidder
                      </div>
                    </div>
                </div>
            </div>
            <a href="./view_all_bider.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 

$query="SELECT * FROM `owner_login`";

                    $select_all_owner_login=mysqli_query($link, $query);

                      $owner_count=mysqli_num_rows($select_all_owner_login);
                     echo "<div class='huge'>{$owner_count}</div>"
                    
?>
                   
                        <div> Owner</div>
                    </div>
                </div>
            </div>
            <a href="./view_all_owner.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 

$query="SELECT * FROM `customer_feedback`";

                    $select_all_customer_feedback=mysqli_query($link, $query);

                      $customer_feedback_count=mysqli_num_rows($select_all_customer_feedback);
                     echo "<div class='huge'>{$customer_feedback_count}</div>"
                    
?>
                   
                        <div> Feedback </div>
                    </div>
                </div>
            </div>
            <a href="./view_feedback.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 

$query="SELECT * FROM `subscribers`";

                    $select_all_subscribers=mysqli_query($link, $query);

                      $subscribers_count=mysqli_num_rows($select_all_subscribers);
                     echo "<div class='huge'>{$subscribers_count}</div>"
                    
?>
                   
                        <div>Subscriber</div>
                    </div>
                </div>
            </div>
            <a href="./view_subscriber.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

 










</div>
                <!-- /.row -->