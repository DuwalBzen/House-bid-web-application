

 <?php include "include/header.php"?>


    <div id="wrapper">



<?php include "include/side_navbar.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            View All property owners
                        </h2>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <?php $query = "SELECT * FROM  owner_login order by id desc";
 $result = mysqli_query($link, $query); 
 ?>

<table class="table table-bordered table-hover">
<thead>
  <tr>
    <th> First Name </th>
    <th> Last Name </th>
     <th> Address </th>
      <th> Contact No </th>
    <th> Email </th>
      
      
  </tr>
</thead>
<tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
    
    $first_name=$row["first_name"];
    $last_name=$row["last_name"];
    $address=$row["address"];
    $contact_no=$row["contact_no"];
    $email=$row["email"];
   
    
    echo "<tr>";
    echo "<td>{$first_name}</td>";
    echo "<td>{$last_name}</td>";
    echo "<td>{$address}</td>";
    echo "<td>{$contact_no}</td>";
     echo "<td>{$email}</td>";
    echo "</tr>";
 }       
}

 ?>   


</tbody>
</table>
                 
        

        </div>
        
   <?php include"include/footer.php"?>
