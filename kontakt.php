<!DOCTYPE html>
<?php
$pageName="Kontakt"; 
$category=''; 
$menuItem="kontakt"; 
$product='';
$companyName="Heintel";
?>
<html class="no-js">
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
    
    
	<title> <?php echo $pageName." :: ".strtoupper($companyName);?> </title>
	<meta name="description" content=" HEINTEL, Srbija, Medicina, Beograd, Mamasafe ">
    
    <!-- /// Favicons ////////  -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="favicon.png">


	<!-- /// Template CSS ////////  -->
    <link rel="stylesheet" href="_layout/css/base.css">
    <link rel="stylesheet" href="_layout/css/grid.css">
    <link rel="stylesheet" href="_layout/css/elements.css">
    <link rel="stylesheet" href="_layout/css/layout.css">
	<link rel="stylesheet" href="_layout/css/wide.css" name="layout">
	
	<link rel="stylesheet" href="_layout/js/revolutionslider/css/settings.css">
    <link rel="stylesheet" href="_layout/js/revolutionslider/css/custom.css">
    <link rel="stylesheet" href="_layout/js/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="_layout/js/magnificpopup/magnific-popup.css">
    
    <!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    
    <!-- /// IconFontCustom ////////  -->
    <link rel="stylesheet" href="_layout/css/iconfontcustom/iconfontcustom.css">
    
    <!-- /// FontAwesome Icons 4.0.3 ////////  -->
	<link rel="stylesheet" href="_layout/css/fontawesome/font-awesome.min.css">
    
    <!-- /// Cross-browser CSS3 animations ////////  -->
    <link rel="stylesheet" href="_layout/css/animate/animate.min.css">


    <!-- /// Modernizr ////////  -->
    <script src="_layout/js/modernizr-2.6.2.min.js"></script>
 

	    <!-- /// jQuery ////////  -->
	<script src="_layout/js/jquery-2.1.0.min.js"></script>
	    <!-- /// bxSlider ////////  -->
	<script src="_layout/js/bxslider/jquery.bxslider.min.js"></script>
	<!-- /// flexslider ////////  -->
	<script src="_layout/js/jquery.flexslider.js"></script>
	<link rel="stylesheet" type="text/css" href="_layout/css/flex/flexslider.css">
	<link rel="stylesheet" type="text/css" href="_layout/css/flex/flexslider.less">
	<!-- /// end flexslider ////////  -->
			<!-- /// product gallery CSS ////////  -->
	<link rel="stylesheet" href="_layout/css/gallery.css">
</head>
<body ng-app="myApp">

	<!--[if lte IE 8]>
        <p class="browser-update">
        	You are using an <strong>outdated</strong> browser. Please 
        	<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade your browser</a> 
            to improve your experience.
		</p>
    <![endif]-->
 
	<div id="wrap">
	<?php include 'template/h.php';?><!--header-->
		<div id="content">
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			
            <div id="page-header">
            	
                <div class="row">
                	<div class="span12">
                    	
                        <h2><?php echo $pageName;?></h2>
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
                
            </div><!-- end #page-header -->
            
            <div class="row">
            	<div class="span3">
                	
                    <div class="icon-box-1">
                               <h3>Budimo u kontaktu</h3>                                      	                     
