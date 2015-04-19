<?php
	/**
		* The default header file
	*/
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>5 Media Photography | Atlanta Wedding And Lifestyle Photographers</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="http://www.5mediaphotography.com/images/favicons/5mediafavicon16.ico"/>
<link rel="shortcut icon" href="http://www.5mediaphotography.com/images/favicons/5mediafavicon32.ico"/>
<link rel="shortcut icon" href="http://www.5mediaphotography.com/images/favicons/5mediafavicon48.ico"/>
<link rel="shortcut icon" href="http://www.5mediaphotography.com/images/favicons/5mediafavicon64.ico"/>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
<meta name="format-detection" content="telephone=no">
</head>
<body>
    <div id="wrapper">
    <div id="header">
    	<div id="socialicons">
        	<a href="https://www.facebook.com/5mediaphotography" target="_blank"><img src="images/socialnetwork/facebook.png" alt="facebook" height="20" width="20"/></a>
            <a href="https://twitter.com/5mediaphotos" target="_blank"><img src="images/socialnetwork/twitter.png" alt="twitter" height="20" width="20"/></a>
            <a href="https://vimeo.com/fivemedia" target="_blank"><img src="images/socialnetwork/vimeo.png" alt="vimeo" height="20" width="20"/></a>
        </div> <!--end socialicon-->
        <a href="index.html"><img style="display:block; margin-left:350px; margin-bottom:5px; margin-top:5px; "src="images/logos/5medialogo.png" alt="5 media photography logo" width="250" height="180"/></a>
         <div id="nav">
	         <?php
		        	wp_nav_menu( array(
			        	'menu' 			  ==> 'main-nav',
			        	'container_class' ==> 'multi_drop_menu',
		        	));
	        	?>
        	<!--<nav class="multi_drop_menu">
        	<ul>
	        	<?php
		        	wp_nav_menu(array(
			        	'menu' ==> 'main_nav',
			        	'container_class' ==> 'container',
			        	'menu_class' ==> 'nav',

		        	));
	        	?>
                <li><a href="index.html">HOME</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="http://5mediaphotos.com/" target="_blank">BLOG</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                wp_list_pages('title_li=');


          </ul>-->
          </nav>
      </div> <!--end nav-->
    </div> <!--end header-->