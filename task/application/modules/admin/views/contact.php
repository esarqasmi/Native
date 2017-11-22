  <div class="content">
            <div class="container-fluid">
            <?php if(!empty($MESSAGE)){  ?>
           <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><?php echo $MESSAGE; ?></span>
                                </div>
                                <?php } ?>
              <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Contact Messages</h4> 
                            </div>
                            <div class="content table-responsive table-full-width">
                            <?php 
							  
							if(!empty($LIST)){
							 ?>
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>User Name</th>
                                    	<th>Email</th> 
                                    	<th>Message</th> 
                                    	<th>Date/Time</th> 
                                    	<th>Action</th> 
                                    </thead>
                                    <tbody>
                                          <?php
                            $sr = 1;
                            foreach ($LIST as $key => $val) { 
							 
							 
                                ?>

                                <tr >

                                    <td><?php echo $sr; ?></td>
                                    <td><?php echo $val['username']; ?></td>
                                    <td><?php echo $val['email']; ?></td>
                                    <td><?php echo $val['message']; ?></td> 
                                    <td><?php echo $val['time']; ?></td> 
                                    <td><a href="<?= site_url('admin/reply/'.$val['id']) ?>" >Reply </a></td> 

                                </tr>
                                <?php
                                $sr++;
                            }
                            ?>
                                    </tbody>
                                </table>
							<?php } else echo '<p>No Messages Found<p/>';?>
                            </div>
                        </div>
                    </div>


                     


                </div>
                 
            </div>
        </div>


          