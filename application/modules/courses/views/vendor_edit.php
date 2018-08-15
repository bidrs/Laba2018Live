<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> <?php echo $title;?></a>
            </li>
            <li class="page-back"><a href="<?php echo $this->agent->referrer(); ?>"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <h2><?php echo $title;?></h2>
        <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p> -->

        <div class="bor">
          <form action="<?php echo base_url('courses/vendor_edited/'.$content->id);?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s12">
                <input id="list-vendor" type="text" class="validate" name="vendor" maxlength="60" required value="<?php echo $content->vendor ;?>">
                <label for="list-vendor">Vendor Technology Name</label>
              </div>
              <div class="input-field col s12">
                <input id="list-abbrev" type="text" class="validate" name="short" maxlength="30" required value="<?php echo $content->short ;?>">
                <label for="list-abbrev">Abbreviation Name</label>
              </div>
            </div>

            <div class="row">
              <div class="col s4">
                <label for="list-image">Current Image Logo</label>
                <br>
                <img src="<?php echo base_url('assets/cpanel/images/vendor/'.$content->image);?>" alt="<?php echo $content->short ;?>" title="<?php echo $content->short ;?>" class="img-border">
              </div>
            </div>
            
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file" name="image">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload Image Here">
              </div>
            </div>

            <?php if(isset($_SESSION['error'])) { echo $_SESSION['error']; unset($_SESSION['error']);} ?>
           
            <div class="row">
              <div class="input-field col s12">
                <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
              </div>
            </div>
          </form>
        </div>
        
    </div>
</div>