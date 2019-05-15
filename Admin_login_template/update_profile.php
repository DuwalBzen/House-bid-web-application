 <?php include "include/header.php"?>


    <div id="wrapper">

   


<?php include "include/side_navbar.php"?>

   

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                           Your profile
    
                        </h2>
      
<?php
 
$email=$_SESSION['name'];
$query ="SELECT * from admin_login WHERE email='$email'";
$query_for_profile=mysqli_query($link,$query);
while($row=mysqli_fetch_assoc($query_for_profile)){
  $first_name=$row['first_name'];
  $last_name=$row['last_name'];
  $address=$row['address'];
  $contact_no=$row['contact_no'];
  $email=$row["email"];
  $password=$row['password'];

}


?>

<form method="post">    
     
     
      <div class="form-group">
         <label for="first_name">First Name </label>
          <input type="text" value="<?php echo "$first_name"; ?>" class="form-control" name="first_name" >
      </div>

       <div class="form-group">
         <label for="last_name"> Last Name </label>
          <input type="text"  value="<?php echo "$last_name"; ?>" class="form-control" name="last_name" >
      </div>

    
      
      <div class="form-group">
         <label for="address"> Address </label>
         <input type="text"  value="<?php echo "$address"; ?>" class="form-control" name="address" >
      </div>
      
         <div class="form-group">
         <label for="contact_no"> Contact No </label>
         <input type="number" value="<?php echo "$contact_no"; ?>" class="form-control" name="contact_no" >
      </div>

     <div class="form-group">
         <label for="email"> email </label>
         <input type="text"  value="<?php echo "$email"; ?>" class="form-control" name="email" >
      </div>
      
         <div class="form-group">
         <label for="password"> password </label>
         <input type="text" value="<?php echo "$password"; ?>" class="form-control" name="password" >
      </div>
        
          <div class="form-group">
          <input class="btn btn-primary" type="submit" value="Update" name="submit">
      </div>

</form>
    
</div>
</div>



<?php 
if(isset($_POST['submit'])){
  
$first_name=$_POST['first_name'];  
$last_name=$_POST['last_name']; 
$address=$_POST['address']; 
$contact_no=$_POST['contact_no']; 
$email=$_POST['email']; 
$password=$_POST['password']; 

$query_for_profile_update="UPDATE `admin_login` SET `first_name`='{$first_name}',`last_name`='{$last_name}',`address`='{$address}',`contact_no`='{$contact_no}',`email`='{$email}',`password`='{$password}' WHERE email='$email'";

if(mysqli_query($link,$query_for_profile_update)){
?>
<script type="text/javascript">
                          swal(
                           'Good job!',
                              'Your post is UPDATED!',
                             'added'
                             );
                        window.location.href="view_profile.php";
                      </script>
                      
<?php
}
}
?>




<?php include "include/footer.php"?>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        
   <?php include"include/footer.php"?>
