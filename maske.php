<!DOCTYPE html>
<?php
$pageName="Maske"; 
$category="maske"; 
$menuItem="maske"; 
$product='';
$companyName="Heintel";
$product1inCat="maska";
$crumb1="portfolio";
$crumb1url="portfolio";
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
                    <h2><a href="<?php echo $crumb1url.'.php';?>"><?php echo $crumb1;?></a> / <?php echo $category;?></h2>	
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
                
            </div><!-- end #page-header -->
            
            <div class="row">
            	<div class="span4">
                	
                    <div class="team-member">
                    	
                        <img src="_content/portfolio/maska3.png" alt="">
                        
                        <br class="clear">
            <h2>Proizvodi</h2>            
								<a href="<?php echo $category.'-'.$product1inCat.'.php';?>" >
                            	<i>MASKA SA LASTIŠEM ili POVESKAMA</i>
                            </a>
                        

                        
                    </div><!-- end .team-member -->
                    
                </div><!-- end .span4 -->
                <div class="span8">
                	
                    
<h2>Karakteristike</h2>
<p>HSO maske su prozračne i veoma prijatne za kožu. Predstavljaju pravo rešenje za svakog korisnika i 
ujedno lagana i fleksibilna kopča preko nosa čini HSO masku veoma udobnom za nošenje.</p>
<p>HSO maske se izrađuju u dve verzije: sa vrpcama za vezivanje i sa gumicama koje imaju dodatno meke tapacirane delove u predelu uha.</p><p>Takođe su dostupne obe verzije za korisnike koji nose naočare, providne HSO maske. Vuna sa kojom je obložena unutrašnja strana maske sprečava magljenje sočiva i naočara.</p>
<p>HSO maske imaju izuzetnu mogućnost bakterijske 
filtracije. Što manje bakterije prodiru u oba smera veća je efikasnost (BFE).</p>
<p>Troslojne HSO maske pružaju odlični zaštitu od infekcija kako za Vas tako i za Vaše pacijente</p>
<p>Efikasnost bakterijske filtracije BFE je 99,99% čime HSO maska ispunjava sve zahteve standarda DIN EN 14 683</p>
                                                   <div class="row">
			                	<div class="icon-box-1">
                                    
                        <i class="ifc-copy"><a href="#"></a></i>
                        
                        <div class="icon-box-content">
                            
                            <p>Preuzmite kompletan katalog <a href="_content/pfd-katalog/HSO_rukavice_i_maske.pdf" download="_content/pfd-katalog/HSO_rukavice_i_maske.pdf">ovde</a></p>
                        
                        </div><!-- end .icon-box-content -->
                        
                    </div><!-- end .icon-box-1 -->
			 </div> 
                </div><!-- end .span8 -->
            </div>
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
