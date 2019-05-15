

 <?php include "include/header.php"?>


    <div id="wrapper">



<?php include "include/side_navbar.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Feedback :-
                            <?php
        if(isset($_GET['delete'])){
          $idd=$_GET['delete'];
            
    $query_for="DELETE FROM customer_feedback WHERE id='{$idd}'";
    
    mysqli_query($link,$query_for);
 
    }
?> 
                        </h2>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <?php $query = "SELECT * FROM  customer_feedback order by id desc";
 $result = mysqli_query($link, $query); 
 ?>

<table class="table table-bordered table-hover">
<thead>
	<tr>
		<th> Post Id </th>
		<th> Name </th>
		<th> Email </th>
		<th> Contact </th>
        <th> Area Intrested </th>
		<th> Message </th>
        <th> Date</th>
      
      
	</tr>
</thead>
<tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
    
    $Post_Id=$row["id"];
    $Name=$row["name"];
    $Email=$row["email"];
    $contact_no=$row["contact_no"];
    $interest_area=$row["interest_area"];
    $message=$row["message"];
    $Post_Date=$row["date"];
    
    echo "<tr>";
    echo "<td>{$Post_Id}</td>";
    echo "<td>{$Name}</td>";
    echo "<td>{$Email}</td>";
    echo "<td>{$contact_no}</td>";
    echo "<td>{$interest_area}</td>";
    echo "<td>{$message}</td>"; 
    echo "<td>{$Post_Date}</td>";
   echo "<td><a href='view_feedback.php?delete={$Post_Id}' class='btn btn-danger'role='button'> Delete </a> </td>";
    echo "</tr>";
 }       
}

 ?>   


</tbody>
</table>
                 
        

        </div>
        
   <?php include"include/footer.php"?>
