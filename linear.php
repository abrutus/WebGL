<script type="text/javascript">
<? 
	if(isset($_data))
	{
		$file=$_data['File'];
		$title=$_data['Title'];
		$molecule=$_data['Molecule'];
	}
	else {
		$file="BeF2.mol";
		$title="Linear";
		$molecule="BeF<sub>2</sub>";
	}
	$file= "BeF2.mol";
	$contents=@file_get_contents("data/".$file);
	$contents=str_replace(array("\r","\n"), "",(str_replace("\n","\\n",$contents)));
	
?>
	var molFile = '<?=$contents;?>';
</script>
<h2>Linear</h2>
<h3>Molecule: BeF<sub>2</sub></h3>

		<input type="radio" name="group1" onclick="changeSettings('Ball and Stick')" >
		Ball and Stick
		<input type="radio" name="group1" onclick="changeSettings('van der Waals Spheres')">
		van der Waals Spheres
		<input type="radio" name="group1" onclick="changeSettings('Stick')">
		Stick
		<input type="radio" name="group1" onclick="changeSettings('Wireframe')" checked="">
		Wireframe 

<script type="text/javascript">
	// setup component
	var transformBallAndStick = new ChemDoodle.TransformCanvas3D('transformBallAndStick', 600, 600);
	// set the representation to 'Ball and Stick'
	transformBallAndStick.specs.set3DRepresentation('Wireframe');
	// set the background color to black
	transformBallAndStick.specs.backgroundColor = 'black';

	// load data
	
	// set the coordinate multiplier to 1 to stay in Angstroms
	var molecule = ChemDoodle.readMOL(molFile, 1);
	transformBallAndStick.loadMolecule(molecule);

	$(function() {
		$('#nav1').addClass('active');
	});

</script>
<h3>2-D</h3>
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