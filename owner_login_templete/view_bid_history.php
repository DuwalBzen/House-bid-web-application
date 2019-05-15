 <?php include "include/header.php"?>


    <div id="wrapper">

   


<?php include "include/side_navbar.php"?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            View bid on your post
                        </h2>
                       


                    </div>
                </div>
                <!-- /.row -->


  <?php $query = "SELECT post_id,post_moniter,post_title, post_tags,post_date,email,bid_amount,bid_end_date,bid_date,post_location, post_content,threshold_bid, post_status FROM  post_garna_user JOIN auctions_post ON post_garna_user.post_moniter=auctions_post.post_id JOIN bid_info ON bid_info.bid_moniter=auctions_post.post_id WHERE post_user_email='{$_SESSION['name']}' ORDER BY bid_date DESC";
 $result = mysqli_query($link, $query); 
 ?>
<table class="table table-bordered table-hover">
<thead>
    <tr>
        <th> Id </th>
        <th> Name </th>
    <th> Category </th>
        <th> Post Date </th>
    <th> End Date </th>
     <th> Bid Garnako Email</th>
    <th> Bid Garako Date </th>
    <th> Bid Garako Amount </th>
        <th> Location </th>
        <th> Description </th>
    <th> Threshold bid</th>    
    <th> Draft</th>
      
    </tr>
</thead>
<tbody>

<?php
if(mysqli_num_rows($result) > 0 ) {
    
    while($row = mysqli_fetch_array($result)) {
    
    $Post_Id=$row["post_id"];
    $post_moniter=$row["post_moniter"];
    $Name=$row["post_title"];
    $post_category=$row["post_tags"];
    $Post_Date=$row["post_date"];
      $bid_end_date=$row["bid_end_date"];
      $bid_garnako_email=$row["email"];
      $bid_garako_date=$row["bid_date"];
      $bid_garako_amount=$row["bid_amount"];
    $Location=$row["post_location"];  
    //$Image=$row["post_image"];
    $Description=$row["post_content"];
  
    $threshold_bid=$row["threshold_bid"];
    $Draft=$row["post_status"];
    echo "<tr>";
    echo "<td>{$Post_Id}</td>";
    echo "<td>{$Name}</td>";
    if($post_category==1){
      echo "<td>Residential</td>";
    }else{
      echo "<td>Commeicial</td>";
    }
    
    echo "<td>{$Post_Date}</td>"; 
     echo "<td>{$bid_end_date}</td>";
      echo "<td>{$bid_garnako_email}</td>";
     echo "<td>{$bid_garako_date}</td>";
     echo "<td>{$bid_garako_amount}</td>";
    echo "<td>{$Location}</td>";
   // echo "<td>{$Image}</td>"
    echo "<td>{$Description}</td>";
     echo "<td>{$threshold_bid}</td>";
   echo "<td>{$Draft}</td>";
    echo "</tr>";
 }       
}

 ?>   


</tbody>
</table>
                 
            





            </div>
            <!-- /.container-fluid -->

        </div>
        
   <?php include"include/footer.php"?>
