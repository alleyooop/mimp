<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
				
			<div class="navbar navbar-inverse">
				<div class="container">
          
          <div class="row" id="branding">
              <nav class="">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-mobile" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">Medical Imaging &amp; Medical Physics</a>
                </div>

                <!-- mobile only nav -->
                <ul class="nav navbar-nav visible-xs collapsed collapse" id="navbar-mobile" style="height: 0px;">
                  <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
                  <li><a href="/patient-information/">Patient Information</a></li>
                  <li><a href="/departments-services/">Departments &amp; Services</a></li>
                  <li><a href="/contact/">Contact us</a></li>
                </ul>
                <!-- mobile only nav -->
              </nav>


              <ul class="nav navbar-nav navbar-right hidden-xs">
              <a href="<?php echo home_url( '/' ); ?>">
                <img class="navbar-logo" alt="logo for the Sheffield Teaching Hospital NHS Foundation Trust" title="Sheffield Teaching Hospitals NHS Foundation Trust" src="<?php echo content_url('/themes/wp-mimp/images/logo-white.png'); ?>">
                </a>
            </ul>
          </div>
          
          <div class="row" id="main-nav">
            <div class="hidden-xs">
              <?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

              <?php //if(of_get_option('search_bar', '1')) {?>
              <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                <div class="form-group">
                  <input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>">
                </div>
              </form>
              <?php //} ?>
            </div>

          </div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
		
		<div class="container">
