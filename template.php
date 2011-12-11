<script type="text/javascript">
<? 
		
	
		$file=$_data['File'];
		$title=$_data['Title'];
		$molecule=$_data['Molecule'];
	

		$file= $file? $file:"BeF2.mol";
		$title= $title ? $title:"Linear";
		$molecule=$molecule? $molecule : "BeF<sub>2</sub>";
	
	//$file= "BeF2.mol";
	$contents=@file_get_contents("data/".$file);
	$contents=str_replace(array("\r","\n"), "",(str_replace("\n","\\n",$contents)));
	
?>
	var molFile = '<?=$contents;?>';
</script>
<h2><?=$title;?></h2>
<h3>Molecule: <?=$molecule;?></h3>

Alt + Click to Drag, Scroll to Zoom<br/>
<b>Alternate Views:</b>
		<input type="radio" name="group1" onclick="changeSettings('Ball and Stick')" />
		Ball and Stick
		<input type="radio" name="group1" onclick="changeSettings('van der Waals Spheres')"/>
		van der Waals Spheres
		<input type="radio" name="group1" onclick="changeSettings('Stick')"/>
		Stick
		<input type="radio" name="group1" onclick="changeSettings('Wireframe')" checked="checked"/>
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
		
		<?=$help;?>
	});
	</script>
	<h3>2-D</h3>
	<script type="text/javascript">
	var viewACS = new ChemDoodle.ViewerCanvas('viewACS', 150, 150);
	viewACS.specs.bonds_width_2D = .9;
	viewACS.specs.bonds_saturationWidth_2D = .24;
	viewACS.specs.bonds_hashSpacing_2D = 3.2;
	viewACS.specs.atoms_font_size_2D = 12;
	viewACS.specs.atoms_font_families_2D = ['Helvetica', 'Arial', 'sans-serif'];
	viewACS.specs.atoms_displayTerminalCarbonLabels_2D = true;

	var TwoD = ChemDoodle.readMOL(molFile);
	TwoD.scaleToAverageBondLength(19.4);
	viewACS.loadMolecule(TwoD);
	
</script>