 <?php include "include/header.php";?>


    <div id="wrapper">

   


<?php include "include/side_navbar.php"?>

   

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                           ADD NEW ADMIN
    
                        </h2>
      

<form method="post">    
     
     
      <div class="form-group">
         <label for="first_name">First Name </label>
          <input type="text"  class="form-control" name="first_name" >
      </div>

       <div class="form-group">
         <label for="last_name"> Last Name </label>
          <input type="text"  class="form-control" name="last_name" >
      </div>

    
      
      <div class="form-group">
         <label for="address"> Address </label>
         <input type="text"   class="form-control" name="address" >
      </div>
      
         <div class="form-group">
         <label for="contact_no"> Contact No </label>
         <input type="number"  class="form-control" name="contact_no" >
      </div>

     <div class="form-group">
         <label for="email"> email </label>
         <input type="text"  class="form-control" name="email" >
      </div>
      
         <div class="form-group">
         <label for="password"> password </label>
         <input type="text"  class="form-control" name="password" >
      </div>
        

          <div class="form-group">
          <input class="btn btn-primary" type="submit" value="submit" name="submit">
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

$query_for_profile_update="INSERT INTO `admin_login` (`first_name`, `last_name`, `address`, `contact_no`, `email`, `password`) VALUES ('{$first_name}','{$last_name}','{$address}','{$contact_no}','{$email}','{$password}')";

if(mysqli_query($link,$query_for_profile_update)){
?>
<script type="text/javascript">
                          swal(
                           'Good job!',
                              'NEW Admin is added!',
                             'added'
                             );
                        window.location.href="view_profile.php";
                      </script>
                      
<?php
}
}
?>




<?php include "include/footer.php";?>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        
   <?php include"include/footer.php"?>
