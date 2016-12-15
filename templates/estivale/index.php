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
$pageId = $app->getMenu()->getActive()->id;
$lang = JFactory::getLanguage()->getTag();
// Output as HTML5
$this->setHtml5(true);

$this->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/layout.css', 'text/css', 'screen');
$this->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css', 'text/css', 'screen');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/template.js');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/bootstrap.min.js');
JHtml::_('jquery.framework');
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
						<?php if($lang=='fr-FR'){ ?>
							DU 28.07 AU 01.08 2017
						<?php }else{ ?>
							VOM 28.07 BIS 01.08 2017
						<?php } ?>
					</h1>
				</div>
				<!-- end logoheader -->
				<div class="col-sm-3 col-sm-offset-9">
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
					<div class="teaser-baker col-xs-12">
						<?php if($lang=='fr-FR'){ ?>
							<h1>BASTIAN BAKER<br /><span class="teaser-date">DIM. 30.07.17</span></h1>
							<img src="<?php echo $this->baseurl.'/images/artists/baker_transparent.png'; ?>"  alt="Bastian Baker - Dimanche 30 juillet 2017" class="baker-teaser-image" />
							<p class="hidden-xs">
							Artiste sincère et inattendu à la voix profonde, Bastian Baker, chanteur-compositeur suisse, nourrit ses chansons de vie quotidienne et d’expériences
							personnelles grâce à son immense créativité. Accompagné de sa guitare, il livre des performances scéniques chargées d’énergie et d’enthousiasme.<br />
							>> <a href="index.php/fr/bastian-baker"> Lire la suite</a>
							</p>
						<?php }else{ ?>
							<h1>BASTIAN BAKER<br /><span class="teaser-date">SON. 30.07.17</span></h1>
							<img src="<?php echo $this->baseurl.'/images/artists/baker_transparent.png'; ?>"  alt="Bastian Baker - Sonntag 30 Juli 2017" class="baker-teaser-image" />
							<p class="hidden-xs">
							Bastian Baker überraschte die Welt und explodierte in die Musikszene als aufrichtiger und unerwarteter Künstler. Der Schweizer Sänger und Komponist
							lässt sich beim Schreiben seiner Songs vom Alltag und von seinen persönlichen Erfahrungen inspirieren. Mit seiner Gitarre bewaffnet liefert er
							enthusiastische und energiegeladene Bühnenauftritte.<br />
							>> <a href="index.php/de/bastian-baker-allemand"> Mehr erfahren</a>
							</p>
						<?php } ?>
					</div>

					<div class="teaser-gims col-xs-12">
						<?php if($lang=='fr-FR'){ ?>
							<h1>MAITRE GIMS<br /><span class="teaser-date">LU. 31.07.17</span></h1>
							<h2>SOIREE SPECIALE</h2>
							<img src="<?php echo $this->baseurl.'/images/artists/gims_transparent.png'; ?>"  alt="Maître Gims - Lundi 31 juillet 2017" class="gims-teaser-image col-sm-2 col-md-offset-7 col-sm-offset-6 col-xs-offset-2" />
							<p class="hidden-sm hidden-xs">
							Issu d’une famille de musiciens, Maître Gims est un rappeur, chanteur et compositeur franco-congolais. Que ce soit avec son groupe, Sexion d’Assaut ou en solo,
							ce rappeur se retrouve régulièrement à la tête des charts avec son rap français mélangé à de la pop urbaine.<br />
							>> <a href="index.php/fr/maitre-gims"> Lire la suite</a>
							</p>
						<?php }else{ ?>
							<h1>MAITRE GIMS<br /><span class="teaser-date">MON. 31.07.17</span></h1>
							<h2>ZUSATZABEND</h2>
							<img src="<?php echo $this->baseurl.'/images/artists/gims_transparent.png'; ?>"  alt="Maître Gims - Montag 31 Juli 2017" class="gims-teaser-image col-sm-2 col-md-offset-7 col-sm-offset-6 col-xs-offset-2" />
							<p class="hidden-sm hidden-xs">
							Maître Gims ist ein aus einer französisch kongolesischen Musikerfamilie stammender Rapper, Sänger und Komponist. Ob mit seiner Gruppe Sexion d’Assaut oder solo,
							der Rapper erobert regelmässig die Spitze der Charts mit seinem französischen Rap vermischt mit urbanem Pop. 2013 startet er als Solokünstler durch.<br />
							>> <a href="index.php/de/maitre-gims-allemand"> Mehr erfahren</a>
							</p>
						<?php } ?>
					</div>
					<div class="teaser-price col-md-8 col-xs-12">
						<?php if($lang=='fr-FR'){ ?>
							<h2>OFFRE SPECIALE DE NOEL</h2>
							<ul class="hidden-xs">
								<li>Estivale Open Air (28-30.07.17)</li>
								<li>Abonnement trois jours </li>
								<li>Abonnement trois jours + <a href="images/foulard_estivale.jpg" data-lightbox="desk1">un foulard estampillé Estivale</a></li>
								<li>&nbsp;</li>
								<li>Estivale Open Air + L’Intervalle (28.07-31.07.17)</li>
								<li>Abonnement quatre jours</li> 								
								<li>Abonnement quatre jours + <a href="images/foulard_estivale.jpg" data-lightbox="desk2">un foulard estampillé Estivale</a> <a href="images/foulard_estivale_2.jpg" data-lightbox="desk1"></a><a href="images/foulard_estivale_2.jpg" data-lightbox="desk2"></a></li>
							</ul>
							<ul class="hidden-xs">
								<li>&nbsp;</li>
								<li>CHF 99 au lieu de CHF 142</li>
								<li>CHF 110 au lieu de CHF 158</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>CHF 139 au lieu de CHF 189</li>
								<li>CHF 150 au lieu de CHF 205</li>
							</ul>
							
							<div class=visible-xs>
								<p>Estivale Open Air (28-30.07.17)</p>
								<ul class="mobile">
									<li>Abonnement trois jours </li>
									<li>CHF 99 au lieu de CHF 142</li>
									<li>Abonnement trois jours + <a href="images/foulard_estivale.jpg" data-lightbox="mobile1">un foulard estampillé Estivale</a></li>
									<li>CHF 110 au lieu de CHF 158</li>
								</ul>
								<div style=clear:both;></div>
								<p>Estivale Open Air + L’Intervalle (28.07-31.07.17)</p>
								<ul class="mobile">
									<li>Abonnement quatre jours</li>
									<li>CHF 139 au lieu de CHF 189</li>								
									<li>Abonnement quatre jours + <a href="images/foulard_estivale.jpg" data-lightbox="mobile2">un foulard estampillé Estivale</a> <a href="images/foulard_estivale_2.jpg" data-lightbox="mobile1"></a> <a href="images/foulard_estivale_2.jpg" data-lightbox="mobile2"></a></li>
									<li>CHF 150 au lieu de CHF 205</li>
								</ul>
							</div>
						<?php }else{ ?>
							<h2>Weihnachtsangebot</h2>							
							<ul class="hidden-xs">
								<li>Estivale Open Air (28-30.07.17)</li>
								<li>Abonnement 3 Tage Erwachsener</li>
								<li>Abonnement 3 Tage Erwachsener + 1 Halstuch im Estivale Stil</li>
								<li>&nbsp;</li>
								<li>Estivale Open Air + L’Intervalle (28.07-31.07.17)</li>				
								<li>Abonnement 4 Tage Erwachsener</li>
								<li>Abonnement 4 Tage Erwachsener + 1 Halstuch im Estivale Stil</li>
							</ul>
							<ul class="hidden-xs">
								<li>&nbsp;</li>
								<li>CHF 99 anstatt CHF 142</li>
								<li>CHF 110 anstatt CHF 158</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>CHF 139 anstatt CHF 189</li>
								<li>CHF 150 anstatt CHF 205</li>
							</ul>
							<br />
							<div class=visible-xs>
								<p>Estivale Open Air (28-30.07.17)</p>
								<ul class="mobile">
									<li>Abonnement 3 Tage Erwachsener</li>
									<li>CHF 99 anstatt CHF 142</li>
									<li>Abonnement 3 Tage Erwachsener + <a href="images/foulard_estivale.jpg"  data-lightbox="roadtrip">1 Halstuch im Estivale Stil</a></li>
									<li>CHF 110 anstatt CHF 158</li>
								</ul>
								<div style=clear:both;></div>
								<p>Estivale Open Air + L’Intervalle (28.07-31.07.17)</p>
								<ul class="mobile">
									<li>Abonnement 4 Tages Erwachsener</li>
									<li>CHF 139 anstatt CHF 189</li>
									<li>Abonnement 4 Tage Erwachsener + <a href="images/foulard_estivale.jpg" data-lightbox="image-2">1 Halstuch im Estivale Stil</a> <a href="images/foulard_estivale_2.jpg" data-lightbox="roadtrip"></a></li>
									<li>CHF 150 anstatt CHF 205</li>
								</ul>
							</div>
						<?php } ?>
					</div>
					<?php if($lang=='fr-FR'){ ?>
						<a href="index.php/fr/billetterie" class="buy-tickets-teaser col-md-4 col-sm-12 col-xs-12">ACHETER DES BILLETS</a>
					<?php }else{ ?>
						<a href="index.php/de/tickets" class="buy-tickets-teaser col-md-4 col-sm-12 col-xs-12">ONLINE SHOP</a>
					<?php } ?>
				<?php }else{ ?>
				<div class="col-xs-12 content">
					<jdoc:include type="component" />
				</div>
				<?php } ?>
				<div style=clear:both;></div>
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
