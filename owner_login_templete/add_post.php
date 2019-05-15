
 <?php include "include/header.php";?>
 <div id="wrapper">
<?php include "include/side_navbar.php"?>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Add POST :-
                        </h1>
                                    
                    </div>

                </div>
             

            </div>
        




<form action="" method="POST" enctype="multipart/form-data">    
     
     
      <div class="form-group">
         <label for="Name"> Name </label>
          <input type="text" class="form-control" name="name" required/>
      </div>

       <div class="form-group">
         <label for="Location"> Location </label>
          <input type="text" class="form-control" name="location" required/>
      </div>

      



  <div class="form-group">
       <label for="category">Apartment Category</label>
       <select name="category" required/>
        <option >Select</option>
             <option value="1">Residential</option>
             <option value="2">Commercial</option>
       </select>
      </div>

        <div class="form-group">
         <label for="image"> Upload picture:-</label>    
        <input  class="form-control" type="file" name="image" required/>
          </div>
          
 

      <div class="form-group">
         <label for="Description">Description </label>
          <textarea class="form-control "name="description" cols="30" rows="10" required/></textarea>
      </div>
      
      <div class="form-group">
         <label for="post_content"> Bid </label>
         <input type="number" class="form-control" name="bid" required/>
      </div>

      <div class="form-group">
         <label for="post_content"> Bid start date </label>
         <input type="date" class="form-control" name="bid_start_date" required/>
      </div>

      <div class="form-group">
         <label for="post_content"> Bid end date </label>
         <input type="date" class="form-control" name="bid_end_date" required/>
      </div>

      
      <div class="form-group">
       	<label for="category">Post Status</label>
         <select name="post_status" required/>
         	  	<option >Select</option>
             <option value="On Bid">On Bid</option>
             <option value="Sold">Sold</option>
         </select>
      </div>

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="submit">
      </div>


</form>
    
</div>
</div>

<?php 
if (array_key_exists("submit", $_POST)) {

$pic_upload=$_FILES['image']['name'];
    $pic_upload_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($pic_upload_temp,"../images/$pic_upload");


       
$query="INSERT INTO `auctions_post`(`post_title`,`post_date`, `bid_end_date`, `post_location`,`post_image`,`post_tags`, `post_content`, `threshold_bid`, `post_status`,`post_approve_unapp`) VALUES('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['bid_start_date'])."','".mysqli_real_escape_string($link,$_POST['bid_end_date'])."','".mysqli_real_escape_string($link,$_POST['location'])."','$pic_upload','".mysqli_real_escape_string($link,$_POST['category'])."','".mysqli_real_escape_string($link,$_POST['description'])."','".mysqli_real_escape_string($link,$_POST['bid'])."','".mysqli_real_escape_string($link,$_POST['post_status'])."','pending')";

       if(mysqli_query($link, $query)){

                       
$query_retrive="SELECT post_id FROM auctions_post WHERE post_title='".mysqli_real_escape_string($link,$_POST['name'])."'";
$resultt=mysqli_query($link,$query_retrive);

if (mysqli_num_rows($resultt) > 0) {
    
    $row=mysqli_fetch_array($resultt) ;
    
  $id_resent=$row['post_id'];


  $query_for_post_garna_user="INSERT INTO `post_garna_user`(`post_user_email`, `post_moniter`) VALUES ('{$_SESSION['name']}','{$id_resent}')";
  mysqli_query($link,$query_for_post_garna_user);

?>

<script type="text/javascript">
                          swal(
                           'Good job!',
                              'Your post is ADDED!',
                             'added'
                             );
                        window.location.href="view_post.php";
                      </script>

<?php

}
                    }

                
                
           
                        
                    }
                    

?>



<?php include"include/footer.php"?>