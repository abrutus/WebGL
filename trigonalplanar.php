<h2>Linear</h2>
<h3>Molecule: Boron trifluoride BF<sub>3</sub></h3>
<script type="text/javascript">

	// setup component
	var transformBallAndStick = new ChemDoodle.TransformCanvas3D('transformBallAndStick', 600, 600);
	// set the representation to 'Ball and Stick'
	transformBallAndStick.specs.set3DRepresentation('Wireframe');
	// set the background color to black
	transformBallAndStick.specs.backgroundColor = 'black';

	// load data
	var molFile = '10294-34-5.mol\n  ChemDraw06210908182D\n\n  4  3  0  0  0  0  0  0  0  0999 V2000\n    0.2062    0.0000    0.0000 B   0  0  0  0  0  0  0  0  0  0  0  0\n    0.6187    0.7145    0.0000 F   0  0  0  0  0  0  0  0  0  0  0  0\n    0.6187   -0.7145    0.0000 F   0  0  0  0  0  0  0  0  0  0  0  0\n   -0.6187    0.0000    0.0000 F   0  0  0  0  0  0  0  0  0  0  0  0\n  1  2  1  0      \n  1  3  1  0      \n  1  4  1  0      \nM  END\n';
	// set the coordinate multiplier to 1 to stay in Angstroms
	var molecule = ChemDoodle.readMOL(molFile, 1);
	transformBallAndStick.loadMolecule(molecule);

$(function() {
	$('#nav1').addClass('active');
});
</script>
<? include("change.php"); ?>
2D
<script>
  var viewACS = new ChemDoodle.ViewerCanvas('viewACS', 100, 100);
  viewACS.specs.bonds_width_2D = .6;
  viewACS.specs.bonds_saturationWidth_2D = .18;
  viewACS.specs.bonds_hashSpacing_2D = 2.5;
  viewACS.specs.atoms_font_size_2D = 10;
  viewACS.specs.atoms_font_families_2D = ['Helvetica', 'Arial', 'sans-serif'];
  viewACS.specs.atoms_displayTerminalCarbonLabels_2D = true;
 
  var TwoD = ChemDoodle.readMOL(molFile);
  TwoD.scaleToAverageBondLength(14.4);
  viewACS.loadMolecule(TwoD);
</script>