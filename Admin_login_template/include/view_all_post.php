  <?php $query = "SELECT * FROM  auctions_post  WHERE post_approve_unapp='approve' ORDER BY post_id desc";
 $result = mysqli_query($link,$query); 
 ?>


<?php
if (isset($_POST['checkBoxArray'])) {

 
    foreach($_POST['checkBoxArray'] as $postValueId ){
        
  $bulk_options= $_POST['bulk_options'];
        
        switch($bulk_options) {
        case 'On Bid':
        
$query = "UPDATE auctions_post SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId}";
        
 $update_to_bid_published_status = mysqli_query($link,$query);       



            
         break;
            
            
              case 'Sold':
        
$query = "UPDATE auctions_post SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId}";
        
 $update_to_sold_status = mysqli_query($link,$query);
            





            
            
         break;
            
  
            
               case 'Delete':
        
$query = "DELETE * FROM auctions_post WHERE post_id = '{$postValueId}'";
        
 $update_to_delete_status = mysqli_query($link,$query);
            
$query_for_delete= "DELETE * FROM bid_info WHERE bid_moniter='{$postValueId}' ";
     $resultt = mysqli_query($link,$query_for_delete);

     $query_for= "DELETE * FROM post_garna_user WHERE post_moniter='{$postValueId}' ";
                 $resulttt = mysqli_query($link,$query_for);
         break;

        
    
     
    } 

    

}
}

                     
?>

   <form action="" method="post">

<table class="table table-bordered table-hover">
  
<div id="bulkOptionContainer" class="col-xs-4">

 <select class="form-control" name="bulk_options" id="">
<option value=""> Select Option </option> 
<option value="On Bid"> On Bid </option> 
<option value="Sold"> Sold </option> 
<option value="Delete"> Delete </option> 



</select>

</div>
<div class="col-xs-4">

  <input type="submit"  name="submit" class="btn btn-success"  value="Apply">

</div>


      
   

<br><br>



<thead>
	<tr>
    <th><input id="selectAllBoxes" type="checkbox"></th>
		<th>  Id </th>
		<th> Name </th>
		<th>  Date </th>
    <th> End Date </th>
		<th> Location </th>
		<th> Description </th>
    <th> Category </th>
      <th> Threshold bid</th>
       <th> Draft</th>
      
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
    ?>
    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $Post_Id; ?>'></td>
    <?php
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
  
 echo "<td>  <a href='view_post.php?source=edit_post&p_id={$Post_Id}' class='btn btn-primary' role='button'>Edit </a> </td>";
    echo "<td> <a href='view_post.php?delete={$Post_Id}' class='btn btn-danger'role='button'> Delete </a> </td>";
    echo "</tr>";
 }       
}

 ?>   



</tbody>
</table>
</form>
                 
<?php
        if(isset($_GET['delete'])){
          $idd=$_GET['delete'];
            
     $query_for_delete_ap="Delete FROM auctions_post WHERE post_id='{$idd}'";
     $result = mysqli_query($link, $query_for_delete_ap); 

     $query_for_delete="DELETE FROM bid_info WHERE bid_moniter='{$idd}' ";
     $resultt = mysqli_query($link,$query_for_delete);

     $query_for="DELETE * FROM post_garna_user WHERE post_moniter='{$idd}' ";
     $resulttt = mysqli_query($link,$query_for);


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