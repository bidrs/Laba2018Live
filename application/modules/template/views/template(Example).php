<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laba Nepal | Dashboard</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/cpanel/images/fav.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cpanel/css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cpanel/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cpanel/css/mob.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cpanel/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cpanel/css/materialize.css" />
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/cpanel/css/materialnote.css" /> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cpanel/text/ui/trumbowyg.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cpanel/css/custom.css">
   <!--  <script src="<?php echo base_url();?>assets/cpanel/ck/ckeditor.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/ck/style.js"></script> -->





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="<?php echo base_url('dashboard');?>" class="logo"><img src="<?php echo base_url();?>assets/cpanel/images/logo3.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="<?php echo base_url();?>assets/cpanel/images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li><a href="listing-all.html" class="waves-effect"><i class="fa fa-list-ul" aria-hidden="true"></i> Listings</a>
                    </li>
                    <li><a href="hotel-all.html" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Hotels</a>
                    </li>
                    <li><a href="package-all.html" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                    </li>
                    <li><a href="event-all.html" class="waves-effect"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Events</a>
                    </li>
                    <li><a href="offers.html" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                    </li>
                    <li><a href="user-add.html" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
              <!--== USER INFO ==-->
              <div class="sb2-12">
                  <ul>
                      <li><img src="<?php echo base_url();?>assets/cpanel/images/placeholder.jpg" alt="">
                      </li>
                      <li>
                          <h5>Admin Panel <span> Kathmandu, Nepal</span></h5>
                      </li>
                      <li></li>
                  </ul>
              </div>
              <!--== LEFT MENU ==-->
              <div class="sb2-13">
                  <ul class="collapsible" data-collapsible="accordion">
                      <li><a href="<?php echo base_url('dashboard');?>" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                      </li>
                      <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Courses & Certifications</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="<?php echo base_url('courses/lists');?>">All listing Vendor Technology</a>
                                  </li>
                                  <li><a href="<?php echo base_url('courses/cat_lists');?>">All listing Categories</a></li>
                                  <li><a href="<?php echo base_url('courses/vendor_cerfication');?>">All listing Certification</a></li>
                                  <li><a href="<?php echo base_url('courses');?>">All listing Course</a></li>
                              </ul>
                          </div>
                      </li>
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Listing</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="listing-all.html">All listing</a>
                                  </li>
                                  <li><a href="listing-add.html">Add New listing</a>
                                  </li>
                                  <li><a href="listing-cat-all.html">All listing Categories</a>
                                  </li>
                                  <li><a href="listing-cat-add.html">Add listing Categories</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="user-all.html">All Users</a>
                                  </li>
                                  <li><a href="user-add.html">Add New user</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="package-all.html">All Packages</a>
                                  </li>
                                  <li><a href="package-add.html">Add New Package</a>
                                  </li>
                                  <li><a href="package-cat-all.html">All Package Categories</a>
                                  </li>
                                  <li><a href="package-cat-add.html">Add Package Categories</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Hotels</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="hotel-all.html">All Hotels</a>
                                  </li>
                                  <li><a href="hotel-add.html">Add New Hotel</a>
                                  </li>
                                  <li><a href="hotel-room-type-all.html">Room Type</a>
                                  </li>
                                  <li><a href="hotel-room-type-add.html">Add Room Type</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i> Sight Seeings</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="sight-see-all.html">All Sight Seeings</a>
                                  </li>
                                  <li><a href="sight-see-add.html">Add New Sight Seeing</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar-o" aria-hidden="true"></i> Events</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="event-all.html">All Events</a>
                                  </li>
                                  <li><a href="event-add.html">Add New Event</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-braille" aria-hidden="true"></i> Ui-Kits</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="ui-form.html">ui-form</a>
                                  </li>
                                  <li><a href="ui-kit.html">ui-kit</a>
                                  </li>
                                  <li><a href="ui-table.html">ui-table</a>
                                  </li>
                                  <li><a href="ui-pre-load.html">ui-pre-load</a>
                                  </li>
                                  <li><a href="ui-tab.html">ui-tab</a>
                                  </li>
                                  <li><a href="ui-icons.html">ui-icons</a>
                                  </li>
                                  <li><a href="ui-collapsible.html">ui-collapsible</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-usd" aria-hidden="true"></i> Discounts</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="discount.html">All Discounts</a>
                                  </li>
                                  <li><a href="discount-add.html">Add New Discounts</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="offers.html">All Offers</a>
                                  </li>
                                  <li><a href="offers-add.html">Add New Offers</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                     <!--  <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Booking & Enquiry</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="hotel-booking-all.html">Hotel</a>
                                  </li>
                                  <li><a href="package-booking-all.html">Package</a>
                                  </li>
                                  <li><a href="sight-see-booking-all.html">Sight Seeings</a>
                                  </li>
                                  <li><a href="event-booking-all.html">Events</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articals</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="blog-all.html">All Blogs</a>
                                  </li>
                                  <li><a href="blog-add.html">Add Blog</a>
                                  </li>
                              </ul>
                          </div>
                      </li> -->
                      <!-- <li><a href="social-media.html"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
                      </li> -->
                      <!-- <li><a href="login.html" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                      </li> -->
                  </ul>
              </div>
            </div>

            
            <?php $this->load->view($content_view);?>

            
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

 <!--======== SCRIPT FILES =========-->
    <script src="<?php echo base_url();?>assets/cpanel/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/js/materialize.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/js/materialnote.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/js/multiform.js"></script>
    <script>
                                  
      $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
      });
              
    </script>


    <script src="<?php echo base_url();?>assets/cpanel/text/trumbowyg.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/text/plugins/upload/trumbowyg.upload.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/text/plugins/base64/trumbowyg.base64.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/text/plugins/table/trumbowyg.table.min.js"></script>


    <script type="text/javascript">
      $('.area').trumbowyg({

        btnsDef: {
            // Create a new dropdown
            image: {
                dropdown: ['insertImage', 'base64'],
                ico: 'insertImage'
            }
        },
        // Redefine the button pane
        btns: [
            ['viewHTML'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            // ['image'], // Our fresh created dropdown
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            // ['horizontalRule'],
            ['removeformat'],
            // ['fullscreen']
            // ['table']
        ]

        
    });

      $('#area').trumbowyg();
    </script>


    
</body>

</html>