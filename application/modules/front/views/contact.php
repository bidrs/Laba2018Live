<div class="row">
      <div class="container">
        <ul class="bread">
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li class="active"><a href="#"><?php echo $title; ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Course Details -->
  <div class="container site-content sidebar-right entry-bottom-space entry-top-extra-space">
    <div class="row">

    

    <div id="main" class="col-md-6">
        <div class="entry-content">
          <div class="entry-form">
            <h3 class="entry-point">GET IN TOUCH</h3>
            <p>Feel Free to Contact us</p>
            <form name="contactform" id="i-recaptcha" method="POST" action="<?php echo base_url('front/sendMailInfo');?>" onsubmit="return checknum()">
              <div class="entry-getintouch">
                <p>
                  <span>
                    <input class="entry-control" id="form_fname" type="text" name="fname" minlength="3" maxlength="20" placeholder="FIRST NAME" required>
                  </span>
                  <span class="error_form" id="fname_error_message"></span>
                </p>

                <p>
                  <span><input class="entry-control" id="form_lname" type="text" name="lname" minlength="3" maxlength="20" placeholder="LAST NAME" required></span>
                  <span class="error_form" id="lname_error_message"></span>
                </p>

                <p>
                  <span>
                    <input class="entry-control" id="form_email" type="email" name="email" minlength="10" maxlength="45" placeholder="YOUR EMAIL" required>
                  </span>
                  <span class="error_form" id="email_error_message"></span>
                </p>

                <p>
                  <span><input class="entry-control" type="hidden" name="email_1" maxlength="45" placeholder="YOUR EMAIL"></span>
                </p>

                <p>
                  <span><input class="entry-control" id="form_subject" type="text" name="subject" minlength="3" maxlength="50" placeholder="SUBJECT" required></span>
                  <span class="error_form" id="subject_error_message"></span>
                </p>

                <p>
                  <span><textarea class="entry-control" id="form_content" name="content" maxlength="600" cols="40" rows="7" placeholder="YOUR MESSAGE"></textarea></span>
                  <span class="error_form" id="content_error_message"></span>
                  <small>Max 600 Characters</small>
                </p>
                <p>
                  <label>Please Fill Answer</label>
                  <br>
                  <ul class="rand_num">
                    <li><span id="id1"><?php echo mt_rand(0,9);?></span></li>
                    <li> + </li>
                    <li><span id="id2"><?php echo mt_rand(0,9);?></span>
                    <li> : </li>
                    <li>  <input class="entry-control" style="width:90px;" required="true"  name="answer" id="answer"></li>
                    <li><span id="error_num" style="color: red; font-size: 12px; font-style: italic;"></span></li>
                  </ul>
                </p>
                <div>
                  <input class="btn entry-btn-3d" type="submit" value="SEND A MESSAGE">
                  <!-- <button class="g-recaptcha btn entry-btn-3d" data-sitekey="6Le4GUAUAAAAACR07keoXqDkaEMztd-tjrv_jOGQ" data-callback='onSubmit'>SEND A MESSAGE</button> -->
                </div>

              </div>

            </form>

          </div>
          
        </div>

    </div>

    <div class="col-md-6">
      <article>
        <div class="entry-content">
          <div class="entry-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.29660004128!2d85.328488!3d27.697263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9428b8bfc466dd4e!2sLABA+IT+Training+Center+Nepal!5e0!3m2!1sen!2snp!4v1512721808728" width="600" height="560" frameborder="0" style="border:0px none;" allowfullscreen></iframe>

          </div>
        </div>

        <div class="entry-content entry-top-space">
          <h2>Contact Us</h2>
          <ul class="entry-no-list">
            <li>
              <strong>Address:</strong>
              Anamnagar - 32 Kathmandu, Nepal
            </li>
            <li>
              <strong>Email:</strong>
              info@labanepal.com
            </li>
            <li>
              <strong>Phone:</strong>
              +977-1-4102721, 4102722, 4244804
            </li>
            <li>
              <strong>Opening Hours:</strong>
              10 AM - 5 PM
            </li>
          </ul>
        </div>

        <div class="entry-content entry-top-space">
          <ul class="entry-no-list entry-list-inline entry-social">
            <li>
              <a class="facebook" href="https://www.facebook.com/LABANEPAL/" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <!-- <li>
              <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
            </li> -->
            <li>
              <a href="https://www.linkedin.com/company/laba-pvt-ltd" target="_blank"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>


      </article>
    </div>