<!-- 
	Feel Free to Copy, steal or whatever for educational purposes. Otherwise, contact me in the conclusion page
!--> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Molecular Geometry Project WebGL by Andre Brutus</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1"/>
		<link rel="stylesheet" href="/install/ChemDoodleWeb.css" type="text/css" />
		<script type="text/javascript" src="/install/ChemDoodleWeb-libs.js"></script>
		<script type="text/javascript" src="/install/ChemDoodleWeb.js"></script>
		<link rel="stylesheet" href="/css/1.css" type="text/css" media="screen,projection" />
		<script src="/sifr/sifr.js" type="text/javascript"></script>
		<script src="/sifr/sifr-addons.js" type="text/javascript"></script>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="header">
			<h1><a href="#">CPTR 425 : Computer Graphics</a></h1>
			<h3>Molecular Geometry Project WebGL by Andre Brutus</h3>
			<ul id="nav">
				<li>
					<a href="/" id="nav1">Home</a>
				</li>
				<li>
					<a href="/p/conclusion-links" id="nav2">Conclusion &amp; Links</a>
				</li>
			</ul>
		</div>
		<div id="container">
			<div id="content">
				<?
				$valid = array("linear", "trigonal-planar", "bent", "tetrahedral", "trigonal-pyramidal", "trigonal-bipyramidal", "seesaw", "t-shaped", "octahedral", "square-pyramidal", "square-planar");
				$help = "changeSettings('Ball and Stick');";

				$page = $_GET['p'];
				if (in_array(trim($page), $valid)) {
					switch($page) {
						case "trigonal-planar" :
							$help = "";
							$_data = array('File' => "BCl3.mol", 'Title' => 'Trigonal Planar', 'Molecule' => "BCl<sub>3</sub>");
							break;
						case "bent" :
							$help = "";
							$_data = array('File' => "SO2.mol", 'Title' => 'Bent', 'Molecule' => "SO<sub>2</sub>");
							break;
						case "tetrahedral" :
							$help = "";
							$_data = array('File' => "SO4.mol", 'Title' => 'Tetrahedral', 'Molecule' => "SO<sub>4</sub>");
							break;
						case "trigonal-pyramidal" :
							$_data = array('File' => "NH3.mol", 'Title' => 'Trigonal Pyramidal', 'Molecule' => "NH<sub>3</sub>");
							break;
						case "trigonal-bipyramidal" :
							$_data = array('File' => "PF5.mol", 'Title' => 'Trigonal Bipyramidal', 'Molecule' => "PF<sub>5</sub>");
							break;
						case "seesaw" :
							$_data = array('File' => "XeO2F2.mol", 'Title' => 'Seesaw', 'Molecule' => "XeO<sub>2</sub>F<sub>2</sub>");
							break;
						case "t-shaped" :
							$_data = array('File' => "ClF3.mol", 'Title' => 'T-Shaped', 'Molecule' => "ClF<sub>3</sub>");
							break;
						case "octahedral" :
							$_data = array('File' => "SF6.mol", 'Title' => 'Octahedral', 'Molecule' => "SF<sub>6</sub>");
							break;
						case "square-pyramidal" :
							$_data = array('File' => "SbCl5.mol", 'Title' => 'Square Pyramidal', 'Molecule' => "SbCl<sub>5</sub>");
							break;
						case "square-planar" :
							$_data = array('File' => "XeF4.mol", 'Title' => 'Square Planar', 'Molecule' => "XeF<sub>4</sub>");
							break;
						default :
							$help = "";
							$_data = array('File' => "BeF2.mol", 'Title' => 'Linear', 'Molecule' => "BeF<sub>2</sub>");
							break;
					}
					include ("template.php");
				} else if ($page) {
					if (@file_exists($file = $page . ".php"))
						include ($file);
					else
						include ("404.php");
				} else if (empty($page))
					include ("home.php");
				else
					include ("404.php");
				?>
			</div>
			<div id="sidebar">
				<? if($page && $page!="home"): ?>
				<h3>Molecular Geometries</h3>
				<ul>
					<li>
						<a href="/p/linear">Linear</a>
					</li>
					<li>
						<a href="/p/trigonal-planar">Trigonal Planar</a>
					</li>
					<li>
						<a href="/p/bent">Bent</a>
					</li>
					<li>
						<a href="/p/tetrahedral">Tetrahedral</a>
					</li>
					<li>
						<a href="/p/trigonal-pyramidal">Trigonal Pyramidal</a>
					</li>
					<li>
						<a href="/p/trigonal-bipyramidal">Trigonal Bipyramidal</a>
					</li>
					<li>
						<a href="/p/seesaw">Seesaw</a>
					</li>
					<li>
						<a href="/p/t-shaped">T-shaped</a>
					</li>
					<li>
						<a href="/p/octahedral">Octahedral</a>
					</li>
					<li>
						<a href="/p/square-pyramidal">Square Pyramidal</a>
					</li>
					<li>
						<a href="/p/square-planar">Square Planar</a>
					</li>
					<li>
						<a href="http://chemed.chem.purdue.edu/genchem/topicreview/bp/ch8/table.html">Helpful Reference (Chemistry)</a>
					</li>
				</ul
				<? endif; ?>
				<h3>About</h3>
				<p class="about">
					This project demonstrates the the geometry of various molecules using the powers of WebGL.
				</p>
			</div>
		</div>
		<div id="footer">
			<p class="validate">
				<a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/">CSS</a>
				<br />
				<a href="#content">Top</a>
			</p>
			<!-- If you wish to delete this line of code please purchase our commercial license http://www.sixshootermedia.com/shop/commercial-license/ -->
			<p>
				<span style="font-size:6px; color:white;">Template design by <a style="color:white;" href="http://www.sixshootermedia.com">Six Shooter Media</a>.</span>
				<br />
				<!-- you can delete below here -->
				<a href="http://en.wikipedia.org/wiki/Copyleft" style="text-decoration:none;"><span style="transform:rotate(180deg);-webkit-transform:rotate(180deg);
				-moz-transform:rotate(180deg);-o-transform:rotate(180deg);
				filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"> &copy; </span> </a> andrebrutus
			</p>
			<a href="http://www.chemdoodle.com/" title="Open Source HTML5 Chemistry - ChemDoodle Web Components"><img src="http://web.chemdoodle.com/resources/images/badges/badge120x30.png" /></a>
		</div>
		<script type="text/javascript">
			function changeSettings(settings){
transformBallAndStick.specs.set3DRepresentation(settings);
transformBallAndStick.setupScene();
transformBallAndStick.repaint();
}
//<![CDATA[
/* Replacement calls. Please see documentation for more information. */

if( typeof sIFR == "function") {

// This is the older, ordered syntax

sIFR.replaceElement("h1", "sifr/cronos_pro.swf", "#000000", null, null, null, 0, 0, 0, 0);
sIFR.replaceElement("h2", "sifr/cronos_pro.swf", "#000000", null, null, null, 0, 0, 0, 0);
sIFR.replaceElement("#content h3", "sifr/cronos_pro.swf", "#6BCB25", null, null, null, 0, 0, 0, 0);
sIFR.replaceElement("#sidebar h3", "sifr/cronos_pro.swf", "#000000", null, null, null, 0, 0, 0, 0);

};

//]]>
		</script>
	</body>
</html>