
      
<?php
 
    if(isset($_GET['p_id'])){
    
    $the_post_id =  $_GET['p_id'];

    }

$query ="SELECT * from bid_info WHERE bid_id='$the_post_id'";
$query_for_edit=mysqli_query($link,$query);
while($row=mysqli_fetch_assoc($query_for_edit)){
  
  $bid_done=$row['bid_amount'];

}


?>

<form method="post">    
     
     
<!--       <div class="form-group">
         <label for="Name"> Name </label>
          <input type="text" value="<?php echo "$Name"; ?>" class="form-control" name="name">
      </div>

       <div class="form-group">
         <label for="Location"> Location </label>
          <input type="text"  value="<?php echo "$Location"; ?>" class="form-control" name="location">
      </div>

      




   <div class="form-group">
       <label for="category">Apartment Category</label>
       <select name="category" >
        <option value="Residential"><?php echo "$Apartment_Category"; ?></option>
        <?php 
         if($Apartment_Category=="Residential"){
          echo "<option value='Commercial'>Commercial</option>";

         }
         else{
          echo "<option value='Residential'>Residential</option>";
         }
        ?>
        
       </select>
      </div>

      <div class="form-group">
         <label for="Description">Description </label>
          <textarea class="form-control"  name="description" cols="30" rows="10"> <?php echo "$Description"; ?> </textarea>
      </div> -->
      
      <div class="form-group">
         <label for="post_content"> Current bid </label>
         <input type="number"  value="<?php echo "$bid_done"; ?>" class="form-control" name="bid">
      </div>
      
        <!--  <div class="form-group">
        <label for="category">Post Status</label>
         <select name="post_status" > 
             <option value="On Bid"><?php echo"$Post_Status";?></option>
             <?php 
             if($Post_Status=="On Bid"){
              echo "<option value='Sold'>Sold</option>";
             }
             else{
              echo "<option value='On Bid'>On Bid</option>";
             }
             ?>
             
         </select>
      </div>
 -->
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="submit">
      </div>


<?php 
if(isset($_POST['submit'])){
//$post_title=$_POST['name'];
  //$post_location=$_POST['location'];
  //$post_tags=$_POST['category'];
  //$post_content=$_POST['description'];
  $updated_bid=$_POST['bid'];
 // $Post_Status=$_POST['post_status'];
$query_for_update="UPDATE `bid_info` SET `bid_amount`='{$updated_bid}' WHERE bid_id='{$the_post_id}'";

if(mysqli_query($link,$query_for_update)){
?>
<script>
  window.location.href="view_post.php";
  </script>
<?php
}
}
?>

</form>
    
</div>
</div>






<?php include "include/footer.php"?>