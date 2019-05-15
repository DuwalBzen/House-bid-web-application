  <?php $query = "SELECT bid_id, post_title, post_date,bid_date,bid_amount, post_location, post_content,threshold_bid, post_status FROM  bid_info JOIN auctions_post ON bid_info.bid_moniter=auctions_post.post_id WHERE email='{$_SESSION['name']}' ORDER BY bid_date DESC";
 $result = mysqli_query(  $link, $query); 
 ?>

<table class="table table-bordered table-hover">
<thead>
	<tr>
		<th> Bid Id </th>
		<th> Name </th>
		<th> Post Date </th>
    <th> Bidding Date </th>
      <th> Bidding Amount </th>
<th> Description </th>
		<th> Location </th>
        <th> Threshold bid</th>
        <th> Draft</th>
      
	</tr>
</thead>
<tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
    
    $bid_id=$row["bid_id"];
    $Name=$row["post_title"];
    $Post_Date=$row["post_date"];
    $bid_date=$row["bid_date"];
     $bid_amount=$row["bid_amount"];
    $Location=$row["post_location"];
    //$Image=$row["post_image"];
    $Description=$row["post_content"];
    $threshold_bid=$row["threshold_bid"];
    $Draft=$row["post_status"];
    echo "<tr>";
    echo "<td>{$bid_id}</td>";
    echo "<td>{$Name}</td>";
    echo "<td>{$Post_Date}</td>"; 
     echo "<td>{$bid_date}</td>"; 
     echo "<td>{$bid_amount}</td>";
    echo "<td>{$Location}</td>";
   // echo "<td>{$Image}</td>";

     echo "<td>{$Description}</td>";
    echo "<td>{$threshold_bid}</td>";
   echo "<td>{$Draft}</td>";
   echo "<td><a href='view_post.php?source=edit_post&p_id={$bid_id}' class='btn btn-primary'role='button'> Edit </a> </td>";
    echo "<td><a href='view_post.php?delete={$bid_id}' class='btn btn-danger'role='button'> Delete </a> </td>";
    echo "</tr>";
 }       
}

 ?>   


</tbody>
</table>
                 
<?php
        if(isset($_GET['delete'])){
          $idd=$_GET['delete'];
            
    $query_for_delete = "Delete FROM bid_info WHERE bid_id=bid_id LIMIT 1";
      if(mysqli_query($link, $query_for_delete)){
?>
<script type="text/javascript">
                          swal(
                           'Good job!',
                              'Bid Is Successful!',
                             'added'
                             );
                        window.location.href="view_post.php";
                      </script>
  <?php
}
   
    }
?>         