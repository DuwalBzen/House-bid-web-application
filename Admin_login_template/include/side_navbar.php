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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php
     $name=$_SESSION['name'];
    

                            echo  $name;
                            ?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./view_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                    
                        <li class="divider"></li>
                        <li>
                            <a href="./logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Profile <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="./view_profile.php">View Profile</a>
                            </li>
                            <li>
                                <a href="./update_profile.php">Update Profile</a>
                            </li>
                        </ul>
                    </li>




                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="./view_post.php">View Post</a>
                            </li>
                            <li>
                                <a href="./add_post.php">Add Post</a>
                            </li>
                             <li>
                                <a href="./recived_post_request.php">Recived Post</a>
                            </li>
                        </ul>
                    </li>



                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Admin List <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="./view_all_admin.php">View All Admin</a>
                            </li>
                            <li>
                                <a href="./add_new_admin.php">Add New admin</a>
                            </li>
                        </ul>
                    </li>

                    
                    <li>
                        <a href="./view_feedback.php"><i class="fa fa-fw fa-file"></i> Feedback </a>
                    </li>

                     <li>
                        <a href="./view_subscriber.php"><i class="fa fa-fw fa-dashboard"></i> Subscriber </a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>