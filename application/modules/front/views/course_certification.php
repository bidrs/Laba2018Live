
        <div class="row">
          <div class="container">
            <ul class="bread">
              <li><a href="#">Certification</a></li>
              <li class="active"><a href="#"><?php echo $certification->short.' '.'Certification Course';?></a></li>
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
                <h2><?php echo $certification->short.' '.'Certification Course';?></h2>
                <p><?php echo $certification->content;?></p>

                <div class="entry-content-inner entry-top-space entry-list-style-square">
                	<h3><?php echo $certification->short; ?> Course</h3>
                	<ul>
                		<?php $x=1; foreach($courses as $co): ?>
                			<li><a href="<?php echo base_url('front/courses/'.$co->id);?>"><?php echo $co->title;?></a><?php echo (!empty($co->content)) ? ' - '.$co->content : ' ';?></li>
                		<?php $x++; endforeach ?>
                	</ul>
                </div>
              </div>
            </article>


            <article>
            	<div class="enquiry-form entry-margin-top-2-space entry-border">
                <form class="form-horizontal" action="#" method="POST">
                  <label>Enquire Now </label>
                  <label class="form-label"> * Required Field</label>
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
                      <label class="col-md-3 control-label">Course/Certification</label>
                      <div class="col-md-9">
                        <textarea placeholder="Course/Certification *" class="form-control" cols="9"></textarea>
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
            </article>
          </div>

          