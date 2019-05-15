
 <?php include "include/header.php"?>


    <div id="wrapper">

<?php include "include/side_navbar.php"?>

        <div id="page-wrapper">

           
         
  <?php $query = "SELECT * FROM  auctions_post WHERE post_approve_unapp='pending' order by post_date desc";
 $result = mysqli_query($link,$query); 
 ?>





<table class="table table-bordered table-hover">
  


      
   

<br><br>



<thead>
    <tr>
   
        <th>  Id </th>
        <th> Name </th>
        <th>  Date </th>
    <th> End Date </th>
        <th> Location </th>
        <th> Description </th>
    <th> Category </th>
      <th> Threshold bid</th>
       <th> Draft</th>
        <th> approve</th>
        <th> unapprove</th>
         <th> Delete</th>
      
    </tr>
</thead>
<tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
    
    $Post_Id=$row["post_id"];
    $Name=$row["post_title"];
    $Post_Date=$row["post_date"];
     $bid_end_date=$row["bid_end_date"];
    $Location=$row["post_location"];
    //$Image=$row["post_image"];
    $Description=$row["post_content"];
    $Category=$row["post_tags"];
    $threshold_bid=$row["threshold_bid"];
    $Draft=$row["post_status"];
    echo "<tr>";
    echo "<td>{$Post_Id}</td>";
    echo "<td>{$Name}</td>";
    echo "<td>{$Post_Date}</td>";
     echo "<td>{$bid_end_date}</td>"; 
    echo "<td>{$Location}</td>";
   // echo "<td>{$Image}</td>";

       echo "<td>{$Description}</td>";
     if($Category==1){
       echo "<td>resendential</td>";
     }else{
      echo "<td>commericial</td>";
     }
    echo "<td>{$threshold_bid}</td>";
   echo "<td>{$Draft}</td>";
    echo "<td> <a href='recived_post_request.php?approve={$Post_Id}' class='btn btn-primary'role='button'> approve </a> </td>";
    echo "<td> <a href='recived_post_request.php?unapprove={$Post_Id}' class='btn btn-danger'role='button'> unapprove </a> </td>";
    echo "<td> <a href='recived_post_request.php?delete={$Post_Id}' class='btn btn-danger'role='button'> Delete </a> </td>";
    echo "</tr>";
 }       
}

 ?>   



</tbody>
</table>

                 
<?php
        if(isset($_GET['delete'])){
          $idd=$_GET['delete'];
            
    $query_for_delete = "Delete FROM auctions_post WHERE post_id={$idd} LIMIT 1";
     $result = mysqli_query($link, $query_for_delete); 
   ?>
                      <script type="text/javascript">
                          swal(
                           'Good job!',
                              'Your post is DELETED!',
                             'added'
                             );
                        window.location.href="view_post.php";
                      </script>
                     
                      <?php
    }
?>         



<?php
        if(isset($_GET['approve'])){
          $approve_id=$_GET['approve'];
            
    $query_for_approve ="UPDATE `auctions_post` SET `post_approve_unapp`='approve' WHERE post_id={$approve_id}";
     $result = mysqli_query($link, $query_for_approve); 
      ?>
                      <script type="text/javascript">
                          swal(
                           'Good job!',
                              'Recived post is Approve!',
                             'added'
                             );
                        window.location.href="recived_post_request.php";
                      </script>
                     
                      <?php

    }
?>         



<?php
        if(isset($_GET['unapprove'])){
          $unapprove_id=$_GET['unapprove'];
            
    $query_for_unapprove ="UPDATE `auctions_post` SET `post_approve_unapp`='unapprove' WHERE post_id={$unapprove_id}";
     $result = mysqli_query($link, $query_for_unapprove); 
     ?>
                      <script type="text/javascript">
                          swal(
                           'Good job!',
                              'Recived post is UnAapprove!',
                             'added'
                             );
                        window.location.href="recived_post_request.php";
                      </script>
                   
                      <?php
                  }
?>         
        </div>
        
   <?php include"include/footer.php"?>
