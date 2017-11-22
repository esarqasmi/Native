<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Contact Us</h3>
     <form method="post" action="<?= site_url('contact/save') ?>">
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6"> 
          
          <div class="row">
           <div class="col-lg-6 col-sm-6 ">
             <input type="text" class="form-control" placeholder="Name" name="username">
            </div>
            <div class="col-lg-6 col-sm-6 ">
             <input type="text" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="col-lg-9 col-sm-9">
               <textarea name="message" placeholder="Your Message" style="width:100%"></textarea>
            </div>
             
              <div class="col-lg-3 col-sm-3">
              <button class="btn btn-success" >Send</button>
              </div>
          </div>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href=" " class="pull-right viewall">View All Projects</a>
    <h2>Featured Prjoects</h2>
    <div id="owl-example" class="owl-carousel">
      <?php
			 $get =& get_instance();
   			$project= $get->list_project_onhome() ;
		 $sr = 1;
			  foreach ($project as $key => $val) { 
			  ?>
      <div class="properties">
        <div class="image-holder"><img src="<?= $val['image']?>" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="#"><?= $val['name']?></a></h4>
        <p class="price"><?= $val['descp']?></p> 
         
      </div>
       
         <?php 
			 $sr++;
			 } ?>    
      
    </div>
  </div>
 
  <div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h3 class="text-uppercase">Our Team </h3>
                            <p class="p-top-30 half-txt">Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. </p>
                        </div>
  <?php
			 $CI =& get_instance();
   			$team= $CI->list_team_onhome() ;
		 $sr = 1;
			  foreach ($team as $key => $val) { 
			  ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="<?= $val['path']?>" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4><?= $val['name']?></h4>
                                        <p><?= $val['descp']?></p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Martin Smith</h5>
                                <span>founder &amp; ceo</span>
                            </div>
                        </div>
                    
             <?php 
			 $sr++;
			 } ?>     
                         

                    </div>

                </div>
 
  
  
  <div class="spacer" id="about">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Testimonials</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
             
             <?php
			 $CI =& get_instance();
   			$testimonials= $CI->list_testimonial_onhome() ;
		 $sr = 1;
			  foreach ($testimonials as $key => $val) { 
			  ?>
             
            <div class="item <?php echo  $sr == 1 ?  'active': '' ?>">
              <div class="row"> 
                <div class="col-lg-12">
                  <h5><a href=""><?= $val['author']?></a></h5>
                  <p class="price"><?= $val['testimonial']?></p> 
                   </div>
              </div>
            </div>
             
             <?php 
			 $sr++;
			 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 