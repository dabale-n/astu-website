

                <div class="col-md-4 mt-5">
                    <div class=" text-md-right">
                    
                        <div class="announce shadow p-4 mt-2 bg-white rounded">
                            <h5 class="text-center">Announcement</h5>
                            <hr>
                            <div class="align-center">
                                <ul class="list-unstyled text-center">
                                    <?php
                                    $query=mysqli_query($con,"select * from announce where Is_Active=1");
                                    while ($row=mysqli_fetch_assoc($query)) {
                                    
                                    ?>
                                    <li class="list-item shadow-sm p-2 text-dark"><div class="col">
                                    <i class="fa-solid fa-bell fa-beat-fade fa-lg" style="color: #ec1818;"></i>
                                    <a class="text-dark"  style="text-decoration:none;" href="announcedetail.php?aid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['Title']);?></a>
                                    </div></li>
                                   <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="events shadow p-4 mt-2 bg-white rounded">
                        <h5 class="text-center">Events</h5>
                            <hr>
                            <div class="align-center">
                                <ul class="list-unstyled text-center">
                                    <?php
                                    $query=mysqli_query($con,"select * from event where Is_Active=1");
                                    while ($row=mysqli_fetch_assoc($query)) {
                                    
                                    ?>
                                    <li class="list-item shadow-sm p-2 text-dark"><div class="col">
                                    <i class="fa-solid fa-hand-point-up fa-fade fa-rotate-90"></i>
                                    <a class="text-dark"  style="text-decoration:none;" href="eventdetail.php?evid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['Title']);?></a>
                                    </div></li>
                                   <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="events shadow p-4 mt-2 bg-white rounded">
                        <h5 class="text-center">Links</h5>
                            <hr>
                            <div class="align-center">
                                <ul class="list-unstyled text-center">
                                    <li class="list-item shadow-sm p-2 text-dark"><a class="text-dark"  style="text-decoration:none;" href="https://estudent.astu.edu.et/">Estudent System</a></li>
                                    <li class="list-item shadow-sm p-2 text-dark"><a class="text-dark"  style="text-decoration:none;" href="http://pg.astu.edu.et/">Postgraduate Program</a></li>
                                    <li class="list-item shadow-sm p-2 text-dark"><a class="text-dark"  style="text-decoration:none;" href="http://dl.astu.edu.et/">ASTU Digital Library</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>