<div class="subscrip bg-news-custom" id="subscrip">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="subscrip-inner">
          <div class="info-left">
            <div class="icon">
              <img src="<?php echo base_url();?>assets/front/images/test/message.png">
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
            <form class="newsletter-form" onsubmit="return check_newsletter()" method="POST" action="<?php echo base_url('front/newsletter');?>">
              <div class="input-group">
                <input class="entry-control entry-control1" name="email" id="form_news" placeholder="Enter your email" type="email">
                <span class="error_form_news" id="news_error_message"></span>
                <input type="email" name="email_n" class="entry-hide">
                <input type="hidden" name="url" value="<?php echo $this->uri->segment(2);?>">
                <span class="input-group-btn">
                  <button class="btn entry-btn-3d entry-btn-radius" type="submit">Submit</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if(isset($_SESSION['success'])) { ?>
  <script type="text/javascript">
    alert("<?php echo $_SESSION['success']; ?>");
  </script>
<?php }  unset($_SESSION['success']); ?> 