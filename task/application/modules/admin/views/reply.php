  <div class="content">
            <div class="container-fluid">
               <div class="row">
                
                     <form action="<?= site_url('admin/send_reply') ?>" method="post">
                                    <div class="row">
                                         
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="text" class="form-control border-input" placeholder="User Name" name="username" value="<?= $LIST[0]['username']?>">
                                         		 <input type="hidden" class="form-control border-input" placeholder="User Name" name="email" value="<?= $LIST[0]['email']?>">
                                            </div>
                                        </div>
                                         
                                    </div> 

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reply</label>
                                                <textarea rows="5" name="reply_message" class="form-control border-input" placeholder="Here can be your message" value=""> 
 </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Send Reply</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>


                     


                </div>
                 
            </div>
        </div>


          