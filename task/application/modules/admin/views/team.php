  <div class="content">
            <div class="container-fluid">
                <div class="row">
                     <form action="<?= site_url('admin/add_team') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                         
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Author Name" name="team_member" value="">
                                            </div>
                                        </div>
                                         
                                    </div>
 									<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Image</label> 
                                                        
                                                        <input type="file" name="userfile" size="20" />
                                            </div>
                                        </div>
                                         
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea rows="5" name="descp" class="form-control border-input" placeholder="Here can be your description" value=""> 
 </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Team Member</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                     
                     
                     
                </div>
              <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Team</h4> 
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Image</th>
                                    	<th>Name</th>
                                    	<th>Description</th> 
                                    </thead>
                                    <tbody>
                                          <?php
                            $sr = 1;
                            foreach ($LIST as $key => $val) { 
							  
                                ?> 
                                <tr >

                                    <td><?php echo $sr; ?></td>
                                    <td><img src="<?php echo $val['path']; ?>" alt="Image" width="50px" /></td>
                                    <td><?php echo $val['name']; ?></td>
                                    <td><?php echo $val['descp']; ?></td> 

                                </tr>
                                <?php
                                $sr++;
                            }
                            ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                     


                </div>
                 
            </div>
        </div>


          