<?php 

include_once('config.php')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- amitha-->
<meta http_equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width, initial-scale=1">
<title><?php echo $meta_tags['title']; ?></title>
<meta name="keywords" content="<?php echo $meta_tags['keywords']; ?>">
<meta name="description" content="<?php echo $meta_tags['description']; ?>">
<meta property="og:title" content="USA Secure Loans."/>
<meta property="og:type" content="company"/>
<meta property="og:url" content="https://www.usasecureloans.com"/>
<meta property="og:image" content=""/>
<meta property="og:site_name" content="usasecureloans"/>
<meta property="fb:admins" content="1301551246"/>
<?php if ($meta_tags['no-index'] ): ?> 
    <meta name="robots" content="noindex">
    <meta name="robots" content="nofollow">
    <meta name="robots" content="noarchive">
<?php endif; ?>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="<?php echo $path;?>images/usl.ico">
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $path; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $path; ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $path; ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $path; ?>css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $path; ?>css/ionicons/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet" type="text/css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php echo $path; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo $path; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $path; ?>css/responsive.css">
    <script src="<?php echo $path; ?>js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo $path; ?>" class="navbar-brand logo">
                    <img src="<?php echo $path; ?>images/logo.png">
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo (preg_match("/index.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>">HOME</a></li>
                    <li <?php echo (preg_match("/faq.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>faq">FAQ'S</a></li>
                    <li <?php echo (preg_match("/rates.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>rates">RATES</a></li>
                    <li <?php echo (preg_match("/terms.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>terms">TERMS</a></li>
                    <li <?php echo (preg_match("/privacy.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>privacy">PRIVACY</a></li>
                    <li <?php echo (preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>contact">CONTACT</a></li>
                    <li <?php echo (preg_match("/blog/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>blog">BLOG</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->