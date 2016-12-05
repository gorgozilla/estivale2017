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

$app = JFactory::getApplication();

// Output as HTML5
$this->setHtml5(true);

$this->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/layout.css', 'text/css', 'screen');
$this->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css', 'text/css', 'screen');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/template.js');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/bootstrap.min.js');
JHtml::_('jquery.framework');

$templateparams = $app->getTemplate(true)->params;
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<jdoc:include type="head" />
		<!--[if lt IE 9]><script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script><![endif]-->
	</head>
	<body id="body">
		<div id="all">
			<header id="header" class="col-xs-12">
				<div class="logoheader">
					<a href="index.php">
						<img src="<?php echo $this->baseurl.'/templates/' . $this->template . '/images/logo-estivale.png'; ?>"  alt="<?php echo htmlspecialchars($templateparams->get('sitetitle')); ?>" class="logo-header" />
					</a>
					<h1 class="hidden-xs">
						<span class="header-location">ESTAVAYER-LE-LAC</span><br />
						DU 29.07 AU 01.08 2017
					</h1>
				</div>
				<!-- end logoheader -->
				<div class="col-sm-3 col-sm-offset-9 hidden-xs">
				<jdoc:include type="modules" name="social-icons" />
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
					DU 29.07 AU 01.08 2017
				</h1>
			</div>
			<!-- end header -->
			<div style="clear:both;"></div>
			<div id="map-canvas" class="col-xs-12"></div>
			
			<div id="contentarea">
				<div class="teaser-baker col-xs-12">
					<h1>BASTIAN BAKER<br /><span class="teaser-date">DIM. 30.07.17</span></h1>
					<img src="<?php echo $this->baseurl.'/images/artists/baker_transparent.png'; ?>"  alt="Bastian Baker - Dimanche 30 juillet 2017" class="baker-teaser-image" />
					<p class="hidden-xs">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
					magna lectus, tempus euismod consectetur id, volutpat at magna.
					Suspendisse varius pharetra placerat. Praesent eu quam arcu.
					Nullam in risus tempus, tincidunt dui quis, suscipit erat.<br />
					>> <a href=#> Lire la suite</a>
					</p>
				</div>

				<div class="teaser-gims col-xs-12">
					<h1>MAITRE GIMS<br /><span class="teaser-date">LU. 31.07.17</span></h1>
					<h2>SOIREE SPECIALE</h2>
					<img src="<?php echo $this->baseurl.'/images/artists/gims_transparent.png'; ?>"  alt="Maître Gims - Lundi 31 juillet 2017" class="gims-teaser-image col-sm-2 col-md-offset-7 col-sm-offset-6 col-xs-offset-1" />
					<p class="hidden-sm hidden-xs">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
					magna lectus, tempus euismod consectetur id, volutpat at magna.
					Suspendisse varius pharetra placerat. Praesent eu quam arcu.
					Nullam in risus tempus, tincidunt dui quis, suscipit erat.<br />
					>> <a href=#> Lire la suite</a>
					</p>
				</div>
				<div class="teaser-price col-md-8 col-sm-12">
					<h2>OFFRE SPECIALE DE NOEL</h2>
					<ul>
						<li>ABONNEMENT 3 JOURS ADULTE + 1 FOULARD ESTIVALE</li>
						<li>BILLET ADULTE</li>
						<li>BILLET ADO (12 - 16 ANS)</li>
					</ul>
					<ul>
						<li>110 CHF</li>
						<li>54 CHF</li>
						<li>33 CHF</li>
					</ul>
				</div>
				<a href="#" class="buy-tickets-teaser col-md-4 col-sm-12 col-xs-12">ACHETER DES BILLETS</a>
				<div style=clear:both;></div>
				<jdoc:include type="modules" name="article-slider" />
				<jdoc:include type="modules" name="teaser-partners" style="xhtml" />
			</div>
			<!-- end contentarea -->
			<footer id="footer" class="col-xs-12">
				<div class="col-xs-3 col-xs-offset-1 hidden-xs">
				<jdoc:include type="modules" name="newsletter-footer" style="xhtml" />
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
	</body>
</html>
