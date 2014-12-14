<div id="header-top">
        
        <!-- /// HEADER TOP  //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        
            <div class="row">
                <div class="span6" id="header-top-widget-area-1">
                    
                    <div class="widget widget_text">
                    
                        <div class="textwidget">
                        </div><!-- end .text -->
                    
                    </div><!-- end .widget_text -->
                    
                </div><!-- end .span6 -->
                <div class="span6 text-right" id="header-top-widget-area-2">
                    
                    <div class="widget ewf_widget_social_media">
                        	
                        <div class="fixed">
                            
                            <a href="https://www.facebook.com/heintelsrb" class="facebook-icon social-icon">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/HeintelS" class="twitter-icon social-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://plus.google.com/u/0/112605727514009900865/posts" class="googleplus-icon social-icon">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="http://www.pinterest.com/heintels/" class="pinterest-icon social-icon">
                                <i class="fa fa-pinterest"></i>
                            </a>                           
                        </div>
                        
                    </div><!-- end .widget_social_media -->
                    
                </div><!-- end .span6 -->
            </div><!-- end .row -->
            
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            
</div><!-- end #header-top -->
<div id="header">
        
		<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            
            <div class="row">
				<div class="span3">
				
					<!-- // Logo // -->
					<a href="index.php" id="logo">
                    	<img src="_layout/images/logo.png" alt="" class="responsive-img">
                    </a>
				
				</div><!-- end .span3 -->
				<div class="span9">
				
                	<!-- // Mobile menu trigger // -->
                	<a href="#" id="mobile-menu-trigger">
                    	<i class="fa fa-bars"></i>
                    </a>
                    
					<!-- // Menu // -->
					<ul class="sf-menu" id="menu">
						<li <?php if ($menuItem=="index") echo " class=\"current\""; ?>>
                        	<a href="index.php">POČETAK</a>
						</li>
						<li <?php if ($menuItem=="o-nama") echo " class=\"current\""; ?>>
                        	<a href="onama.php">O NAMA</a>
						</li>
						<li <?php if ($menuItem=="profil") echo " class=\"current\""; ?>>
                        	<a href="profil.php">PROFIL</a>
						</li>
						<li <?php if ($menuItem=="usluge") echo " class=\"current\""; ?>>
                        	<a href="usluge.php">USLUGE</a>
						</li>
						<li <?php if(in_array($menuItem, ["portfolio","stetoskopi","infuzija","biopsija","drenazni-sistem","maske","rukavice","seciva"])) echo " class=\"current\""; ?>>
                        	<a href="portfolio.php">PORTFOLIO</a>
                        	<ul>
								<li>
                                    <a href="stetoskopi.php">STETOSKOPI</a>
                                </li>
								<li>	
                                    <a href="infuzija.php">INFUZIONI SETOVI</a>
                                </li>
								<li>
                                    <a href="biopsija.php">BIOPSIJA</a>
                                </li>
								<li>
                                    <a href="drenazni-sistem.php">URIN DRENAŽNI ZATVORENI SISTEM</a>
                                </li>
								<li>
                                    <a href="maske.php">MASKE</a>
                                </li>
								<li>
                                    <a href="rukavice.php">RUKAVICE</a>
                                </li>
								<li>
                                    <a href="seciva.php">SKALPELI I NOŽIĆI</a>
                                </li>
                            </ul>

						</li>
						<li <?php if ($menuItem=="novosti") echo " class=\"current\""; ?>>
                        	<a href="novosti.php">NOVOSTI</a>
						</li>
						<li <?php if ($menuItem=="kontakt") echo " class=\"current\""; ?>>
                        	<a href="kontakt.php">KONTAKT</a>
						</li>
					</ul>

				</div><!-- end .span9 -->
			</div><!-- end .row -->		

		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #header -->
		