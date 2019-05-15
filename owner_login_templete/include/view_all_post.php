  <?php $query = "SELECT post_id,post_moniter,post_title, post_tags,post_date,bid_end_date,post_location,post_approve_unapp,post_content,threshold_bid, post_status FROM  post_garna_user JOIN auctions_post ON post_garna_user.post_moniter=auctions_post.post_id WHERE post_user_email='{$_SESSION['name']}' ORDER BY post_date DESC";
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
		<th> Location </th>
		<th> Description </th>
    <th> Threshold bid</th>    
    <th> Draft</th>
    <th> Status</th>
      
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
    $Location=$row["post_location"];
    //$Image=$row["post_image"];
    $Description=$row["post_content"];
  
    $threshold_bid=$row["threshold_bid"];
    $Draft=$row["post_status"];
     $post_approve_unapp=$row["post_approve_unapp"];
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
    echo "<td>{$Location}</td>";
   // echo "<td>{$Image}</td>"
    echo "<td>{$Description}</td>";
     echo "<td>{$threshold_bid}</td>";
   echo "<td>{$Draft}</td>";
   echo "<td>{$post_approve_unapp}</td>";
   echo "<td><a href='view_post.php?source=edit_post&p_id={$Post_Id}' class='btn btn-primary'role='button'> Edit </a> </td>";
    echo "<td><a href='view_post.php?delete={$Post_Id}' class='btn btn-danger'role='button'> Delete </a> </td>";
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

     $query_for_delete = "Delete FROM post_garna_user WHERE post_moniter={$idd} LIMIT 1";
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