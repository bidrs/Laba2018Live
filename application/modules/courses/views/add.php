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
        <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p> -->

        <div class="bor">
          <form action="<?php echo base_url('courses/vendor_upload');?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s12">
                <input id="list-title" type="text" class="validate" name="vendor" maxlength="60" required>
                <label for="list-title">Vendor Technology Name</label>
              </div>
              <div class="input-field col s12">
                <input id="list-name" type="text" class="validate" name="short" maxlength="30" required>
                <label for="list-name">Abbreviation Name</label>
              </div>
            </div>
            
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file" name="image">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload one or more files">
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