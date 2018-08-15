<?php $this->load->view('include/header');?>

  </head>

  <body> 
    
    <?php $this->load->view('include/nav');?>
  
    <!-- Parallax -->
    <div class="block bg-primary block-pd-lg block-bg-overlay text-center" data-bg-img="assets/images/parallax-bg.jpg" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg" style="background: url('<?php echo base_url();?>assets/images/parallax-bg1.jpg');">
      <h2>
        Browse Courses 
      </h2>


      <div class="col-md-12 col-sm-6 col-xs-4">
        <div class="search">
          <form class="form-inline" role="form">
            <div class="form-group">
              <label for="vendors">Vendors</label>
              <select class="form-control">
                <option selected disabled>Please pick one</option>
                <option>Vendor1</option>
                <option>Vendor2</option>
                <option>Vendor3</option>
                <option>Vendor4</option>
              </select>
              <div class="clearfix"></div>
            </div>

            <div class="form-group">
              <label for="vendors">Course Title</label>
              <select class="form-control">
                <option selected disabled>Please pick one</option>
                <option>Title1</option>
                <option>Title2</option>
                <option>Title3</option>
                <option>Title4</option>
              </select>
              <div class="clearfix"></div>
            </div>

            <div class="form-group">
              <label for="vendors">Choose</label>
              <select class="form-control">
                <option selected disabled>Please pick one</option>
                <option>Choose1</option>
                <option>Choose2</option>
                <option>Choose3</option>
                <option>Choose4</option>
              </select>
              <div class="clearfix"></div>
            </div>
            <button type="submit" class="btn btn-default">Search</button>
          </form>
        </div>

        <p class="course-tag">
          <a href="#">PMP<sup>®</sup> Certification</a>
          <a href="#">MSCA: Windows 8</a>
          <a href="#">Agile & Scrum</a>
          <a href="#">A+ CompTIA</a>
          <a href="#">Agile Leadership</a>
          <a href="#">Java 8</a>
          <a href="#">Python</a>
          <a href="#">Red Hat</a>
          <a href="#">PHP</a>
          <a href="#">AngularJS</a>
          <a href="#">HTML 5</a>
          <a href="#">Big Data</a>
        </p>
      </div>
    </div>
    <!-- /Parallax -->

    <section class="breadcrumb" id="breadcrumb">
      <div class="breadcrumb-wrapper">
        <div class="row">
          <div class="container">
            <ul class="bread">
              <li><a href="#">Home</a></li>
              <li class="active"><a href="#">Courses</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Course Details -->
      <div class="container site-content sidebar-right">
        <div class="row">
          <div id="main" class="col-md-9 pull-left">
            <article>
              <div class="entry-content">
                <h2>Certifications & Courses</h2>
                <!-- <div class="course-meta">
                  <div class="course-certification">
                    <label>Certification</label>
                    <div class="value">
                      <span class="course-link"><a href="#">Microsoft</a></span>
                    </div>  
                  </div>
                  <div class="course-level">
                    <label>Level</label>
                    <div class="value">
                      <span>Beginner</span>
                    </div>  
                  </div>
                  <div class="course-categories">
                    <label>Categories</label>
                    <div class="value">
                      <span class="course-link"><a href="#">System Administrator</a></span>
                    </div>   
                  </div>
                </div> -->

                <div id="course-archive" class="course-grid">
                  <div id="course-id" class="course-grid-3 course-pad">
                    <div class="course-item">
                      <div class="course-thumbnail" style="background-image: url('<?php echo base_url('assets/images/partner/ms.jpg');?>'); height: 168px;
