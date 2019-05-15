

 <?php include "include/header.php"?>


    <div id="wrapper">

<?php include "include/side_navbar.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Welcome Admin
                            <small>

                                <?php

                            echo  $_SESSION['name'];
                            ?>
    
</small>
                        </h2>
                       
                    </div>
                </div>
                

            </div>
         

      

        <?php include "include/admin_widgets.php"?>
        </div>
        
   <?php include"include/footer.php"?>


