<?php

$mess_arr = array();

$mess_arr = get_custom_page_data();

?>
<!DOCTYPE html>
<html lang="en">
<head>

      

        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <title><?php echo $mess_arr['pageTitle']; ?></title>

        <?php do_action('options_style'); ?>
  <?php   $siteurl = get_option('siteurl');
     ?>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
        <link rel="stylesheet" href="<?php echo $siteurl  ?>/wp-content/plugins/smart-maintenance-countdown/templates/concepto/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $siteurl  ?>/wp-content/plugins/smart-maintenance-countdown/templates/concepto/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <!--<link rel="shortcut icon" href="assets/ico/favicon.ico">-->



    </head>

    <body>

        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="logo span4">
                    <h1><img src="<?php echo $mess_arr['upload_logo']; ?>"/></h1>
                </div>              
            </div>
        </div>

        <!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg" style="background:url(<?php echo $mess_arr['upload_background']; ?>);">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <h2><?php echo $mess_arr['companyName']; ?></h2>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="span12 subscribe">
                    <h3>Powered By</h3>
                    <a href="http://www.clubcities.com" target="_blank"/><img style="width: 250px;" src="<?php echo $siteurl  ?>/wp-content/plugins/smart-maintenance-countdown/templates/concepto/assets/img/backgrounds/clubcities.png" /> </a>                   
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="<?php echo $siteurl  ?>/wp-content/plugins/smart-maintenance-countdown/templates/concepto/assets/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo $siteurl  ?>/wp-content/plugins/smart-maintenance-countdown/templates/concepto/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $siteurl  ?>/wp-content/plugins/smart-maintenance-countdown/templates/concepto/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo $siteurl  ?>/wp-content/plugins/smart-maintenance-countdown/templates/concepto/assets/js/jquery.countdown.js"></script>
        <script src="<?php echo $siteurl  ?>/wp-content/plugins/smart-maintenance-countdown/templates/concepto/assets/js/scripts.js"></script>

    </body>
</html>