background-size: cover !important; ">
                        <div class="course-overlay course-bg-microsoft">
                        </div>
                      </div>
                      <div class="course-content">
                        <h4 class="course-title">
                          <a href="#">Microsoft</a>
                        </h4>
                        <ul>
                          <li><a href="#">MCSA</a></li>
                          <li><a href="#">MCSD</a></li>
                          <li><a href="#">MCSE</a></li>
                          <li><a href="#">MCTS</a></li>
                        </ul>
                        <span><a href="#">view all courses</a></span>
                      </div>
                    </div>
                  </div>

                  <div id="course-id" class="course-grid-3 course-pad">
                    <div class="course-item">
                      <div class="course-thumbnail" style="background-image: url('<?php echo base_url('assets/images/partner/c.jpg');?>'); height: 168px;
background-size: cover !important; ">
                        <div class="course-overlay course-bg-cisco">
                        </div>
                      </div>
                      <div class="course-content">
                        <h4 class="course-title">
                          <a href="#">Cisco</a>
                        </h4>
                        <ul>
                          <li><a href="#">CCNP</a></li>
                          <li><a href="#">CCNA</a></li>
                          <li><a href="#">COBIT</a></li>
                          <li><a href="#">CCIE</a></li>
                        </ul>
                        <span><a href="#">view all courses</a></span>
                      </div>
                    </div>
                  </div>

                  <div id="course-id" class="course-grid-3 course-pad">
                    <div class="course-item">
                      <div class="course-thumbnail" style="background-image: url('<?php echo base_url('assets/images/partner/ec.jpg');?>'); height: 168px;
background-size: cover !important; ">
                        <div class="course-overlay course-bg-ec">
                        </div>
                      </div>
                      <div class="course-content">
                        <h4 class="course-title">
                          <a href="#">EC Council</a>
                        </h4>
                        <ul>
                          <li><a href="#">CEH</a></li>
                          <li><a href="#">ECSA</a></li>
                          <li><a href="#">ECIH</a></li>
                          <li><a href="#">CHFI</a></li>
                        </ul>
                        <span><a href="#">View All courses</a></span>
                      </div>
                    </div>
                  </div>


                  <div id="course-id" class="course-grid-3 course-pad">
                    <div class="course-item">
                      <div class="course-thumbnail" style="background-image: url('<?php echo base_url('assets/images/partner/o.jpg');?>'); height: 168px;
background-size: cover !important; ">
                        <div class="course-overlay course-bg-oracle">
                        </div>
                      </div>
                      <div class="course-content">
                        <h4 class="course-title">
                          <a href="#">Oracle Solaris</a>
                        </h4>
                        <ul>
                          <li><a href="#">Fusion</a></li>
                          <li><a href="#">OCP</a></li>
                          <li><a href="#">Apex</a></li>
                          <li><a href="#">Java SE7</a></li>
                        </ul>
                        <span><a href="#">View All courses</a></span>
                      </div>
                    </div>
                  </div>

                  <div id="course-id" class="course-grid-3 course-pad">
                    <div class="course-item">
                      <div class="course-thumbnail" style="background-image: url('<?php echo base_url('assets/images/partner/it.jpg');?>'); height: 168px;
