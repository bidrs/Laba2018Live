<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laba Nepal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    
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

    <!-- <link rel='stylesheet prefetch' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css'>
    <link rel='stylesheet prefetch' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css'>
    
    </style> -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
      function onSubmit(token) {
        document.getElementById("i-recaptcha").submit();
      }
    </script>


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
    <script src="<?php echo base_url();?>assets/front/js/jquery.min.js"></script>
     <!-- CONTACT FORM VALIDATION -->
    <script type="text/javascript">
      $(function() {

        $("#fname_error_message").hide();
        $("#lname_error_message").hide();
        $("#email_error_message").hide();
        $("#subject_error_message").hide();
        
        var error_fname = false;
        var error_lname = false;
        var error_email = false;
        var error_subject = false;

        $("#form_fname").keyup(function() {
          check_fname();
        });

        $("#form_lname").keyup(function() {
          check_lname();
        });

        $("#form_email").focusout(function() {
          check_email();
        });

        $("#form_subject").keyup(function() {
          check_subject();
        });

        // $("#form_content").focusout(function() {
        //   check_content();
        // });


        function check_fname() {
          var pattern = /^[a-zA-Z]*$/;
          var fname = $("#form_fname").val();
          if (pattern.test(fname) && fname !== '') {
            $("#fname_error_message").hide();
            $("#form_fname").css("border","none");
          } else {
            $("#fname_error_message").html("Should contain only Characters");
            $("#fname_error_message").show();
            $("#form_fname").css("border","1px solid #FF3636");
            error_fname = true;
          }
        }

        function check_lname() {
          var pattern = /^[a-zA-Z]*$/;
          var lname = $("#form_lname").val();
          if (pattern.test(lname) && lname !== '') {
            $("#lname_error_message").hide();
            $("#form_lname").css("border","none");
          } else {
            $("#lname_error_message").html("Should contain only Characters");
            $("#lname_error_message").show();
            $("#form_lname").css("border","1px solid #FF3636");
            error_lname = true;
          }
        }

        function check_email() {
          var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          var email = $("#form_email").val();
          if (pattern.test(email) && email !== '') {
            $("#email_error_message").hide();
            $("#form_email").css("border","none");
          } else {
            $("#email_error_message").html("Invalid Email");
            $("#email_error_message").show();
            $("#form_email").css("border","1px solid #FF3636");
            error_email = true;
          }
        }

        function check_subject() {
          var pattern = /^[a-zA-Z0-9 ]*$/;
          var subject = $("#form_subject").val();
          if (pattern.test(subject) && subject !== '') {
            $("#subject_error_message").hide();
            $("#form_subject").css("border","none");
          } else {
            $("#subject_error_message").html("Should contain only Text and Number");
            $("#subject_error_message").show();
            $("#form_subject").css("border","1px solid #FF3636");
            error_subject = true;
          }
        }                             


        // function check_content() {
        //   var pattern = /^[a-zA-Z0-9 ]*$/;
        //   var content = $("#form_content").val();
        //   if (pattern.test(content) && content !== '') {
        //     $("#content_error_message").hide();
        //     $("#form_content").css("border","none");
        //   } else {
        //     $("#content_error_message").html("Should contain only Text and Number");
        //     $("#content_error_message").show();
        //     $("#form_content").css("border","1px solid #FF3636");
        //     error_content = true;
        //   }
        // }

      } );

    </script>

    <script type="text/javascript">

     function checknum() {
        a = document.getElementById("id1").innerHTML;
        b = document.getElementById('id2').innerHTML;
        c = parseInt(a) +  parseInt(b);
        d = document.getElementById('answer').value;

        if (d != c)
        {
          document.getElementById('error_num').innerHTML="Invalid Number. Please Add Two Number Accordingly";
          return false;
        }
     }

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
    
    <!-- <script src="contactform/contactform.js"></script> -->


   
    
    
  </body>
</html>