<p>Na ovom mestu možete pronaći kontakt podatke naših stručnih saradnika, koji će Vam sa zadovoljstvom pomoći savetom, svojim iskustvom, stručno-tehničkim podacima i ostalim informacijama kojima raspolažu, a Vama će biti od koristi.</p>
                    
                    <address>
					<strong>Mi se nalazimo:</strong><br>
                        Partizanske avijacije 12/9<br>
                        11070 Beograd<br>
						Srbija<br>
                        <br>
                        Tel/fax 011-21-66-313<br>
                        mail office@heintel.rs
                    </address>
                </div><!-- end .icon-box-1 -->  
                </div><!-- end .span3 -->
                <div class="span9">
                
                	<h3>Pošaljite nam poruku</h3>
                    
                    <br>
                	
                    <form class="fixed" id="contact-form"  name="contact-form" method="post" action="/_layout/php/send.php"> 
                        <fieldset>
                            
                            <div id="formstatus"></div>
                         	
                            <div class="row">
                            	<div class="span3">
                            		
                                    <input id="name" type="text" name="name" value="" placeholder="Ime">
								
                                </div><!-- edd .span3 --> 
                            	<div class="span3">
                            	
                                	<input id="email" type="text" name="email" value="" placeholder="E-mail">
                            	
                                </div><!-- edd .span3 --> 
                                <div class="span3">
                            	
                                	<input id="subject" type="text" name="subject" value="" placeholder="Tematika" >
                            	
                                </div><!-- edd .span3 --> 
                            </div><!-- end .row -->
                            
                            <textarea class="span9" id="message" name="message" rows="10" cols="25" placeholder="Vaša poruka"></textarea>
                            
                            <input class="btn btn-green-dark float-right" id="submit" type="submit" name="submit" value="Pošalji">
                               
                    	</fieldset>
                    </form>
                    
                </div><!-- end .span9 -->
            </div><!-- end .row -->
            <div class="row">
            	<div class="span4">
                    <address>
                    	<strong>Direktor</strong><br>
						Knežević Veselin<br>
                        mail veselin.knezevic@heintel.rs<br>
                        tel 064-31-58-798<br>
                    </address>
                </div><!-- end .span4 -->
				<div class="span4">
                    <address>
                    	<strong>Finansijski direktor</strong><br>
                        Grujičić Ivan<br>
                        mail ivan.grujicic@heintel.rs<br>
                        tel 063-800-22-61<br>
                    </address>
                </div><!-- end .span4 -->
				<div class="span4">
                    <address>
                    	<strong>Tehnički direktor</strong><br>
                        Udovičić Sanja<br>
                        mail sanja.udovicic@heintel.rs<br>
                        tel 060-05-54-926<br>
                    </address>
                </div><!-- end .span4 -->
            </div><!-- end .row -->
            <div class="row">
            	<div class="span12">
                	
                    <!--div class="social-media text-center" style="margin-bottom:-20px;">
                            
                        <a href="#" class="facebook-icon social-icon">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter-icon social-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="pinterest-icon social-icon">
                            <i class="fa fa-pinterest"></i>
                        </a>
                        <a href="#" class="googleplus-icon social-icon">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        
                    </div-->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
            <!--div class="google-map" style="margin-bottom:-80px;">
    
                <div class="map" id="google-map"></div>
                
                <div class="overlay top"></div>
                <div class="overlay bottom"></div>
                <div class="overlay left"></div>
                <div class="overlay right"></div>
                
            </div><!-- end .google-map -->
			<div class="google-map" style="margin-bottom:-80px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.987818820483!2d20.387129199999997!3d44.82181279999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6588952b2bc9%3A0x462c3326d7fada64!2zMTIg0J_QsNGA0YLQuNC30LDQvdGB0LrQtSDQsNCy0LjRmNCw0YbQuNGY0LUsINCR0LXQvtCz0YDQsNC0IDExMDAw!5e0!3m2!1ssr!2srs!4v1414490602725" width="1349" height="450" frameborder="0" style="border:0"></iframe>

				<div class="overlay top"></div>
                <div class="overlay bottom"></div>
                <div class="overlay left"></div>
		                <div class="overlay right"></div>
			            </div><!-- end .google-map -->
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<br><br><br><br>
		</div><!-- end #content -->
		<div id="footer">
			<footer></footer>
		</div><!-- end #footer -->
	</div><!-- end #wrap -->

			<!-- /// AngularJS ////////  -->
	<script src="_layout/js/ng/angular.min.js"></script>	
	<script src="_layout/js/ng/app.js"></script>
	<!--////////////////////////////////////////-->
    <!-- /// jQuery ////////  -->
	<script src="_layout/js/jquery-2.1.0.min.js"></script>
  
    <!-- /// ViewPort ////////  -->
	<script src="_layout/js/viewport/jquery.viewport.js"></script>
    
    <!-- /// Easing ////////  -->
	<script src="_layout/js/easing/jquery.easing.1.3.js"></script>

    <!-- /// SimplePlaceholder ////////  -->
	<script src="_layout/js/simpleplaceholder/jquery.simpleplaceholder.js"></script>

    <!-- /// Fitvids ////////  -->
    <script src="_layout/js/fitvids/jquery.fitvids.js"></script>
    
    <!-- /// Superfish Menu ////////  -->
	<script src="_layout/js/superfish/hoverIntent.js"></script>
    <script src="_layout/js/superfish/superfish.js"></script>
    
    <!-- /// Revolution Slider ////////  -->
    <script src="_layout/js/revolutionslider/pluginsources/jquery.themepunch.plugins.min.js"></script>
    <script src="_layout/js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- /// bxSlider ////////  -->
	<script src="_layout/js/bxslider/jquery.bxslider.min.js"></script>
    
   	<!-- /// Magnific Popup ////////  -->
	<script src="_layout/js/magnificpopup/jquery.magnific-popup.min.js"></script>
    
   
    <!-- /// Parallax ////////  -->
	<script src="_layout/js/parallax/jquery.parallax.min.js"></script>

	<!-- /// EasyPieChart ////////  -->
	<script src="_layout/js/easypiechart/jquery.easypiechart.min.js"></script>
    
    <!-- /// Easy Tabs ////////  -->
    <script src="_layout/js/easytabs/jquery.easytabs.min.js"></script>	

    <!-- /// Form validate ////////  -->
    <script src="_layout/js/jqueryvalidate/jquery.validate.min.js"></script>
    
	<!-- /// Form submit ////////  -->
    <script src="_layout/js/jqueryform/jquery.form.min.js"></script>
    
    <!-- /// gMap ////////  -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="_layout/js/gmap/jquery.gmap.min.js"></script>

	<!-- /// Custom JS ////////  -->
	<script src="_layout/js/plugins.js"></script>	
	<script src="_layout/js/scripts.js"></script>
</body>
</html>
