<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
    <title>Laba Nepal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content='Information Security Response Team Nepal (NPCERT) will be hosting a Global Cyber Security Summit (GCSS) 2018 on July 27 and 28 with the theme "Building Global Alliance for Cyber Resilience". The objective of the summit is to provide a creative and productive platform for professionals in the field of Cybersecurity. The summit will empower new generation and will bring together different related stakeholders, with an eye to reflect nitty-gritty of how to transfer, diffuse and combat Cyber threats with their mitigation plans ensuring Cyberlaw putting in place.' name="description">
    
    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content='Information Security Response Team Nepal (NPCERT) will be hosting a Global Cyber Security Summit (GCSS) 2018 on July 27 and 28 with the theme "Building Global Alliance for Cyber Resilience". The objective of the summit is to provide a creative and productive platform for professionals in the field of Cybersecurity. The summit will empower new generation and will bring together different related stakeholders, with an eye to reflect nitty-gritty of how to transfer, diffuse and combat Cyber threats with their mitigation plans ensuring Cyberlaw putting in place.'>
    
    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicon -->
    <link href="<?php echo base_url();?>assets/front/images/favicon.png" rel="icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url();?>assets/front/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url();?>assets/front/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url();?>assets/front/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/front/css/style_new_custom.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url();?>assets/front/css/hero_style.css" rel="stylesheet"> -->

    <!-- Testimonial-->
    <!-- <link href="<?php echo base_url();?>assets/front/css/flexslider.css" rel="stylesheet"> -->

    <!-- J Carousel -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/jcarousel.basic.css"> -->

    <!-- Partner -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/owl.carousel.css"> -->

    <!-- SCroll -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/jquery.scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/timelinestyle.css">

    <!-- <link rel='stylesheet prefetch' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css'>
    <link rel='stylesheet prefetch' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css'>
    
    <style type="text/css">
        .owl-carousel .item {
        height: 10rem;
        background: #4DC7A0;
        padding: 1rem;
    }
    </style> -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


<body>

 <!-- Navigation -->
 <!-- Header -->
  <header id="header">
    <div class="container">

      <?php $this->load->view('template/includes/navigation');?>
      
      
    </div>
  </header><!-- #header -->

  <div class="block1 block-bg-grey block-pd-lg block-bg-overlay text-center">
    <h1><?php echo $title;?></h1>
  </div>



    


    <section class="breadcrumb" id="breadcrumb">
      <div class="breadcrumb-wrapper">
        
          <?php $this->load->view($content_view);?>

        </div>
      </div>
    </section>


    <?php $this->load->view('template/includes/newsletter');?>


    <section id="contact">
      <div class="container">
        <div class="cont-num">
          <h3>Call Now to find out more:<span> +977 01 4102721, 4102722, 4102723</span></h3>
        </div>
        <div class="accredit">
          <p>PMP® & CAPM® are registered marks of PMI.</p>
          <p>ITIL® & PRINCE2® is registered trademark of AXELOS Limited.</p>
          <p>The Swirl logo<sup>TM</sup> is a trade mark of AXELOS Limited.</p>
        </div>

        <div class="followus">
          <span>Follow Us</span>
          <ul>
            <li><a href="https://www.facebook.com/LABANEPAL/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
            <li><a href="https://www.linkedin.com/company/laba-pvt-ltd" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
          </ul>
        </div>

        <div class="accredit copyright">
          <p>Copyright <?php echo date('Y');?> <b><a href="#">Laba Pvt Ltd</a></b></p>
        </div>
      </div>
    </section>

    <a class="scrolltop" href="#">
      <span class="fa fa-angle-up"></span>
    </a> 


    <!-- Required JavaScript Libraries -->
    <script src="<?php echo base_url();?>assets/front/js/timelinemodernizr.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/jquery.min.js"></script>
    <script type="text/javascript">
      $(function() { 
        $("#news_error_message").hide();
          var error_news = false;

          $("#form_news").keyup(function() {
            check_news();
          });

          function check_news() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var newsletter = $("#form_news").val();
            if (pattern.test(newsletter) && newsletter !== '') {
              $("#news_error_message").hide();
              $("#form_news").css("box-shadow","none");
              return true;
            } else {
              $("#news_error_message").html("Invalid Email");
              $("#news_error_message").show();
              $("#form_news").css("box-shadow","0 0 0 2px #FF3636 inset");
              return false;
            }
          }

          function check_newsletter() {
            return check_news();
          }
      });
    </script>
    <script src="<?php echo base_url();?>assets/front/js/timelinemain.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/jquery.scrollbar.min.js"></script>
    <script>
      jQuery(document).ready(function(){
          jQuery('.scrollbar-inner').scrollbar();
      })
    </script>

    <!-- <script src='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js'></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          margin: 10,
          nav: true,
          loop: true,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 3
            },
            1000: {
              items: 5
            }
          }
        });
      });
    </script> -->

    <!-- <script src="<?php echo base_url();?>assets/front/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/counterup.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/easing.js"></script> -->
   

    <script src="<?php echo base_url();?>assets/front/js/jquery.mixitup.js"></script>
    <script>
      $('#Container').mixItUp();
    </script>






    <script src="<?php echo base_url();?>assets/front/js/hero_main.js"></script>
    
    <script src="<?php echo base_url();?>assets/front/js/hoverIntent.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/superfish.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/lib/stellar/stellar.min.js"></script>
    
    <!-- JCarousel
    <!-- <script src="<?php echo base_url();?>assets/front/js/jquery.jcarousel.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/jcarousel.basic.js"></script> -->
    <!-- -->
    <!-- <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script> -->

    <!-- <script src="<?php echo base_url();?>assets/front/js/jquery.flexslider-min.js"></script> 
    <script src="<?php echo base_url();?>assets/front/js/flexslider.config.js"></script>



    <script src="<?php echo base_url();?>assets/front/js/owl.carousel.min.js"></script>
    <script>
      $('#owl-works').owlCarousel({
            items : 4,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [980,5],
            itemsTablet: [768,5],
            itemsTabletSmall: [550,2],
            itemsMobile : [480,2],
  });
    </script> -->



    <script src="<?php echo base_url();?>assets/front/js/sticky.js"></script>
    <!-- <script src="lib/parallax/parallax.js"></script> -->
    <!-- <script src="lib/lockfixed/lockfixed.min.js"></script> -->
   
    <!-- Template Specisifc Custom Javascript File -->
    <script src="<?php echo base_url();?>assets/front/js/custom_new.js"></script>

    


     <!-- <script src="<?php echo base_url();?>assets/front/js/timelinemodernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script src="<?php echo base_url();?>assets/front/js/timelinemain.js"></script> -->
    
    
    <!-- <script src="contactform/contactform.js"></script> -->
    
    
  </body>
</html>