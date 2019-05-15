     <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
           
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
<li> <a href="../index.php">Home site</a>

                 
                

                
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php
     $name=$_SESSION['name'];
     $query="SELECT * FROM owner_login WHERE email='{$name}'";
    if($result=mysqli_query($link,$query)){
        $row=mysqli_fetch_assoc($result);
        $name=$row['first_name'];
    }

                            ?>
                            <?php

                            echo  $name;
                            ?> 

                            <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./view_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                    
                        <li class="divider"></li>
                        <li>
                            <a href="./logout.php"><i class="fa fa-fw fa-power-off"></i>
                           Logout

                                       </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->



            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="view_post.php">View Your Post</a>
                            </li>
                            <li>
                                <a href="./add_post.php">Add Your Post</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="./view_bid_history.php"><i class="fa fa-fw fa-file"></i> Bid history </a>
                    </li>

                      <li>
                        <a href="./view_profile.php"><i class="fa fa-fw fa-user"></i> View profile </a>
                    </li>

                     <li>
                        <a href="./update_profile.php"><i class="fa fa-fw fa-file"></i> Update profile </a>
                    </li>

                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>