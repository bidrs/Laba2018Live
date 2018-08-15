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
              <li><a href="#">Courses</a></li>
              <li class="active"><a href="#">Microsoft</a></li>
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
                <h2>All Microsoft Courses</h2>

                <div class="course-grid-12" id="course-filter">
                  <div class="form-inline">
                    <label for="course-filter-search">Filter By Category</label>
                      <select class="form-control cf-search" id="course-filter-search">
                        <option>Microsoft Windows 10</option>
                        <option>Microsoft Windows 8</option>
                        <option>Microsoft Windows 2012</option>
                        <option>Microsoft System Center</option>
                        <option>Microsoft Exchange Server</option>
                        <option>Unified Communications</option>
                      </select>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="course-grid-12" id="course-specific">
                  <div class="course-specific-title">
                    <h4>Certification/Courses</h4>
                  </div>
                  <div class="course-cat-title">
                    <div class="course-cat-block">
                      <h5>Microsoft Windows 10</h5>
                      <div class="course-cat-list">
                        <ul>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Deploying and Managing Windows 10 Using Enterprise Services Training Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#myModal" class="enquire" data-toggle="modal">ENQUIRE NOW</a></span>


                              <!-- Modal -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Enquire Now</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="enquiry-form">
                                        <form class="form-horizontal" action="#" method="POST">
                                          <label>Course: Deploying and Managing Windows 10 Using Enterprise Services Training Course</label>
                                          <label class="form-label">* Required Field</label>
                                          <div class="form-body">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Name</label>
                                              <div class="col-md-9">
                                                <input class="form-control" placeholder="Name *" type="text" name="name">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Email</label>
                                              <div class="col-md-9">
                                                <input class="form-control" placeholder="Email *" type="email" name="email">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Mobile No.</label>
                                              <div class="col-md-9">
                                                <div class="input-group">
                                                  <span class="input-group-addon">
                                                    977
                                                  </span>
                                                  <input class="form-control no-spinners" placeholder="Mobile *" type="number" name="mobile">
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Remarks</label>
                                              <div class="col-md-9">
                                                <textarea placeholder="Remarks *" class="form-control" cols="9"></textarea>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Security Code</label>
                                              <div class="col-md-2">
                                                <input class="form-control addspace" placeholder="Code *" type="text" name="code">
                                                <button class="btn red" type="submit">Submit</button>
                                              </div>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                     <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Implementing and Managing Windows 10</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Supporting and Troubleshooting Windows 10</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Installing and Configuring Windows 10 Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                        </ul>
                      </div>
                    </div>

                    <div class="course-cat-block">
                      <h5>Microsoft Windows 8</h5>
                      <div class="course-cat-list">
                        <ul>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Configuring Windows 8</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Implementing a Desktop Infrastructure Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Supporting Windows 8.1 Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Configuring and Troubleshooting a Windows Sever 2008 Network Infrastructure</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                        </ul>
                      </div>
                    </div>

                    <div class="course-cat-block">
                      <h5>Microsoft Windows 2012</h5>
                      <div class="course-cat-list">
                        <ul>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Storage and High Availability with Windows Server Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Deploying and Migrating Windows Servers</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Windows Server 2012 R2</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Server Infrastructure On server 2012 R2 Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                        </ul>
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

    
    

    <div class="subscrip bg-news-custom" id="subscrip">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscrip-inner">
              <div class="info-left">
                <div class="icon">
                  <img src="assets/images/test/message.png">
                </div>
                <div class="info-right">
                  <h3 class="info-right-title">
                    <span>Signup for Newsletter</span>
                  </h3>
                  <div class="info-right-description">
                    Subscribe now and receive weekly newsletter with new updates.
                  </div>
                </div>
              </div>

              <div class="newsletter">
                <form class="newsletter-form">
                  <div class="">
                    <div class="input-group">
                      <input class="form-control" name="email" placeholder="enter your email" type="email">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollbar.min.js"></script>
      <script type="text/javascript">
          jQuery(document).ready(function(){
              jQuery('.scrollbar-inner').scrollbar();
          });
      </script>
      
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/counterup.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/easing.js"></script>
    <script type="text/javascript">
      
    </script>

    <script src="<?php echo base_url();?>assets/js/jquery.mixitup.js"></script>
    <script>
      $('#Container').mixItUp();
    </script>

    

    <script src="<?php echo base_url();?>assets/js/sticky.js"></script>
   
    <!-- Template Specisifc Custom Javascript File -->
    <script src="<?php echo base_url();?>assets/js/custom_new.js"></script>
    
    <script src="contactform/contactform.js"></script>
    
    
  </body>
</html>