background-size: cover !important; ">
                        <div class="course-overlay course-bg-itil">
                        </div>
                      </div>
                      <div class="course-content">
                        <h4 class="course-title">
                          <a href="#">ITIL</a>
                        </h4>
                        <ul>
                          <li><a href="#">ITIL Foundation</a></li>
                          <li><a href="#">ITIL Practitioner</a></li>
                          <li><a href="#">OSA Capability</a></li>
                          <li><a href="#">SOA Capability</a></li>
                        </ul>
                        <span><a href="#">View All courses</a></span>
                      </div>
                    </div>
                  </div>

                </div>
              </div>


            </article>
          </div>

          <div id="sidebar" class="col-md-3">
            <div class="sidebar-type">
              <aside id="running-classes">
                <div class="running-classes-inner scroll-wrapper">
                  <h3>New Class Details</h3>
                  <div class="scrollbar-inner running-classes-content">
                    <ul>
                      <li>
                        <span><a href="#">MSCA & MCSE on Windows Server 2012</a></span>
                        <p>
                          <i class="fa fa-clock-o"></i> 5:30 PM to 7:30 PM <br> 
                          <i class="fa fa-clock-o"></i> 7:00 AM to 9:00 AM</p>
                      </li>
                      <li>
                        <span><a href="#">Implementing Forefront Threat Management Gateway</a></span>
                        <p>
                          <i class="fa fa-clock-o"></i> 5:30 PM to 7:30 PM <br> 
                          <i class="fa fa-clock-o"></i> 7:00 AM to 9:00 AM</p>
                      </li>
                      <li>
                        <span><a href="#">MSCA & MCSE on Windows Server 2012</a></span>
                        <p>
                          <i class="fa fa-clock-o"></i> 5:30 PM to 7:30 PM <br> 
                          <i class="fa fa-clock-o"></i> 7:00 AM to 9:00 AM</p>
                      </li>
                      <li>
                        <span><a href="#">MSCA & MCSE on Windows Server 2012</a></span>
                        <p>
                          <i class="fa fa-clock-o"></i> 5:30 PM to 7:30 PM <br> 
                          <i class="fa fa-clock-o"></i> 7:00 AM to 9:00 AM</p>
                      </li>
                      <li>
                        <span><a href="#">MSCA & MCSE on Windows Server 2012</a></span>
                        <p>
                          <i class="fa fa-clock-o"></i> 5:30 PM to 7:30 PM <br> 
                          <i class="fa fa-clock-o"></i> 7:00 AM to 9:00 AM</p>
                      </li><li>
                        <span><a href="#">MSCA & MCSE on Windows Server 2012</a></span>
                        <p>
                          <i class="fa fa-clock-o"></i> 5:30 PM to 7:30 PM <br> 
                          <i class="fa fa-clock-o"></i> 7:00 AM to 9:00 AM</p>
                      </li><li>
                        <span><a href="#">MSCA & MCSE on Windows Server 2012</a></span>
                        <p>
                          <i class="fa fa-clock-o"></i> 5:30 PM to 7:30 PM <br> 
                          <i class="fa fa-clock-o"></i> 7:00 AM to 9:00 AM</p>
                      </li><li>
                        <span><a href="#">MSCA & MCSE on Windows Server 2012</a></span>
                        <p>
                          <i class="fa fa-clock-o"></i> 5:30 PM to 7:30 PM <br> 
                          <i class="fa fa-clock-o"></i> 7:00 AM to 9:00 AM</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </aside>
              <aside id="relate-course">
                <div class="relate-course-inner">
                  <h3>Popular Courses</h3>
                  <div class="relate-course-content">

                    <div class="mt-element-ribbon bg-color">
                      <div class="ribbon uppercase">Microsoft</div>
                      <div class="ribbon-content clearfix">
                        <div class="relate-content">
                          <label>
                            <span class="stitle">Level:</span>
                            <span class="scaption">Beginner</span>
                          </label>
                          <h5><a href="#">Implementing Forefront Thread Management Gateway</a></h5>
                          <p>Reviews (8)</p>
                        </div>
                      </div>
                    </div>

                    <div class="mt-element-ribbon bg-color">
                      <div class="ribbon uppercase">CISCO</div>
                      <div class="ribbon-content clearfix">
                        <div class="relate-content">
                          <label>
                            <span class="stitle">Level:</span>
                            <span class="scaption">Expert</span>
                          </label>
                          <h5><a href="#">Certified Information Systems Security Professional (CISSP)</a></h5>
                          <p>Reviews (8)</p>
                        </div>
                      </div>
                    </div>

                    <div class="mt-element-ribbon bg-color">
                      <div class="ribbon uppercase">Microsoft</div>
                      <div class="ribbon-content clearfix">
                        <div class="relate-content">
                          <label>
                            <span class="stitle">Level:</span>
                            <span class="scaption">Beginner</span>
                          </label>
                          <h5><a href="#">Implementing Forefront Thread Management Gateway</a></h5>
                          <p>Reviews (8)</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </aside>
              <aside></aside>
              <aside></aside>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    

    <section class="subscrip" id="subscrip">
      <div class="container text-center form-pad">

        <form class="form-inline" role="form">
           <div class="form-group">
              <label for="subscribe">Subscribe Our Newsletter / Our Special Offers</label>
            <input type="text" class="form-control" id="subscribe" placeholder="Enter email id">
           </div>
           <button type="submit" class="btn btn-default">Submit</button>
        </form>     

      </div>
    </section>
    <!-- @component: footer -->

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Contact Us</h2>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-3">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Ranabhat Complex, 6<sup>th</sup> Floor <br>Anamnagar, Kathmandu, Nepal</p>
              </div>
              
              <div>
                <i class="fa fa-envelope"></i>
                <p>info@labanepal.com</p>
              </div>
              
              <div>
                <i class="fa fa-phone"></i>
                <p>977-1-4102721<br>4102722<br>4244804</p>
              </div>
              
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="info">
              <div>
                <i class="fa fa-facebook"></i>
                <p><a href="#">Facebook</a></p>
              </div>
              
              <div>
                <i class="fa fa-twitter"></i>
                <p><a href="#">Twitter</a></p>
              </div>
              
              <div>
                <i class="fa fa-linkedin"></i>
                <p><a href="#">LinkedIn</a></p>
              </div>
              
            </div>
      </div>
          
        </div>
      </div>


    </section>
      
    <footer class="site-footer">
      <div class="bottom">
        <div class="container">
          <div class="row">

            <div class="col-lg-6 col-md-6 col-xs-12 text-lg-right">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="index.html">Home</a>
                </li>

                <li class="list-inline-item">
                  <a href="#about">About Us</a>
                </li>

                <li class="list-inline-item">
                  <a href="#features">Contact Us</a>
                </li>

                <li class="list-inline-item">
                  <a href="#portfolio">Sitemap</a>
                </li>

              </ul>
            </div>

            <div class="col-lg-6 col-md-6 col-xs-12">
              <span class="pull-right">Copyright <?php echo date('Y');?> <b><a href="#">Laba Pvt Ltd</a></b></span>
            </div>
            
          </div>
        </div>
      </div>
    </footer>


    <a class="scrolltop" href="#">
      <span class="fa fa-angle-up"></span>
    </a> 


    <!-- Required JavaScript Libraries -->
   <!-- Required JavaScript Libraries -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script>
      $('.carousel').carousel({
        interval: 2000
      })
    </script>

    <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/counterup.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/easing.js"></script>
   

    <script src="<?php echo base_url();?>assets/js/jquery.mixitup.js"></script>
    <script>
      $('#Container').mixItUp();
    </script>






    <script src="<?php echo base_url();?>assets/js/hero_main.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/hoverIntent.js"></script>
    <script src="<?php echo base_url();?>assets/js/superfish.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/tether.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    
    <!-- JCarousel -->
    <script src="<?php echo base_url();?>assets/js/jquery.jcarousel.js"></script>
    <script src="<?php echo base_url();?>assets/js/jcarousel.basic.js"></script>
    <!-- -->
    <!-- <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script> -->

    <script src="<?php echo base_url();?>assets/js/jquery.flexslider-min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/flexslider.config.js"></script>



    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script>
      $('#owl-works').owlCarousel({
            items : 4,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [980,5],
            itemsTablet: [768,5],
            itemsTabletSmall: [550,2],
            itemsMobile : [480,2],
  });
    </script>



    <script src="<?php echo base_url();?>assets/js/sticky.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/lockfixed/lockfixed.min.js"></script>
   
    <!-- Template Specisifc Custom Javascript File -->
    <script src="<?php echo base_url();?>assets/js/custom_new.js"></script>
    
    <script src="contactform/contactform.js"></script>
    
    
  </body>
</html>