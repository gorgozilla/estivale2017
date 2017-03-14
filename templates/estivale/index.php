<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 * 
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
JLoader::import('joomla.filesystem.file');
JHtml::_('behavior.framework', true);
JHtml::_('jquery.framework');

$app = JFactory::getApplication();
$pageId = $app->getMenu()->getActive()->id;
$lang = JFactory::getLanguage()->getTag();
// Output as HTML5
$this->setHtml5(true);

$this->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/layout.css', 'text/css', 'screen');
$this->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css', 'text/css', 'screen');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/template.js');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/bootstrap.min.js');
$this->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/lightbox.css', 'text/css', 'screen');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/lightbox.js');
$templateparams = $app->getTemplate(true)->params;
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<jdoc:include type="head" />
		<!--[if lt IE 9]><script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script><![endif]-->
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '953470604784418');
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=953470604784418&ev=PageView&noscript=1"
		/></noscript>
		<!-- DO NOT MODIFY -->
		<!-- End Facebook Pixel Code -->
	</head>
	
	<!-- Tracking for Home, Prog, Baker, Gims, Tarifs, Intervalle -->
	<?php if($pageId==101 || $pageId==140 || $pageId==142
			|| $pageId==143 || $pageId==108
			|| $pageId==176 || $pageId==177 || $pageId==178 || $pageId==179 || $pageId==180|| $pageId==182|| $pageId==183
			|| $pageId==171 || $pageId==172 || $pageId==173 || $pageId==174 || $pageId==175 || $pageId==181|| $pageId==184
			|| $pageId==159 || $pageId==160
			|| $pageId==135 || $pageId==145){ ?>
		<script> fbq('track', 'ViewContent'); </script>
	<?php } ?>
	
	<body id="body">
		<div id="all">
			<header id="header" class="col-xs-12">
				<div class="logoheader">
					<a href="index.php">
						<img src="<?php echo $this->baseurl.'/templates/' . $this->template . '/images/logo-estivale.png'; ?>"  alt="Estivale Open Air - Du 28.07 au 01.08.2017 - Estavayler-le-Lac" class="logo-header" />
					</a>
					<h1 class="hidden-xs">
						<span class="header-location">ESTAVAYER-LE-LAC</span><br />
						<?php if($lang=='fr-FR'){ ?>
							DU 28.07 AU 01.08 2017
						<?php }else{ ?>
							VOM 28.07 BIS 01.08 2017
						<?php } ?>
					</h1>
				</div>
				<!-- end logoheader -->
				<div class="col-sm-3 col-sm-offset-9 col-xs-5 col-xs-offset-7">
					<jdoc:include type="modules" name="social-icons" />
				</div>
				<div class="col-xs-offset-10">
					<jdoc:include type="modules" name="language-switcher" />
				</div>
				<div id="main_nav" class="col-xs-1 col-xs-offset-11">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a class="navbar-brand" href="#">MENU</a>
							</div>
							 <!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<jdoc:include type="modules" name="main-menu" />
						  </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
				<div style="clear:both;"></div>
				<img src="<?php echo $this->baseurl.'/templates/' . $this->template . '/images/map-tab.png'; ?>"  alt="Voir Estavayer-le-Lac sur le plan" class="map-tab" />
			</header>
			<div style="clear:both;"></div>			
			<div id="header-mobile" class="visible-xs">
				<h1>
					<span class="header-location">ESTAVAYER-LE-LAC</span><br />
					<?php if($lang=='fr-FR'){ ?>
						DU 28.07 AU 01.08 2017
					<?php }else{ ?>
						VOM 28.07 BIS 01.08 2017
					<?php } ?>
				</h1>
			</div>
			<!-- end header -->
			<div style="clear:both;"></div>
			<div id="map-canvas" class="col-xs-12"></div>
			
			<div id="contentarea">
				<?php if($pageId==101 || $pageId==140 || $pageId==142){ ?>
					<div class="teaser-sam-29 col-xs-12">
						<?php if($lang=='fr-FR'){ ?>
							<h1>SAM. 29.07.17</h1>
								<div class="teaser">
									<h2>IAM</h2>
									<a href="index.php/fr/iam" class="addWishListEvent" style="height:369px;display:block;">
									
									</a>
								</div>
						<?php }else{ ?>
							<h1>SAM. 29.07.17</h1>
								<div class="teaser">
									<h2>IAM</h2>
									<a href="index.php/de/iam" class="addWishListEvent">
									<img src="<?php echo $this->baseurl.'/images/artists/iam.jpg'; ?>"  alt="IAM - Samedi 29 juillet 2017" class="iam-teaser-image" />
									</a>
								</div>
						<?php } ?>
					</div>
					<div class="teaser-dim-30 col-xs-12">
						<?php if($lang=='fr-FR'){ ?>
							<h1>DIM. 30.07.17</h1>
								<div class="teaser">
									<h2>Olivia Ruiz</h2>
									<a href="index.php/fr/prog/dimanche-30-juillet/olivia-ruiz" class="addWishListEvent">
									<img src="<?php echo $this->baseurl.'/images/artists/olivia_ruiz.png'; ?>"  alt="Olivia Ruiz - Dimanche 30 juillet 2017" class="ruiz-teaser-image" />
									</a>
								</div>
								<div class="teaser">
									<h2 class="h2-3">Amir</h2>
									<a href="index.php/fr/amir" class="addWishListEvent">
									<img src="<?php echo $this->baseurl.'/images/artists/amir.png'; ?>"  alt="Amir - Dimanche 30 juillet 2017" class="amir-teaser-image" />
									</a>
								</div>
								<div class="teaser">
									<h2 class="h2-1">Tété</h2>
									<a href="index.php/fr/prog/dimanche-30-juillet/tete" class="addWishListEvent">
										<img src="<?php echo $this->baseurl.'/images/artists/tete.png'; ?>"  alt="Tété - Dimanche 30 juillet 2017" class="tete-teaser-image" />
									</a>
								</div>
								<div class="teaser">
									<h2 class="h2-2">Bastian Baker</h2>
									<a href="index.php/fr/prog/dimanche-30-juillet/bastian-baker" class="addWishListEvent">
										<img src="<?php echo $this->baseurl.'/images/artists/baker_transparent.png'; ?>"  alt="Bastian Baker - Dimanche 30 juillet 2017" class="baker-teaser-image" />
									</a>
								</div>
						<?php }else{ ?>
							<h1>SON. 30.07.17</h1>
								<div class="teaser">
									<h2>Olivia Ruiz</h2>
									<a href="index.php/de/programm/sonntag-30-juli/olivia-ruiz-allemand" class="addWishListEvent">
									<img src="<?php echo $this->baseurl.'/images/artists/olivia_ruiz.png'; ?>"  alt="Olivia Ruiz - Dimanche 30 juillet 2017" class="ruiz-teaser-image" />
									</a>
								</div>
								<div class="teaser">
									<h2 class="h2-3">Amir</h2>
									<a href="index.php/de/amir-allemand" class="addWishListEvent">
									<img src="<?php echo $this->baseurl.'/images/artists/amir.png'; ?>"  alt="Amir - Dimanche 30 juillet 2017" class="amir-teaser-image" />
									</a>
								</div>
								<div class="teaser">
									<h2 class="h2-1">Tété</h2>
									<a href="index.php/de/programm/sonntag-30-juli/tete-allemand" class="addWishListEvent">
										<img src="<?php echo $this->baseurl.'/images/artists/tete.png'; ?>"  alt="Tété - Dimanche 30 juillet 2017" class="tete-teaser-image" />
									</a>
								</div>
								<div class="teaser">
									<h2 class="h2-2">Bastian Baker</h2>
									<a href="index.php/de/programm/sonntag-30-juli/bastian-baker-allemand" class="addWishListEvent">
										<img src="<?php echo $this->baseurl.'/images/artists/baker_transparent.png'; ?>"  alt="Bastian Baker - Dimanche 30 juillet 2017" class="baker-teaser-image" />
									</a>
								</div>
						<?php } ?>
					</div>

					<div class="teaser-lu-31 col-xs-12">
						<?php if($lang=='fr-FR'){ ?>
							<h1>L'INTERVALLE<br /><span class="teaser-date">LU. 31.07.17</span></h1>
							<h2>SOIREE SPECIALE</h2>
							<div class="teaser">
								<h3>Shy'm</h3>
								<a href="index.php/fr/prog/lundi-31-juillet/shy-m" class="addWishListEvent">
								<img src="<?php echo $this->baseurl.'/images/artists/shym.png'; ?>"  alt="Shym - Lundi 31 juillet 2017" class="shym-teaser-image" />
								</a>
								</div>
							<div class="teaser">
								<h3 class="h2-2">Maître Gims</h3>
								<a href="index.php/fr/prog/lundi-31-juillet/maitre-gims" class="addWishListEvent">
								<img src="<?php echo $this->baseurl.'/images/artists/gims_transparent.png'; ?>"  alt="Maître Gims - Lundi 31 juillet 2017" class="gims-teaser-image" />
								</a>
							</div>
						<?php }else{ ?>
							<h1>INTERVALLE<br /><span class="teaser-date">MO. 31.07.17</span></h1>
							<h2>ZUSATZABEND</h2>
							<div class="teaser">
								<h3>Shy'm</h3>
								<a href="index.php/de/programm/intervalle-montag-31-juli/shy-m-allemand" class="addWishListEvent">
								<img src="<?php echo $this->baseurl.'/images/artists/shym.png'; ?>"  alt="Shym - Lundi 31 juillet 2017" class="shym-teaser-image" />
								</a>
								</div>
							<div class="teaser">
								<h3 class="h2-2">Maître Gims</h3>
								<a href="index.php/de/programm/intervalle-montag-31-juli/maitre-gims-allemand" class="addWishListEvent">
								<img src="<?php echo $this->baseurl.'/images/artists/gims_transparent.png'; ?>"  alt="Maître Gims - Lundi 31 juillet 2017" class="gims-teaser-image" />
								</a>
							</div>
						<?php } ?>
					</div>
					<div class="teaser-price col-md-8 col-xs-12">
						<?php if($lang=='fr-FR'){ ?>
							<h2>BILLETS ET ABONNEMENTS</h2>
			
							<ul class="hidden-xs">
								<li>Billet par soir</li>
								<li>&nbsp;</li>
								<li>Estivale Open Air (28-30.07.17)</li>
								<li>Abonnement trois jours </li>
								<li>&nbsp;</li>
								<li>Estivale Open Air + L’Intervalle (28-31.07.17)</li>
								<li>Abonnement quatre jours</li> 								
							</ul>
							<ul class="hidden-xs">
								<li>CHF 59</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>CHF 142</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>CHF 189</li>
							</ul>
							
							<div class="visible-xs">
								<ul class="mobile">
									<li>Billet par soir</li>
									<li>CHF 59</li>
								</ul>
								<div style="clear:both;"></div>
								<p>Estivale Open Air (28-30.07.17)</p>
								<ul class="mobile">
									<li>Abonnement trois jours </li>
									<li>CHF 142</li>
								</ul>
								<div style="clear:both;"></div>
								<p>Estivale Open Air + L’Intervalle (28-31.07.17)</p>
								<ul class="mobile">
									<li>Abonnement quatre jours</li>
									<li>CHF 189</li>								
								</ul>
							</div>
						<?php }else{ ?>
							<h2>Tickets und abonnements</h2>							
							<ul class="hidden-xs">
								<li>Ticket pro Tag</li>
								<li>&nbsp;</li>
								<li>Estivale Open Air (28-30.07.17)</li>
								<li>Abonnement 3 Tage Erwachsener</li>
								<li>&nbsp;</li>
								<li>Estivale Open Air + L’Intervalle (28-31.07.17)</li>				
								<li>Abonnement 4 Tage Erwachsener</li>
							</ul>
							<ul class="hidden-xs">
								<li>CHF 59</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>CHF 142</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>CHF 189</li>
							</ul>
							<br />
							<div class="visible-xs">
								<ul class="mobile">
									<li>Ticket pro Tag</li>
									<li>CHF 59</li>
								</ul>
								<div style="clear:both;"></div>
								<p>Estivale Open Air (28-30.07.17)</p>
								<ul class="mobile">
									<li>Abonnement 3 Tage Erwachsener</li>
									<li>CHF 142</li>
								</ul>
								<div style="clear:both;"></div>
								<p>Estivale Open Air + L’Intervalle (28-31.07.17)</p>
								<ul class="mobile">
									<li>Abonnement 4 Tages Erwachsener</li>
									<li>CHF 189</li>
								</ul>
							</div>
						<?php } ?>
					</div>
					<?php if($lang=='fr-FR'){ ?>
						<a href="https://etickets.infomaniak.com/shop/tkUHDpR8Ky/" class="buy-tickets-teaser col-md-4 col-sm-12 col-xs-12">ACHETER DES BILLETS</a>
					<?php }else{ ?>
						<a href="https://etickets.infomaniak.com/shop/tkUHDpR8Ky/" class="buy-tickets-teaser col-md-4 col-sm-12 col-xs-12">ONLINE SHOP</a>
					<?php } ?>
				<?php }else{ ?>
				<div class="col-xs-12 content">
					<jdoc:include type="component" />
				</div>
				<?php } ?>
				<div style="clear:both;"></div>
				<jdoc:include type="modules" name="article-slider" />
				<jdoc:include type="modules" name="newsletter-footer" style="xhtml" />
			</div>
			<!-- end contentarea -->
			<footer id="footer" class="col-xs-12">
				<div class="col-sm-5 col-xs-12 col-sm-offset-1">
					<jdoc:include type="modules" name="partners-footer" />
				</div>
				
				<div class="col-sm-2 col-xs-5 col-sm-offset-1">
					<jdoc:include type="modules" name="footer-menu" />
				</div>
				
				<div class="col-sm-2 col-xs-5 col-xs-offset-1">
					<jdoc:include type="modules" name="copyright" style="xhtml" />
				</div>
			</footer>
		</div>
		<!-- all -->

		 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO2kjdINJo4Obz8yGT_zgz88mpA6XzrQc&callback=initMap" async defer>
		</script>
		<script>
			function initMap() {
				var novafriburgo = {lat: 46.852182, lng: 6.840062};
				var map = new google.maps.Map(document.getElementById('map-canvas'), {
				  zoom: 10,
				  center: novafriburgo
				});
				var marker = new google.maps.Marker({
				  position: novafriburgo,
				  map: map
				});
			}
			initMap();
		</script>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-16467406-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</body>
</html>
