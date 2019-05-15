

 <?php include "include/header.php"?>


    <div id="wrapper">



<?php include "include/side_navbar.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Subscribers List :-
                            
                        </h2>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <?php $query = "SELECT * FROM  subscribers order by id desc";
 $result = mysqli_query($link, $query); 
 ?>

<table class="table table-bordered table-hover">
<thead>
	<tr>
		<th>  Id </th>
		<th> Email </th>
        <th> Date</th>
      
      
	</tr>
</thead>
<tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
    
    $Post_Id=$row["id"];
    $Email=$row["email"];
    $Post_Date=$row["date"];
    
    echo "<tr>";
    echo "<td>{$Post_Id}</td>";
    echo "<td>{$Email}</td>"; 
    echo "<td>{$Post_Date}</td>";
    echo "</tr>";
 }       
}

 ?>   


</tbody>
</table>
                 
        

        </div>
        
   <?php include"include/footer.php"?>
