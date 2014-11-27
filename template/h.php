
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
						<li <?php if ($menuItem=="profil") echo " class=\"current\""; ?>>
                        	<a href="profil.php">PROFIL</a>
						</li>
						<li <?php if(in_array($menuItem, ["portfolio","stetoskopi","infuzija","biopsija","drenazni-sistem","maske","rukavice","seciva"])) echo " class=\"current\""; ?>>
                        	<a href="portfolio.php">PORTFOLIO</a>
                        	<ul>
								<li>
                                    <a href="stetoskopi.php">STETOSKOPI</a>
                                </li>
								<li>	
                                    <a href="infuzija.php">INFUZIJA</a>
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
						<li <?php if ($menuItem=="usluge") echo " class=\"current\""; ?>>
                        	<a href="usluge.php">USLUGE</a>
						</li>
						<li <?php if ($menuItem=="o-nama") echo " class=\"current\""; ?>>
                        	<a href="onama.php">O NAMA</a>
						</li>
						<li <?php if ($menuItem=="kontakt") echo " class=\"current\""; ?>>
                        	<a href="kontakt.php">KONTAKT</a>
						</li>
					</ul>

				</div><!-- end .span9 -->
			</div><!-- end .row -->		

		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #header -->
		