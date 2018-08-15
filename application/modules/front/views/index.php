    <!-- About -->

    <section class="about" id="about">
      <div class="container text-center">
        <h2>
          Popular Courses
        </h2>

        <div class="row">
          <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="gem-textbox centered-box text-center">
              <div class="gem-textbox-inner" style="border: 1px solid #dfe5e8;">
                <div class="gem-textbox-content">
                  <div class="line-bottom gem-textbox-content-title tp">
                    <h3>Certified Ethical Hacking</h3>
                    <span></span>
                  </div>

                  <div class="line-bottom gem-textbox-content-content">
                    <p>Certified Ethical Hacker is a qualification obtained by assessing the security of of computer systems, ..</p>
                  </div>

                  <div class="gem-textbox-footer">
                    <a class="btn entry-btn-3d" href="#">more info</a>
                  </div>
                </div>   
              </div>
            </div>
          </div> -->
          <?php $u=1; foreach($content as $c) :
                if (($c->id == 9) || ($c->id == 10) || ($c->id == 12) || ($c->id == 13)) {
           ?>
          <div class="col-md-3">
            <div class="course-row text-center">
              <div class="course-textbox-inner" style="border: 1px solid #dfe5e8;">
                <div class="course-textbox-content">
                  <h3><?php echo $c->title; ?></h3>
                  <span></span>
                  <p><?php echo word_limiter($c->content, 15);?></p>
                  <a class="btn entry-btn-3d" href="<?php echo base_url('front/courses/'.$c->id);?>">more info</a>
                </div>
              </div>
            </div>
          </div>
          <?php } $u++; endforeach ?>

          <!-- <div class="course-col text-center col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="square-inner">
              <div class="square-wrapper">  
                <div class="gem-textbox centered-box">
                  <div class="gem-textbox-inner" style="border: 1px solid #dfe5e8;">
                    <div class="gem-textbox-content">
                      <div class="line-bottom gem-textbox-content-title tp">
                        <h3>CCNA</h3>
                        <span></span>
                      </div>

                      <div class="line-bottom gem-textbox-content-content">
                        <p>CCNA Training Course offers the essential guidance to receive certification on operating Cisco’s netw.</p>
                      </div>

                      <div class="gem-textbox-footer">
                        <a class="btn entry-btn-3d" href="#">more info</a>
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="course-col text-center col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="square-inner">
              <div class="square-wrapper">  
                <div class="gem-textbox centered-box">
                  <div class="gem-textbox-inner" style="border: 1px solid #dfe5e8;">
                    <div class="gem-textbox-content">
                      <div class="line-bottom gem-textbox-content-title tp">
                        <h3>MCSE</h3>
                        <span></span>
                      </div>

                      <div class="line-bottom gem-textbox-content-content">
                        <p>CCNA Training Course offers the essential guidance to receive certification on operating Cisco’s netw.</p>
                      </div>

                      <div class="gem-textbox-footer">
                        <a class="btn entry-btn-3d" href="#">more info</a>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="course-col text-center col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="square-inner">
              <div class="square-wrapper">  
                <div class="gem-textbox centered-box">
                  <div class="gem-textbox-inner" style="border: 1px solid #dfe5e8;">
                    <div class="gem-textbox-content">
                      <div class="line-bottom gem-textbox-content-title tp">
                        <h3>PHP</h3>
                        <span></span>
                      </div>

                      <div class="line-bottom gem-textbox-content-content">
                        <p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</p>
                      </div>

                      <div class="gem-textbox-footer">
                        <a class="btn entry-btn-3d" href="#">more info</a>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </section>
    <!-- /About -->

    <!-- Parallax -->
    <div class="bg-search block bg-primary block-pd-lg block-bg-overlay text-center" data-bg-img="images/parallax-bg.jpg" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg" style="background: url('<?php echo base_url();?>assets/front/images/parallax-bg1.jpg');">
      <h2>
        Browse Courses 
      </h2>


      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="search">
              <form class="form-inline" role="form">
                <div class="form-group">
                  <label for="vendors">Vendors</label>
                  <select class="form-control" disabled>
                    <option selected disabled>Please pick one</option>
                    <option>Vendor1</option>
                    <option>Vendor2</option>
                    <option>Vendor3</option>
                    <option>Vendor4</option>
                  </select>
                  <div class="clearfix"></div>
                </div>

                <div class="form-group">
                  <label for="vendors">Category</label>
                  <select class="form-control" disabled>
                    <option selected disabled>Please pick one</option>
                    <option>Title1</option>
                    <option>Title2</option>
                    <option>Title3</option>
                    <option>Title4</option>
                  </select>
                  <div class="clearfix"></div>
                </div>

                <div class="form-group">
                  <label for="vendors">Course Title</label>
                  <select class="form-control" disabled>
                    <option selected disabled>Please pick one</option>
                    <option>Choose1</option>
                    <option>Choose2</option>
                    <option>Choose3</option>
                    <option>Choose4</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
                <button type="submit" class="btn entry-btn-3d">Search</button>
              </form>
            </div>

            <p class="course-tag">
              <?php $q=1; foreach($content as $c): 
                    if($q <= 15) {?>
                <a href="<?php echo base_url('front/Courses/'.$c->id);?>"><?php echo $c->title;?></a>
              <?php } $q++; endforeach ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Parallax -->

    <!-- Features -->
    <section class="features" id="features">
      <div class="container">
        <h2 class="text-center">
          Why Laba
        </h2>

        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="feature-col col-md-6 col-sm-12 col-xs-12">
            <div class="card card-block text-center">
              <div class="pull-right">
                <div class="feature-icon">
                  <span class="fa fa-rocket"></span>
                </div>
              </div>

              <div class="feature-col-content">
                <h4>
                  Infrastructure
                </h4>

                <p>
                  The best in Nepal with high configuration Lenovo laptops and branded desktops and CISCO Routers and Switches sufficient to perform CCNA, CCNP and some CCIE hands on lab.
                </p>
              </div>
            </div>

            <div class="card card-block text-center">
              <div class="pull-right">
                <div class="feature-icon">
                  <span class="fa fa-magic"></span>
                </div>
              </div>

              <div class="feature-col-content">
                <h4>
                  Corporate IT Solutions
                </h4>

                <p>
                  Our objective is to meet your objectives. Our commitment to our clients is to provide superior IT solutions while delivering excellent service and meeting their business objectives.
                </p>
              </div>
            </div>

            <div class="card card-block text-center">
              <div class="pull-right">
                <div class="feature-icon">
                  <span class="fa fa-user-secret"></span>
                </div>
              </div>

              <div class="feature-col-content">
                <h4>
                  Technical Expertise
                </h4>

                <p>
                  Our course is designed with the goal of making you even more productive that give you a competitive edge and delivered through highly experienced and certified trainers.
                </p>
              </div>
            </div>

              <div class="card card-block text-center">
                <div class="pull-right">
                  <div class="feature-icon">
                    <span class="fa fa-cut"></span>
                  </div>
                </div>

                <div class="feature-col-content">
                  <h4>
                    No comparison
                  </h4>

                  <p>
                    The state-of-the-art technology, best infrastructure, certified trainer, friendly staff, amicable environment, flexible timing, and the additional values has made LABA no Comparison.
                  </p>
                </div>
              </div>
          </div>

          <div class="feature-col col-md-6 col-sm-12 col-xs-12">
            <div class="card card-block text-center">
              <div class="feature-col-img">
                <div class="jcarousel-wrapper">
                  <div class="jcarousel">
                    <ul>
                      <li><img src="<?php echo base_url();?>assets/front/images/jc/img1.jpg" width="600" height="400" alt=""></li>
                      <li><img src="<?php echo base_url();?>assets/front/images/jc/img2.jpg" width="600" height="400" alt=""></li>
                      <li><img src="<?php echo base_url();?>assets/front/images/jc/img3.jpg" width="600" height="400" alt=""></li>
                      <li><img src="<?php echo base_url();?>assets/front/images/jc/img4.jpg" width="600" height="400" alt=""></li>
                      <li><img src="<?php echo base_url();?>assets/front/images/jc/img5.jpg" width="600" height="400" alt=""></li>
                      <li><img src="<?php echo base_url();?>assets/front/images/jc/img6.jpg" width="600" height="400" alt=""></li>
                    </ul>
                    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                    <p class="jcarousel-pagination"></p>
                  </div>
                </div>           
              </div>
            </div>
          </div>
        </div>
        </div>


      </div>
    </section>
    <!-- /Features -->

    <hr class="line">
     <!-- Our Service -->
    <section class="services" id="services">
      <div class="container">
        <h2 class="text-center">
          Our Service
        </h2>

        <div class="row">
          <div class="services-space">
            <div class="col-md-3">
              <div class="text-center right-bor">
                <span class="svg-icon1"><img src="<?php echo base_url();?>assets/front/images/svg/classroom.svg"></span>
                <h3 class="text-weight-strong">
                  IT Training
                </h3>
                <p>LABA established in 2009 is the most advanced IT training service provider in Nepal.</p>
                <div class="gem-textbox-footer">
                  <a href="#" class="dark">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-center right-bor">
                <span class="svg-icon1"><img src="<?php echo base_url();?>assets/front/images/svg/idea.svg"></span>
                <h3 class="text-weight-strong">
                  Development
                </h3>
                <p>LABA established in 2009 is the most advanced IT training service provider in Nepal.</p>
                <div class="gem-textbox-footer">
                  <a href="#" class="dark">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-center right-bor">
                <span class="svg-icon1"><img src="<?php echo base_url();?>assets/front/images/svg/desk.svg"></span>
                <h3 class="text-weight-strong">
                  Room Rental
                </h3>
                <p>LABA established in 2009 is the most advanced IT training service provider in Nepal.</p>
                <div class="gem-textbox-footer">
                  <a href="#" class="dark">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-center right-no-bor">
                <span class="svg-icon1"><img src="<?php echo base_url();?>assets/front/images/svg/test1.svg"></span>
                <h3 class="text-weight-strong">
                  Online Testing
                </h3>
                <p>LABA established in 2009 is the most advanced IT training service provider in Nepal.</p>
                <div class="gem-textbox-footer">
                  <a href="#" class="dark">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section>
    <!-- /Our Service -->
    <!-- Call to Action -->

    <section class="cta">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-lg-left text-center">
            <div class="white-board white-lift">
              <div class="white-img">
                <div class="col-md-6 no-padding hover-img">
                  <figure><img src="<?php echo base_url();?>assets/front/images/laba.jpg"></figure>
                </div>
              </div>

              <div class="white-img-content">
                <div class="col-md-6">
                  <div class="white-img-inner">
                    <h5 class="heading">About Us</h5>
                    <h2>Laba Nepal</h2>
                    <p>LABA established in 2009 is the most advanced IT training service provider in Nepal. The training center offers blended IT learning solutions comprising Classroom training, Onsite training and E-learning directly from the global vendors. LABA has a range of IT Training & Computer Courses that lead to internationally recognized certifications. </p>
                    <a class="btn entry-btn-3d" href="<?php echo base_url('front/about');?>">more info</a>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="counter">
              <div class="counter-inner">
                <div class="col-md-3">
                  <div class="counter-icon">
                    <span class="svg-icon"><img src="<?php echo base_url();?>assets/front/images/svg/mortarboard.svg"></span>
                    <span class="counter count">1000+</span>
                    Students Certified
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="counter-icon">
                    <span class="svg-icon"><img src="<?php echo base_url();?>assets/front/images/svg/partner.svg"></span>
                    <span class="counter count">14</span>
                    Valued Partner
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="counter-icon">
                    <span class="svg-icon"><img src="<?php echo base_url();?>assets/front/images/svg/university-lecture.svg"></span>
                    <span class="counter count">20+</span>
                    Certified Trainers
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="counter-icon">
                    <span class="svg-icon"><img src="<?php echo base_url();?>assets/front/images/svg/open-book.svg"></span>
                    <span class="counter count">100+</span>
                    Courses Available
                  </div>
                </div>
              </div>
            </div>

          </div>
          
        <!--   <div class="counter text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">232</span> Satisfied Customers
            </div>
          </div> -->

          <!-- <div class="col-lg-3 col-sm-12 text-lg-right text-center">
            <a class="btn btn-ghost" href="#">Register</a>
          </div> -->
        </div>
      </div>
    </section>
    <!-- /Call to Action -->

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-center">
              Testimonials
            </h2>
              <div class="testimonialslide clearfix flexslider">
                <ul class="slides">
                  <li><blockquote>
                    Mr. Bikramjit Singh Sahai is an excellent instructor, knowledgeable in all areas of ISO 27001 material. I would highly recommend him to anyone looking for this certification. Thank you LABA for providing such an excellent resource person and awesome Training here in Nepal. 
                    </blockquote>
                    <h4>Chiranjibi Adhikari <span>&#8213; President, Information Secuirty Response Team Nepal</span></h4> 
                  </li>
                  <li><blockquote>
                  LABA is the excellent training institute in Nepal. Received professional, through, useful & informative CEH training from Sachin Sir. He is very knowledgeable & skilled trainer. Very great experience..... Enjoyed all lectures. Thank you so much!!! 
                    </blockquote>
                    <h4>Pratik Shrestha <span>&#8213; IT Officer, Classic Tech </span></h4>
                  </li> 
                  <li><blockquote>
                  The trainer’s expertise was immense and he was flown in to Kathmandu  to conduct ISO 27001 training and certification program. The study guide was comprehensive with quality practice test and case studies. I would rate LABA 5 out of 5 Star rating for this training.
                    </blockquote>
                    <h4>Adesh Khadka <span>&#8213; IT Director, Ministry of Finance </span></h4>
                  </li>
                  <li><blockquote>
                  The trainer's expertise in CISA was exceptional. The CISA Bootcamp training program from LABA-Nepal, Learning was great and very informative. I would certainly recommend them for future training programs.
                    </blockquote>
                    <h4>Anil Kumar Dutta <span>&#8213;  OCC</span></h4>
                  </li>
                  <li><blockquote>
                  The best thing about the ISO 27001 training and certification program was the structure and presentation of information. From courseware to the study guide and practice tests – everything was perfect. I thank LABA for conducting such training here in Kathmandu.
                    </blockquote>
                    <h4>Sansar Jung Dewan <span>&#8213; IT Director, FCGO</span></h4>
                  </li>
                </ul>
              </div>          
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio -->

    <section class="portfolio" id="portfolio">
      <div class="container text-center">
        <div class="row">
            <div class="page-title text-center">
              <h2>Our Clients</h2>
            </div>
            <div class="port-sec">
              <div class="col-md-12 fil-btn text-center">
                  <div class="filter wrk-title active" data-filter="all">Show All</div>
                  <div class="filter wrk-title" data-filter=".gov">Governmental Office</div>
                  <div class="filter wrk-title" data-filter=".bk">Banks</div>
                  <div class="filter wrk-title" data-filter=".corp">Corporate</div>
                  <div class="filter wrk-title lst-cld" data-filter=".tel">Telecommunications</div>
              </div>
              <div id="Container">
                <div class="filimg mix gov col-md-2 col-sm-3 col-xs-12" data-myorder="2">
                  <img src="<?php echo base_url();?>assets/front/images/test/feat1.jpg" class="img-responsive"> 
                </div>
                <div class="filimg mix bk col-md-2 col-sm-3 col-xs-12" data-myorder="4">
                  <img src="<?php echo base_url();?>assets/front/images/test/feat2.jpg" class="img-responsive">
                </div>
                <div class="filimg mix bk col-md-2 col-sm-3 col-xs-12" data-myorder="1">
                  <img src="<?php echo base_url();?>assets/front/images/test/feat3.jpg" class="img-responsive">               
                </div>
                <div class="filimg mix bk col-md-2 col-sm-3 col-xs-12" data-myorder="8">
                  <img src="<?php echo base_url();?>assets/front/images/test/feat4.jpg" class="img-responsive">
                </div>
                <div class="filimg mix corp col-md-2 col-sm-3 col-xs-12" data-myorder="8">
                  <img src="<?php echo base_url();?>assets/front/images/test/feat5.jpg" class="img-responsive">
                </div>
                <div class="filimg mix tel col-md-2 col-sm-3 col-xs-12" data-myorder="8">
                  <img src="<?php echo base_url();?>assets/front/images/test/feat6.jpg" class="img-responsive">
                </div>

                <!--<div class="filimg mix tel col-md-2 col-sm-3 col-xs-12" data-myorder="8">
                  <img src="<?php echo base_url();?>assets/front/images/test/feat7.jpg" class="img-responsive">
                </div>-->
              </div>
            </div>
          </div>
        </div> 
      </div>

    </section>
    <!-- /Portfolio -->
    <!-- Team -->

    <section class="team" id="team">

      <!-- clients -->
      <div class="container">
        <h2 class="text-center">
          Our Partners
        </h2>
        

        <div class="row">
          <div class="col-md-12">
            <div id="Carousel" class="carousel slide custom-carousel">
              <ol class="carousel-indicators">
                  <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#Carousel" data-slide-to="1"></li>
                  <li data-target="#Carousel" data-slide-to="2"></li>
              </ol>
              <!-- Carousel items -->
              <div class="carousel-inner">
                  
              <div class="item active custom-item">
                <div class="row">
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo1.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo2.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo3.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo4.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo5.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo6.png" alt="Image" style="max-width:100%;"></a></div>
                </div><!--.row-->
              </div><!--.item-->
                       
              <div class="item custom-item">
                <div class="row">
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo7.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo8.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo9.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo10.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo11.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo12.png" alt="Image" style="max-width:100%;"></a></div>
                </div><!--.row-->
              </div><!--.item-->
                       
              <div class="item custom-item">
                <div class="row">
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo13.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo14.png" alt="Image" style="max-width:100%;"></a></div>
                  <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url();?>assets/front/images/clients/logo15.png" alt="Image" style="max-width:100%;"></a></div>
                  
                </div><!--.row-->
              </div><!--.item-->
                       
              </div><!--.carousel-inner-->
                <!-- <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                <a data-slide="next" href="#Carousel" class="right carousel-control">›</a> -->
              </div><!--.Carousel-->
               
        </div>
      </div><!--.container-->
    </section>

    
