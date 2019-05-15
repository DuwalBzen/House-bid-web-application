
      
<?php
 
    if(isset($_GET['p_id'])){
    
    $the_post_id =  $_GET['p_id'];

    }

$query ="SELECT * from auctions_post WHERE post_id='$the_post_id'";
$query_for_edit=mysqli_query($link,$query);
while($row=mysqli_fetch_assoc($query_for_edit)){
  $Name=$row['post_title'];
  $Location=$row['post_location'];
  $Apartment_Category=$row['post_tags'];
  $Description=$row['post_content'];
  $post_date=$row['post_date'];
  $bid_end_date=$row['bid_end_date'];
  $threshold_bid=$row['threshold_bid'];
  $Post_Status=$row['post_status'];
}


?>

<form method="post">    
     
     
      <div class="form-group">
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
        <option value="<?php if($Apartment_Category==1){echo 1;}else{echo 2;}?>"><?php echo "$Apartment_Category"; ?></option>
        <?php 
         if($Apartment_Category==1){
          echo "<option value='2'>Commercial</option>";

         }
         else{
          echo "<option value='1'>Residential</option>";
         }
        ?>
        
       </select>
      </div>

      <div class="form-group">
         <label for="Description">Description </label>
          <textarea class="form-control"  name="description" cols="30" rows="10"> <?php echo "$Description"; ?> </textarea>
      </div>
      
      <div class="form-group">
         <label for="post_content"> Threshold_bid </label>
         <input type="number"  value="<?php echo "$threshold_bid"; ?>" class="form-control" name="bid">
      </div>
      
          <div class="form-group">
         <label for="post_date"> Bid start date </label>
         <input type="date" value="<?php echo "$post_date"; ?>" class="form-control" name="bid_start_date">
      </div>

         <div class="form-group">
         <label for="post_content"> Bid end date </label>
         <input type="date" value="<?php echo "$bid_end_date"; ?>" class="form-control" name="bid_end_date">
      </div>

         <div class="form-group">
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

       <div class="form-group">
          <input class="btn btn-primary" type="submit" value="submit" name="submit">
      </div>


<?php 
if(isset($_POST['submit'])){
$post_title=$_POST['name'];
$bid_start_date=$_POST['bid_start_date'];
$bid_end_date=$_POST['bid_end_date'];
$post_location=$_POST['location'];
$post_tags=$_POST['category'];
$post_content=$_POST['description'];
$current_bid=$_POST['bid'];
$Post_Status=$_POST['post_status'];


$query_for_update="UPDATE `auctions_post` SET `post_title`='{$post_title}',`post_date`='{$bid_start_date}',`bid_end_date`='{$bid_end_date}',`post_location`='{$post_location}',`post_tags`='{$post_tags}',`post_content`='{$post_content}',`threshold_bid`='{$current_bid}',`post_status`='{$Post_Status}' WHERE post_id={$the_post_id}";

if(mysqli_query($link,$query_for_update)){
?>
<script type="text/javascript">
                          swal(
                           'Good job!',
                              'Your post is UPDATED!',
                             'added'
                             );
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