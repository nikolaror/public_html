<!DOCTYPE html>
<?php
$pageName="Usluge"; 
$category=''; 
$menuItem="usluge"; 
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
    <link rel="stylesheet" href="_layout/js/skillsdiagram/css/default.css">
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
            	<div class="span12">
                	
                    <h3 class="headline">
                    	<span>Zašto odabrati naše usluge?</span>
                    </h3>
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
            <div class="row">
				<div class="span8">
                	
                    <p>Pružanje zdravstvenih usluga predstavlja odgovoran posao kao sa aspekta znanja medicinskog kadra, tako i sa aspekta opreme koja mora besprekorno raditi. Ovaj drugi deo prepustite nama – biće na obostrano zadovoljstvo.</p>
                    
                    <br>
                    
					<blockquote style="border-left-color:#8f9bb2;">
                    	<p>Bavimo se prodajom visoko-kvalitetnih medicinskih proizvoda široke primene. </p>
                    </blockquote>
                    <blockquote style="border-left-color:#484f5e;">
                    	<p>Mi organizujemo konferencije sa najpriznatijim predavačima</p>
                    </blockquote>
                    
                    <blockquote style="border-left-color:#656d7d;">
                    	<p>Vršimo učestale obuke i širimo znanje koje smo u svojili, za opšte dobro</p>
                    </blockquote>
                                        
                </div><!-- end .span8 -->
				<div class="span4">
                    <div id="diagram"></div>
                    <div class="get">
                        <div class="arc">
                            <span class="text">Kvalitetno</span>
                            <input type="hidden" class="percent" value="79" />
                            <input type="hidden" class="color" value="#535a6a" />
                        </div><!-- end .arc -->  
                        <div class="arc">
                            <span class="text">Efikasno</span>
                            <input type="hidden" class="percent" value="70" />
                            <input type="hidden" class="color" value="#5a6171" />
                        </div><!-- end .arc -->
                        <div class="arc">
                            <span class="text">Bezbedno</span>
                            <input type="hidden" class="percent" value="75" />
                            <input type="hidden" class="color" value="#656d7d" />
                        </div><!-- end .arc -->
                    </div><!-- end .get --> 
                </div><!-- end span12 -->
            </div><!-- end .row -->
 
            <div class="box-3" style="padding:60px 0;">
            	
                <div class="row">
                	<div class="span7">
                        
                        <img class="responsive-img" src="_content/services/540x425.png" alt="">
                        
                    </div><!-- end .span7 -->
                    <div class="span5">
                    
                    	<br>
                        <h3>Naše usluge obuhvataju:</h3>
                        
                        <br>
						<ul class="circle">
							<li>pružanje stručnih tehničkih i aplikacionih informacija kupcima pri odabiru medicinske opreme</li>
							<li>kontinuiranih edukacija od strane naših principala kako za prodaju tako i za servis opreme)</li>
							<li>brzu isporuku u oviru ugovorenih rokova</li>
							<li>stručnu instalaciju opreme, obuku korsnika za rad sa aparatima do stepena stručne osposo bljenosti rukovanja novim uređajem</li>
							<li>besplatne konsultacije vezane za korišćenje aparata nakon isporuk</li>
							<li>brz odziv na eventualnu reklamaciju i kvalitetan servis u garantnom i vangarantnom roku</li>
							<li>poštovanje želja kupaca kao naš primarni zadatak</li>
						</ul>
					<br>                        
                        <br>
                        
                        <p class="last">
                        	<a class="btn btn-green-light" href="novosti.php">Pogledajte <strong>novosti</strong></a>
                        </p>
                        
                    </div><!-- end .span5 -->
                </div><!-- end .row -->
                
            </div><!-- end .box-3 -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		<div id="footer">
			<footer></footer>
		</div><!-- end #footer -->
		
	</div><!-- end #wrap -->


    <!-- /// jQuery ////////  -->
	<script src="_layout/js/jquery-2.1.0.min.js"></script>

    <!-- /// ViewPort ////////  -->
	<script src="_layout/js/viewport/jquery.viewport.js"></script>
    
    <!-- /// Easing ////////  -->
	<script src="_layout/js/easing/jquery.easing.1.3.js"></script>
      <!-- /// SkillsDiagram ////////  -->
    <script src="_layout/js/skillsdiagram/js/raphael.js"></script>
    <script src="_layout/js/skillsdiagram/js/init.js"></script>
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

	
	<!-- /// angularJS ////////  -->
	<script src="_layout/js/ng/angular.min.js"></script>
	<script src="_layout/js/ng/app.js"></script>
	<!-- /// end angularJS ////////  -->

</body>
</html>
