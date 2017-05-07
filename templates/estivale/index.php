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
			|| $pageId==176 || $pageId==177 || $pageId==178 || $pageId==179 || $pageId==186 || $pageId==190 || $pageId==192 || $pageId==194 || $pageId==196 || $pageId==198 || $pageId==200 || $pageId==202 || $pageId==204 || $pageId==206 || $pageId==208 || $pageId==210 || $pageId==212 || $pageId==214 || $pageId==216 || $pageId==222 || $pageId==124 || $pageId==131 || $pageId==161 || $pageId==162 || $pageId==163 || $pageId==181 || $pageId==183
			|| $pageId==153 || $pageId==153 || $pageId==164 || $pageId==165 || $pageId==170 || $pageId==181|| $pageId==184 || $pageId==176 || $pageId==177 || $pageId==178 || $pageId==179 || $pageId==180 || $pageId==188|| $pageId==191|| $pageId==193 || $pageId==195 || $pageId==197 || $pageId==199 || $pageId==201 || $pageId==203|| $pageId==205|| $pageId==207 || $pageId==209 || $pageId==211 || $pageId==213 || $pageId==215 || $pageId==217 || $pageId==223 || $pageId==225 || $pageId==227
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
					<div class="teaser-lineup col-xs-12">
							<h1>LINE UP 2017</h1>
						<?php if($lang=='fr-FR'){ ?>
							<h2>
								<a href="index.php/fr/prog/vendredi-28-juillet/asaf-avidan">ASAF AVIDAN</a><span class="white-span">/</span><a href="index.php/fr/prog/vendredi-28-juillet/patti-smith">PATTI SMITH</a>
							</h2>
							<h3>
								<a href="index.php/fr/iam">IAM</a><span class="black-span">/</span><a href="index.php/fr/prog/samedi-29-juillet/milky-chance">MILKY CHANCE</a><span class="black-span">/</span><a href="index.php/fr/prog/samedi-29-juillet/k-s-choice">K'S CHOICE</a>
							</h3>
							<h4>
								<a href="index.php/fr/amir">AMIR</a><span class="white-span">/</span><a href="index.php/fr/olivia-ruiz">OLIVIA RUIZ</a><span class="white-span">/</span><a href="index.php/fr/bastian-baker">BASTIAN BAKER</a><span class="white-span">/</span><a href="index.php/fr/maitre-gims">MAITRE GIMS</a>
							</h4>
							<h5>
								<a href="index.php/fr/prog/vendredi-28-juillet/ida-mae">IDA MAE</a><span class="black-span">/</span><a href="index.php/fr/prog/vendredi-28-juillet/lucille-crew">LUCILLE CREW</a><span class="black-span">/</span><a href="index.php/fr/prog/lundi-31-juillet/giedre">GIEDRE</a><span class="black-span">/</span><a href="index.php/fr/prog/samedi-29-juillet/anna-kova">ANNA KOVA</a><span class="black-span">/</span><a href="index.php/fr/tete">TETE</a><span class="black-span">/</span><a href="index.php/fr/prog/dimanche-30-juillet/mark-kelly">MARK KELLY</a>
							</h5>
							<h6>
								<a href="index.php/fr/prog/dimanche-30-juillet/jack-savoretti">JACK SAVORETTI</a><span class="white-span">/</span><a href="index.php/fr/prog/samedi-29-juillet/john-dear">JOHN DEAR</a><span class="white-span">/</span><a href="index.php/fr/prog/mardi-01-aout/get-in-the-car-simone">GET IN THE CAR SIMONE</a><span class="white-span">/</span><a href="index.php/fr/prog/mardi-01-aout/fensta">FENSTA</a><span class="white-span">/</span><a href="index.php/fr/prog/lundi-31-juillet/wintershome">WINTERSHOME</a>
							</h6>
						<?php }else{ ?>
							<h2>
								<a href="index.php/de/programm/freitag-28-juli/asaf-avidan">ASAF AVIDAN</a><span class="white-span">/</span><a href="index.php/de/programm/freitag-28-juli/patti-smith">PATTI SMITH</a>
							</h2>
							<h3>
								<a href="index.php/de/iam">IAM</a><span class="black-span">/</span><a href="index.php/de/programm/samstag-29-juli/milky-chance">MILKY CHANCE</a><span class="black-span">/</span><a href="index.php/de/programm/samstag-29-juli/k-s-choice">K'S CHOICE</a>
							</h3>
							<h4>
								<a href="index.php/de/amir-allemand">AMIR</a><span class="white-span">/</span><a href="index.php/de/olivia-ruiz-allemand">OLIVIA RUIZ</a><span class="white-span">/</span><a href="index.php/de/bastian-baker-allemand">BASTIAN BAKER</a><span class="white-span">/</span><a href="index.php/de/maitre-gims-allemand">MAITRE GIMS</a>
							</h4>
							<h5>
								<a href="index.php/de/programm/freitag-28-juli/ida-mae">IDA MAE</a><span class="black-span">/</span><a href="index.php/de/programm/freitag-28-juli/lucille-crew">LUCILLE CREW</a><span class="black-span">/</span><a href="index.php/de/programm/intervalle-montag-31-juli/giedre">GIEDRE</a><span class="black-span">/</span><a href="index.php/fr/prog/samedi-29-juillet/anna-kova">ANNA KOVA</a><span class="black-span">/</span><a href="index.php/de/tete-allemand">TETE</a><span class="black-span">/</span><a href="index.php/de/programm/sonntag-30-juli/mark-kelly">MARK KELLY</a>
							</h5>
							<h6>
								<a href="index.php/de/programm/sonntag-30-juli/jack-savoretti">JACK SAVORETTI</a><span class="white-span">/</span><a href="index.php/de/programm/samstag-29-juli/john-dear">JOHN DEAR</a><span class="white-span">/</span><a href="index.php/de/programm/dienstag-01-august/get-in-the-car-simone">GET IN THE CAR SIMONE</a><span class="white-span">/</span><a href="index.php/fr/prog/mardi-01-aout/fensta">FENSTA</a><span class="white-span">/</span><a href="index.php/de/programm/intervalle-montag-31-juli/wintershome">WINTERSHOME</a>
							</h6>						
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
				<jdoc:include type="message" />
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
