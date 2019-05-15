



<?php include "../db_connection/database_connection.php" ?>
 <?php include "include/header.php"?>
 <div id="wrapper">
<?php include "include/side_navbar.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           ALL POST :-
                        </h1>
                                    
                    </div>

                </div>
             

            </div>
        
            

<?php

if(isset($_GET['source'])){

$source = $_GET['source'];

} else {

$source = '';

}

switch($source) {
    
        
   case 'edit_post';
    
    include "include/edit_post.php";
    break;
    
    case '200';
    echo "NICE 200";
    break;
    
    default:
    
    include "include/view_all_post.php";
    
    break;
    
    
    
    
}

?>
          
                 
        </div>



<?php include "include/footer.php"?>
