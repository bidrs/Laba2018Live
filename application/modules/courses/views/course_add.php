<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> <?php echo $title;?></a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <h2><?php echo $title;?></h2>

        <div class="bor">
          <form id="multiphase" action="<?php echo base_url('courses/course_upload');?>">
            <div class="pull-right">
              <h6 id="status">Step 1 of 2</h6>
            </div>
            <!-- One "tab" for each step in the form: -->
            <div id="tab1">
              <h3>Course Details: <small id="asterix">* (Mandatory)</small></h3>
              <div class="row">
                <div class="input-field col s12">
                  <input id="c_title" type="text" class="validate" name="title" maxlength="80" required placeholder="eg: Java SE 7 Certified Programmers">
                  <label for="c_title">Course Title <small id="asterix">*</small></label>
                </div>
                <div class="input-field col s12">
                  <textarea id="textarea2" class="materialize-textarea" name="content"></textarea>
                  <label for="textarea2">Course Description <small id="asterix">*</small></label>
                </div>
              </div>


              <div class="row">
                <div class="input-field col s4">
                  <select name="vendor">
                    <option value="" disabled selected>Choose Vendor Technology</option>

                    <?php $x=1; foreach($v_list as $v): ?>
                      <option value="<?php echo $v->id;?>"><?php echo $v->short;?></option>
                    <?php $x++; endforeach ?>

                  </select>
                  <label>Choose Vendor Technology</label>
                </div>

                <div class="input-field col s4">
                  <select name="certification">
                    <option value="" disabled selected>Choose Certification</option>

                    <?php $y=1; foreach($ce_list as $c): ?>
                      <option value="<?php echo $c->id;?>"><?php echo $c->title.' '.'('.$c->short.')';?></option>
                    <?php $y++; endforeach ?>

                  </select>
                  <label>Choose Certification</label>
                </div>

                <div class="input-field col s4">
                  <select name="sector">
                    <option value="" disabled selected>Choose Category</option>

                    <?php $z=1; foreach($s_list as $s): ?>
                      <option value="<?php echo $s->id;?>"><?php echo $s->sector;?></option>
                    <?php $z++; endforeach ?>

                  </select>
                  <label>Choose Category</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s4">
                  <input id="c_time" type="text" class="validate" name="duration" maxlength="35" required placeholder="eg: 20 Hours">
                  <label for="c_time">Course Duration <small>(Hours)</small></label>
                </div>

                <div class="input-field col s4">
                  <select name="level">
                    <option value="" disabled selected>Choose Level</option>
                    <option value="1">Beginner</option>
                    <option value="2">Intermediate</option>
                    <option value="3">Expert</option>
                  </select>
                  <label>Choose Level</label>
                </div>

                <div class="input-field col s4">
                  <input id="c_exam" type="text" class="validate" name="exam" maxlength="25">
                  <label>Exam</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s4 input-textarea">
                  <label>Who Can Benefits?</label>
                  <textarea class="area" name="benefit"></textarea>
                </div>

                <div class="input-field col s4 input-textarea">
                  <label>Objectives</label>
                  <textarea class="area" name="objective"></textarea>
                </div>

                <div class="input-field col s4 input-textarea">
                  <label>Prerequisites</label>
                  <textarea class="area" name="pre"></textarea>
                </div>
              </div>

              <button type="button" id="nextBtn" onclick="processPhase1()" class="waves-effect waves-light btn-large" value="Next">Next</button>
            </div>



            <div id="tab2">
              <h3>Course Outlines / Chapters:</h3>
              <div class="row">
                <div class="input-field col s2">
                  <button type="button" id="addBtn" class="waves-effect waves-light btn-large" value="Add More">Add More</button>
                </div>
              </div>
              <div class="row">
                <div id="row_d">
                  <div id="row_dd">
                    <div class="input-field col s3 block-border">
                      <input id="list" type="text" class="validate" name="list[]" maxlength="100">
                      <label>Module / Chapter / Title</label>
                      <br>
                      <div>
                        <label class="pos_top">List / Content</label>
                        <textarea class="area" name="sub_list[]"></textarea>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </div>

              <button type="button" id="nextBtn" onclick="processPhase()" class="waves-effect waves-light btn-large" value="Previous">Previous</button>
              <button type="button" id="submitBtn" onclick="processPhaseSubmit()" class="waves-effect waves-light btn-large" value="Submit">Submit</button>
            </div>
          </form>

        </div>
        
    </div>
</div>