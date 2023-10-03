            <?php
                session_start();
            ?>
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                         
                            </li>
                            
<?php 
     $ret=mysqli_query($con,"select userType from admintbl");
     $result=mysqli_fetch_assoc($ret);
     $utype=$result['userType'];
    if($utype==$_SESSION['utype'])
     { 
    ?>
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Sub-admins </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="addsubadmin.php">Add Sub-admin</a></li>
                                    <li><a href="managesubadmin.php">Manage Sub-admin</a></li>
                                </ul>
                            </li>
<?php }?>
               


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="managecategory.php">Manage Category</a></li>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Sub Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="addsubcategory.php">Add Sub Category</a></li>
                                    <li><a href="managesubcategory.php">Manage Sub Category</a></li>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Posts on website </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="addposts.php">Add Posts</a></li>
                                    <li><a href="manageposts.php">Manage Posts</a></li>
                                     <li><a href="trashposts.php">Trash Posts</a></li>
                                </ul>
                            </li>  
                     
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> School Programs </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="addschool.php">Add School Program</a></li>
                                    <li><a href="manageschool.php">Manage School Program</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Posts(News) </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="addnews.php">Add News</a></li>
                                    <li><a href="managenews.php">Manage News</a></li>
                                    <li><a href="trashnews.php">Trash News</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Events</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="addevents.php">Add Events</a></li>
                                    <li><a href="manageevents.php">Manage Events</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Announcement</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="addannounce.php">Add Announcement</a></li>
                                    <li><a href="manageannounce.php">Manage Announcement</a></li>
                                </ul>
                            </li>  
                           

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/> dabalenaggasa@gmail.com</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>