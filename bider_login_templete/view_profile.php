 <?php include "include/header.php";?>


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
$query ="SELECT * from bider_login WHERE email='$email'";
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
          <input type="text" value="<?php echo "$first_name"; ?>" class="form-control" name="first_name" readonly>
      </div>

       <div class="form-group">
         <label for="last_name"> Last Name </label>
          <input type="text"  value="<?php echo "$last_name"; ?>" class="form-control" name="last_name" readonly>
      </div>

    
      
      <div class="form-group">
         <label for="address"> Address </label>
         <input type="text"  value="<?php echo "$address"; ?>" class="form-control" name="address" readonly>
      </div>
      
         <div class="form-group">
         <label for="contact_no"> Contact No </label>
         <input type="number" value="<?php echo "$contact_no"; ?>" class="form-control" name="contact_no" readonly>
      </div>

     <div class="form-group">
         <label for="email"> email </label>
         <input type="text"  value="<?php echo "$email"; ?>" class="form-control" name="email" readonly>
      </div>
      
         <div class="form-group">
         <label for="password"> password </label>
         <input type="text" value="<?php echo "$password"; ?>" class="form-control" name="password" readonly>
      </div>
        

</form>
    
</div>
</div>






<?php include "include/footer.php"?>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        
   <?php include"include/footer.php"?>
