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
              <li class="active"><a href="#">Course Single</a></li>
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
                <h2>Windows Server 2012 Solution Associate</h2>
                <div class="course-meta">
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
                </div>

                <div class="course-summary">
                  <div class="course-content-summary">
                    <ul  class="nav nav-pills">
                      <li class="thim-col-4 active">
                        <a href="#1a" data-toggle="tab">
                          <i class="fa fa-bookmark"></i>
                          <span>English</span>
                        </a>
                      </li>
                      <li class="thim-col-4">
                        <a href="#2a" data-toggle="tab"><i class="fa fa-cube"></i><span>नेपाली</span></a>
                      </li>
                      
                      
                     
                    </ul>

                    <div class="tab-content clearfix">
                      <div class="tab-pane active" id="1a">
                        <div class="tab-course-content">
                          <figure>
                            <img src="<?php echo base_url();?>assets/images/partner/microsoft-logo1.jpg">
                          </figure>

                          <h4>COURSE DESCRIPTION</h4>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                          </p>
                          <h4>CERTIFICATION</h4>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                          </p>
                          <h4>LEARNING OUTCOMES</h4>
                          <ul>
                            <li>70 hours of content!</li>
                            <li>Updated Materials</li>
                            <li>Professional trainer</li>
                            <li>Practical training starting from basics to advanced testing techniques.</li>
                            <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                          </ul>
                          <h4>Prerequisites</h4>
                          <ul>
                            <li>Windows 7</li>
                            <li>Windows 8</li>
                          </ul>
                        </div>

                        <div class="course-feature">
                          <h4>COURSE FEATURES</h4>    
                          <ul>
                            <li class="lectures-feature">
                              <i class="fa fa-files-o"></i>
                              <span class="label">Lectures</span>
                              <span class="value">7</span>
                            </li>
                            <li class="quizzes-feature">
                              <i class="fa fa-puzzle-piece"></i>
                              <span class="label">Quizzes</span>
                              <span class="value">1</span>
                            </li>
                            <li class="duration-feature">
                              <i class="fa fa-clock-o"></i>
                              <span class="label">Duration</span>
                              <span class="value">33 hours</span>
                            </li>
                            <li class="skill-feature">
                              <i class="fa fa-level-up"></i>
                              <span class="label">Skill level</span>
                              <span class="value">Beginner</span>
                            </li>
                            <li class="language-feature">
                              <i class="fa fa-language"></i>
                              <span class="label">Language</span>
                              <span class="value">English</span>
                            </li>
                            <li class="students-feature">
                              <i class="fa fa-users"></i>
                              <span class="label">Students</span>
                              <span class="value">198</span>
                            </li>
                            <li class="assessments-feature">
                              <i class="fa fa-check-square-o"></i>
                              <span class="label">Assessments</span>
                              <span class="value">Self</span>
                            </li>
                          </ul>
                        </div>

                        <ul class="course-social-share">
                          <li class="heading">Share:</li>
                          <li>
                            <div class="facebook-social">
                              <a target="_blank" class="facebook" href="#" title="Facebook">
                                <i class="fa fa-facebook"></i>
                              </a>
                            </div>
                          </li>
                          <li>
                            <div class="googleplus-social">
                              <a target="_blank" class="googleplus" href="https://plus.google.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Fnode%2F&amp;title=From%20Zero%20to%20Hero%20with%20Nodejs" title="Google Plus" onclick="javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;">
                                <i class="fa fa-google"></i>
                              </a>
                            </div>
                          </li>
                          <li>
                            <div class="twitter-social">
                              <a target="_blank" class="twitter" href="https://twitter.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Fnode%2F&amp;text=From%20Zero%20to%20Hero%20with%20Nodejs" title="Twitter">
                                <i class="fa fa-twitter"></i>
                              </a>
                            </div>
                          </li>
                        </ul>


                      </div>
                      <div class="tab-pane" id="2a">
                        <div class="panel-group" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
                                  Chapter 1
                                </a>
                                <!-- <span class="pull-right">0/1</span> -->
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <ul>
                                  <li>Title 1</li>
                                  <li>Title 2</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwo">
                                  Chapter 2
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul>
                                  <li>Title 1</li>
                                  <li>Title 2</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#collapseThree">
                                  Chapter 3
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul>
                                  <li>Title 1</li>
                                  <li>Title 2</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="3a">
                        <div class="enquiry-form">
                          <form class="form-horizontal" action="#" method="POST">
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
                      <div class="tab-pane" id="4a">
                        <h3>We use css to change the background color of the content to be equal to the tab</h3>
                      </div>
                    </div>

                    
                  </div>


                </div>

                
              </div>

              <div class="available-class">
                <div class="available-class-inner">
                  <h3>Class Schedule</h3>
                  <label>August</label>
                  <ul>
                    <li>
                      <div class="month-session">
                        <label class="month-session-date">
                          <span>17</span>
                          <span>Aug</span>
                          <span>2017</span>
                        </label>
                        <span class="month-session-time">
                          <span><i class="fa fa-clock-o"></i> 7:00 - 9:00</span>
                          <span><i class="fa fa-clock-o"></i> 7:00 - 9:00</span>
                        </span>
                      </div>
                    </li>
                  </ul>
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
                  <h3>Related Courses</h3>
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