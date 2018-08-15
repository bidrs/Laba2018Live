<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laba Nepal | Login</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form>
                <img src="<?php echo base_url();?>assets/cpanel/images/logo2.png" alt="logo" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" class="validate">
                        <label for="first_name1">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate">
                        <label for="last_name">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a class="waves-effect waves-light btn-large btn-log-in" href="<?php echo base_url('dashboard');?>">Login</a>
                    </div>
                </div>
                <a href="<?php echo base_url('laba_cpanel/forget');?>" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="<?php echo base_url();?>assets/cpanel/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/js/materialize.min.js"></script>
    <script src="<?php echo base_url();?>assets/cpanel/js/custom.js"></script>
</body>

</html>