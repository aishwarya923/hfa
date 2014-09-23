<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Heart Felt Arts | Engage</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">     

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/page_contact.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head> 

<body>
<!--=== Style Switcher ===-->    
<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
<div class="style-switcher animated fadeInRight">
    <div class="theme-close"><i class="icon-close"></i></div>
    <div class="theme-heading">Theme Colors</div>
    <ul class="list-unstyled">
        <li class="theme-default theme-active" data-style="default" data-header="light"></li>
        <li class="theme-blue" data-style="blue" data-header="light"></li>
        <li class="theme-orange" data-style="orange" data-header="light"></li>
        <li class="theme-red" data-style="red" data-header="light"></li>
        <li class="theme-light last" data-style="light" data-header="light"></li>

        <li class="theme-purple" data-style="purple" data-header="light"></li>
        <li class="theme-aqua" data-style="aqua" data-header="light"></li>
        <li class="theme-brown" data-style="brown" data-header="light"></li>
        <li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
        <li class="theme-light-green last" data-style="light-green" data-header="light"></li>
    </ul>
    <div style="margin-bottom:18px;"></div>
    <div class="theme-heading">Layouts</div>
    <div class="text-center">
        <a href="javascript:void(0);" class="btn-u btn-u-green btn-block active-switcher-btn wide-layout-btn">Wide</a>
        <a href="javascript:void(0);" class="btn-u btn-u-green btn-block boxed-layout-btn">Boxed</a>
    </div>
</div><!--/style-switcher-->
<!--=== End Style Switcher ===-->    

<div class="wrapper">

    <?php
        function spamcheck($field) {
          // Sanitize e-mail address
          $field=filter_var($field, FILTER_SANITIZE_EMAIL);
          // Validate e-mail address
          if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
          } else {
            return FALSE;
          }
        }
    ?>   

    <!--=== Header ===-->    
    <div class="header">
        <!-- Topbar -->
        <div class="topbar">
            
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img id="logo-header" src="assets/img/logo.png" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Pages -->                        
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Product Catalog
                            </a>
                            <ul class="dropdown-menu">
                                <!-- About Pages -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Jewellery</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="wrap-bracelets.html">Wrap Bracelets</a></li>
                                        <li><a href="other-jewellery.html">Other Jewellery</a></li>
                                    </ul>                                
                                </li>

                                <li>
                                    <a href="origami-fabric-wallet.html">Origami Fabric Wallets</a>
                                </li>

                                <li>
                                    <a href="murals.html">Handpainted Murals</a>
                                </li>

                                <li>
                                    <a href="fabric-pillows.html">Fabric Pillows</a>
                                </li>
                                <!-- End About Pages -->
                            </ul>
                        </li>
                        <!-- End Pages -->

                        <!-- Features -->
                        <li>
                            <a href="about.html">
                                About Us
                            </a>
                        </li>
                        <!-- End Features -->

                        <!-- Portfolio -->
                        <li>
                            <a href="artisans.html">
                                Meet the Artisans
                            </a>
                        </li>
                        <!-- Ens Portfolio -->

                        <!-- Blog -->
                        <li>
                            <a href="engage.php">
                                Engage
                            </a>
                        </li>
                        <!-- End Blog -->                  

                        <!-- End Search Block -->
                    </ul>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    <!--=== End Header ===-->    

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Engage</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Engage</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">     
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <h3>
                    To learn more about Heartfelt Arts or to engage with our mentorship program feel free to contact us through this form:
                </h3>
                <?php
                    if (!isset($_POST["submit"])) {
                ?>
                  
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <label>Name</label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-7 col-md-offset-0">
                            <input type="text" class="form-control" name="username">
                        </div>                
                    </div>
                    
                    <label>Email <span class="color-red">*</span></label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-7 col-md-offset-0">
                            <input type="text" class="form-control" name="from">
                        </div>                
                    </div>
                    
                    <label>Message</label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-11 col-md-offset-0">
                            <textarea rows="8" class="form-control" name="message"></textarea>
                        </div>                
                    </div>
                    
                    <p><button type="submit" class="btn-u" name="submit">Send Message</button></p>
                </form>
                
                <?php 
                    } 
                    else {  // the user has submitted the form
                      // Check if the "from" input field is filled out
                        if (isset($_POST["from"])) {
                            // Check if "from" email address is valid
                            $mailcheck = spamcheck($_POST["from"]);
                            if ($mailcheck==FALSE) {
                              echo "Please validate your Email ID";
                            } 
                            else {
                              $username = $_POST["username"]; // sender
                              $from = $_POST["from"]; // sender
                              $subject = "New Message from HFA user: ";
                              $message = $_POST["message"] . "\n-- end of message --";
                              // message lines should not exceed 70 characters (PHP rule), so wrap it
                              $message = wordwrap($message, 70);
                              // send mail
                              //mail("information@heartfeltarts.com",$subject,$message,"From: $from\n");
                              mail("aishwarya923@gmail.com",$subject,$message,"From: $from\n");
                              echo "Thank you for contacting us";
                            }
                        }
                    }
                ?>
            </div><!--/col-md-9-->
        
        </div><!--/row-->        
    </div><!--/container-->     
    <!--=== End Content Part ===-->

    <!--=== Footer ===-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline">
                    <h2>About Hearfelt Arts</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40">We support  women artisans and women run cooperatives to create sustainable business models to market and sell  their products regionally, nationally and even internationally. Women graduates from AMMACHI Labs unique computerized training now have an opportunity to create a sustainable livelihood for their families and communities. <a href="about.html">Learn more!</a></p>    
                    <!-- End About -->

                </div><!--/col-md-4-->  
             
                <div class="col-md-4 md-margin-bottom-40">
                                 
                </div><!--/col-md-4-->

                <div class="col-md-4">
                    <!-- Contact Us -->
                    <div class="headline">
                    <h2>Engage! Contact Us</h2></div>
                    <address class="md-margin-bottom-40">
                    Have a question? Want a product?: <A HREF="&#109;&#97;&#105;&#108;&#116;&#111;&#58;%69%6E%66%6F%72%6D%61%74%69%6F%6E%40%68%65%61%72%74%66%65%6C%74%61%72%74%73%2E%63%6F%6D">Email Us!</A>
                    </address>
                    <!-- End Contact Us -->

                    <!-- Social Links -->
            <div class="headline"><h2>Stay Connected</h2></div>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/ammachi.labs" data-original-title="Facebook" class="social_facebook"></a></li>
                        <li><a href="https://twitter.com/ammachilabs" data-original-title="Twitter" class="social_twitter"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                        <li><a href="http://www.pinterest.com/ammachilabs/heartfelt-arts/" data-original-title="Pinterest" class="social_pintrest"></a></li>
                        <li><a href="https://vimeo.com/user32421936" data-original-title="Vimeo" class="social_vimeo"></a></li>
                    </ul>
                    <!-- End Social Links -->
                </div><!--/col-md-4-->
            </div>
        </div>
    </div><!--/footer-->
    <!--=== End Footer ===-->

    <!--=== Copyright ===-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">                   
                    <p>
                        2014 &copy; Heartfelt Arts. ALL Rights Reserved.
                     
                </div>
            </div>
        </div>
    </div><!--/copyright-->
    <!--=== End Copyright ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
<![endif]-->

</body>
</html> 