<!DOCTYPE html>
<?php
$pageName="Portfolio"; 
$category=''; 
$menuItem="portfolio"; 
$product='';
$companyName="Heintel";
$categorySteotskopi="stetoskopi";
$categoryDrenazniSistem="drenazni-sistem";
$categorySeciva="seciva";
$categoryInfuzija="infuzija";
$categoryMaske="maske";
$categoryBiopsija="biopsija";
$categoryRukavice="rukavice";
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
            	<div class="span4">
                	                    

                    <div class="blog-post">	
                        <h4>
                            <a href="<?php echo $categorySteotskopi.'.php';?>" >Stetoskopi</a>
                        </h4>                        
                        <div class="blog-post-preview fixed">	
                            <img src="_content/portfolio/stetoskop1.png" alt="">                            
                        </div><!-- end .blog-post-preview -->
                        <p>Odlične akustičke osobine stetoskopu daje veoma osetljiva membrana...</p>
                        <p class="text-right">
                        	<a class="btn" href="<?php echo $categorySteotskopi.'.php';?>">Pročitajte više</a>
                        </p>   
                    </div><!-- end .blog-post -->
                    
                    <div class="divider single-line"></div>
                    
                    <div class="blog-post">	
                        <h4>
                            <a href="<?php echo $categoryDrenazniSistem.'.php';?>">Urin drenažni zatvoreni sistem</a>
                        </h4>                        
                        <div class="blog-post-preview fixed">	
                            <img src="_content/portfolio/ukesa1.png" alt="">                            
                        </div><!-- end .blog-post-preview -->
                        <p>Da bi se rizik od bolničkih infekcija sveo na najmanju moguću meru, HSO nudi zatvoreni, sterilni urin drenažni sistem H6 plus...</p>
                        <p class="text-right">
                        	<a class="btn" href="<?php echo $categoryDrenazniSistem.'.php';?>">Pročitajte više</a>
                        </p>   
                    </div><!-- end .blog-post -->
					                    <div class="blog-post">	
                        <h4>
                            <a href="<?php echo $categorySeciva.'.php';?>">Skalpeli i nožići</a>
                        </h4>                        
                        <div class="blog-post-preview fixed">	
                            <img src="_content/portfolio/nozici1.png" alt="">                            
                        </div><!-- end .blog-post-preview -->
                        <p>HSO Skalpeli & nožići za sve hirurške procedure i oblasti...</p>
                        <p class="text-right">
                        	<a class="btn" href="<?php echo $categorySeciva.'.php';?>">Pročitajte više</a>
                        </p>   
                    </div><!-- end .blog-post -->
					<div class="divider single-line"></div>
                </div><!-- end .span4 -->
                <div class="span4">
                	
                    <div class="blog-post">	
                        <h4>
                            <a href="<?php echo $categoryInfuzija.'.php';?>">Infuzioni setovi</a>
                        </h4>                        
                        <div class="blog-post-preview fixed">	
                            <img src="_content/portfolio/infuzija2.png" alt="">                            
                        </div><!-- end .blog-post-preview -->
                        <p>HSO-Kombistofen je univerzalni sigurnosni čep koji je idealno rešenje za sve vrste priključaka...</p>
                        <p class="text-right">
                        	<a class="btn" href="<?php echo $categoryInfuzija.'.php';?>">Pročitajte više</a>
                        </p>   
                    </div><!-- end .blog-post -->
                    <div class="divider single-line"></div>
                    <div class="blog-post">	
                        <h4>
                            <a href="<?php echo $categoryMaske.'.php';?>">Maske</a>
                        </h4>                        
                        <div class="blog-post-preview fixed">	
                            <img src="_content/portfolio/maska4.png" alt="">                            
                        </div><!-- end .blog-post-preview -->
                        <p>HSO zaštitna troslojna maska sa lastišem, veoma prijatna za kožu...</p>
                        <p class="text-right">
                        	<a class="btn" href="<?php echo $categoryMaske.'.php';?>">Pročitajte više</a>
                        </p>   
                    </div><!-- end .blog-post -->



                </div><!-- end .span4 -->
				<div class="span4">
                    <div class="blog-post">	
                        <h4>
                            <a href="<?php echo $categoryBiopsija.'.php';?>">Biopsija</a>
                        </h4>                        
                        <div class="blog-post-preview fixed">	
                            <img src="_content/portfolio/biopsija1.png" alt="">                            
                        </div><!-- end .blog-post-preview -->
                        <p>Forcepsi za biopsiju su sigurni i ekonomični proizvodi, namenjeni za jednokratnu upotrebu...</p>
                        <p class="text-right">
                        	<a class="btn" href="<?php echo $categoryBiopsija.'.php';?>">Pročitajte više</a>
                        </p>   
                    </div><!-- end .blog-post -->
					<div class="divider single-line"></div>
					<div class="blog-post">	
                        <h4>
                            <a  href="<?php echo $categoryRukavice.'.php';?>">Rukavice</a>
                        </h4>                        
                        <div class="blog-post-preview fixed">	
                            <img src="_content/portfolio/rukavice1.png" alt="">                            
                        </div><!-- end .blog-post-preview -->
                        <p>Mikrostruktura površine HSO hirurških rukavica omogućava precizno rukovanje instrumentima i sprečava neželjena proklizavanja...</p>
                        <p class="text-right">
                        	<a class="btn"  href="<?php echo $categoryRukavice.'.php';?>">Pročitajte više</a>
                        </p>   
                    </div><!-- end .blog-post -->
                </div><!-- end .span4 -->

                
				
            </div><!-- end .row -->
                        
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

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
