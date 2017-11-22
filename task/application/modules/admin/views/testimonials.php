  <div class="content">
            <div class="container-fluid">
                <div class="row">
                     <form action="<?= site_url('admin/add_testimonials') ?>" method="post">
                                    <div class="row">
                                         
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Author Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Author Name" name="author" value="">
                                            </div>
                                        </div>
                                         
                                    </div>
 
                                     

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Testimonial</label>
                                                <textarea rows="5" name="testimonial" class="form-control border-input" placeholder="Here can be your description" value="Mike"> 
 </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Testimonial</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                     
                     
                     
                </div>
              <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Author</th>
                                    	<th>Testimonial</th> 
                                    </thead>
                                    <tbody>
                                          <?php
                            $sr = 1;
                            foreach ($LIST as $key => $val) { 
							 
							 
                                ?>

                                <tr >

                                    <td><?php echo $sr; ?></td>
                                    <td><?php echo $val['author']; ?></td>
                                    <td><?php echo $val['testimonial']; ?></td> 

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


          